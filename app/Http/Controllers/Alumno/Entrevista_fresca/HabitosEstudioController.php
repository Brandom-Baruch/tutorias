<?php

namespace App\Http\Controllers\Alumno\Entrevista_fresca;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HabitosEstudio;

class HabitosEstudioController extends Controller
{
	public function create()
	{		
		return view('alumno.entrevista_fresca.habitos_estudio');
	}

	public function store(Request $request)
	{
		$habitos = new HabitosEstudio;

		$habitos->entrevista_id = auth()->user()->entrevista_fresca->id;		
		$habitos->respuesta1 = $request->input('respuesta1');           
		$habitos->respuesta2 = $request->input('respuesta2');
		$habitos->respuesta3 = $request->input('respuesta3');            
		$habitos->respuesta4 = $request->input('respuesta4');
		$habitos->respuesta5 = $request->input('respuesta5');
		$habitos->r5 = $request->input('r5');
		$habitos->respuesta6 = $request->input('respuesta6');
		$habitos->r6 = $request->input('r6');
		$habitos->respuesta7 = $request->input('respuesta7'); 
		$habitos->r7 = $request->input('r7');
		$habitos->respuesta8 = $request->input('respuesta8');
		$habitos->r8 = $request->input('r8');		
		$habitos->r9_1 = $request->input('r9_1');
		$habitos->r9_2 = $request->input('r9_2');
		$habitos->r9_3 = $request->input('r9_3');
		$habitos->r9_4 = $request->input('r9_4');
		$habitos->r9_5 = $request->input('r9_5');
		$habitos->r9_6 = $request->input('r9_6');
		$habitos->r9_7 = $request->input('r9_7');
		$habitos->save();
		$mensaje = 'Has finalizado los Habitos de estudio';
        return redirect('/alumno/entrevista')->with(compact('mensaje'));
	}
}
