<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelkygui extends Model {
	//
	protected $table = "kygui";

	public function kygui_goimon() {
		return $this->hasMany('App\Modelkygui_goimon', 'kygui_MaKyGui', 'MaKyGui');
	}
	public function khachhang() {
		return $this->belongTos('App\Modelkhachhang', 'MaKhachHang', 'MaKhachHang');
	}

}
