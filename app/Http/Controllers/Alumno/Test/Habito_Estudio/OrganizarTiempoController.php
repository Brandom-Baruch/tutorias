<?php

namespace App\Http\Controllers\Alumno\Test\Habito_Estudio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Organizacion_Tiempo;

class OrganizarTiempoController extends Controller
{
    public function create()
    {
    	//dd(auth()->user()->test->test_habito_estudio->id);
    	return view('alumno.test.habitos_estudio.organizacion_tiempo');
    }

    public function store(Request $request)
    {
    	$organizacion_tiempo = new Organizacion_Tiempo;
    	$organizacion_tiempo->habito_id = auth()->user()->test->test_habito_estudio->id;            
        $organizacion_tiempo->respuesta1 = $request->input('respuesta1');
        $organizacion_tiempo->respuesta2 = $request->input('respuesta2');
        $organizacion_tiempo->respuesta3 = $request->input('respuesta3');
        $organizacion_tiempo->respuesta4 = $request->input('respuesta4');
        $organizacion_tiempo->respuesta5 = $request->input('respuesta5');
        $organizacion_tiempo->save();
        $mensaje = 'Has realizado el test "Organización del Tiempo" exitosamente';
        return redirect('/alumno/test/habitos_estudio')->with(compact('mensaje'));
    }
}
