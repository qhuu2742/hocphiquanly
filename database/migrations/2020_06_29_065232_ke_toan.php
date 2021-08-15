<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KeToan extends Migration
{

    public function up()
    {
        Schema::create('ke_toan', function (Blueprint $table) {
            $table->increments('ma_ke_toan');

            $table->string('email', 100)->unique();

            $table->string('mat_khau', 100);

            $table->string('ten_ke_toan', 100);

            $table->string('ho_ke_toan', 100);

            $table->date('ngay_sinh');

            $table->string('dia_chi', 100);

            $table->string('so_dien_thoai', 100);

            $table->boolean('gioi_tinh');
        });
    }


    public function down()
    {
        Schema::dropIfExists('ke_toan');
    }
}
