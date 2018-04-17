<?php

use Illuminate\Database\Seeder;

class chitietgoimon extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('chitietgoimon')->insert([
            'MaGoiMon' => rand(0,10),
            'MaMonAn' => rand(0,10),
            'SoLuong' => rand(0,10)
        ]);
    }
}
