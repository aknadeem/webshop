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
                'productImages/image1.jpg', 'productImages/image2.jpg', 'productImages/image3.jpg', 'productImages/image4.jpg',
                'productImages/image5.jpg',
                'productImages/image6.jpg',
                'productImages/image7.jpg',
                'productImages/image8.jpg',
                'productImages/image9.jpg',
                'productImages/image10.jpg',
                'productImages/image11.jpg',
                'productImages/image12.jpg'
            ]),
        ];
    }
}
