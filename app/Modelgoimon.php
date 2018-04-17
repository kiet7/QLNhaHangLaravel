<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelgoimon extends Model
{
    //
    protected $table = "goimon";

    public function nhanvien(){
    	$this->belongsTo('App\Modelnhanvien', 'MaNhanVien','MaGoiMon');
    }

    public function banan(){
    	$this->belongsTo('App\Modelbanan','goimon_MaGoiMon','MaBan');
    }
    public function chitietgoimon(){
    	$this->hasMany('App\Modelchitietgoimon','monan_MaMonAn','MaGoiMon');
    }
}
