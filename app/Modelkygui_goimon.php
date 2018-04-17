<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelkygui_goimon extends Model
{
    //
    protected $table = "kygui_goimon";

    public function kygui_goimon(){
    	return $this->belongTos('App\Modelgoimon','kygui_MaKyGui','MaKyGui');
    }
}
