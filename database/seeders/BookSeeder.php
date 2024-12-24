<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use faker\Factory as faker;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker:: create();

        foreach (range(1,10) as $index){
            Book::create ([
                'name' => $faker->sentence(3), // Tên sách giả lập
                'author' => $faker->name(), // Tên tác giả giả lập
                'category' => $faker->word(), // Thể loại giả lập
                'year' => $faker->numberBetween(1900, 2024), // Năm xuất bản (giả lập)
                'quantity' => $faker->numberBetween(1, 100), // Số lượng sách (giả lập)
               'created_at' => now(),
                'updated_at' => now(),
           
                
            ]);
        }
    }
}
