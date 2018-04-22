<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Modelmonan;
use Datetime;
class MonAnController extends Controller
{
    //
    public function getView(){
    	return view('admin.quanlymonan.danhsachmonan');
    }
    public function getList()
    {
    	return Modelmonan::orderBy('MaMonAn','DESC')->get();
    }
    public function postThemMonAn(Request $request)
    {
    	$monan = new Modelmonan;
    	$monan->TenMonAn = $request->TenMonAn;
    	$monan->GiaTien = $request->GiaTien;
    	$monan->MaLoai = $request->MaLoai;
    	$monan->created_at = new Datetime(); 

    	$monan->save();
    	return "Thêm Thành Công";
    }
    public function getSuaMonAn($MaMonAn)
    {
        return Modelmonan::where('MaMonAn', $MaMonAn)->get()->toJson();
    }
    public function postSuaMonAn(Request $request,$MaMonAn)
    {
        //$monan = Modelmonan::find
        Modelmonan::where('MaMonAn',$MaMonAn)->update([
            'TenMonAn'=>$request->TenMonAn,
            'GiaTien'=>$request->GiaTien,
            'MaLoai'=>$request->MaLoai,
            'updated_at'=>new Datetime()
        ]);
        
        return "Sửa Thành Công";
    }
    public function getXoaMonAn($MaMonAn)
    {
        Modelmonan::where('MaMonAn',$MaMonAn)->delete();
        return "xóa thành công";
    }
}
