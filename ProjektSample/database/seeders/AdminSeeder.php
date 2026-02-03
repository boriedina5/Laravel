<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'email' => "boriedina5@gmail.com",
            'password' => "jelszo123",
            'workOutPlans_id' => 1,
            'mentalHelth_id' => 1,
            'recipe_id'=> 1,
            'yourDatas_id' => 1,
            'journal_id' => 1,
            'foodDiary_id' => 1
        ]);
        Admin::factory(10)->create();

    }
}
