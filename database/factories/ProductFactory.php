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
            'name' => fake()->name(),
            'product' => fake()->word(),
            'brand' => fake()->word(),
            'short_detail' => substr(fake()->sentence(), 0, 100),
            'complete_detail' => fake()->paragraph(3),
            'fabric_made' => fake()->word(),
            'size' => json_encode(fake()->randomElements(['S', 'M', 'L', 'XL']), 3),
            'colors' => json_encode(fake()->randomElements(['red', 'blue', 'green'], 2)), // Generate 2 random unique colors
            'stock' => fake()->numberBetween(10, 100),
            'category' => fake()->randomElement(['clothing', 'shoes', 'accessories']),
            'old_price' => fake()->randomNumber(4, true), // Random price between 10.00 and 999.99
            'current_price' => fake()->randomNumber(4, true), // Random price between 10.00 and 999.99
            'discount' => fake()->numberBetween(0, 50), // Discount between 0% and 50%
            'offer' => fake()->optional()->randomElement(['Free shipping', 'Limited-time discount']),
            'width' => fake()->randomNumber(2), // Random width between 10 and 99
            'length' => fake()->randomNumber(2), // Random length between 10 and 99
            'delivery' => fake()->boolean(),
            'main_img' => fake()->imageUrl(400, 400, 'fashion'), 
            'detail_imgs' => json_encode([ // Generate an array of 2-4 image URLs (replace with your placeholder URL logic)
                fake()->optional()->imageUrl(200, 200, 'fashion'),
                fake()->optional()->imageUrl(200, 200, 'fashion'),
                fake()->optional()->imageUrl(200, 200, 'fashion')
            ])
        ];
    }
}
