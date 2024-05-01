<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Questionstried;

class User extends Model
{
    use HasFactory;

    /**
     * Define a one-to-many relationship with the Questionstried model.
     */
    public function questionstrieds()
    {
        return $this->hasMany(Questionstried::class);
    }
}
