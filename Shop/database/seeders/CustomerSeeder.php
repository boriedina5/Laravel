<?php

namespace Database\Seeders;

use App\Models\Customer;
use EnchantDictionary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            "family name" => "Bori",
            "given name" => "Edina",
            "email" => "boriedina5@gmail.com",
            "birthday" => "2005-08-21",
            "postalcode"=> 1039,
            "city"=> "Budapest",
            "address"=> "Kis Pista 30"
        ]);
            
    }
}
