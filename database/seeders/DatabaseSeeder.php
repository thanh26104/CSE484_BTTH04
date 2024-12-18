<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        \App\Models\Book::factory()->count(20)->create();
//        \App\Models\Reader::factory(20)->create();
        \App\Models\Borrow::factory(20)->create();
    }
}
