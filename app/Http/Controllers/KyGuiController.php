<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Modelkygui;
class KyGuiController extends Controller
{
    //
    public function getDanhSachKyGui(){
    	$kygui = Modelkygui::all();
    	return view('admin.quanlykygui.danhsachkygui',['kygui'=>$kygui]);
    }
}
