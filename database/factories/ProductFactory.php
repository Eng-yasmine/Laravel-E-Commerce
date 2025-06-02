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
            'name' => $this->faker->unique()->word(),
            'slug' => $this->faker->unique()->slug(),
            'description' => $this->faker->optional()->paragraph(),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'category_id' => \App\Models\Category::factory(),
            'image' => $this->faker->imageUrl(640, 480, 'products'),
            'is_active' => $this->faker->boolean(),
            'stock' => $this->faker->numberBetween(0, 100),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
