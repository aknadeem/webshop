<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => $this->faker->unique()->randomElement(['Laptop', 'Mobile', 'Tablet', 'Desktop']),
            'price' => $this->faker->numberBetween(100, 1000),
            'description' => $this->faker->paragraph(2),
        ];
    }
}
