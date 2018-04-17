<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BanAnController extends Controller
{
    //
    public function getDanhSachBanAn(){
    	return view('admin.quanlyban.danhsachbanan');
    }
}
