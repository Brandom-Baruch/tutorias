<?php

use Faker\Generator as Faker;
use App\PuestoAsignado;


$factory->define(PuestoAsignado::class, function (Faker $faker) {
    return [
        	'docente_id' => $faker->numberBetween(1,12),
            'puesto_id' => $faker->numberBetween(1, 4) ,
            
    ];
});
