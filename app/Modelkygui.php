<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelkygui extends Model
{
    //
    protected $table = "kygui";

    public function kygui_goimon(){
    	$this->hasMany('App\Modelkygui_goimon','kygui_MaKyGui','MaKyGui');
    }
    public function khachhang(){
    	$this->belongTos('App\Modelkhachhang','kygui_MaKyGui','MaKyGui');
    }

}
