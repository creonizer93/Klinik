<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rm extends Model
{
    public function pasien(){
    	return $this->belongsTo(Pasien::class, 'idpasien');
    }
}
