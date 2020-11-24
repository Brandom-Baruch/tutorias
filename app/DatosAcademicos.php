<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosAcademicos extends Model
{
    protected $table = 'datos_academicos';

    public function entrevistaFresca()
    {
        return $this->hasOne(Entrevista_Fresca_Alumno::class, 'entrevista_id');
    }
}
