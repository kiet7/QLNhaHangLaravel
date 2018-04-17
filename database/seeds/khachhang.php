<?php

use Illuminate\Database\Seeder;

class khachhang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('khachhang')->insert([
        	'TenKhachHang' => str_random(100),
            'SDT' => rand(0,10000),
            'email' => str_random(20).'@gmail.com',
            'tuoi' => rand(20,50),
            'GioiTinh' => true
        ]);
        
    }
}
