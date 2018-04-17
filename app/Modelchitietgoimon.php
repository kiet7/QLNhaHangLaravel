<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelchitietgoimon extends Model
{
    //
    protected $table = "chitietgoimon";

    public function monan(){
    	$this->hasMany('App\Modelmonan','MaMonAn');
    }
}
