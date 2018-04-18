<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Modelnguyenlieu;
class NguyenLieuController extends Controller
{
    //
    public function getDanhSachNguyenLieu(){
    	$nguyenlieu = Modelnguyenlieu::all();
    	return view('admin.quanlynguyenlieu.danhsachnguyenlieu',['nguyenlieu'=>$nguyenlieu]);
    }
}
