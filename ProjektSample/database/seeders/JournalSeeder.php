<?php

namespace Database\Seeders;

use App\Models\Journal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Journal::create([
            'date' => "2025-12-02",
            'graduate' => "1. Sun is suning, 2. Good tastes, 3. New dress",
            'positive_things'=> "I can do my IT task",
            'negativ_things'=> "Yesterday I suck with the task too much",
            'mood'=> "OK",
            'thoughts'=> "Undefined",
        ]);
        Journal::factory(10)->create();
    }
    
}
