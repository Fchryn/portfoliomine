<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gcodeCommand extends Model
{
    use HasFactory;

    protected $table = "gcodeCommand";
    protected $primaryKey = 'id';
    public $incrementing = true;
    
    protected $fillable = ["gcode_command", "output"];
}
