<?php

namespace App\Http\Controllers;
use Datetime;
use Illuminate\Http\Request;
use \App\Modelnhanvien;

class NhanVienController extends Controller {
	//
	public function getView() {

		return view('admin.quanlynhanvien.danhsachnhanvien');
	}
	public function getList() {
		$nhanvien = Modelnhanvien::all();
		return response()->json($nhanvien);
	}

	public function postThemNhanVien(Request $request) {
		$nhanvien = new Modelnhanvien;
		$nhanvien->TenNhanVien = $request->TenNhanVien;
		$nhanvien->TenDangNhap = $request->TenDangNhap;
		$nhanvien->MatKhau = $request->MatKhau;
		$nhanvien->CMND = $request->CMND;
		$nhanvien->NgayVaoLam = $request->NgayVaoLam;
		$nhanvien->quyen = 1;
		$nhanvien->created_at = new Datetime();

		$nhanvien->save();
		return "Thêm Thành Công";
	}
	public function getSuaNhanVien($MaNhanVien) {
		return Modelnhanvien::where('MaNhanVien', '=', $MaNhanVien)->get();
	}
	public function postSuaNhanVien(Request $request, $MaNguyenLieu) {
		Modelnhanvien::where('MaNguyenLieu', $MaNguyenLieu)->update([
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
	public function getXoaNhanVien($MaNhanVien) {
		Modelnhanvien::where('MaNhanVien', $MaNhanVien)->delete();
		return "xóa thành công";
	}
}
