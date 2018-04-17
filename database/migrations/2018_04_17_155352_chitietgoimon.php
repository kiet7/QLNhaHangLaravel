<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Chitietgoimon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietgoimon', function (Blueprint $table) {
            $table->unsignedInteger('MaGoiMon');
            $table->foreign('MaGoiMon')->references('MaGoiMon')->on('goimon');
            $table->unsignedInteger('MaMonAn');
            $table->foreign('MaMonAn')->references('MaMonAn')->on('monan');
            $table->integer('SoLuong');
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
        Schema::dropIfExists('chitietgoimon');
    }
}
