<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Race>
 */
class RaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(random_int(1,2), true),
            'lifetime' => fake()->numberBetween(60, 600),
            'avgHeight' => fake()->randomFloat(2, 80, 300),
            'darkVision' => fake()->boolean(50)
        ];//-> laravelnél oop-nak a formája c# a .
    }
}
