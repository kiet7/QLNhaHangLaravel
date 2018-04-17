<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Modelbanan;
class BanAnController extends Controller
{
    //
    public function getDanhSachBanAn(){
    	$banan = Modelbanan::all();
    	return view('admin.quanlyban.danhsachbanan',['banan'=>$banan]);
    }
}
