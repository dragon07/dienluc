<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;
    protected $fillable = [
        'ho_ten',
        'mst',
        'so_hieu_hrms',
        'ma_erp',
        'status'
    ];

    /* Add scope search */
    public function scopeSearch($query)
    {
        if ($key = request()->key) {
            $query = $query->where('ho_ten', 'like', '%' . $key . '%');
        }
        return $query;
    }
}
