<?php

namespace App\Http\Controllers\Alumno\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Conociendo_Estilo_Aprendizaje;

class ConociendoEstiloAprendizajeController extends Controller
{
    public function create()
    {
    	return view('alumno.test.conociendo_estilo_aprendizaje');
    }

    public function store(Request $request)
    {
    	$conociendo_estilo_aprendizaje = new Conociendo_Estilo_Aprendizaje;
        $conociendo_estilo_aprendizaje->test_id = auth()->user()->test->id;
		$conociendo_estilo_aprendizaje->respuesta1 = $request->input('respuesta1');
        $conociendo_estilo_aprendizaje->respuesta2 = $request->input('respuesta2');
        $conociendo_estilo_aprendizaje->respuesta3 = $request->input('respuesta3');
        $conociendo_estilo_aprendizaje->respuesta4 = $request->input('respuesta4');
        $conociendo_estilo_aprendizaje->respuesta5 = $request->input('respuesta5');
        $conociendo_estilo_aprendizaje->respuesta6 = $request->input('respuesta6');
        $conociendo_estilo_aprendizaje->respuesta7 = $request->input('respuesta7');
        $conociendo_estilo_aprendizaje->respuesta8 = $request->input('respuesta8');
        $conociendo_estilo_aprendizaje->respuesta9 = $request->input('respuesta9');
        $conociendo_estilo_aprendizaje->respuesta10 = $request->input('respuesta10');
        $conociendo_estilo_aprendizaje->respuesta11 = $request->input('respuesta11');
        $conociendo_estilo_aprendizaje->respuesta12 = $request->input('respuesta12');
        $conociendo_estilo_aprendizaje->respuesta13 = $request->input('respuesta13');
        $conociendo_estilo_aprendizaje->respuesta14 = $request->input('respuesta14');
        $conociendo_estilo_aprendizaje->respuesta15 = $request->input('respuesta15');
        $conociendo_estilo_aprendizaje->respuesta16 = $request->input('respuesta16');
        $conociendo_estilo_aprendizaje->respuesta17 = $request->input('respuesta17');
        $conociendo_estilo_aprendizaje->respuesta18 = $request->input('respuesta18');
        $conociendo_estilo_aprendizaje->respuesta19 = $request->input('respuesta19');
        $conociendo_estilo_aprendizaje->respuesta20 = $request->input('respuesta20');
        $conociendo_estilo_aprendizaje->respuesta21 = $request->input('respuesta21');
        $conociendo_estilo_aprendizaje->respuesta22 = $request->input('respuesta22');
        $conociendo_estilo_aprendizaje->respuesta23 = $request->input('respuesta23');
        $conociendo_estilo_aprendizaje->respuesta24 = $request->input('respuesta24');
        $conociendo_estilo_aprendizaje->respuesta25 = $request->input('respuesta25');
        $conociendo_estilo_aprendizaje->respuesta26 = $request->input('respuesta26');
        $conociendo_estilo_aprendizaje->respuesta27 = $request->input('respuesta27');
        $conociendo_estilo_aprendizaje->respuesta28 = $request->input('respuesta28');
        $conociendo_estilo_aprendizaje->respuesta29 = $request->input('respuesta29');
        $conociendo_estilo_aprendizaje->respuesta30 = $request->input('respuesta30');
        $conociendo_estilo_aprendizaje->respuesta31 = $request->input('respuesta31');
        $conociendo_estilo_aprendizaje->respuesta32 = $request->input('respuesta32');
        $conociendo_estilo_aprendizaje->respuesta33 = $request->input('respuesta33');
        $conociendo_estilo_aprendizaje->respuesta34 = $request->input('respuesta34');
        $conociendo_estilo_aprendizaje->respuesta35 = $request->input('respuesta35');
        $conociendo_estilo_aprendizaje->respuesta36 = $request->input('respuesta36');
        $conociendo_estilo_aprendizaje->save();
        $mensaje = 'Has realizado el test "Conociendo los estilos de aprendizaje de los tutorados" exitosamente';
        return redirect('/alumno/test')->with(compact('mensaje'));
    }
}
