<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'rm';
    public function rm(){
    	return $this->hasMany(rm::class);
    }
}
