<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Counter>
 */
class CounterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'key' => fake()->numberBetween(1, 100),
        'prefix' => 'INV-' . fake()->numberBetween(1, 100),
        'value' => 200
        ];
    }
}
