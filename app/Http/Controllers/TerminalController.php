<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\command;
use App\Models\process;

class TerminalController extends Controller
{
    public function terminal()
    {
        $command = command::all();
        return view('pages.about.terminal', ['command' => $command]);
    }
    public function execute(Request $request)
    {
        if (!Session::has('current_dir')) {
            Session::put('current_dir', getcwd());
        }

        $currentDir = Session::get('current_dir');
        $command = $request->input('command', 'dir');
        $output = '';

        if (str_starts_with($command, 'cd ')) {
            $dir = trim(substr($command, 3));
            if ($dir == '..') {
                $currentDir = dirname($currentDir);
            } else {
                $newDir = realpath($currentDir . DIRECTORY_SEPARATOR . $dir);
                if ($newDir && is_dir($newDir)) {
                    $currentDir = $newDir;
                } else {
                    $output = "Directory not found: $dir";
                    return view('pages.about.terminal', ['output' => $output, 'command' => command::all()]);
                }
            }
            Session::put('current_dir', $currentDir);
            $output = "Changed directory to: $currentDir";
        } elseif ($command === 'clear' || $command === 'cls') {
            command::truncate();
            $output = "Screen cleared."; 
        } else {
            $fullCommand = "cd $currentDir && $command";
            $output = shell_exec($fullCommand);
        }

        $commandRecord = new command;
        $commandRecord->command = $command;
        $commandRecord->output = $output;
        $commandRecord->save();

        return view('pages.about.terminal', ['output' => $output, 'command' => command::all()]);
    }
}
