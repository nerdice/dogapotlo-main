<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->randomElement(['konyv1', 'konyv2', 'konyv3', 'konyv4', 'konyv5', 'konyv6', 'konyv7', 'konyv8', 'konyv9', 'konyv10']),
            'author' => fake()->name(),
            'publication_year' => $this->faker->numberBetween(1700, 2025),
            'available_copies' => $this->faker->numberBetween(0, 1000)
        ];
    }
}
