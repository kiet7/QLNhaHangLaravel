<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Goimon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goimon', function (Blueprint $table) {
            $table->increments('MaGoiMon');
            $table->string('TinhTrang');
            //$table->unsignedInteger('MaNhanVien');
            //$table->foreign('MaNhanVien')->references('MaNhanVien')->on('nhanvien');
            $table->unsignedInteger('MaBan');
            $table->foreign('MaBan')->references('MaBan')->on('banan');

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
        Schema::dropIfExists('goimon');
    }
}
