<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email'=>fake()->word(),
            'password'=>fake()->word(),
            'workOutPlans_id'=>fake()->numberBetween(1, 1000),
            'mentalHelth_id' =>fake()->numberBetween(1, 1000),
            'recipe_id'=>fake()->numberBetween(1, 1000),
            'yourDatas_id'=>fake()->numberBetween(1, 1000),
            'journal_id'=>fake()->numberBetween(1, 1000),
            'foodDiary_id'=>fake()->numberBetween(1, 1000),

        ];
    }
}
