<?php

use Faker\Generator as Faker;
use App\Domicilio;

$factory->define(Domicilio::class, function (Faker $faker) {
    return [
        	'estado' => $faker->state,
            'municipio' => $faker->city,
            'localidad' => $faker->country,
            'calle' => $faker->streetName,
            'cp' => '12345',
            'colonia' => 'Barrio Puebla',
            'no_interior' => '0',
            'no_exterior' => '11',
    ];
});
