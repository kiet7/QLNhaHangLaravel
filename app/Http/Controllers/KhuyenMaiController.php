<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KhuyenMaiController extends Controller
{
    //
    public function getDanhSachKhuyenMai(){
    	return view('admin.khuyenmai.danhsachkhuyenmai');
    }
}
