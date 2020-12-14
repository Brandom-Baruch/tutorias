<?php

use Faker\Generator as Faker;
use App\Imparte;
$factory->define(Imparte::class, function (Faker $faker) {
    return [
        	'docente_id' => $faker->numberBetween(1,12),
            'materia_id' => $faker->numberBetween(1, 24) ,
    ];
});
