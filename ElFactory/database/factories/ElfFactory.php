<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Elf>
 */
class ElfFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $job = array("gift wrapper", "Janitor", "Cookie baker", "Present organizer", "Project Manager", "Socail Media Manager", "Gasleak Supervisor", "Rainder trainer", "Hot choccolate Barista", "Pharmasist for Lactose Intolelves");
        $department = array("Logistics", "Slavery Office", "Maintenance", "Gingerbread House Security", "Santa Training Team", "Kitchen", "SantAssistant", "Santa's Creator Team", "Elf call center", "Naughteam");
        $toys = array("train", "lego", "doll", "puzzel", "rubic's cube", "toy car", "bicycle", "toy chica");
        return [
            'name'=>fake()->name(),
            'job' => fake()->randomElement($job),
            'department' => fake()->randomElement($department),
            'toy' => fake()->randomElement($toys),
            
        ];
    }
}
