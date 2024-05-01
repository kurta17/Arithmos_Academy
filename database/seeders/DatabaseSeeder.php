<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Test;
use App\Models\QuestionTried;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        \App\Models\Question::factory(20)->create();
        \App\Models\Test::factory(50)->create();
        // \App\Models\QuestionTried::factory(100)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
