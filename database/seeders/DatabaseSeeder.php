<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\User;
use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::factory(4)
            ->hasVariants(5)
            ->has(ProductImage::factory(3)
                ->sequence(fn(Sequence $sequence) => ['featured' => $sequence->index === 0]))
            ->create();

        User::factory()->create([
            'email' => 'test@yopmail.com'
        ]);
    }
}
