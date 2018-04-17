<?php

use Illuminate\Database\Seeder;

class banan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('banan')->insert([
            'TenBan' => 'Ban '. rand(0,10),
            'TinhTrang' => 'Empty',
            'MaBan' => rand(0,10)
        ]);
    }
}
