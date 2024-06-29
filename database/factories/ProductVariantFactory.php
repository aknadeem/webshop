<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductVariantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'color' => $this->faker->randomElement(['red', 'blue', 'green', 'yellow', 'black', 'white']),
            'size' => $this->faker->randomElement(['S', 'M', 'L', 'XL', 'XXL']),
        ];
    }
}
