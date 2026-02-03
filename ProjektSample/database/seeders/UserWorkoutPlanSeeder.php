<?php

namespace Database\Seeders;

use App\Models\UserWorkoutPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserWorkoutPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       UserWorkoutPlan::create([
        'plan_id'=> 1,
        'plan_name'=> "Lose Weight Begginner Plan 1",
       ]);
       UserWorkoutPlan::factory(10)->create();
        
    }
}
