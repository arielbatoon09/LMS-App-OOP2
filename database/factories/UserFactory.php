<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->email,
            'email_verified_at' => now(),
            'password' => '$2y$10$9NHtqgF3yCucIt6Y3rAoBeIVwf3XCvvDDnLkYhml/TkHgZNuU/2aG', //123456789
            'profile_img' => 'default-profile.png',
            'is_admin' => $this->faker->randomElement([0, 1]),
            'remember_token' => Str::random(10),
            //
        ];
    }
}
