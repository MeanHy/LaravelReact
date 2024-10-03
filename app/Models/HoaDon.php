<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;

    protected $table = 'hoa_don';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'transaction_id',
        'note',
        'status',
        'created_at',
        'updated_at',
    ];

    public function chiTiet()
    {
        return $this->hasMany(HoaDonChiTiet::class, 'id_hoa_don');
    }
}
