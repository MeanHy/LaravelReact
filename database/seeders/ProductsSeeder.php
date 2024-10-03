<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Lấy danh sách ID của các danh mục và thương hiệu
        $categories = DB::table('categories')->pluck('id')->toArray();
        $brands = DB::table('brands')->pluck('id')->toArray();

        for ($i = 0; $i < 25; $i++) { // Tạo 25 sản phẩm
            DB::table('products')->insert([
                'name' => $faker->word,
                'slug' => $faker->slug,
                'price' => $faker->numberBetween(10000, 100000),
                'discount' => $faker->numberBetween(0, 50),
                'content' => $faker->text,
                'status' => $faker->boolean,
                'idCate' => $faker->randomElement($categories), // Chọn ngẫu nhiên từ các danh mục
                'idBrand' => $faker->randomElement($brands), // Chọn ngẫu nhiên từ các thương hiệu
                'in_stock' => $faker->numberBetween(0, 100),
                'created_at' => $faker->dateTimeThisMonth(),
                'updated_at' => $faker->dateTimeThisMonth(),
            ]);
        }
    }
}
