<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    protected $table = "users";
    protected $primaryKey = 'id';
    public $incrementing = true;
    
    protected $fillable = ["name", "email", "email_verified_at", "password"];
}
