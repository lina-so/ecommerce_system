<?php

namespace Database\Seeders;

use App\Models\Favoraite;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FavoraiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Favoraite::factory(100)->create();

    }
}
