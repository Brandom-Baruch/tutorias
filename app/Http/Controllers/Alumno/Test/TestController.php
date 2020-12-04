<?php

namespace App\Http\Controllers\Alumno\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Test;
use Carbon\Carbon;

class TestController extends Controller
{
    public function index()
    {        
    	return view('alumno.test.test_index');        
    }

    public function store()
    {
    	$test = new Test;

    	$test->fecha_aplicacion = null;
        $test->descripcion = 'Inicio Test';
        $test->alumno_id = auth()->user()->nia;
        $test->save();
        $mensaje = 'Por favor realiza las siguientes secciones del test';
        return redirect('alumno/test')->with(compact('mensaje'));
    }

    public function update()
    {
        $test = Test::where('alumno_id',auth()->user()->nia)->first();
        $test->fecha_aplicacion = Carbon::now();
        $test->descripcion = 'Finalizo Test';
        $test->save();
        $mensaje = 'Has Finalizado el Test de manera exitosa. Muchas gracias';
        return redirect('/alumno/encuestas')->with(compact('mensaje'));
    }
}
