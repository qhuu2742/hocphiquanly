<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HoaDon extends Migration
{

    public function up()
    {
        Schema::create('hoa_don', function (Blueprint $table) {
            $table->integer('ma_sinh_vien');

            $table->string('thang_hoc_phi');

            $table->string('nam_hoc_phi');

            $table->string('so_tien_dong', 100);

            $table->timestamp('ngay_dong');

            $table->integer('ma_ke_toan')->unsigned();

            $table->primary('ngay_dong');

            $table->foreign('ma_ke_toan')
                ->references('ma_ke_toan')->on('ke_toan');
        });
    }


    public function down()
    {
        Schema::dropIfExists('hoa_don');
    }
}
