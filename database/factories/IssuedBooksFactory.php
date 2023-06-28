<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\IssuedBooks>
 */
class IssuedBooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => 1,
            'user_id' => 1,
            'to_return' => '2023-07-29 15:05:52',
            'is_return' => $this->faker->randomElement([0, 1, 2]),
        ];
    }
}
