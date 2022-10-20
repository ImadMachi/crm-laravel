<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Quote;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuoteLine>
 */
class QuoteLineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => Product::factory(),
            'quote_id' => Quote::factory(),
            'title' => fake()->sentence(),
            'quantity' => fake()->randomNumber(1),
        ];
    }
}
