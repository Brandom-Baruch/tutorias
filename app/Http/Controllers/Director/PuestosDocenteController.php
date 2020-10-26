<?php

namespace App\Http\Controllers\Director;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Puesto;
use App\Docente;
use App\PuestoAsignado;
class PuestosDocenteController extends Controller
{
    public function index()
    {
    	$puestos = Puesto::all();
    	return view('director.docente.puestos.puesto_index')->with(compact('puestos'));
    }

    public function create()
    {
    	return view('director.docente.puestos.puesto_create');
    }

    public function store(Request $request)
    {
    	$rules = [
    		'puesto' => 'required|unique:puestos',
    		'descripcion' => 'required',
    	];

    	$message = [
    		'puesto.required' => 'Debes agregar un nombre para el puesto',
    		'puesto.unique' => 'Este puesto ya ha sido agregada',
    		'descripcion.required' => 'Debes de agregar una descripción para el puesto'
    	];

    	$this->validate($request,$rules,$message);
    	//dd($request->all());    	
    	$puesto = new Puesto;

    

    	$puesto->puesto = $request->input('puesto');
    	$puesto->descripcion = $request->input('descripcion');
    	$puesto->save();
    	$mensaje = 'Se ha creado un nuevo puesto exitosamente';
    	return redirect('/director/puestos/index')->with(compact('mensaje'));
    }

    public function edit($id)
    {
    	$puesto = Puesto::find($id);
    	return view('director.docente.puestos.puesto_edit')->with(compact('puesto'));
    }

    public function update(Request $request , $id)
    {
    	$rules = [
    		'puesto' => 'required',
    		'descripcion' => 'required',
    	];

    	$message = [
    		'puesto.required' => 'Debes agregar un nombre para el puesto',
    		'descripcion.required' => 'Debes de agregar una descripción para el puesto'
    	];

    	$this->validate($request,$rules,$message);
    	//dd($request->all());
    	$puesto = Puesto::find($id);

    	$puesto->puesto = $request->input('puesto');
    	$puesto->descripcion = $request->input('descripcion');
    	$puesto->save();
    	$mensaje = 'Se ha actualizado el puesto '.$puesto->puesto.' exitosamente';
    	return redirect('/director/puestos/index')->with(compact('mensaje'));
    }

    public function destroy($id)
    {
    	$puesto = Puesto::find($id);

    	$puesto->delete();

    	$eliminado = 'Se ha eliminado el puesto ' .$puesto->puesto;
    	return back()->with(compact('eliminado'));
    }

    public function show($id)
    {
        $puesto = Puesto::find($id);
        $docentes = Docente::all();
        return view('director.docente.puestos.puesto_show')->with(compact('puesto','docentes'));
    }

    public function agregarPuesto(Request $request, $id)
    {
        $puesto = Puesto::find($id);
        $puesto_asignado = new PuestoAsignado;
        $puesto_asignado->docente_id = $request->input('docente_id');
        $puesto_asignado->puesto_id = $puesto->id;
        $puesto_asignado->save();
        $mensaje = 'Se ha  asignado un puesto exitosamente ';
        return back()->with(compact('mensaje'));
    }

    public function eliminarPuesto($puesto_id , $docente_id)
    {
        $puesto = Puesto::find($puesto_id);
        $docente = Docente::find($docente_id);
        $puesto->docentes()->detach($docente_id);        
        $mensaje = 'Se ha eliminado al docente '.$docente->name.' exitosamente';
        return back()->with(compact('mensaje'));
    }
}
