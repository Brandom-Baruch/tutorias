<?php

use Faker\Generator as Faker;
use App\Padre_familia;

$factory->define(Padre_familia::class, function (Faker $faker) {
    return [
        	'name' => $faker->firstName,
            'apellidoP' => $faker->lastName,
            'apellidoM' => $faker->lastName,
            'email' => $faker->unique()->safeEmail,
            'password' =>bcrypt('secret') ,
            'edad' => $faker->numberBetween(20,60),
            'curp' => str_random(18),
            'telefono_fijo' => $faker->phoneNumber,
            'telefono_cel' => $faker->phoneNumber,
            'profesion' => $faker->word,
            'ocupacion' => $faker->jobTitle,
            'escolaridad' => $faker->randomElement($array = array('Primaria','Secundaria' , 'Preparatoria', 'Universidad')),
            'estado_civil' => $faker->randomElement($array = array('Soltero(a)','Casado(a)')),
            'remember_token' => str_random(10)                        
    ];
});
