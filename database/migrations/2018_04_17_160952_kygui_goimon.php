<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KyguiGoimon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kygui_goimon', function (Blueprint $table) {
            $table->unsignedInteger('MaKyGui');
            $table->foreign('MaKyGui')->references('MaKyGui')->on('kygui');
            $table->unsignedInteger('MaGoiMon');
            $table->foreign('MaGoiMon')->references('MaGoiMon')->on('chitietgoimon');
            $table->integer('SoLuong');
            $table->string('DonViTinh');
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
        Schema::dropIfExists('kygui_goimon');
    }
}
