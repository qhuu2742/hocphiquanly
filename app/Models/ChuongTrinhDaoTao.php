<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChuongTrinhDaoTao extends Model
{
    protected $table = 'chuong_trinh_dao_tao';
    protected $primaryKey = 'ma_nganh';
    public $timestamps = false;
}
