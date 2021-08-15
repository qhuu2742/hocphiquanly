<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SinhVien extends Migration
{

    public function up()
    {
        Schema::create('sinh_vien', function (Blueprint $table) {
            $table->increments('ma_sinh_vien');

            $table->string('email', 100)->unique();

            $table->string('mat_khau', 100);

            $table->string('ten_sinh_vien', 100);

            $table->string('ho_sinh_vien', 100);

            $table->date('ngay_sinh');

            $table->string('dia_chi', 100);

            $table->string('so_dien_thoai', 100);

            $table->boolean('gioi_tinh');

            $table->integer('ma_lop')->unsigned();

            $table->date('thoi_gian_nhap_hoc');

            $table->foreign('ma_lop')
                ->references('ma_lop')->on('lop');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sinh_vien');
    }
}
