<?php

namespace App\Http\Controllers\Docente\Tutorias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reporte_Tutorias;

class ReporteTutoriasController extends Controller
{
    public function index()
    {	
    	$docente_materia = auth()->user()->materias()->where('name','like','%Tutorias%')->first(); //Relacion entre docente/materia
        $materia_grupo = $docente_materia->grupos()->where('materia_id',$docente_materia->id)->first(); //R entre materia/grupo
        
        $reportes = auth()->user()->reporte_tutorias;

    	return view('docente.tutorias.reporte_tutorias.reporte_tutorias_index')->with(compact('materia_grupo','reportes'));
    }

    public function create()
    {        
        $reporte = auth()->user()->reporte_tutorias;
    	return view('docente.tutorias.reporte_tutorias.reporte_tutorias_create')->with(compact('reporte'));
    }

    public function store(Request $request)
    {
        $rules = [
            'ciclo_escolar' => 'required',
            'fecha' => 'required',
            'director_name' => 'required',
            'tutor_escolar_name' => 'required',
            'orientador_name' => 'required',
            'total_hombres' => 'required',
            'total_mujeres' => 'required',
            'bajas_registradas' => 'required',
            'altas_registradas' => 'required',
            'principales_motivos_baja' => 'required',
            'alumnos_mas_de_tres_materia_reprobada' => 'required',
            'alumnos_necesitan_seguimiento' => 'required',
            'alumnos_requieren_orientacion' => 'required',
            'alumnos_requieren_atencion_especial' => 'required',
            'alumnos_canalizados_alguna_institucion' => 'required',
        ];

        $messages = [

            'ciclo_escolar.required' => 'Debes de agregar el ciclo escolar',
            'fecha.required' => 'Debes de agregar la fecha',
            'director_name.required' => 'Debes de agregar el nombre del director',
            'tutor_escolar_name.required' => 'Debes de agregar el nombre del tutor escolar',
            'orientador_name.required' => 'Debes de agregar el nombre del orientador',
            'total_hombres.required' => 'Debes de agregar el total de hombre',
            'total_mujeres.required' => 'Debes de agregar el total de mujeres',
            'bajas_registradas.required' => 'Debes de agregar el total de bajas registradas',
            'altas_registradas.required' => 'Debes de agregar el total de altas registradas',
            'principales_motivos_baja.required' => 'Debes de agregar el motivo de las bajas',
            'alumnos_mas_de_tres_materia_reprobada.required' => 'Debes de agregar el total de alumnos que tienen 3 materias reprobadas',
            'alumnos_necesitan_seguimiento.required' => 'Debes de agregar el total de alumnos que necesitan seguimiento',
            'alumnos_requieren_orientacion.required' => 'Debes de agregar el total de alumnos que requieran orientación',
            'alumnos_requieren_atencion_especial.required' => 'Debes de agregar el total de alumnos que requieran atención especial',
            'alumnos_canalizados_alguna_institucion.required' => 'Debes de agregar total de alumnos canalizados de alguna institución',
        ];

        $this->validate($request,$rules,$messages);

        $reporte_tutorias = new Reporte_Tutorias;
        $reporte_tutorias->tutor_id = auth()->user()->id;                
        $reporte_tutorias->ciclo_escolar = $request->input('ciclo_escolar');
        $reporte_tutorias->fecha = $request->input('fecha');
        $reporte_tutorias->director_name = $request->input('director_name');
        $reporte_tutorias->tutor_escolar_name = $request->input('tutor_escolar_name');
        $reporte_tutorias->orientador_name = $request->input('orientador_name');
        $reporte_tutorias->total_hombres = $request->input('total_hombres');
        $reporte_tutorias->total_mujeres = $request->input('total_mujeres');
        $reporte_tutorias->bajas_registradas = $request->input('bajas_registradas');
        $reporte_tutorias->altas_registradas = $request->input('altas_registradas');
        $reporte_tutorias->principales_motivos_baja = $request->input('principales_motivos_baja');
        $reporte_tutorias->alumnos_mas_de_tres_materia_reprobada = $request->input('alumnos_mas_de_tres_materia_reprobada');
        $reporte_tutorias->alumnos_necesitan_seguimiento = $request->input('alumnos_necesitan_seguimiento');
        $reporte_tutorias->alumnos_requieren_orientacion = $request->input('alumnos_requieren_orientacion');
        $reporte_tutorias->alumnos_requieren_atencion_especial = $request->input('alumnos_requieren_atencion_especial');
        $reporte_tutorias->alumnos_canalizados_alguna_institucion = $request->input('alumnos_canalizados_alguna_institucion');
        $reporte_tutorias->save();
        $mensaje = 'Has realizado un informe exitosamente';
        return redirect('/docente/tutorias/reporte_tutorias')->with(compact('mensaje'));
    }

