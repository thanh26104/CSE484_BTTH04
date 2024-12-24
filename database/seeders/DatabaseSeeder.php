<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Borrow;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Reader;
class DatabaseSeeder extends Seeder
{
    //protected $model = Borrow::class;
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();
        Borrow::factory(20)->create();
        Book::factory()->count(20)->create();
       Reader::factory(20)->create();


       $this->call([
        BookSeeder::class,
    ]);
     $this->call([
        BorrowSeeder::class,
    ]);
    $this->call([
        ReaderSeeder::class,
    ]);
    
    
    
    }


}
