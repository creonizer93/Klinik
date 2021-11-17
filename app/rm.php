<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rm extends Model
{
    protected $table = 'pasien';
    public function pasien(){
    	return $this->belongsTo(rm::class, 'idpasien');
    }
}
