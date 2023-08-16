<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use App\Models\AdminTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => [
                    'en' => 'Lina',
                    'ar' => 'لينا',
                ],
                'locale' => [
                    'en',
                    'ar',
                ],
                'admin_id' => 2,
            ],
            [
                'name' => [
                    'en' => 'Massa',
                    'ar' => 'ماسة',
                ],
                'locale' => [
                    'en',
                    'ar',
                ],
                'admin_id' => 2,
            ],
        ];

        foreach ($data as $item) {
            $admin = Admin::create();

            foreach ($item['name'] as $locale => $name) {
                $translation = new AdminTranslation();
                $translation->setTable('admin_translations');
                $translation->setAttribute('locale', $locale);
                $translation->setAttribute('name', $name);
                $admin->translations()->save($translation);
            }
        }


    }
}
