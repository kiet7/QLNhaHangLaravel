<?php

namespace App\Http\Controllers;

use Datetime;
use Illuminate\Http\Request;
use \App\Modelloaimonan;

class LoaiMonAnController extends Controller {
	//
	public function getView() {
		return view('admin.quanlyloaimonan.danhsachloaimonan');
	}

	public function getList() {
		$listloaimonan = Modelloaimonan::all();
		return response()->json($listloaimonan);
	}
	public function postThemLoaiMonAn(Request $request) {
		$loaimonan = new Modelloaimonan;
		$loaimonan->TenLoai = $request->TenLoai;

		$loaimonan->created_at = new Datetime();

		$loaimonan->save();
		return "Thêm Thành Công";
	}
	public function getSuaLoaiMonAn($MaLoai) {
		return Modelloaimonan::where('MaLoai', $MaLoai)->get()->toJson();
	}
	public function postSuaLoaiMonAn(Request $request, $MaLoai) {
		//$monan = Modelmonan::find
		Modelloaimonan::where('MaLoai', $MaLoai)->update([
			'TenLoai' => $request->TenLoai,
			'updated_at' => new Datetime(),
		]);

		return "Sửa Thành Công";
	}
	public function getXoaLoaiMonAn($MaLoai) {
		Modelloaimonan::where('MaLoai', $MaLoai)->delete();
		return "xóa thành công";
	}
}
