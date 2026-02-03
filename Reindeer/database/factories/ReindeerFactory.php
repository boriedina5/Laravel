<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reindeer>
 */
class ReindeerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $diet = array("csak csoki", "csak mézeskalács", "csak hókifli", "csak bejgli", "vegyes sütemény", "csak halászlé", "csak töltött káposzta", "vegyes főétkezés");
        return [
            'name'=>fake()->name(),
            'flight_speed'=>fake()->randomFloat(3.4,7.8),
            'weight'=>fake()->numberBetween(90,120),
            'color'=>fake()->hexColor(),
            'diet'=>fake()->randomElement($diet)
        ];
    }
}
