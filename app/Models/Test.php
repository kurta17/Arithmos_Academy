<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    // every test has 10 questions and each question has 4 options and 1 answer 
    protected $fillable = ['title', 'options', 'answer'];
    protected $casts = [
        'options' => 'array',
    ];
    

}
