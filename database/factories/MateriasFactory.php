<?php

use Faker\Generator as Faker;
use App\Materia;

$factory->define(Materia::class, function (Faker $faker) {
    return [
        
        	'name' => $faker->word,
            'descripcion' => $faker->text($maxNbChars = 50),
            'clave' => $faker->swiftBicNumber,
    ];
});
