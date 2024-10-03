<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HoaDonChiTiet;
use App\Models\Product;
use App\Models\HoaDon;

class HoaDonChiTietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hoaDons = HoaDon::all();
        $products = Product::all();
        
        foreach ($hoaDons as $hoaDon) {
            foreach (range(1, rand(1, 5)) as $index) { // Tạo từ 1 đến 5 sản phẩm cho mỗi hóa đơn
                HoaDonChiTiet::create([
                    'id_hoa_don' => $hoaDon->id,
                    'id_product' => $products->random()->id,
                    'quantity' => rand(1, 10),
                ]);
            }
        }
    }
}
