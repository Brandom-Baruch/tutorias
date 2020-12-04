<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atencion_Individualizada extends Model
{
    protected $table = 'atencion_individualizada';

    public function alumnos()
    {
        return $this->hasMany(Alumno::class,'nia','alumno_id');
    }
}
