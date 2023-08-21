<?php

namespace Database\Seeders;

use App\Models\VendorBank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorBankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VendorBank::factory()->count(10)->create();
    }
}
