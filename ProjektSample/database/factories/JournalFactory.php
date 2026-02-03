<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Journal>
 */
class JournalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->date(),
            'graduate' => fake()->text(),
            'positive_things'=> fake()->text(),
            'negativ_things'=> fake()->text(),
            'mood'=> fake()->word(),
            'thoughts'=> fake()->text(),
        ];
    }
}
