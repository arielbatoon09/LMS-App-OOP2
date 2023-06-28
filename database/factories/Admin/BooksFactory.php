<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Books>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $bookName = ['The Alchemist', 'To Kill a Mockingbird', 'The Great Gatsby', 'The Lord of the Rings'];
        $bookName = $this->faker->randomElement($bookName);
        return [
            'book_name' => $bookName,
            'description' => $this->faker->sentence,
            'category_id' => 1,
            'author_id' => 1,
            'book_fees' => 123,
            'quantity' => 10,
            'is_active' => 1,
            'book_img' => '110405-content.jpeg',
        ];
    }
}
