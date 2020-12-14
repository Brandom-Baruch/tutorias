<?php

namespace App\Http\Controllers\Padre_familia\Entrevista_fresca;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Alumno;
use App\MarcaSiNo;
use App\Entrevista_Fresca_Padre;

class MarcaSiNoController extends Controller
{
	public function create($alumno_id)
	{
		$alumno = Alumno::find($alumno_id);
		return view('padre_familia.entrevista_fresca.marca_si_no')->with(compact('alumno'));
	} 

	public function store(Request $request, $alumno_id)
	{

		$rules = [
			'respuesta19' => 'required',
			'respuesta20' => 'required'
		];

		$message = [
			'respuesta19.required' => 'Debes de agregar una descripción breve de su hijo',
			'respuesta20.required' => 'Debes de escribir con que persona se lleva mejor su hijo',
		];
		
		$this->validate($request,$rules,$message);

		$alumno_id = Alumno::find($alumno_id);
		$entrevista_id = Entrevista_Fresca_Padre::where('alumno_id',$alumno_id->nia)->first();
		$marca_si_no = new MarcaSiNo;		
		$marca_si_no->entrevista_id = $entrevista_id->id;
		$marca_si_no->respuesta1 = $request->input('respuesta1');
		$marca_si_no->respuesta2 = $request->input('respuesta2');
		$marca_si_no->respuesta3 = $request->input('respuesta3');
		$marca_si_no->respuesta4 = $request->input('respuesta4');
		$marca_si_no->respuesta5 = $request->input('respuesta5');
		$marca_si_no->respuesta6 = $request->input('respuesta6');
		$marca_si_no->respuesta7 = $request->input('respuesta7');
		$marca_si_no->respuesta8 = $request->input('respuesta8');
		$marca_si_no->respuesta9 = $request->input('respuesta9');
		$marca_si_no->respuesta10 = $request->input('respuesta10');
		$marca_si_no->respuesta11 = $request->input('respuesta11');
		$marca_si_no->respuesta12 = $request->input('respuesta12');
		$marca_si_no->respuesta13 = $request->input('respuesta13');
		$marca_si_no->respuesta14 = $request->input('respuesta14');
		$marca_si_no->respuesta15 = $request->input('respuesta15');
		$marca_si_no->respuesta16 = $request->input('respuesta16');
		$marca_si_no->respuesta17 = $request->input('respuesta17');
		$marca_si_no->respuesta18 = $request->input('respuesta18');
		$marca_si_no->respuesta19 = $request->input('respuesta19');
		$marca_si_no->respuesta20 = $request->input('respuesta20');
		$marca_si_no->save();
		$mensaje = 'Has realizado la encuesta de "Caracteristicas y Cualidades que tiene o no tu hijo"';
		return redirect('/padre_familia/entrevista/'.auth()->user()->entrevista->alumno_id.'/secciones')->with(compact('mensaje'));
	}   
}
