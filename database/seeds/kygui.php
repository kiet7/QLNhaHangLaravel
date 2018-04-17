<?php

use Illuminate\Database\Seeder;

class kygui extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('kygui')->insert([
            'MaKyGui' => rand(0,10),
            'MaGoiMon' => rand(0,10),
            'MaKhachHang' => rand(0,10),
            'TenMon' => str_random(10),
            'created_at' => today(),
            'NgayHetHan' => today(),
            'TinhTrang' => true
            
        ]);
    }
    
}
