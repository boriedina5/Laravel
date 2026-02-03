<?php

namespace Database\Seeders;

use App\Models\Challenge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Challenge::create([
            'name' => "Accepting yourself",
            'theme'=> "Self-assessment",
            'weekNumber' => 1,
            'description'=> "Think about how well you know, accept, and like who you are.
                            This week, realize that making mistakes is human, and mistakes don't make you 'rejectable', they just mean experience.
                            At the end of the day, think about the events of the day, what you did well and what you did poorly. Also, think about what you are not satisfied with about yourself.
                            ",
        ]);
        Challenge::factory(10)->create();
    }
}
