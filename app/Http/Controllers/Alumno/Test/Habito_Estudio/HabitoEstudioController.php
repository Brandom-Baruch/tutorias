<?php

namespace App\Http\Controllers\Alumno\Test\Habito_Estudio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Test_Habito_Estudio;
use Carbon\Carbon;

class HabitoEstudioController extends Controller
{
    public function index()
    {        
    	return view('alumno.test.habitos_estudio.habitos_estudio_index');
    }

    public function store(Request $request)
    {
    	$habito_estudio = new Test_Habito_Estudio;
    	$habito_estudio->fecha_aplicacion = null;
        $habito_estudio->descripcion = 'Inicio habito de estudio';
        $habito_estudio->test_id = auth()->user()->test->id;
        $habito_estudio->save();
        $mensaje = 'Por favor realiza las siguientes secciones';
        return redirect('alumno/test/habitos_estudio')->with(compact('mensaje'));
    }

    public function update(Request $request)
    {        
        $habito_estudio = Test_Habito_Estudio::where('test_id', auth()->user()->test->id)->first();
        $habito_estudio->fecha_aplicacion = Carbon::now();
        $habito_estudio->descripcion = 'Finalizo habito de estudio';        
        $habito_estudio->save();
        $mensaje = 'Has finalizado la seccion de "Habitos de estudio" exitosamente';
        return redirect('/alumno/test')->with(compact('mensaje'));
    }
}
