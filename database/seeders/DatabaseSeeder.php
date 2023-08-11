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


            CategorySeeder::class,
            ClassificationSeeder::class,
            VendorSeeder::class,
            PaymentMethodSeeder::class,
            AdminSeeder::class,
            CustomerSeeder::class,
            ProductSeeder::class,
            RateSeeder::class,
            RatingValueSeeder::class,
            LikeSeeder::class,
            ReplaySeeder::class,
            FavoraiteSeeder::class,
            CommentSeeder::class,
            OptionSeeder::class,
            OrderSeeder::class,
            CartSeeder::class,
            CountrySeeder::class,
            CitySeeder::class,
            LocationSeeder::class,
            PromotionSeeder::class,
            OptionValueSeeder::class,



        ]);
    }
}
