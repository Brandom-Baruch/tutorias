<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
	protected $table = 'domicilios';
	protected $primaryKey = 'id';
	
   /* public function domicilios()
    {
        return $this->belongsToMany(Domicilio::class,'_b__domicilio','nia_id','docente_id','padre_id','domicilio_id')->withTimestamps();
    } */
}
