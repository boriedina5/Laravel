<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        House::create([
            'name' => "Griffendél",
            'founder'=> "Godrik Griffendél",
            'entrance' => "Kövér Dáma portréján keresztül nyílik a 7. emeleti folyosón.",
            'dominant_color' => "vörös",
            'password' => "Caput Draconis",
            'ghost' => "Félig Fej Nélküli Nick"
        ]);
        House::create([
            'name' => "Mardekár",
            'founder'=> "Mardekár Malazár",
            'entrance' => "Pince - kőfal",
            'dominant_color' => "zöld",
            'password' => "Vipera",
            'ghost' => "Véres Bárók"
        ]);
        House::create([
            'name' => "Hollóhát",
            'founder'=> "Hollóhát Rowena",
            'entrance' => "Sas alakú kopogtató",
            'dominant_color' => "kék",
            'password' => "Találós kérdésre nyílik",
            'ghost' => "Szürke Hölgy"
        ]);
        House::create([
            'name' => "Hugrabug",
            'founder'=> "Hugrabug Hugó",
            'entrance' => "Hordók mögött",
            'dominant_color' => "sárga",
            'password' => "ritmusos kopogás (Helga Hufflepuff nevének ritmusa)",
            'ghost' => "Pufók Bolyhos Frigyes"
        ]);
    }
}
