<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use phpseclib3\Net\SSH2;
use App\Models\command;

class RaspiCntdController extends Controller
{
    protected $ssh;

    public function __construct()
    {
        $this->ssh = new SSH2(env('SSH_HOST'));
        if (!$this->ssh->login(env('SSH_USER'), env('SSH_PASSWORD'))) {
            die('Login Failed');
        }
    }

    public function terminal()
    {
        $command = command::all();
        return view('pages.about.terminal', ['command' => $command]);
    }

    public function execute(Request $request)
    {
        if (!Session::has('current_dir')) {
            Session::put('current_dir', '/home/pi');
        }

        $currentDir = Session::get('current_dir');
        $command = $request->input('command', 'ls -la');
        $output = '';

        if (str_starts_with($command, 'cd ')) {
            $dir = trim(substr($command, 3));
            $newDir = "/home/pi/$dir";
            if ($this->ssh->exec("cd $newDir && pwd")) {
                Session::put('current_dir', $newDir);
                $output = "Changed directory to: $newDir";
            }  else {
                $output = "Directory not found: $dir";
                return view('pages.about.terminal', ['output' => $output, 'command' => command::all()]);
            }
        } elseif ($command === 'clear' || $command === 'cls') {
            command::truncate();
            $output = "Screen cleared.";
        } elseif (str_starts_with($command, 'python3 -m venv ')) {
            $envName = trim(substr($command, strlen('python3 -m venv ')));
            $fullCommand = "cd $currentDir && python3 -m venv $envName";
            $output = $this->ssh->exec($fullCommand);
        } elseif (str_starts_with($command, 'source ')) {
            $envName = trim(substr($command, strlen('source '), strpos($command, '/bin/activate') - strlen('source ')));
            $fullCommand = "cd $currentDir && source $envName/bin/activate";
            $output = $this->ssh->exec($fullCommand);
        } elseif ($command === 'deactivate') {
            $fullCommand = "deactivate";
            $output = $this->ssh->exec($fullCommand);
        } else {
            $fullCommand = "cd $currentDir && $command";
            $output = $this->ssh->exec($fullCommand);
        }

        $commandRecord = new command;
        $commandRecord->command = $command;
        $commandRecord->output = $output;
        $commandRecord->save();

        return view('pages.about.terminal', ['output' => $output, 'command' => command::all()]);
    }
}
