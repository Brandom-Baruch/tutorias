<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarcaSiNo extends Model
{
    protected $table = 'marca_si_no';
    protected $primaryKey = 'id';

    public function entrevistaFresca()
    {
        return $this->hasOne(Entrevista_Fresca_Padre::class, 'entrevista_id');
    }

}
