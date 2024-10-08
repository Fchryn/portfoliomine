<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $softDeletes = "true";
    public $timestamps = "true";
    public $incrementing = "true";

    protected $fillable = [
        'username',
        'name',
        'email',
        'password'
    ];
}

