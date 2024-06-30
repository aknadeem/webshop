<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductImage>
 */
class ProductImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'path' => $this->faker->unique()->randomElement([
                'productImages/image1.webp',
                'productImages/image2.webp',
                'productImages/image3.webp',
                'productImages/image4.webp',
                'productImages/image5.webp',
                'productImages/image6.webp',
                'productImages/image7.webp',
                'productImages/image8.webp',
                'productImages/image9.webp',
                'productImages/image10.webp',
                'productImages/image11.webp',
                'productImages/image12.webp'
            ]),
        ];
    }
}
