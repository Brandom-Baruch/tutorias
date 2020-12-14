<?php

use Faker\Generator as Faker;
use App\Grupo;

$factory->define(Grupo::class, function (Faker $faker) {
    return [       
    		'name' => $faker->word,
            'grado' => $faker->randomElement($array = array ('1ro','2do','3ro','4to','5to')),
            'grupo' => $faker->randomElement($array = array ('A','B','C','D','E')),
            'semestre' => $faker->randomElement($array = array ('1ro semestre','2do semestre','3ro semestre','4to semestre','5to semestre')),
            'year' => $faker->year,                        


    ];
});
