<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gsetting extends Model
{
    use HasFactory;
    protected $table = 'gsettings';
    protected $fillable = [
        'home_text'
    ];
}
