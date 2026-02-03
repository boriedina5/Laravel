<?php

namespace Database\Seeders;

use App\Models\Reindeer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReindeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reindeer::create([
            'name' => "Dasher",
            'flight_speed' => 6.7,
            'weight' => 90,
            'color' =>  "#654321",
            'diet' => "csak halászlé",
        ]);
        Reindeer::create([
            'name' => "Dancer",
            'flight_speed' => 6.7,
            'weight' => 90,
            'color' =>  "#654321",
            'diet' => "csak halászlé",
        ]);
        Reindeer::create([
            'name' => "Pracer",
            'flight_speed' => 6.7,
            'weight' => 90,
            'color' =>  "#654321",
            'diet' => "csak halászlé",
        ]);
        Reindeer::create([
            'name' => "Vixen",
            'flight_speed' => 6.7,
            'weight' => 90,
            'color' =>  "#654321",
            'diet' => "csak halászlé",
        ]);
        Reindeer::create([
            'name' => "Comet",
            'flight_speed' => 6.7,
            'weight' => 90,
            'color' =>  "#654321",
            'diet' => "csak halászlé",
        ]);
        Reindeer::create([
            'name' => "Cupid",
            'flight_speed' => 6.7,
            'weight' => 90,
            'color' =>  "#654321",
            'diet' => "csak halászlé",
        ]);
        Reindeer::create([
            'name' => "Donder",
            'flight_speed' => 6.7,
            'weight' => 90,
            'color' =>  "#654321",
            'diet' => "csak halászlé",
        ]);
        Reindeer::create([
            'name' => "Blitzen",
            'flight_speed' => 6.7,
            'weight' => 90,
            'color' =>  "#654321",
            'diet' => "csak halászlé",
        ]);

        Reindeer::factory(50)->create();
    }
}
