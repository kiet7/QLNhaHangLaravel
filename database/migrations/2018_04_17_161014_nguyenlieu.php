<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nguyenlieu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguyenlieu', function (Blueprint $table) {
            $table->increments('MaNguyenLieu');
            $table->string('TenNguyenLieu');
            $table->date('NgayNhap');
            $table->integer('SoLuong');
            $table->string('DonViTinh');
            $table->date('NgayHetHan');
            $table->boolean('TinhTrang');
            $table->unsignedInteger('MaMonAn');
            $table->foreign('MaMonAn')->references('MaMonAn')->on('monan');
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
        Schema::dropIfExists('nguyenlieu');
    }
}
