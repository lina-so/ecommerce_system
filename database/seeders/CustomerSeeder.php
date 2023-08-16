<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Customer;
use Illuminate\Database\Seeder;
use App\Models\CustomerTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Customer::factory()
        // ->hasAttached(
        //     Product::take(rand(2, 10))->inRandomOrder()->pluck('id')->toArray(),
        //     [],
        //     'products'
        // )
        // ->count(20)
        // ->create();


        $data = [
            [
                'name' => [
                    'en' => 'Rama',
                    'ar' => 'راما',
                ],
                'locale' => [
                    'en',
                    'ar',
                ],
                'customer_id' => 2,
            ],
            [
                'name' => [
                    'en' => 'ranim',
                    'ar' => 'رنيم',
                ],
                'locale' => [
                    'en',
                    'ar',
                ],
                'customer_id' => 2,
            ],
        ];

        foreach ($data as $item) {
            $customer = Customer::create();

            foreach ($item['name'] as $locale => $name) {
                $translation = new CustomerTranslation();
                $translation->setTable('customer_translations');
                $translation->setAttribute('locale', $locale);
                $translation->setAttribute('name', $name);
                $customer->translations()->save($translation);
            }
        }

    }
}
