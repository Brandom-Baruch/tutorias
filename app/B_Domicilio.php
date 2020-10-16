<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class B_Domicilio extends Model
{
    public function alumnos_d()
    {
    	return $this->hasMany(Alumno::class);
    }

    public function docentes_d()
    {
    	return $this->hasMany(Docente::class);
    }

    public function padres_d()
    {
    	return $this->hasMany(Padre_familia::class);
    }

    public function domicilio()
    {
    	return $this->hasMany(Domicilio::class);
    }
}
