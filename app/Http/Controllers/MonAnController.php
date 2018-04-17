<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonAnController extends Controller
{
    //
    public function getDanhSachMonAn(){
    	return view('admin.quanlymonan.danhsachmonan');
    }
}
