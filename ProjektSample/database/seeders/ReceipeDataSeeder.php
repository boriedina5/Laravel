<?php

namespace Database\Seeders;

use App\Models\ReceipeData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReceipeDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReceipeData::create([
            'calories' => 230,
            'carbohydrate'=> 20,
            'fats'=> 10,
            'protein'=> 40,
            'ingredients_id'=> 1,
            'receipeDescription'=>"Knead the ingredients into a soft dough, then let it rise until it has doubled in size in about an hour.
                                    Once it has risen, cut it into four equal pieces, shape it into a ball, and let it rest for 5-10 minutes.
                                    On a floured board, roll them into 2-3 mm thick circles.
                                    I cover them with a clean kitchen towel and let them rest for another 30 minutes.
                                    Bake them in an oven preheated to 220 degrees, on the oven rack, for 5-6 minutes.",
        ]);
        ReceipeData::factory(10)->create();
    }
}
