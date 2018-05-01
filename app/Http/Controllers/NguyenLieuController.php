<?php

namespace App\Http\Controllers;
use Datetime;
use Illuminate\Http\Request;
use \App\Modelnguyenlieu;

class NguyenLieuController extends Controller {
	//
	public function getView() {

		return view('admin.quanlynguyenlieu.danhsachnguyenlieu');
	}
	public function getList() {

		$nguyenlieu = Modelnguyenlieu::all();
		return response()->json($nguyenlieu);
	}
	public function postThemNguyenLieu(Request $request) {
		$nguyenlieu = new Modelnguyenlieu;
		$nguyenlieu->TenNguyenLieu = $request->TenNguyenLieu;
		$nguyenlieu->SoLuong = $request->SoLuong;
		$nguyenlieu->DonViTinh = $request->DonViTinh;
		$nguyenlieu->NgayNhap = new Datetime();
		$ngayhethan1 = (string) $request->NgayHetHan;
		$nguyenlieu->NgayHetHan = $ngayhethan1;
		$nguyenlieu->TinhTrang = $request->TinhTrang;
		$nguyenlieu->MaMonAn = $request->MaMonAn;
		$nguyenlieu->created_at = new Datetime();

		$nguyenlieu->save();
		return "Thêm Thành Công";
	}
	public function getSuaNguyenLieu($MaNguyenLieu) {
		return Modelnguyenlieu::where('MaNguyenLieu', '=', $MaNguyenLieu)->get();
	}
	public function postSuaNguyenLieu(Request $request, $MaNguyenLieu) {
		Modelnguyenlieu::where('MaNguyenLieu', $MaNguyenLieu)->update([
			'TenNguyenLieu' => $request->TenNguyenLieu,
			'SoLuong' => $request->SoLuong,
			'DonViTinh' => $request->DonViTinh,
			'NgayHetHan' => $request->NgayHetHan,
			'TinhTrang' => $request->TinhTrang,
			'MaMonAn' => $request->MaMonAn,

			'updated_at' => new Datetime(),
		]);

		return "Sửa Thành Công";
	}
	public function getXoaNguyenLieu($MaNguyenLieu) {
		Modelnguyenlieu::where('MaNguyenLieu', $MaNguyenLieu)->delete();
		return "xóa thành công";
	}

}
