<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrevista_Fresca_Alumno extends Model
{
    protected $table = 'entrevista_fresca_alumnos'; 
    protected $primaryKey = 'id';


    public function alumnos()
    {
        return $this->hasMany(Alumno::class,'nia','alumno_id');
    }

    public function datoFamiliar()
    {
    	return $this->hasOne(DatosFamiliares::class,'entrevista_id','id');
    }

    public function datoAcademico()
    {
        return $this->hasOne(DatosAcademicos::class,'entrevista_id','id');
    }
    
    public function habitoEstudio()
    {
        return $this->hasOne(HabitosEstudio::class,'entrevista_id','id');
    }   

    public function otraActividad()
    {
        return $this->hasOne(OtrasActividades::class,'entrevista_id','id');
    }

    public function datosAdicionales()
    {
        return $this->hasOne(DatosAdicionales::class,'entrevista_id','id');
    }
}
