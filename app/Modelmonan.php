<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelmonan extends Model {
	//
	protected $table = "monan";

	public function loaimonan() {
		return $this->hasOne('App\Modelloaimonan', 'MaLoai', 'MaLoai');
	}

	public function nguyenlieu() {
		return $this->belongsTo('App\Modelnguyenlieu', 'monan_MaMonAn', 'MaMonAn');
	}
	public function chitietgoimon() {
		return $this->hasMany('App\Modelchitietgoimon', 'monan_MaMonAn', 'MaMonAn');
	}
}
