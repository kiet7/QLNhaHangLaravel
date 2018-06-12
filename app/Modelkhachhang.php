<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelkhachhang extends Model {
	//
	protected $table = "khachhang";

	public function kygui() {
		return $this->hasMany('App\ModelKyGui', 'khachhang_MaKhachHang', 'MaKhachHang');
	}
}
