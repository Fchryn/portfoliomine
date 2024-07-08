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
    public function execute1(Request $request)
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

    public function execute2(Request $request)
    {
        $port1 = 'COM6';
        $port2 = 'COM3';
        $baudrate = 115200;

        $commandX = $request->input('commandX', '0');
        $commandF = $request->input('commandF', '0');
        $command = "G1 X{$commandX} F{$commandF}";

        $output1 = shell_exec("python3 execute_gcode.py {$port1} {$baudrate} \"{$command}\"");
        $output2 = shell_exec("python3 execute_gcode.py {$port2} {$baudrate} \"{$command}\"");

        // Save the command and output for both Arduinos
        $commandRecord1 = new command;
        $commandRecord1->command = $command;
        $commandRecord1->output = $output1;
        $commandRecord1->arduino = 'Arduino 1';
        $commandRecord1->save();

        $commandRecord2 = new command;
        $commandRecord2->command = $command;
        $commandRecord2->output = $output2;
        $commandRecord2->arduino = 'Arduino 2';
        $commandRecord2->save();

        return view('pages.about.terminal', ['output' => $output1 . "\n" . $output2, 'command' => command::all()]);
    }
}
