<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Modelmonan;
class MonAnController extends Controller
{
    //
    public function getDanhSachMonAn(){
    	$monan = Modelmonan::all();
    	return view('admin.quanlymonan.danhsachmonan',['monan'=>$monan]);
    }
}
