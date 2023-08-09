<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'locationable_id' => City::inRandomOrder()->first()?->id,
                'locationable_type' => City::class,
                'location_type' => 'country',
                'address' => 'UAE street 1',
                'longitude' => 2.3522,
                'latitude' => 48.8566,
        ];
    }
}
