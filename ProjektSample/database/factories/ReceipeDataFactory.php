<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReceipeData>
 */
class ReceipeDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'calories' => fake()->numberBetween(1,1000),
            'carbohydrate'=>fake()->numberBetween(1,1000),
            'fats'=>fake()->numberBetween(1,1000),
            'protein'=>fake()->numberBetween(1,1000),
            'ingredients_id'=>fake()->numberBetween(1,1000),
            'receipeDescription'=>fake()->text(),
        ];
    }
}
