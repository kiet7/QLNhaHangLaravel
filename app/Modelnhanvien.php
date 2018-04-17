<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelnhanvien extends Model
{
    //
    protected $table = "nhanvien";

    function goimon(){
    	$this->hasMany('App\Modelgoimon', 'MaNhanVien');
    }

    
}
