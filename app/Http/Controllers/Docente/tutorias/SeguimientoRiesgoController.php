<?php

namespace App\Http\Controllers\Docente\Tutorias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Seguimiento_Alumno_Riesgo;
use App\Docente;
use App\Materia;
use App\Alumno;

class SeguimientoRiesgoController extends Controller
{
    public function index()
    {
        $seguimientos = Seguimiento_Alumno_Riesgo::where('tutor_id',auth()->user()->id)->get();
        //dd($seguimientos);
    	return view('docente.tutorias.seguimiento_riesgo.seguimiento_riesgo_index')->with(compact('seguimientos'));
    }

    public function create()
    {
    	$docentes = Docente::all();
    	$materias = Materia::all();
        $alumnos = Alumno::all();
        //$tutorias = Materia::where('name','like','%Tutorias%')->get();
        //dd($tutorias->docentes->name);
    	return view('docente.tutorias.seguimiento_riesgo.seguimiento_riesgo_create')
                ->with(compact('docentes','materias','alumnos'));
    }

    public function store(Request $request)
    {

        $rules = [

            'fecha' => 'required',
            'promedio_acumulado' => 'required',
            'promedio_acumulado_ciclo_actual' => 'required',
            'beneficiario_beca_apoyo' => 'required',
            'estado_salud_alumno' => 'required',
            'contexto_familiar_alumno' => 'required',
            'docente1' => 'required',
            'materia1' => 'required',
            'comentarios1' => 'required',
            'docente2' => 'required',
            'materia2' => 'required',
            'comentarios2' => 'required',
            'docente3' => 'required',
            'materia3' => 'required',
            'desempeño_escolar' => 'required',
            'compromisos_acuerdos' => 'required',
        ];

        $messages = [

            'fecha.required' => 'Debes de agregar una fecha',
            'promedio_acumulado.required' => 'Debes de agregar el promedio acumulado',
            'promedio_acumulado_ciclo_actual.required' => 'Debes de agregar el promedio del ciclo actual',
            'beneficiario_beca_apoyo.required' => 'Debes de agregar si es beneficiario de una beca o apoyo financiero',
            'estado_salud_alumno.required' => 'Debes de agregar si cuentan con la información del estado de salud del alumno',
            'contexto_familiar_alumno.required' => 'Debes de agregar si cuentan con la información del contexto familiar del alumno',
            'docente1.required' => 'Debes de agregar el primer docente',
            'materia1.required' => 'Debes de agregar la primera materia',
            'comentarios1.required' => 'Debes de agregar el primer comentario',
            'docente2.required' => 'Debes de agregar el segundo docente',
            'materia2.required' => 'Debes de agregar la segunda materia',
            'comentarios2.required' => 'Debes de agregar el segundo comentario',
            'docente3.required' => 'Debes de agregar el tercer docente',
            'materia3.required' => 'Debes de agregar la tercera materia',
            'comentarios3.required' => 'Debes de agregar el tercer comentario',
            'desempeño_escolar.required' => 'Debes de agregar ',
            'compromisos_acuerdos.required' => 'Debes de agregar',

        ];

        $this->validate($request,$rules,$messages);

        //dd($request->all());
        $seguimiento_riesgo = new Seguimiento_Alumno_Riesgo;
        $seguimiento_riesgo->tutor_id = auth()->user()->id;
        $seguimiento_riesgo->alumno_id = $request->input('alumno_id');
        $seguimiento_riesgo->fecha = $request->input('fecha'); 
        $seguimiento_riesgo->promedio_acumulado = $request->input('promedio_acumulado');
        $seguimiento_riesgo->promedio_acumulado_ciclo_actual = $request->input('promedio_acumulado_ciclo_actual');
        $seguimiento_riesgo->beneficiario_beca_apoyo = $request->input('beneficiario_beca_apoyo');
        $seguimiento_riesgo->estado_salud_alumno = $request->input('estado_salud_alumno');
        $seguimiento_riesgo->contexto_familiar_alumno = $request->input('contexto_familiar_alumno');
        $seguimiento_riesgo->docente1 = $request->input('docente1');
        $seguimiento_riesgo->materia1 = $request->input('materia1');
        $seguimiento_riesgo->comentarios1 = $request->input('comentarios1');
        $seguimiento_riesgo->docente2 = $request->input('docente2');
        $seguimiento_riesgo->materia2 = $request->input('materia2');
        $seguimiento_riesgo->comentarios2 = $request->input('comentarios2');
        $seguimiento_riesgo->docente3 = $request->input('docente3');
        $seguimiento_riesgo->materia3 = $request->input('materia3');
        $seguimiento_riesgo->comentarios3 = $request->input('comentarios3');
        $seguimiento_riesgo->docente4 = $request->input('docente4');
        $seguimiento_riesgo->materia4 = $request->input('materia4');
        $seguimiento_riesgo->comentarios4 = $request->input('comentarios4');
        $seguimiento_riesgo->docente5 = $request->input('docente5');
        $seguimiento_riesgo->materia5 = $request->input('materia5');
        $seguimiento_riesgo->comentarios5 = $request->input('comentarios5');
        $seguimiento_riesgo->docente6 = $request->input('docente6');
        $seguimiento_riesgo->materia6 = $request->input('materia6');
        $seguimiento_riesgo->comentarios6 = $request->input('comentarios6');
        $seguimiento_riesgo->docente7 = $request->input('docente7');
        $seguimiento_riesgo->materia7 = $request->input('materia7');
        $seguimiento_riesgo->comentarios7 = $request->input('comentarios7');
        $seguimiento_riesgo->desempeño_escolar = $request->input('desempeño_escolar');
        $seguimiento_riesgo->compromisos_acuerdos = $request->input('compromisos_acuerdos');
        $seguimiento_riesgo->save();
        $mensaje = 'Se ha registrado exitosamente';
        return redirect('/docente/tutorias/seguimientos_alumno_riesgo')->with(compact('mensaje'));  
    }

