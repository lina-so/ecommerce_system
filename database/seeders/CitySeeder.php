<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        City::factory()->count(10)->create()->each(function ($city) {
            $city->locations()->saveMany(
                Location::factory()->count(5)->make([
                    'location_type' => 'city',
                    'address' => 'UAE street 1',
                    'longitude' => 2.3522,
                    'latitude' => 48.8566,

                ])
            );
        });


    }
}
