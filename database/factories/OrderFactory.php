<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_date' => $this->faker->date,
            'total_order_price' => $this->faker->randomFloat(2),
            'order_status' => $this->faker->randomElement(['success', 'pending', 'fail']),
            'payment_method_id' => PaymentMethod::inRandomOrder()->first()?->id,
            'customer_id' => Customer::inRandomOrder()->first()?->id,

        ];
    }
}
