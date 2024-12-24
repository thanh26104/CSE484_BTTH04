<?php

namespace Database\Factories;
use app\Models\Reader;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reader>
 */
class ReaderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Reader::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,                 // Tên ngẫu nhiên
            'birthday' => $this->faker->date('Y-m-d', '2005-01-01'), // Ngày sinh trước 2005
            'address' => $this->faker->address,          // Địa chỉ ngẫu nhiên
            'phone' => $this->faker->phoneNumber,        // Số điện thoại ngẫu nhiên
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
