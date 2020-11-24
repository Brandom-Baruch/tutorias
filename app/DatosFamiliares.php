<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosFamiliares extends Model
{
    protected $table = 'datos_familiares';

    public function entrevistaFresca()
    {
        return $this->hasOne(Entrevista_Fresca_Alumno::class, 'entrevista_id');
    }

    
}
