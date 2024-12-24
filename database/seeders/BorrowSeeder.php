<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Borrow;
use faker\Factory as faker;
class BorrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Borrow::table('borrows')->insert([
                'reader_id' => $faker->numberBetween(1, 20), // Giả định có 20 reader trong bảng `readers`
                'book_id' => $faker->numberBetween(1, 20),   // Giả định có 20 book trong bảng `books`
                'borrow_date' => $faker->date(),            // Ngày mượn sách giả lập
                'return_date' => $faker->date(),
                //'return_date' => $faker->optional()->date(), // Ngày trả sách (có thể null)
                'status' => $faker->boolean(),              // Trạng thái: 0 (đang mượn) hoặc 1 (đã trả)
               'created_at' => now(),
               'updated_at' => now(),
            ]);
        }
    }
}
