<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Receipt;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReceiptLine>
 */
class ReceiptLineFactory extends Factory
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
            'receipt_id' => Receipt::factory(),
            'title' => fake()->sentence(),
            'quantity' => fake()->randomNumber(1),
        ];
    }
}
