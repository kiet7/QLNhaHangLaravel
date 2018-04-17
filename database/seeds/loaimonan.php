<?php

use Illuminate\Database\Seeder;

class loaimonan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('loaimonan')->insert([
            'MaLoai' => rand(0,10),
            'TenLoai' => str_random(10)
            
        ]);
    }
}
