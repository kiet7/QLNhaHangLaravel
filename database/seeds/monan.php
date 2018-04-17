<?php

use Illuminate\Database\Seeder;

class monan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('monan')->insert([
            'TenMonAn' => str_random(100),
            'GiaTien' => rand(1000,10000),
            'MaLoai' => rand(0,10)
           
        ]);
    }
}
