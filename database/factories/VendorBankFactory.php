<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VendorBank>
 */
class VendorBankFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'vendor_id' => 1,
           'account_name' =>  $this->faker->name(),
           'bank_name' =>  $this->faker->name(),
           'account_number' =>  $this->faker->randomNumber(),
        ];
    }
}
