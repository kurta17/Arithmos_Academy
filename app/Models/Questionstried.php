<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionTried extends Model
{
    use HasFactory;

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

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}

