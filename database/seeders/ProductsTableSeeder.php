<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('products')->insert([
                'name' => $faker->word,
                'slug' => $faker->slug,
                'price' => $faker->numberBetween(1000, 100000),
                'discount' => $faker->numberBetween(0, 50),
                'content' => $faker->text,
                'status' => $faker->boolean,
                'in_stock' => $faker->numberBetween(0, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
