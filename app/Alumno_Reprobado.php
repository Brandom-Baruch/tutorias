<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno_Reprobado extends Model
{
    protected $table = 'alumnos_reprobados';

    public function alumno_bajo_rendimiento()
    {
    	return $this->belongsTo(Alumno_Bajo_Rendimiento::class,'reporte_id');
    }
}
