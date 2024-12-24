<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reader;
use faker\Factory as faker;
use Illuminate\Support\Facades\Redis;

class ReaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            Reader::table('readers')->insert([
                'name' => $faker->name(),             // Tên người đọc giả lập
                'birthday' => $faker->date('Y-m-d', '2005-12-31'), // Ngày sinh trong khoảng trước năm 2005
                'address' => $faker->address(),       // Địa chỉ giả lập
                'phone' => $faker->phoneNumber(),     // Số điện thoại giả lập
              'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
