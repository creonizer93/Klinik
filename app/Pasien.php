<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    public function rmx(){
    	return $this->hasMany('App\rm');
    }
}
