<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarcaX extends Model
{
    protected $table = 'marca_x';
    protected $primaryKey = 'id';

    public function entrevistaFresca()
    {
        return $this->hasOne(Entrevista_Fresca_Padre::class, 'entrevista_id');
    }   
}
