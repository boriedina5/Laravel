<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call([
            AdminSeeder::class,
            ProfileSeeder::class,
            UserMentalHealthSeeder::class,
            ChallengeSeeder::class,
            JournalSeeder::class,
            UserWorkoutPlanSeeder::class,
            ExerciesSeeder::class,
            UserReceipeSeeder::class,
            ReceipeDataSeeder::class,
            ReceipeIngredientSeeder::class,
            YourDataSeeder::class,
            WeightSeeder::class,
            DoneWorkoutSeeder::class,

        ]);

    }
}
