<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = ['title','grade', 'options a','options a','options a','options a', 'answer'];
    protected $casts = [
        'options' => 'array',
    ];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
}
