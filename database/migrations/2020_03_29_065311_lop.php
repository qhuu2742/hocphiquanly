<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lop extends Migration
{
   
    public function up()
    {
        Schema::create('lop', function (Blueprint $table) {
            $table->increments('ma_lop');

            $table->string('ten_lop', 100);

            $table->integer('ma_khoa')->unsigned();

            $table->integer('ma_nganh')->unsigned();

            $table->foreign('ma_khoa')
                ->references('ma_khoa')->on('khoa');

            $table->foreign('ma_nganh')
                ->references('ma_nganh')->on('chuong_trinh_dao_tao');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('lop');
    }
}
