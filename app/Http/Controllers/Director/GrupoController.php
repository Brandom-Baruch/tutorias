<?php

namespace App\Http\Controllers\Director;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Grupo;

class GrupoController extends Controller
{

    public function index()
    {    	
	    $grupos = Grupo::paginate(10);
	    return view('director.grupo.grupo_index')->with(compact('grupos'));
    }

    public function create()
    {
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

    public function edit($id)
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
        $mensaje = 'Se ha actualizado el grupo';
        return redirect('director/grupos/index')->with(compact('mensaje'));
    }

    public function destroy($id)
    {
        $grupo = Grupo::find($id);
        $grupo->delete();
        $eliminado = 'Se ha eliminado el grupo ' .$grupo->name;
        return back()->with(compact('eliminado'));
    }

    public function alumnos_show(Grupo $grupo)
    {
        $alumnos = $grupo->alumnos()->paginate(5);
        return view('director.grupo.grupo_alumno_show')->with(compact('grupo', 'alumnos'));
    }

    public function materias_show(Grupo $grupo)
    {
        $materias = $grupo->materias()->paginate(5);
        return view('director.grupo.grupo_materia_show')->with(compact('grupo', 'materias'));
    }
}
