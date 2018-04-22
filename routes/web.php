<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('admin/index');
});
Route::get('admin/socket', 'SocketController@index');
Route::post('admin/sendmessage', 'SocketController@sendMessage');
Route::get('admin/sendmessage', 'SocketController@sendMessage');

Route::group(['prefix'=>'admin'],function(){

		Route::group(['prefix'=>'thongke'],function(){
			Route::get('thongkedoanhthu', 'DoanhThuController@getThongKeDoanhThu');
			Route::get('thongkenguyenlieu', 'DoanhThuController@getThongKeNguyenLieu');
			Route::get('thongbao', 'DoanhThuController@getThongBao');			
		});

		Route::group(['prefix'=>'quanlyloaimonan'],function(){
			Route::get('danhsachloaimonan', 'LoaiMonAnController@getDanhSachLoaiMonAn');
			Route::get('themloaimonan', 'LoaiMonAnController@getThemLoaiMonAn');
			Route::post('themloaimonan', 'LoaiMonAnController@postThemLoaiMonAn');
			Route::get('sualoaimonan', 'LoaiMonAnController@getSuaLoaiMonAn');
			Route::post('sualoaimonan', 'LoaiMonAnController@postSuaLoaiMonAn');
			Route::get('xoaloaimonan', 'LoaiMonAnController@getXoaLoaiMonAn');
		});
		
		Route::group(['prefix'=>'quanlymonan'],function(){
			Route::get('/', 'MonAnController@getView');
			Route::get('getList', 'MonAnController@getList');
			Route::post('themmonan', 'MonAnController@postThemMonAn');
			Route::get('suamonan/{MaMonAn}', 'MonAnController@getSuaMonAn');
			Route::post('suamonan/{MaMonAn}', 'MonAnController@postSuaMonAn');
			Route::get('xoamonan/{MaMonAn}', 'MonAnController@getXoaMonAn');			
		});

		Route::group(['prefix'=>'quanlyban'],function(){
			Route::get('danhsachbanan', 'BanAnController@getDanhSachBanAn');
			Route::get('thembanan', 'BanAnController@getThemBanAn');
			Route::post('thembanan', 'BanAnController@postThemBanAn');
			Route::get('suabanan', 'BanAnController@getSuaBanAn');
			Route::post('suabanan', 'BanAnController@postSuaBanAn');
			Route::get('xoabanan', 'BanAnController@getXoaBanAn');			
		});

		Route::group(['prefix'=>'quanlynguyenlieu'],function(){
			Route::get('danhsachnguyenlieu', 'NguyenLieuController@getDanhSachNguyenLieu');
			Route::get('themnguyenlieu', 'NguyenLieuController@getThemNguyenLieu');
			Route::post('themnguyenlieu', 'NguyenLieuController@postThemNguyenLieu');
			Route::get('suanguyenlieu', 'NguyenLieuController@getSuaNguyenLieu');
			Route::post('suanguyenlieu', 'NguyenLieuController@postNguyenLieu');
			Route::get('xoanguyenlieu', 'NguyenLieuController@getXoaNguyenLieu');			
		});
		Route::group(['prefix'=>'quanlykygui'],function(){
			Route::get('danhsachkygui', 'KyGuiController@getDanhSachKyGui');
			Route::get('themkygui', 'KyGuiController@getThemKyGuiu');
			Route::post('themkygui', 'KyGuiController@postThemKyGui');
			Route::get('suakygui', 'KyGuiController@getSuaKyGui');
			Route::post('suakygui', 'KyGuiController@postSuaKyGui');
			Route::get('xoakygui', 'KyGuiController@getXoaKyGui');			
		});
		Route::group(['prefix'=>'khuyenmai'],function(){
			Route::get('danhsachkhuyenmai', 'KhuyenMaiController@getDanhSachKhuyenMai');
			Route::get('themkhuyenmai', 'KhuyenMaiController@getThemKhuyenMai');
			Route::post('themkhuyenmai', 'KhuyenMaiController@postThemKhuyenMai');
			Route::get('suakhuyenmai', 'KhuyenMaiController@getSuaKhuyenMai');
			Route::post('suakhuyenmai', 'KhuyenMaiController@postSuaKhuyenMai');
			Route::get('xoakhuyenmai', 'KhuyenMaiController@getXoaKhuyenMai');				
		});
		Route::group(['prefix'=>'quanlyorder'],function(){
			Route::get('danhsachorder', 'OrderController@getDanhSachOrder');
			Route::get('themorder', 'OrderController@getThemOrder');
			Route::post('themorder', 'OrderController@postThemOrder');
			Route::get('suaorder', 'OrderController@getSuaOrder');
			Route::post('suaorder', 'OrderController@postSuaOrder');
			Route::get('xoaorder', 'OrderController@getXoaOrder');			
		});
		Route::group(['prefix'=>'quanlynhanvien'],function(){
			Route::get('danhsachnhanvien', 'NhanVienController@getDanhSachNhanVien');
			Route::get('themnhanvien', 'NhanVienController@getThemNhanVien');
			Route::post('themnhanvien', 'NhanVienController@postThemNhanVien');
			Route::get('suanhanvien', 'NhanVienController@getSuaNhanVien');
			Route::post('suanhanvien', 'NhanVienController@postSuaNhanVien');
			Route::get('xoanhanvien', 'NhanVienController@getXoaNhanVien');			
		});

});