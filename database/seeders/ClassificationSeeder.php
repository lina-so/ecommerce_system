<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Promotion;
use App\Models\Classification;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classification::factory()
            ->hasAttached(
                Promotion::take(rand(2, 10))->inRandomOrder()->pluck('id')->toArray(),
                [],
                'promotions')

        ->count(20)
        ->create([
            'category_id' => Category::inRandomOrder()->first()->id,
        ]);
}
}
