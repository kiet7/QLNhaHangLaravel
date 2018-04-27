<?php

namespace App\Http\Controllers;

use \App\Modelbanan;

class BanAnController extends Controller {
	//
	public function getDanhSachBanAn() {
		$banan = Modelbanan::all();
		return view('admin.quanlyban.danhsachbanan', ['banan' => $banan]);
	}
	public function getList() {
		$banan = Modelbanan::all();
		return response()->json($banan);
	}
}
