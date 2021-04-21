<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;
    protected $fillable = [
        'word',
        'word_time',
        'word_score',
        'hardness_level',
    ];
    protected $hidden = [
        'remember_token',
    ];
}
