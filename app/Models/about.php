<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;

    protected $table = "abouts";
    protected $primaryKey = 'id';
    public $incrementing = true;
    
    protected $fillable = ["img", "video", "isi", "title", "explain", "description", "feature"];
}
