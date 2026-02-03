<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'name' => fake()->name(),
          'age' =>fake()->numberBetween(11, 17),
          'school_year'=>fake()->numberBetween(1, 7),
          'house_id' =>fake()->numberBetween(1,4)
        ];
    }
}
