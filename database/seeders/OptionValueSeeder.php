<?php

namespace Database\Seeders;

use App\Models\OptionValue;
use Illuminate\Database\Seeder;
use App\Models\OptionValueTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OptionValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // OptionValue::factory(5)->create();

        
        $data = [
            [
                'name' => [
                    'en' => 'green',
                    'ar' => 'اخضر',
                ],
                'locale' => [
                    'en',
                    'ar',
                ],
                'option_id' => 11,
            ],
            [
                'name' => [
                    'en' => 'red',
                    'ar' => 'احمر',
                ],
                'locale' => [
                    'en',
                    'ar',
                ],
                'option_id' => 11,
            ],
            [
                'name' => [
                    'en' => 'blue',
                    'ar' => 'ازرق',
                ],
                'locale' => [
                    'en',
                    'ar',
                ],
                'option_id' => 11,
            ],
            [
                'name' => [
                    'en' => 'large',
                    'ar' => 'كبير',
                ],
                'locale' => [
                    'en',
                    'ar',
                ],
                'option_id' => 2,
            ],  [
                'name' => [
                    'en' => 'small',
                    'ar' => 'صفير',
                ],
                'locale' => [
                    'en',
                    'ar',
                ],
                'option_id' => 2,
            ],
        ];

        foreach ($data as $item) {
            $option_value = OptionValue::create(['option_id' => $item['option_id']]);

            foreach ($item['name'] as $locale => $name) {
                $translation = new OptionValueTranslation();
                $translation->setTable('option_value_translations');
                $translation->setAttribute('locale', $locale);
                $translation->setAttribute('name', $name);
                $option_value->translations()->save($translation);
            }
        }

    

    }
}