    public function edit($reporte_id)
    {
        $reporte = Reporte_Tutorias::find($reporte_id);
        return view('docente.tutorias.reporte_tutorias.reporte_tutorias_edit')->with(compact('reporte'));
    }

    public function update(Request $request, $reporte_id)
    {
         
         $rules = [
            'ciclo_escolar' => 'required',
            'fecha' => 'required',
            'director_name' => 'required',
            'tutor_escolar_name' => 'required',
            'orientador_name' => 'required',
            'total_hombres' => 'required',
            'total_mujeres' => 'required',
            'bajas_registradas' => 'required',
            'altas_registradas' => 'required',
            'principales_motivos_baja' => 'required',
            'alumnos_mas_de_tres_materia_reprobada' => 'required',
            'alumnos_necesitan_seguimiento' => 'required',
            'alumnos_requieren_orientacion' => 'required',
            'alumnos_requieren_atencion_especial' => 'required',
            'alumnos_canalizados_alguna_institucion' => 'required',
        ];

        $messages = [

            'ciclo_escolar.required' => 'Debes de agregar el ciclo escolar',
            'fecha.required' => 'Debes de agregar la fecha',
            'director_name.required' => 'Debes de agregar el nombre del director',
            'tutor_escolar_name.required' => 'Debes de agregar el nombre del tutor escolar',
            'orientador_name.required' => 'Debes de agregar el nombre del orientador',
            'total_hombres.required' => 'Debes de agregar el total de hombre',
            'total_mujeres.required' => 'Debes de agregar el total de mujeres',
            'bajas_registradas.required' => 'Debes de agregar el total de bajas registradas',
            'altas_registradas.required' => 'Debes de agregar el total de altas registradas',
            'principales_motivos_baja.required' => 'Debes de agregar el motivo de las bajas',
            'alumnos_mas_de_tres_materia_reprobada.required' => 'Debes de agregar el total de alumnos que tienen 3 materias reprobadas',
            'alumnos_necesitan_seguimiento.required' => 'Debes de agregar el total de alumnos que necesitan seguimiento',
            'alumnos_requieren_orientacion.required' => 'Debes de agregar el total de alumnos que requieran orientación',
            'alumnos_requieren_atencion_especial.required' => 'Debes de agregar el total de alumnos que requieran atención especial',
            'alumnos_canalizados_alguna_institucion.required' => 'Debes de agregar total de alumnos canalizados de alguna institución',
        ];


        $reporte = Reporte_Tutorias::find($reporte_id);
        $reporte->tutor_id = auth()->user()->id;                
        $reporte->ciclo_escolar = $request->input('ciclo_escolar');
        $reporte->fecha = $request->input('fecha');
        $reporte->director_name = $request->input('director_name');
        $reporte->tutor_escolar_name = $request->input('tutor_escolar_name');
        $reporte->orientador_name = $request->input('orientador_name');
        $reporte->total_hombres = $request->input('total_hombres');
        $reporte->total_mujeres = $request->input('total_mujeres');
        $reporte->bajas_registradas = $request->input('bajas_registradas');
        $reporte->altas_registradas = $request->input('altas_registradas');
        $reporte->principales_motivos_baja = $request->input('principales_motivos_baja');
        $reporte->alumnos_mas_de_tres_materia_reprobada = $request->input('alumnos_mas_de_tres_materia_reprobada');
        $reporte->alumnos_necesitan_seguimiento = $request->input('alumnos_necesitan_seguimiento');
        $reporte->alumnos_requieren_orientacion = $request->input('alumnos_requieren_orientacion');
        $reporte->alumnos_requieren_atencion_especial = $request->input('alumnos_requieren_atencion_especial');
        $reporte->alumnos_canalizados_alguna_institucion = $request->input('alumnos_canalizados_alguna_institucion');
        $reporte->save();
        $mensaje = 'Has actualizado el reporte exitosamente';
        return redirect('/docente/tutorias/reporte_tutorias')->with(compact('mensaje'));
    }

    public function destroy($reporte_id)
    {
        $reporte = Reporte_Tutorias::find($reporte_id);
        $reporte->delete();
        $eliminado = 'Has eliminado el reporte No. ' .$reporte->id. ' exitosamente';        
        return back()->with(compact('eliminado'));
    }
}
