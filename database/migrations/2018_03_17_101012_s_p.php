<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SP extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('SanPham', function (Blueprint $table) {
        $table->increments('id'); //Tự tăng, khóa chính
        $table->string('TenSanPham'); //Kiểu chuỗi
        $table->integer('Gia'); //Kiểu int
        $table->timestamps(); //Tự cập nhật thời gian
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SanPham');
    }
}
