<?php

namespace Database\Seeders;

use App\Models\Race;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Modell alapon csinálsz egy sajátot
        Race::create(//inseert into-nak felel meg
            [
                "name" => "Ember",
                "lifetime" => 90,
                "avgHeight" => 170,
                "darkVision" => false
            ]
            );  
        //::-statikus funkció

        //factory használata
        Race::factory()->create(//Elf ilyen tulajdonság ^
            [
                "name" => "Elf"
            ]
            );
        //Factory használata teljesen a factory veletlen "dummy" adatival
        Race::factory(8)->create(); //8 véletlenszerű
    }
}
//factory csak a seedhez kell