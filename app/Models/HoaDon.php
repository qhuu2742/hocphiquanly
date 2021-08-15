<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use Traits\HasCompositePrimaryKey;
    protected $table = 'hoa_don';
    protected $primaryKey = 'ngay_dong';
    public $timestamps = false;

    protected $fillable = [
        'ma_sinh_vien', 
        'thang_hoc_phi',
        'nam_hoc_phi',
        'so_tien_dong',
        'ma_ke_toan'
    ];
}
