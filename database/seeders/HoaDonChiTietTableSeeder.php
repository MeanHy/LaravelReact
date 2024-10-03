<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HoaDonChiTietTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $hoaDonIds = DB::table('hoa_don')->pluck('id')->toArray();
        $productIds = DB::table('products')->pluck('id')->toArray();

        for ($i = 0; $i < 5; $i++) {
            DB::table('hoa_don_chi_tiet')->insert([
                'id_hoa_don' => $faker->randomElement($hoaDonIds),
                'id_product' => $faker->randomElement($productIds),
                'quantity' => $faker->numberBetween(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
