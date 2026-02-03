<?php

namespace Database\Seeders;

use App\Models\Cat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Direkt létrehozás
        Cat::create([
            'name' => "Benji",
            'breed' => "Popcat",
            'age' => 1,
            'color'=> "Black",
            'isFemale'=> false
        ]);
        //Véletlenszerű feltöltés
        Cat::factory(10)->create();
    }
}
