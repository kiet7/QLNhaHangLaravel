<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kygui extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kygui', function (Blueprint $table) {
            $table->increments('MaKyGui');
            $table->unsignedInteger('MaGoiMon');
            $table->foreign('MaGoiMon')->references('MaGoiMon')->on('Chitietgoimon');
            $table->unsignedInteger('MaKhachHang');
            $table->foreign('MaKhachHang')->references('MaKhachHang')->on('khachhang');
            $table->string('TenMon');
            $table->date('NgayGui');
            $table->date('NgayHetHan');
            $table->boolean('TinhTrang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kygui');
    }
}
