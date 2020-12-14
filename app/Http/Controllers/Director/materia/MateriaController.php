<?php

namespace App\Http\Controllers\Director\materia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Materia;

class MateriaController extends Controller
{   
    public function index (Request $request)
    {
        $request->user()->autorizarPuestos('Director'); 
        $materias = Materia::paginate(10);
        return view('director.materia.materia_index')->with(compact('materias'));
    }


    public function create(Request $request)
    {
        $request->user()->autorizarPuestos('Director'); 
    	return view('director.materia.materia_create');
    }

    public function store(Request  $request)
    {
    	$rules = [
    		'name' => 'required',  
            'descripcion' => 'required', 
            'clave' => 'required|unique:materias', 
    	];

    	$message = [
    		'name.required' => 'Debes de colocar un nombre para la materia',    		
    		'descripcion.required' => 'Debes de colocar una descripción',
    		'clave.required' => 'Debes de colocar una clave para la materia',
    		'clave.unique' => 'Esta clave ya esta en uso en una materia',
    	];
    	
    	$this->validate($request , $rules , $message);
    	//dd($request->all());
    	$materia = new Materia;
    	$materia->name = $request->input('name');
    	$materia->descripcion = $request->input('descripcion');
    	$materia->clave = $request->input('clave');
    	$materia->save();
    	$mensaje = 'Se ha agregado la materia ' .$materia->name . ' exitosamente.';
    	return redirect('director/materias/index')->with(compact('mensaje'));
    }

    public function edit(Request $request,$id)
    {	
        $request->user()->autorizarPuestos('Director'); 
    	$materia = Materia::find($id);
    	return view ('director.materia.materia_edit')->with(compact('materia'));
    }

    public function update(Request $request, $id)
    {
    	$rules = [
    		'name' => 'required',  
            'descripcion' => 'required', 
            'clave' => 'required', 
    	];

    	$message = [
    		'name.required' => 'Debes de colocar un nombre para la materia',    		
    		'descripcion.required' => 'Debes de colocar una descripción',
    		'clave.required' => 'Debes de colocar una clave para la materia',    		
    	];

    	$this->validate($request , $rules , $message);
    	$materia = Materia::find($id);
    	$materia->name = $request->input('name');
    	$materia->descripcion = $request->input('descripcion');
    	$materia->clave = $request->input('clave');
    	$materia->save();
    	$mensaje = 'Se ha editado la materia ' .$materia->name . 'exitosamente.';
    	return redirect('director/materias/index')->with(compact('mensaje'));
    }

    public function destroy ($id)
    {
    	$materia = Materia::find($id);
    	$materia->delete();
    	$eliminado = 'Se ha eliminado la materia ' .$materia->name;
    	return back()->with(compact('eliminado'));
    }
    
}
    