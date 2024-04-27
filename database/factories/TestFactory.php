<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Grade;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Test>
 */
class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'grade' => $this->faker->numberBetween(2, 10),
            'question_number' => $this->faker->numberBetween(1, 10),
            'question' => $this->faker->sentence(),
            'options_a' => $this->faker->word(),
            'options_b' => $this->faker->word(),
            'options_c' => $this->faker->word(),
            'options_d' => $this->faker->word(),
            'answer' => $this->faker->word(),
            
        ];
    }
}
