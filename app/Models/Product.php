<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'slug',
        'price',
        'discount',
        'content',
        'status',
        'idCate',
        'idBrand',
        'in_stock',
    ];

    public function hoaDonChiTiet()
    {
        return $this->hasMany(HoaDonChiTiet::class, 'id_product');
    }
}
