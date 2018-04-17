<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelbanan extends Model
{
    //
    protected $table = "banan";

    public function goimon(){
    	$this->hasMany('App\Modelgoimon','MaBan');
    }
}
}
