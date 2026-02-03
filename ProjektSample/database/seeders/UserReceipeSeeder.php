<?php

namespace Database\Seeders;

use App\Models\UserReceipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserReceipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserReceipe::create([
            'receipeDatas_id' => 1,
            'recipeName' => "Wholemeal pita bread"
        ]);
        UserReceipe::factory(10)->create();
    }
}
