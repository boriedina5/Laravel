<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" =>fake()->word,
            "species" =>fake()->word,
            "is_enemy" =>fake()->boolean,
            "strength" => fake()->numberBetween(1,100),
            "first_apperance" => fake()->date
        ];
    }
}
