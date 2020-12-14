<?php

namespace App\Http\Controllers\Docente\tutorias_Pdf;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entrevista_Fresca_Padre;
use App\Entrevista_Fresca_Alumno;
use App\Cuestionario_Anexos;
use App\Atencion_Individualizada;
use App\Perfil_Academico_Alumno;
use App\Control_Asistencia;
use App\Seguimiento_Alumno_Riesgo;
use App\Reporte_Tutoria_Grupal;
use App\Reporte_Tutorias;
use App\Test;
use App\Alumno;

class PdfController extends Controller
{    

	public function __construct()
	{
		ini_set('max_execution_time',300);
	}


	public function pdf_padre($alumno_id)
	{
		$entrevista = Entrevista_Fresca_Padre::where('alumno_id',$alumno_id)->first();
    	$pdf = \PDF::loadView('docente.tutorias.pdf.pdf_padre',compact('entrevista'))->setPaper('letter');//->set_time_limit(300);
     	return $pdf->stream('Entrevista_padre_'.$entrevista->padres[0]->name.'_'.$entrevista->padres[0]->apellidoP.'_'.$entrevista->padres[0]->apellidoM.'.pdf');
	} 

	public function entrevista_fresca_pdf($alumno_id)
	{
		$alumno = Alumno::find($alumno_id);
		$entrevista = Entrevista_Fresca_Alumno::where('alumno_id',$alumno->nia)->first();
    	$pdf = \PDF::loadView('docente.tutorias.pdf.Entrevista_fresca_pdf',compact('entrevista','alumno'))->setPaper('letter');
     	return $pdf->stream('Entrevista_Alumno_'.$alumno->nia.'.pdf');
	}   

	public function cuestionario_anexos_pdf($alumno_id)
	{
		$alumno = Alumno::find($alumno_id);
		$cuestionario = Cuestionario_Anexos::where('alumno_id',$alumno->nia)->first();
		$pdf = \PDF::loadView('docente.tutorias.pdf.cuestionario_anexos_pdf',compact('cuestionario','alumno'))->setPaper('letter');
     	return $pdf->stream('Cuestionario_Anexos_Alumno_'.$alumno->nia.'.pdf');
	}  

	public function estilo_aprendizaje_pdf($alumno_id)
	{
		$alumno = Alumno::find($alumno_id);
		$test = Test::where('alumno_id',$alumno->nia)->first();
		$pdf = \PDF::loadView('docente.tutorias.pdf.estilo_aprendizaje_pdf',compact('test','alumno'))->setPaper('letter');
     	return $pdf->stream('Estilo_aprendizaje_Alumno'.$alumno->nia.'.pdf');
	}

	public function atencion_individual_pdf($alumno_id)
	{
		$alumno = Alumno::find($alumno_id);
		$test = Atencion_Individualizada::where('alumno_id',$alumno->nia)->first();
		$pdf = \PDF::loadView('docente.tutorias.pdf.atencion_individual_pdf',compact('test','alumno'))->setPaper('letter');
     	return $pdf->stream('Atención_Individual_Alumno'.$alumno->nia.'.pdf');
	}

	public function perfil_academico_pdf($alumno_id)
	{
		$alumno = Alumno::find($alumno_id);
		$cuestionario = Perfil_Academico_Alumno::where('alumno_id',$alumno->nia)->first();
		$pdf = \PDF::loadView('docente.tutorias.pdf.perfil_academico_pdf',compact('cuestionario','alumno'))->setPaper('letter');
     	return $pdf->stream('Perfil_Academico_Alumno'.$alumno->nia.'.pdf');
	}

	public function control_asistencias_pdf()
	{
		$control = Control_Asistencia::where('tutor_id',auth()->user()->id)->get();
		$pdf = \PDF::loadView('docente.tutorias.pdf.control_asistencias_pdf',compact('control'))->setPaper('letter','landscape');
     	return $pdf->stream('Control_Asistencias.pdf');
	}


	public function seguimiento_alumno_pdf($seguimiento_id)
	{
		$seguimiento = Seguimiento_Alumno_Riesgo::find($seguimiento_id);
		$pdf = \PDF::loadView('docente.tutorias.pdf.seguimiento_alumno_pdf',compact('seguimiento'))->setPaper('letter');
     	return $pdf->stream('Seguimiento_Riesgo_Alumno_'.$seguimiento->alumnos[0]->name.'.pdf');
	}

	public function reporte_grupal_pdf()
	{
		$docente_materia = auth()->user()->materias()->where('name','like','%Tutorias%')->first(); //Relacion entre docente/materia
        $grupo = $docente_materia->grupos()->where('materia_id',$docente_materia->id)->first(); //R entre materia/grupo

		$reporte = Reporte_Tutoria_Grupal::where('tutor_id',auth()->user()->id)->first();
		$pdf = \PDF::loadView('docente.tutorias.pdf.reporte_grupal_pdf',compact('reporte','grupo'))->setPaper('letter','landscape');
     	return $pdf->stream('Reporte_Grupal_Grupo_'.$grupo->name.'.pdf');
	}

	public function reporte_tutorias_pdf($reporte_id)
	{
		$reporte = Reporte_Tutorias::find($reporte_id);
		$docente_materia = auth()->user()->materias()->where('name','like','%Tutorias%')->first(); //Relacion entre docente/materia
        $grupo = $docente_materia->grupos()->where('materia_id',$docente_materia->id)->first(); //R entre materia/grupo

		$pdf = \PDF::loadView('docente.tutorias.pdf.reporte_tutorias_pdf',compact('reporte','grupo'))->setPaper('letter');
     	return $pdf->stream('Reporte_Tutorias_Grupo_'.$grupo->name.'.pdf');
	}
	
}
