<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nhanvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->increments('MaNhanVien');
            $table->string('TenNhanVien');
            $table->string('TenDangNhap');
            $table->string('MatKhau');
            $table->boolean('GioiTinh');
            $table->date('NgaySinh');
            $table->integer('CMND');
            $table->integer('quyen');
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
        Schema::dropIfExists('nhanvien');
    }
}
