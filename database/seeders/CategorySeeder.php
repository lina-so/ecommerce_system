<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Classification;
use Illuminate\Database\Seeder;
use App\Models\CategoryTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory()->count(40)->create();

        $data = [
            [
                'name' => [
                    'en' => 'women',
                    'ar' => 'نسائي',
                ],
                'locale' => [
                    'en',
                    'ar',
                ],
                'category_id' => 2,
            ],
            [
                'name' => [
                    'en' => 'men',
                    'ar' => 'رجالي',
                ],
                'locale' => [
                    'en',
                    'ar',
                ],
                'category_id' => 2,
            ],
            [
                'name' => [
                    'en' => 'kids',
                    'ar' => 'اطفال',
                ],
                'locale' => [
                    'en',
                    'ar',
                ],
                'category_id' => 2,
            ],
        ];

        foreach ($data as $item) {
            $category = category::create();

            foreach ($item['name'] as $locale => $name) {
                $translation = new CategoryTranslation();
                $translation->setTable('category_translations');
                $translation->setAttribute('locale', $locale);
                $translation->setAttribute('name', $name);
                $category->translations()->save($translation);
            }
        }


    }
}
