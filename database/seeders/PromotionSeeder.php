<?php

namespace Database\Seeders;

use App\Models\Promotion;
use App\Models\Classification;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //classifications
        Promotion::factory()
        ->hasAttached(
            Classification::take(rand(2, 10))->inRandomOrder()->pluck('id')->toArray(),
            [],
            'classifications'
        )
        ->count(20)
        ->create();
    }
}
