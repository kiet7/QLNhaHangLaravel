<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KyGuiController extends Controller
{
    //
    public function getDanhSachKyGui(){
    	return view('admin.quanlykygui.danhsachkygui');
    }
}
