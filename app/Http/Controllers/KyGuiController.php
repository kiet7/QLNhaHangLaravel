<?php

namespace App\Http\Controllers;

use \App\Modelkygui;

class KyGuiController extends Controller {
	//
	public function getView() {
		//$kygui = Modelkygui::all();
		return view('admin.quanlykygui.danhsachkygui');
	}
	public function getList() {
		$kygui = Modelkygui::join('khachhang', 'kygui.makhachhang', '=', 'khachhang.makhachhang')->get();

		//$kygui = Modelkygui::orderBy('MaKyGui', 'DESC')->with('khachhang')->get();
		return response()->json($kygui);
	}
	public function postThemKyGui(Request $request) {
		$kygui = new Modelkygui;
		$kygui->MaGoiMon = $request->MaGoiMon;
		$kygui->TenMon = $request->TenMon;
		$kygui->MaKhachHang = $request->MaKhachHang;
		$kygui->created_at = new Datetime();

		$kygui->save();
		return "Thêm Thành Công";
	}
	public function getSuaKyGui($MaKyGui) {
		return Modelkygui::where('MaKyGui', $MaKyGui)->get()->toJson();
	}
	public function postSuaKyGui(Request $request, $MaKyGui) {
		//$monan = Modelmonan::find
		Modelkygui::where('MaKyGui', $MaKyGui)->update([
			'TenLoai' => $request->TenLoai,
			'updated_at' => new Datetime(),
		]);

		return "Sửa Thành Công";
	}
	public function getXoaKyGui($MaKyGui) {
		Modelkygui::where('MaKyGui', $MaKyGui)->delete();
		return "xóa thành công";
	}
}
