<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    //
    public function getDanhSachNhanVien(){
    	return view('admin.quanlynhanvien.danhsachnhanvien');
    }
}
