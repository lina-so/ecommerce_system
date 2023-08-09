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
            UserSeeder::class,
            AdminSeeder::class,
            CartSeeder::class,
            CategorySeeder::class,
            CitySeeder::class,
            ClassificationSeeder::class,
            CommentSeeder::class,
            CountrySeeder::class,
            CustomerSeeder::class,
            FavoraiteSeeder::class,
            LikeSeeder::class,
            LocationSeeder::class,
            OptionSeeder::class,
            OptionValueSeeder::class,
            OrderSeeder::class,
            PaymentMethodSeeder::class,
            ProductSeeder::class,
            PromotionSeeder::class,
            RateSeeder::class,
            RatingValueSeeder::class,
            ReplaySeeder::class,
            VendorSeeder::class,


        ]);
    }
}
