<?php

namespace Database\Seeders;

use App\Models\DoneWorkout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoneWorkoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DoneWorkout::create([
            'name'=>"Mobilization",
            'date'=>"2025-12-02",
        ]);
        DoneWorkout::factory(10)->create();
    }
}
