<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'img' => fake()->imageUrl(),
            'brand' => fake()->company(),
            'title' => fake()->sentence(3),
            'rating' => fake()->randomFloat(1, 0, 5),
            'reviews' => fake()->numberBetween(0, 1000),
            'sellPrice' => fake()->randomFloat(2, 10, 1000),
            'orders' => (string)fake()->numberBetween(0, 10000),
            'mrp' => (string)fake()->randomFloat(2, 10, 1000),
            'discount' => fake()->numberBetween(0, 100),
            'category' => fake()->word(),
        ];
    }
}
