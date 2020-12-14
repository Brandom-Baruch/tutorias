<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno_Bajo_Rendimiento extends Model
{
    protected $table = 'alumnos_bajo_rendimiento';


    public function docente()
    {
    	return $this->belongsTo(Docente::class,'docente_id');
    }

    public function alumnos_reprobados()
    {
    	return $this->hasMany(Alumno_Reprobado::class,'reporte_id');
    }
}
