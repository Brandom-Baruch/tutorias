<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte_Tutoria_Grupal extends Model
{
    protected $table = 'reporte_tutoria_grupal';

    public function indice_regularizacion()
    {
    	 return $this->hasOne(Indice_Regularizacion::class,'reporte_id','id');
    }

    public function indice_reprobacion()
    {
    	 return $this->hasOne(Indice_Reprobacion::class,'reporte_id','id');
    }

    public function alumno_cerfiticacion()
    {
    	 return $this->hasOne(Alumnos_Certifican::class,'reporte_id','id');
    }
}
