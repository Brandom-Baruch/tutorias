	<?php

use Faker\Generator as Faker;
use App\Puesto;

$factory->define(Puesto::class, function (Faker $faker) {
    return [
       'puesto' => $faker->unique(true)->randomElement($array = array('Profesor','Tutor de grupo' , 'Director')),
       'descripcion' => $faker->text($maxNbChars = 20),
    ];
});
