<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Modelloaimonan;
class LoaiMonAnController extends Controller
{
    //
    public function getDanhSachLoaiMonAn(){
    	$loaimonan =  Modelloaimonan::all();
    	return view('admin.quanlyloaimonan.danhsachloaimonan',['loaimonan'=>$loaimonan]);
    }
}
