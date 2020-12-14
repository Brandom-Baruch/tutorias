<?php

namespace App\Http\Controllers\Docente\Tutorias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Control_Asistencia;
use App\Alumno;
use App\Grupo;

class ControlAsistenciaController extends Controller
{
    public function index()
    {    	    	
    	$asistencias = auth()->user()->control_asistencias;
        //dd($asistencias);
    	return view('docente.tutorias.control_asistencia.control_asistencia_index')->with(compact('asistencias'));
    }

    public function create()
    {
    	$grupos = Grupo::all();
        $alumnos = Alumno::all();
    	return view('docente.tutorias.control_asistencia.control_asistencia_create')->with(compact('grupos','alumnos'));
    }


    public function store(Request $request)
    {

    	$rules = [
    		'fecha' => 'required',
			'atencion_oportuna' => 'required',
			'atencion_seguimiento' => 'required',
			'caso_situacion_atendida' => 'required',
			'solucion' => 'required',
			'indicaciones_posteriores' => 'required',			
    	];

    	$messages = [
    		'fecha.required' => 'Debes de agregar una fecha',
			'atencion_oportuna.required' => 'Debes de agregar la atención oportuna',
			'atencion_seguimiento.required' => 'Debes de agregar la atención de seguimiento',
			'caso_situacion_atendida.required' => 'Debes de agregar el caso o situación atendida',
			'solucion.required' => 'Debes de agregar una solución',
			'indicaciones_posteriores.required' => 'Debes de agregar las indicaciones posteriores',			
    	];

    	$this->validate($request,$rules,$messages);
        //dd($request->all());
    	$control_asistencia = new Control_Asistencia;
    	//grupo
	 	$control_asistencia->tutor_id = auth()->user()->id;            
        $control_asistencia->fecha = $request->input('fecha');
        $control_asistencia->alumno_nia = $request->input('alumno_id');
        $control_asistencia->atencion_oportuna = $request->input('atencion_oportuna');
        $control_asistencia->atencion_seguimiento = $request->input('atencion_seguimiento');
        $control_asistencia->caso_situacion_atendida = $request->input('caso_situacion_atendida');
        $control_asistencia->solucion = $request->input('solucion');
        $control_asistencia->indicaciones_posteriores = $request->input('indicaciones_posteriores');
        $control_asistencia->save();
        $mensaje = 'Has registrado una asistencia existosamente';
        return redirect('/docente/tutorias/asistencia')->with(compact('mensaje'));
    }

    public function edit($asistencia_id)
    {
    	$asistencia = Control_Asistencia::find($asistencia_id);
    	$grupos = Grupo::all();
    	return view('docente.tutorias.control_asistencia.control_asistencia_edit')->with(compact('asistencia','grupos'));
    }

    public function update(Request $request, $asistencia_id)
    {
    	$rules = [
    		'fecha' => 'required',
			'alumno_name' => 'required',
			'atencion_oportuna' => 'required',
			'atencion_seguimiento' => 'required',
			'caso_situacion_atendida' => 'required',
			'solucion' => 'required',
			'indicaciones_posteriores' => 'required',			
    	];

    	$messages = [
    		'fecha.required' => 'Debes de agregar una fecha',
			'alumno_name.required' => 'Debes de agregar el nombre del alumno',
			'atencion_oportuna.required' => 'Debes de agregar la atención oportuna',
			'atencion_seguimiento.required' => 'Debes de agregar la atención de seguimiento',
			'caso_situacion_atendida.required' => 'Debes de agregar el caso o situación atendida',
			'solucion.required' => 'Debes de agregar una solución',
			'indicaciones_posteriores.required' => 'Debes de agregar las indicaciones posteriores',			
    	];

    	$this->validate($request,$rules,$messages);

    	$control_asistencia = Control_Asistencia::find($asistencia_id);
    	$control_asistencia->tutor_id = auth()->user()->id;            
        $control_asistencia->fecha = $request->input('fecha');
        $control_asistencia->grupo_id = $request->input('grupo_id');
        $control_asistencia->alumno_name = $request->input('alumno_name');
        $control_asistencia->atencion_oportuna = $request->input('atencion_oportuna');
        $control_asistencia->atencion_seguimiento = $request->input('atencion_seguimiento');
        $control_asistencia->caso_situacion_atendida = $request->input('caso_situacion_atendida');
        $control_asistencia->solucion = $request->input('solucion');
        $control_asistencia->indicaciones_posteriores = $request->input('indicaciones_posteriores');
        $control_asistencia->save();
        $mensaje = 'Has actualizado la asistencia de '.$control_asistencia->alumno_name.' existosamente';
        return redirect('/docente/tutorias/asistencia')->with(compact('mensaje'));
    }

    public function destroy($asistencia_id)
    {
    	$asistencia = Control_Asistencia::find($asistencia_id);
    	$asistencia->delete();
    	$eliminado = 'Se ha eliminado la asistencia de '.$asistencia->alumno_name.' exitosamente';
    	return back()->with(compact('eliminado'));
    }
}
