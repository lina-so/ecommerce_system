<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
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
