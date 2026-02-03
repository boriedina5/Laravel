<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cat>
 */
class CatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $breeds = array("Perzsa", "Sziámi", "Cirmos", "Narancs Coon", "Fekete", "Bengáli", "Calico", "Tigris", "Oroszlán", "Párduc", "Nerd Macska", "Pallas's cat", "Bobcat", "Popcat" );
        return [
            'name' => fake()->name(),
            'breed' =>fake()->randomElement($breeds),
            'age' =>fake()->numberBetween(0, 21),
            'color'=>fake()->colorName(),
            'isFemale'=>fake()->boolean(50)

        ];
    }
}