    public function edit($seguimiento_id)
    {
        $seguimiento = Seguimiento_Alumno_Riesgo::find($seguimiento_id);
        $docentes = Docente::all();
        $materias = Materia::all();
        $alumnos = Alumno::all();
        return view('docente.tutorias.seguimiento_riesgo.seguimiento_riesgo_edit')
                ->with(compact('seguimiento','docentes','materias','alumnos'));
    }

    public function update(Request $request, $seguimiento_id)
    {
        $rules = [

            'fecha' => 'required',
            'promedio_acumulado' => 'required',
            'promedio_acumulado_ciclo_actual' => 'required',
            'beneficiario_beca_apoyo' => 'required',
            'estado_salud_alumno' => 'required',
            'contexto_familiar_alumno' => 'required',
            'docente1' => 'required',
            'materia1' => 'required',
            'comentarios1' => 'required',
            'docente2' => 'required',
            'materia2' => 'required',
            'comentarios2' => 'required',
            'docente3' => 'required',
            'materia3' => 'required',
            'desempeño_escolar' => 'required',
            'compromisos_acuerdos' => 'required',
        ];

        $messages = [

            'fecha.required' => 'Debes de agregar una fecha',
            'promedio_acumulado.required' => 'Debes de agregar el promedio acumulado',
            'promedio_acumulado_ciclo_actual.required' => 'Debes de agregar el promedio del ciclo actual',
            'beneficiario_beca_apoyo.required' => 'Debes de agregar si es beneficiario de una beca o apoyo financiero',
            'estado_salud_alumno.required' => 'Debes de agregar si cuentan con la información del estado de salud del alumno',
            'contexto_familiar_alumno.required' => 'Debes de agregar si cuentan con la información del contexto familiar del alumno',
            'docente1.required' => 'Debes de agregar el primer docente',
            'materia1.required' => 'Debes de agregar la primera materia',
            'comentarios1.required' => 'Debes de agregar el primer comentario',
            'docente2.required' => 'Debes de agregar el segundo docente',
            'materia2.required' => 'Debes de agregar la segunda materia',
            'comentarios2.required' => 'Debes de agregar el segundo comentario',
            'docente3.required' => 'Debes de agregar el tercer docente',
            'materia3.required' => 'Debes de agregar la tercera materia',
            'comentarios3.required' => 'Debes de agregar el tercer comentario',
            'desempeño_escolar.required' => 'Debes de agregar ',
            'compromisos_acuerdos.required' => 'Debes de agregar',

        ];

        $this->validate($request,$rules,$messages);

        $seguimiento = Seguimiento_Alumno_Riesgo::find($seguimiento_id);
        $seguimiento->tutor_id = auth()->user()->id;
        $seguimiento->alumno_id = $request->input('alumno_id');
        $seguimiento->fecha = $request->input('fecha'); 
        $seguimiento->promedio_acumulado = $request->input('promedio_acumulado');
        $seguimiento->promedio_acumulado_ciclo_actual = $request->input('promedio_acumulado_ciclo_actual');
        $seguimiento->beneficiario_beca_apoyo = $request->input('beneficiario_beca_apoyo');
        $seguimiento->estado_salud_alumno = $request->input('estado_salud_alumno');
        $seguimiento->contexto_familiar_alumno = $request->input('contexto_familiar_alumno');
        $seguimiento->docente1 = $request->input('docente1');
        $seguimiento->materia1 = $request->input('materia1');
        $seguimiento->comentarios1 = $request->input('comentarios1');
        $seguimiento->docente2 = $request->input('docente2');
        $seguimiento->materia2 = $request->input('materia2');
        $seguimiento->comentarios2 = $request->input('comentarios2');
        $seguimiento->docente3 = $request->input('docente3');
        $seguimiento->materia3 = $request->input('materia3');
        $seguimiento->comentarios3 = $request->input('comentarios3');
        $seguimiento->docente4 = $request->input('docente4');
        $seguimiento->materia4 = $request->input('materia4');
        $seguimiento->comentarios4 = $request->input('comentarios4');
        $seguimiento->docente5 = $request->input('docente5');
        $seguimiento->materia5 = $request->input('materia5');
        $seguimiento->comentarios5 = $request->input('comentarios5');
        $seguimiento->docente6 = $request->input('docente6');
        $seguimiento->materia6 = $request->input('materia6');
        $seguimiento->comentarios6 = $request->input('comentarios6');
        $seguimiento->docente7 = $request->input('docente7');
        $seguimiento->materia7 = $request->input('materia7');
        $seguimiento->comentarios7 = $request->input('comentarios7');
        $seguimiento->desempeño_escolar = $request->input('desempeño_escolar');
        $seguimiento->compromisos_acuerdos = $request->input('compromisos_acuerdos');
        $seguimiento->save();
        $mensaje = 'Se ha editado el reporte del alumno '.$seguimiento->alumnos[0]->name.' exitosamente';
        return redirect('/docente/tutorias/seguimientos_alumno_riesgo')->with(compact('mensaje'));  
    }

    public function destroy ($seguimiento_id)
    {
        $seguimiento = Seguimiento_Alumno_Riesgo::find($seguimiento_id);
        $seguimiento->delete();
        $eliminado = 'Se ha eliminado el reporte del alumno ' .$seguimiento->alumnos[0]->name. ' exitosamente';
        return back()->with(compact('eliminado'));
    }
}
