<?php

use Illuminate\Database\Seeder;
use App\Alumno;
use App\Grupo;

class AlumnoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//factory(Alumno::class, 20)->create();

      $grupos = factory(Grupo::class, 5)->create();

        $grupos->each(function ($grupo)
        {
        	$alumnos = factory(Alumno::class,10)->make();
        	$grupo->alumnos()->saveMany($alumnos);

            $materias = factory(App\Materia::class,10)->make();
            $grupo->materias()->saveMany($materias);
        });
       

	  /*	factory(Alumno::class, 10)->create()->each(function ($u) {
	        $u->grupo()->saveMany(factory(Grupo::class,5)->make());
	    });*/
    }
}
