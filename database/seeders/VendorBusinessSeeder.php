<?php

namespace Database\Seeders;

use App\Models\VendorBusiness;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorBusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VendorBusiness::factory()->count(10)->create();
    }
}
