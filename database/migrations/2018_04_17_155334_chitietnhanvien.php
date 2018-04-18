<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Chitietnhanvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietnhanvien', function (Blueprint $table) {
            $table->unsignedInteger('MaNhanVien');
            $table->foreign('MaNhanVien')->references('MaNhanVien')->on('nhanvien');
            $table->double('HeSoLuong');
            $table->Integer('LuongCoBan');
            $table->date('NgayVaoLam');
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
        Schema::dropIfExists('chitietnhanvien');
    }
}
