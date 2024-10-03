<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDonChiTiet extends Model
{
    use HasFactory;

    protected $table = 'hoa_don_chi_tiet';

    protected $fillable = [
        'id_hoa_don',
        'id_product',
        'quantity',
        'created_at',
        'updated_at',
    ];

    public function hoaDon()
    {
        return $this->belongsTo(HoaDon::class, 'id_hoa_don');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }
}
