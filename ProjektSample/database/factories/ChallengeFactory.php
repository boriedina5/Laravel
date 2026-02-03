<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use League\Uri\FeatureDetection;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Challenge>
 */
class ChallengeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'theme'=> fake()->word(),
            'weekNumber'=>fake()->numberBetween(1,5),
            'description'=> fake()->text(),
            
        ];
    }
}
