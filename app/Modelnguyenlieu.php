<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelnguyenlieu extends Model
{
    //
    protected $table = "nguyenlieu";

    public function monan(){
    	$this->hasMany('App\Modelmonan','monan_MaMonAn','MaNguyenLieu');
    }
}
