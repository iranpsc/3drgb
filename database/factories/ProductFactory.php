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
            'category_id' => $this->faker->numberBetween(1, 10),
            'sku' => $this->faker->unique()->numberBetween(100000, 999999),
            'name' => $this->faker->word,
            'slug' => $this->faker->slug,
            'short_description' => $this->faker->text(100),
            'long_description' => $this->faker->text(500),
            'stock_status' => $this->faker->numberBetween(0, 1),
            'quantity' => $this->faker->numberBetween(1, 100),
            'delivery_time' => $this->faker->numberBetween(1, 10),
            'customer_can_add_review' => $this->faker->boolean,
            'price' => $this->faker->numberBetween(10000, 1000000),
            'sale_price' => $this->faker->numberBetween(10000, 1000000),
            'published' => $this->faker->boolean,
        ];
    }
}
