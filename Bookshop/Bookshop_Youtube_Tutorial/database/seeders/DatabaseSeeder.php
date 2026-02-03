<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            PublisherSeeder::class,
            BookSeeder::class
        ]);

        DB::table("book_user")->insert([
            ["user_id" => 1, "book_id" => 10],
            ["user_id" => 1, "book_id" => 9],
            ["user_id" => 1, "book_id" => 8],
            ["user_id" => 2, "book_id" => 7],
            ["user_id" => 3, "book_id" => 10],
            ["user_id" => 6, "book_id" => 5],
            ["user_id" => 6, "book_id" => 6],
            ["user_id" => 6, "book_id" => 2],
            ["user_id" => 6, "book_id" => 4]
            
        ]);
    }
}
