<?php

namespace Database\Seeders;

use App\Models\Weight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Weight::create([
            'weight' => 64,
            'date' =>"2025-12-02",
        ]);
        Weight::factory(10)->create();
    }
}
