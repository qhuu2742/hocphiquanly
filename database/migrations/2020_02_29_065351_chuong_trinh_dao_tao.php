<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChuongTrinhDaoTao extends Migration
{

    public function up()
    {
        Schema::create('chuong_trinh_dao_tao', function (Blueprint $table) {
            $table->increments('ma_nganh');

            $table->string('ten_nganh', 100);

            $table->string('hoc_phi_theo_thang', 100);
        });
    }


    public function down()
    {
        Schema::dropIfExists('chuong_trinh_dao_tao');
    }
}
