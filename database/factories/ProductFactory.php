<?php

namespace Database\Factories;

use App\Models\Vendor;
use App\Models\Classification;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

                'quantity' => $this->faker->numberBetween(1, 100),
                'price' => $this->faker->randomFloat(2),
                'classification_id' => Classification::inRandomOrder()->first()?->id,
                'vendor_id' => Vendor::inRandomOrder()->first()?->id,


                // تعريف الحقول العادية هنا

                // TranslatableContract::TRANSLATIONS_KEY => [
                //     'en' => [
                //         'name' => $this->faker->word,
                //         'description' => $this->faker->paragraph,
                //         // تعريف الحقول المترجمة باللغة الإنجليزية هنا
                //     ],
                //     'ar' => [
                //         'name' => $this->faker->word,
                //         'description' => $this->faker->paragraph,
                //         // تعريف الحقول المترجمة باللغة العربية هنا
                //     ],
                // ],
            ];

    }
}
