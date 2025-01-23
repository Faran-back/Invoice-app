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
            'item_code' => 'INVOICE-' . fake()->numberBetween(1, 10),
            'description' => 'This is a static description',
            'unit_price' => fake()->numberBetween(200, 1000)
        ];
    }
}
