<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Seeder;
use App\Models\OptionTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Option::factory(10)->create();

        
        $data = [
            [
                'name' => [
                    'en' => 'width',
                    'ar' => 'عرض',
                ],
                'locale' => [
                    'en',
                    'ar',
                ],
                'product_id' => 3,
            ],
            [
                'name' => [
                    'en' => 'height',
                    'ar' => 'ارتفاع',
                ],
                'locale' => [
                    'en',
                    'ar',
                ],
                'product_id' => 3,
            ],
            [
                'name' => [
                    'en' => 'capacity',
                    'ar' => 'سعة',
                ],
                'locale' => [
                    'en',
                    'ar',
                ],
                'product_id' => 3,
            ],
        ];

        foreach ($data as $item) {
            $option = Option::create(['product_id' => $item['product_id']]);

            foreach ($item['name'] as $locale => $name) {
                $translation = new OptionTranslation();
                $translation->setTable('option_translations');
                $translation->setAttribute('locale', $locale);
                $translation->setAttribute('name', $name);
                $option->translations()->save($translation);
            }
        }

    }
}
