<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'grade_id', 'options_a', 'options_b', 'options_c', 'options_d', 'answer'];
    

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function options()
    {
        return [
            'a' => $this->options_a,
            'b' => $this->options_b,
            'c' => $this->options_c,
            'd' => $this->options_d,
        ];
    }
}
 