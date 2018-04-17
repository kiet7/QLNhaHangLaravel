<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelchitietnhanvien extends Model
{
    //
    protected $table = "chitietnhanvien";

    function nhanvien(){
    	$this->hasOne('App\nhanvien','MaNhanVien');
    }
}
