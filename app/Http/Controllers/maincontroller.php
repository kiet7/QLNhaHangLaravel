<?php

namespace App\Http\Controllers;

use \App\Modelgoimon;
use \App\Modelkygui;
use \App\Modelnhanvien;

class maincontroller extends Controller {
	//
	public function getallData() {
		$listgoimon = Modelgoimon::all()->count();
		$dsgoimon = Modelgoimon::orderBy('MaGoiMon', 'desc')->join('nhanvien', 'nhanvien.manhanvien', '=', 'goimon.manhanvien')->get();
		$listnhanvien = Modelnhanvien::all()->count();
		$listkygui = Modelkygui::all()->count();
		$dulieu = [
			'dsgoimon' => $dsgoimon,
			'listgoimon' => $listgoimon,
			'listnhanvien' => $listnhanvien,
			'listkygui' => $listkygui,
		];
		return response()->json($dulieu);
	}
}
