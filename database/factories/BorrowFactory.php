<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reader; // Model bảng readers
use App\Models\Book;   // Model bảng books
use App\Models\Borrow;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrow>
 */
class BorrowFactory extends Factory
{
    protected $model = Borrow::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reader_id' => Reader::inRandomOrder()->first()->id ?? Reader::factory()->create()->id, 
            'book_id' => Book::inRandomOrder()->first()->id ?? Book::factory()->create()->id,
            'borrow_date' => $this->faker->date(),
            'return_date' => $this->faker->date(), 
            'status' => $this->faker->boolean, // Trạng thái ngẫu nhiên (0 hoặc 1)
            'created_at' => now(),
            'updated_at' => now(),
        ];

    }
}
