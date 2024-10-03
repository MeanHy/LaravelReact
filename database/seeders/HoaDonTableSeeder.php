<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HoaDonTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('hoa_don')->insert([
                'name' => $faker->name,
                'email' => $faker->safeEmail,
                'phone' => '0356153002',
                'address' => $faker->address,
                'transaction_id' => $faker->uuid,
                'note' => $faker->sentence,
                'status' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
