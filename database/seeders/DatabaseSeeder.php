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
<<<<<<< HEAD
//        \App\Models\Book::factory()->count(20)->create();
//        \App\Models\Reader::factory(20)->create();
        \App\Models\Borrow::factory(20)->create();
=======
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
>>>>>>> ed5f4e11aac26e8625fddc38bf8ce61882b373d8
    }
}
