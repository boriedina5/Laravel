<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\YourData>
 */
class YourDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'weight_id' =>fake()->numberBetween(1,1000),
            'height'=>fake()->numberBetween(150,210),
            'shoulder'=>fake()->numberBetween(40,130),
            'upperArm'=>fake()->numberBetween(40,130),
            'foreArm'=>fake()->numberBetween(40,130),
            'chest'=>fake()->numberBetween(40,130),
            'stomatch'=>fake()->numberBetween(40,130),
            'waist'=>fake()->numberBetween(40,130),
            'hip'=>fake()->numberBetween(40,130),
            'butt'=>fake()->numberBetween(40,130),
            'thight'=>fake()->numberBetween(40,130),
            'calf'=>fake()->numberBetween(40,130),
            'doneWorkouts_id'=>fake()->numberBetween(1,1000),
        ];
    }
}
