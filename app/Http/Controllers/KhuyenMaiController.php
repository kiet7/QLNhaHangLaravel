<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\ModelKhuyenMai;
class KhuyenMaiController extends Controller
{
    //
    public function getDanhSachKhuyenMai(){
    	$khuyenmai = ModelKhuyenMai::all();
    	return view('admin.khuyenmai.danhsachkhuyenmai',['khuyenmai'=>$khuyenmai]);
    }
}
