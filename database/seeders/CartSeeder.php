<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $customer = Customer::inRandomOrder()->first();

       // إنشاء سلة جديدة وربطها بالزبون
       $cart = Cart::create([
           'customer_id' => $customer->id,
       ]);

    }
}
