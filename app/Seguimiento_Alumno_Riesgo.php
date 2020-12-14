<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguimiento_Alumno_Riesgo extends Model
{
    protected  $table = 'seguimiento_alumnos_riesgo';

    public function alumnos()
    {
        return $this->hasMany(Alumno::class,'nia','alumno_id');
    }
}
