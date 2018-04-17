<?php

use Illuminate\Database\Seeder;

class kygui_goimon extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kygui_goimon')->insert([
        	'MaKyGui' => rand(0,10),
            'MaGoiMon' => rand(0,10),
            'SoLuong' => rand(0,10),
            'DonViTinh' => 'kg'
            
        ]);
    }
}
