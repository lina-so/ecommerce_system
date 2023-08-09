<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Product::factory()
        ->hasAttached(
            Customer::take(rand(2, 10))->inRandomOrder()->pluck('id')->toArray(),
            [],
            'customers'
        )
        ->count(20)
        ->create();
    }
}
