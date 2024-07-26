<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'name' => $faker->word(),
                'img' => $faker->imageUrl(640, 480),
                'description' => $faker->text,
                'price' => $faker->numberBetween(1000, 10000),
                'view' => $faker->numberBetween(10, 10000),
                'sold' => $faker->numberBetween(50, 10000),
                'category_id' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
