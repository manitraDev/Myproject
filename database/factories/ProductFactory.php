<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
            'id' => fake()->uuid,
            'name' => fake()->name(),
            'description' => fake()->paragraph(3),
            'isPublished' => fake()->boolean,
            'prix' => fake()->numberBetween(10, 1000)
        ];
    }
}
