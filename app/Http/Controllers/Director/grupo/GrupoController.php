<?php

namespace App\Http\Controllers\Director\grupo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Grupo;
use App\Materia;
use App\Asignada;

class GrupoController extends Controller
{

    public function index(Request $request)
    {    	
	    $request->user()->autorizarPuestos('Director'); 
        $grupos = Grupo::paginate(10);
	    return view('director.grupo.grupo_index')->with(compact('grupos'));
    }

    public function create(Request $request)
    {
        $request->user()->autorizarPuestos('Director'); 
    	return view('director.grupo.grupo_create');
    }

    public function store(Request $request)
    {
    	$rules = [

    		'name' => 'required',
            'grado' => 'required',
            'grupo' => 'required',
            'semestre' => 'required',
            'year' => 'required|numeric',
    	];

    	$message = [

    		'name.required' => 'Debes de agregar un nombre',
            'grado.required' => 'Debes de agregar un grado',
            'grupo.required' => 'Debes de agregar un grupo',
            'semestre.required' => 'Debes de agregar un semestre',
            'year.required' => 'Debes de agregar un año',
            'year.numeric' => 'Solo se acepta numeros',
    	];

    	$this->validate($request, $rules, $message);

    	$grupo = new Grupo;

    	$grupo->name = $request->input('name');
    	$grupo->grado = $request->input('grado');
    	$grupo->semestre = $request->input('semestre');
    	$grupo->year = $request->input('year');
        $grupo->grupo = $request->input('grupo');
    	$grupo->save();
    	$mensaje = 'Se ha agregado un grupo nuevo. ¿Quieres agregar otro grupo?';
    	return back()->with(compact('mensaje'));

    }

    public function edit(Request $request,$id)
    {
        $grupo = Grupo::find($id);
        return view('director.grupo.grupo_edit')->with(compact('grupo'));
    }

    public function update(Request $request, $id)
    {
        $rules = [

            'name' => 'required',
            'grado' => 'required',
            'grupo' => 'required',
            'semestre' => 'required',
            'year' => 'required|numeric',
        ];

        $message = [

            'name.required' => 'Debes de agregar un nombre',
            'grado.required' => 'Debes de agregar un grado',
            'grupo.required' => 'Debes de agregar un grupo',
            'semestre.required' => 'Debes de agregar un semestre',
            'year.required' => 'Debes de agregar un año',
            'year.numeric' => 'Solo se acepta numeros',
        ];

        $this->validate($request, $rules, $message);

        $grupo = Grupo::find($id);

        $grupo->name = $request->input('name');
        $grupo->grado = $request->input('grado');
        $grupo->semestre = $request->input('semestre');
        $grupo->year = $request->input('year');
        $grupo->grupo = $request->input('grupo');
        $grupo->save();
        $mensaje = 'Se ha actualizado el grupo ' .$grupo->name;
        return redirect('director/grupos/index')->with(compact('mensaje'));
    }

    public function destroy($id)
    {
        $grupo = Grupo::find($id);
        $grupo->delete();
        $eliminado = 'Se ha eliminado el grupo ' .$grupo->name;
        return back()->with(compact('eliminado'));
    }

    public function alumnos_show(Request $request, Grupo $grupo)
    {
        $request->user()->autorizarPuestos('Director'); 
        $alumnos = $grupo->alumnos()->paginate(5);
        return view('director.grupo.grupo_alumno_show')->with(compact('grupo', 'alumnos'));
    }

    public function alumno_destroy($grupo_id, $alumno_id)
    {        
        
        $alumno = Alumno::find($alumno_id);
        $alumno->grupos()->detach($grupo_id);
        $eliminado = 'Se ha quitado el '.$alumno->name.' del grupo exitosamente';
        return back()->with(compact('eliminado'));

    }


    
}
