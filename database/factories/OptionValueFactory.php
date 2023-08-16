<?php

namespace Database\Factories;

use App\Models\Option;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OptionValue>
 */
class OptionValueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'option_id' => Option::inRandomOrder()->first()?->id,
            'ar' => [
                'name' => $this->faker->words(3, true),
            ],
            'en' => [
                'name' => $this->faker->words(3, true),
            ],
         ];
    }
}
