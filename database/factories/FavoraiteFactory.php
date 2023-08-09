<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Favoraite>
 */
class FavoraiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::inRandomOrder()->first()?->id,
            'favoritable_id' => Product::inRandomOrder()->first()?->id,
            'favoritable_type' => Product::class,
        ];
    }
}
