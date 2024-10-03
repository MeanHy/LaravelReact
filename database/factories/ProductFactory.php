<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        $name = $this->faker->word;
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'price' => $this->faker->numberBetween(10000, 1000000),
            'discount' => $this->faker->numberBetween(0, 50),
            'content' => $this->faker->paragraph,
            'status' => $this->faker->boolean,
            'idCate' => $this->faker->numberBetween(1, 10), // Giả sử có 10 danh mục
            'idBrand' => $this->faker->numberBetween(1, 10), // Giả sử có 10 thương hiệu
            'in_stock' => $this->faker->numberBetween(1, 100),
        ];
    }
}
