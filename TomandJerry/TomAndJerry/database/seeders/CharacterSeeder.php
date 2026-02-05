<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Character::create(
            [
                'name' => "Tom",
                'species' => "cat",
                'is_enemy' => false,
                'strength' => 65,
                'first_apperance' => '1940-02-10'

            ],
        );
        Character::create(
            [
                'name' => 'Jerry',
                'species' => 'mouse',
                'strength' => 40,
                'first_apperance' => '1940-02-10'


            ],
        );
        Character::create(    
            [
                'name' => 'Spike',
                'species' => 'Dog',
                'is_enemy' => true,
                'strength' => 90,
                'first_apperance' => '1942-04-18',
            ],
        );
        Character::create(
            [
                'name' => 'Tyke',
                'species' => 'Dog',
                'is_enemy' => false,
                'strength' => 20,
                'first_apperance' => '1949-01-11',
            ],
        );
        Character::create(
            [
                'name' => 'Butch',
                'species' => 'Cat',
                'is_enemy' => true,
                'strength' => 75,
                'first_apperance' => '1943-05-30',
            ]
        );
        
        Character::factory()->count(5)->create();
        
    }
}
