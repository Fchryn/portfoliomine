<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class command extends Model
{
    use HasFactory;

    protected $table = "command";
    protected $primaryKey = 'id';
    public $incrementing = true;
    
    protected $fillable = ["command", "output", "arduino"];
}
