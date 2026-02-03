<?php

namespace Database\Seeders;

use App\Models\Elf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ElfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Elf::factory(100)->create();
    }
}
