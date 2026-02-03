<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'email' => "profil1@gmail.com",
            'password' => "jelszo124",
            'workOutPlans_id' => 2,
            'mentalHelth_id' => 2,
            'recipe_id'=> 2,
            'yourDatas_id' => 2,
            'journal_id' => 2,
            'foodDiary_id' => 2
        ]);
        Profile::factory(10)->create();
    }
}
