<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionsTried extends Model
{
    use HasFactory;

    protected $table = 'questionstrieds';
    

    protected $fillable = [
        'user_id',
        'question_id',
        'grade',
        'question_number',
        'initiated',
        'solved',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function test()
    {
        return $this->belongsTo(Test::class, 'question_id');
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}

