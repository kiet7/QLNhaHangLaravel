<?php

use Illuminate\Database\Seeder;

class goimon extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('goimon')->insert([
            'MaGoiMon' => rand(0,10),
            'TinhTrang' => str_random(10),
            'MaBan' => rand(0,10)
        ]);
        
    }
}
