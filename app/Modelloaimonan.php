<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelloaimonan extends Model
{
    //
    protected $table = "loaimonan";

    public function monan(){
    	$this->hasMany('App\Modelmonan','MaMonAn','MaLoai');
    }
}

