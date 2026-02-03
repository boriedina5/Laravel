<?php

namespace Database\Seeders;

use App\Models\ReceipeIngredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReceipeIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReceipeIngredient::create([
            'ingredientName' => "Teljes kiőrlésű liszt",
        ]);
        ReceipeIngredient::factory(10)->create();
    }
}
