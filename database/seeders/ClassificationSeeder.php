<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Promotion;
use App\Models\Classification;
use Illuminate\Database\Seeder;
use App\Models\ClassificationTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Classification::factory()
        //     ->hasAttached(
        //         Promotion::take(rand(2, 10))->inRandomOrder()->pluck('id')->toArray(),
        //         [],
        //         'promotions')

        // ->count(20)
        // ->create([
        //     'category_id' => Category::inRandomOrder()->first()->id,
        // ]);



        $data = [
            [
                'name' => [
                    'en' => 'sweater',
                    'ar' => 'سترة',
                ],
                'classification_id' => 2,
                'category_id' => 1,

            ],
            [
                'name' => [
                    'en' => 'hat',
                    'ar' => 'قبعة',
                ],
                'classification_id' => 2,
                'category_id' => 1,


            ],
        ];
        foreach ($data as $item) {
            $classification = Classification::create(['category_id' => $item['category_id'],]);

            foreach ($item['name'] as $locale => $name) {
                $translation = new ClassificationTranslation();
                $translation->setTable('classification_translations');
                $translation->setAttribute('locale', $locale);
                $translation->setAttribute('name', $name);
                $classification->translations()->save($translation);
            }
        }
}
}
