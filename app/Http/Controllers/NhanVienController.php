<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Modelnhanvien;
class NhanVienController extends Controller
{
    //
    public function getDanhSachNhanVien(){
    	$nhanvien = Modelnhanvien::all();
    	return view('admin.quanlynhanvien.danhsachnhanvien',['nhanvien'=>$nhanvien]);
    }
}
