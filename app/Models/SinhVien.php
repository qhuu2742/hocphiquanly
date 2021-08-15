<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    // use Traits\HasCompositePrimaryKey;
    protected $table = 'sinh_vien';
    protected $primaryKey = 'ma_sinh_vien';
    public $timestamps = false;

    public function ten_day_du()
    {
        return $this->ho_sinh_vien . ' ' . $this->ten_sinh_vien;
    }

    public function get_gioi_tinh()
    {
        if ($this->gioi_tinh == 1) {
            return "Nam";
        } else {
            return "Nữ";
        }
    }
}
