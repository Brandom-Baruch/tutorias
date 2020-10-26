<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    public function b_domicilio()// Varios docentes tienen 1 domicilio
    {
        return $this->belongsTo(B_Domicilio::class);
    }

     public function puestos_asignados() //Un docente tiene varios puestos
    {
    	return $this->hasMany('App\PuestoAsignado');
    }
}
