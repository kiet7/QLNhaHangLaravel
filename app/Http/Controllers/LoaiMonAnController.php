<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoaiMonAnController extends Controller
{
    //
    public function getDanhSachLoaiMonAn(){
    	return view('admin.quanlyloaimonan.danhsachloaimonan');
    }
}
