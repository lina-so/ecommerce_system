<?php

namespace Database\Seeders;

use App\Models\Vendor;
use App\Models\Product;
use Illuminate\Database\Seeder;
use App\Models\VendorTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
                'vendor_id' => 2,
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
                'vendor_id' => 2,
            ],
            [
                'name' => [
                    'en' => 'Aya',
                    'ar' => 'اية',
                ],
                'locale' => [
                    'en',
                    'ar',
                ],
                'vendor_id' => 2,
            ],
        ];

        foreach ($data as $item) {
            $vendor = Vendor::create();

            foreach ($item['name'] as $locale => $name) {
                $translation = new VendorTranslation();
                $translation->setTable('vendor_translations');
                $translation->setAttribute('locale', $locale);
                $translation->setAttribute('name', $name);
                $vendor->translations()->save($translation);
            }
        }
    }


}
