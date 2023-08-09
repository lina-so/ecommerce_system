<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Vendor;
use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory()->count(10)->create();

    }
}
