<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'grade_id', 'options_a', 'options_b', 'options_c', 'options_d', 'answer'];
    protected $casts = [
        'options_a' => 'array',
        'options_b' => 'array',
        'options_c' => 'array',
        'options_d' => 'array',
    ];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
}
