<?php

namespace App\Http\Controllers;

use Datetime;
use Illuminate\Http\Request;
use \App\Modelloaimonan;
use \App\Modelmonan;

class MonAnController extends Controller {
	//
	public function getView() {
		return view('admin.quanlymonan.danhsachmonan');
	}
	public function getList() {
		$listmonan = Modelmonan::orderBy('MaMonAn', 'DESC')->with('loaimonan')->get();
		$listloaimonan = Modelloaimonan::all();
		return response()->json([$listmonan, $listloaimonan]);
	}
	public function getListLoai($MaLoai) {
		$listmonan = Modelmonan::orderBy('MaMonAn', 'DESC')->where('MaLoai', '=', $MaLoai)->with('loaimonan')->get();
		$listloaimonan = Modelloaimonan::all();
		return response()->json([$listmonan, $listloaimonan]);
	}
	public function postThemMonAn(Request $request) {
		$monan = new Modelmonan;
		$monan->TenMonAn = $request->TenMonAn;
		$monan->GiaTien = $request->GiaTien;
		$monan->MaLoai = $request->MaLoai;
		$monan->created_at = new Datetime();

		$monan->save();
		return "Thêm Thành Công";
	}
	public function getSuaMonAn($MaMonAn) {
		return Modelmonan::where('MaMonAn', '=', $MaMonAn)->get();
	}
	public function postSuaMonAn(Request $request, $MaMonAn) {
		Modelmonan::where('MaMonAn', $MaMonAn)->update([
			'TenMonAn' => $request->TenMonAn,
			'GiaTien' => $request->GiaTien,
			'MaLoai' => $request->MaLoai,
			'updated_at' => new Datetime(),
		]);

		return "Sửa Thành Công";
	}
	public function getXoaMonAn($MaMonAn) {
		Modelmonan::where('MaMonAn', $MaMonAn)->delete();
		return "xóa thành công";
	}
}
