<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoanhThuController extends Controller
{
    //
    public function getThongKeDoanhThu(){
    	return view('admin.thongke.thongkedoanhthu');
    }

    public function getThongKeNguyenLieu(){
    	return view('admin.thongke.thongkenguyenlieu');
    }

    public function getThongBao(){
    	return view('admin.thongke.thongbao');
    }
}
