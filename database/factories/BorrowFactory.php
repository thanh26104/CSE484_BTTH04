<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reader;
use App\Models\Book;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrow>
 */
class BorrowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reader_id' => Reader::all()->random()->id,
            'book_id' => Book::all()->random()->id,
            'borrow_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'return_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'status' => $this->faker->boolean(50), // 50% trả, 50% đang mượn
        ];
    }
}
