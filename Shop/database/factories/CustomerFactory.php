<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "family name" => fake()->word(),
            "given name" => fake()->word(),
            "email" =>fake()->word(),
            "birthday" => fake()->date(),
            "postalcode" => fake(4)->numberBetween(1,9),
            "city"=> fake()->word(),
            "address"=> fake()->word()
            
           
        ];
    }
}
