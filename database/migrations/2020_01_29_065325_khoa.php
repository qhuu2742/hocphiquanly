<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Khoa extends Migration
{
    public function up()
    {
        Schema::create('khoa', function (Blueprint $table) {
            $table->increments('ma_khoa');

            $table->string('ten_khoa', 100);

            $table->date('thoi_gian_bat_dau');

            $table->date('thoi_gian_ket_thuc');
            
            
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('khoa');
    }
}
