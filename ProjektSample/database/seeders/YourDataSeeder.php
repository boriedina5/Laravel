<?php

namespace Database\Seeders;

use App\Models\YourData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YourDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        YourData::create([
            'weight_id'=>1,
            'height'=> 169,
            'shoulder' => 40,
            'upperArm'=> 40,
            'foreArm'=> 40,
            'chest'=> 40,
            'stomatch'=> 40,
            'waist'=> 40,
            'hip'=> 40,
            'butt'=> 40,
            'thight'=> 40,
            'calf'=> 40,
            'doneWorkouts_id'=> 1,
        ]);
        YourData::factory(10)->create();
    }
}
