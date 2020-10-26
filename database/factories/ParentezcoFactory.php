<?php

use Faker\Generator as Faker;
use App\Parentezco;

$factory->define(Parentezco::class, function (Faker $faker) {
    return [
		'alumno_id' => $faker->randomNumber,
        'padre_id' => $faker->numberBetween(1, 10),
        'parentezco' => $faker->unique(true)->randomElement($array = array('Padre e hijo','Padre e hija' ,'Madre e hijo', 'Madre e hija','Tio y sobrino', 'Tio y sobrina', 'Tia y sobrina' , 'Tia y sobrino', 'Abuelo y nieto', 'Abuelo y nieta', 'Abuela y nieto', 'Abuela y nieta')),
    ];
});
