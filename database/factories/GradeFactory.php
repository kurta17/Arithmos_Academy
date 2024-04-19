<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // name should be a word like 2th grade, 3th grade,4th grade,5th grade,6th grade,7th grade,8th grade,9th grade,10th grade,11th grade
            'grade' => $this->faker->word() . 'th grade',
    
        ];
    }
}
