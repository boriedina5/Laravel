<?php

namespace Database\Seeders;

use App\Models\Exercies;
use Faker\Guesser\Name;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exercies::create([
            'name'=>fake()->word(),
        ]);
        Exercies::factory(10)->create();
    }
}
