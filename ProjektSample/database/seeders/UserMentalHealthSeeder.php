<?php

namespace Database\Seeders;

use App\Models\UserMentalHealth;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserMentalHealthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserMentalHealth::create([
            'mentalHealth_id'=> 3
        ]);
        
        UserMentalHealth::factory(10)->create();
    }
}
