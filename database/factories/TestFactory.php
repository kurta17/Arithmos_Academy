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
            'title' => $this->faker->sentence(),
            //'grade_id' => Grade::factory()->create()->id,
            'options a' => $this->faker->word(),
            'options b' => $this->faker->word(),
            'options c' => $this->faker->word(),
            'options d' => $this->faker->word(),
            'answer' => $this->faker->word(),
            'grade_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
