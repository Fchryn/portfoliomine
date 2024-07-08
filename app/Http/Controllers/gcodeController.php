<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GcodeCommand;
use Sanchescom\Serial\Serial;

class ArduinoController extends Controller
{
    protected $serial;

    public function __construct()
    {
        $this->serial = new Serial();
        $this->serial->deviceSet('COM6'); // Adjust the COM port as necessary
        $this->serial->confBaudRate(115200);
        $this->serial->deviceOpen();
    }

    public function __destruct()
    {
        $this->serial->deviceClose();
    }

    public function index()
    {
        $commands = GcodeCommand::all();
        return view('arduino', ['commands' => $commands]);
    }

    public function sendGcode(Request $request)
    {
        $xValue = $request->input('x_value', 0);
        $fValue = $request->input('f_value', 0);

        $gcode = "G1 X{$xValue} F{$fValue}";
        $this->serial->sendMessage($gcode);
        $output = $this->serial->readPort();

        $commandRecord = new GcodeCommand;
        $commandRecord->gcode_command = $gcode;
        $commandRecord->output = $output;
        $commandRecord->save();

        return view('arduino', ['output' => $output, 'commands' => GcodeCommand::all()]);
    }
}
