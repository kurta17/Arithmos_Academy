<?php

namespace Database\Factories;

use App\Models\Questionstried;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionstriedFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Questionstried::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomNumber(),
            'question_id' => $this->faker->randomNumber(),
            'grade' => $this->faker->numberBetween(1, 12),
            'question_number' => $this->faker->numberBetween(1, 100),
            'initiated' => $this->faker->boolean(),
            'solved' => $this->faker->boolean(),
        ];
    }
}
