<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            "product_id" => 1,
            "customer_id" => 1,
            "message" => "Ez egy nagyon jó termék 10/10"
        ]);
    }
}
