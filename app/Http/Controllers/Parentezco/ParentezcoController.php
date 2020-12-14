<?php

namespace App\Http\Controllers\Parentezco;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Alumno;
use App\Padre_familia as padre;
use App\Parentezco;

class ParentezcoController extends Controller
{

	public function alumno_create()
	{
		$padres = padre::all();
		return view('alumno.alumno_parentezco')->with(compact('padres'));
	}


	public function alumno_store(Request $request, $nia)
	{

		$rules = [
			'parentezco' => 'required',            
		];

		$message = [
			'parentezco.required' => 'Debes de escribir el parentezco que tienen',            
		];

		$this->validate($request, $rules , $message);

		$alumno = Alumno::find($nia);
		$parentezco = new Parentezco;
		$parentezco->parentezco = $request->input('parentezco');
		$parentezco->alumno_id = $alumno->nia;
		$parentezco->padre_id = $request->input('padre_id');
		$parentezco->save();
		$mensaje = 'Se ha agregado el familiar. ¿Quieres agregar otro familiar?';
		return back()->with(compact('mensaje'));
	}

	public function alumno_destroy($nia, $padre_id)
	{
		$alumno = Alumno::find($nia);
		$padre = padre::find($padre_id);
		$alumno->padres()->detach($padre->id);
		$eliminado = 'Se ha quitado el familiar exitosamente';
		return back()->with(compact('eliminado'));
	}



	public function padre_create()
	{
		$alumnos = Alumno::orderBy('grupo_id')->get();
		return view('padre_familia.padre_parentezco')->with(compact('alumnos'));
	}


	public function padre_store(Request $request, $id)
	{

		$rules = [
			'parentezco' => 'required',            
		];

		$message = [
			'parentezco.required' => 'Debes de escribir el parentezco que tienen',            
		];

		$this->validate($request, $rules , $message);

		$padre = padre::find($id);
		$parentezco = new Parentezco;
		$parentezco->parentezco = $request->input('parentezco');
		$parentezco->alumno_id = $request->input('alumno_id');
		$parentezco->padre_id = $padre->id;
		$parentezco->save();
		$mensaje = 'Se ha agregado el familiar. ¿Quieres agregar otro familiar?';
		return back()->with(compact('mensaje'));
	}

	public function padre_destroy($padre_id, $alumno_id)
	{
		$alumno = Alumno::find($alumno_id);
        $padre = padre::find($padre_id);
        $padre->alumnos()->detach($alumno->nia);        
        $eliminado = 'Se ha quitado el alumno '. $alumno->name .' exitosamente ';
        return back()->with(compact('eliminado'));

	}
}
