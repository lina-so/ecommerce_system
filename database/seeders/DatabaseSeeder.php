<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LaratrustSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            ClassificationSeeder::class,
            VendorSeeder::class,
            ProductSeeder::class,
            PaymentMethodSeeder::class,
            AdminSeeder::class,
            CustomerSeeder::class,
            RateSeeder::class,
            RatingValueSeeder::class,
            LikeSeeder::class,
            ReplaySeeder::class,
            VendorSeeder::class,
            FavoraiteSeeder::class,
            CommentSeeder::class,
            OptionSeeder::class,
            OrderSeeder::class,
            LocationSeeder::class,
            CartSeeder::class,
            CountrySeeder::class,
            CitySeeder::class,
            PromotionSeeder::class,
            OptionValueSeeder::class,
        ]);
    }
}
