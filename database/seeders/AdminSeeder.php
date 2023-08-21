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
        // $data = [
        //     [
        //         'name' => [
        //             'en' => 'Lina',
        //             'ar' => 'لينا',
        //         ],
        //         'locale' => [
        //             'en',
        //             'ar',
        //         ],
        //         'admin_id' => 2,
        //     ],
        //     [
        //         'name' => [
        //             'en' => 'Massa',
        //             'ar' => 'ماسة',
        //         ],
        //         'locale' => [
        //             'en',
        //             'ar',
        //         ],
        //         'admin_id' => 2,
        //     ],
        // ];

        // foreach ($data as $item) {
        //     $admin = Admin::create();

        //     foreach ($item['name'] as $locale => $name) {
        //         $translation = new AdminTranslation();
        //         $translation->setTable('admin_translations');
        //         $translation->setAttribute('locale', $locale);
        //         $translation->setAttribute('name', $name);
        //         $admin->translations()->save($translation);
        //     }
        // }

        $adminRecords = [
            [
                'id' => 1,
                'name' => 'Super Admin', 
                'Type' => 'superadmin',
                'vendor_id' => 0,
                'mobile' => '0911111111',
                'email' => 'admin@admin.com',
                'password' => '$2a$12$hW1jwVmJ0vAkzaayycWQPeKpjKfJtxCYlz8TtzgVdoogyjxdnsL6.',
                'image' => '',
                'status' => '1',
            ],
            [
                'id' => 2,
                'name' => 'Massa', 
                'Type' => 'vendor',
                'vendor_id' => 1,
                'mobile' => '0911111111',
                'email' => 'massa@admin.com',
                'password' => '$2a$12$hW1jwVmJ0vAkzaayycWQPeKpjKfJtxCYlz8TtzgVdoogyjxdnsL6.',
                'image' => '',
                'status' => '1',
            ],
            [
                'id' => 3,
                'name' => 'Lena', 
                'Type' => 'admin',
                'vendor_id' => 0,
                'mobile' => '0911111111',
                'email' => 'lena@admin.com',
                'password' => '$2a$12$hW1jwVmJ0vAkzaayycWQPeKpjKfJtxCYlz8TtzgVdoogyjxdnsL6.',
                'image' => '',
                'status' => '1',
            ],
        ];
        Admin::insert($adminRecords);
    }
}
