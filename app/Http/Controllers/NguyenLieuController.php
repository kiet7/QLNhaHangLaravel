<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NguyenLieuController extends Controller
{
    //
    public function getDanhSachNguyenLieu(){
    	return view('admin.quanlynguyenlieu.danhsachnguyenlieu');
    }
}
