<?php

namespace App\Http\Controllers\Docente\tutorias_Pdf;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entrevista_Fresca_Padre;
use App\Entrevista_Fresca_Alumno;
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

	public function pdf_alumno($alumno_id)
	{
		$alumno = Alumno::find($alumno_id);
		$entrevista = Entrevista_Fresca_Alumno::where('alumno_id',$alumno->nia)->first();
    	$pdf = \PDF::loadView('docente.tutorias.pdf.pdf_alumno',compact('entrevista','alumno'))->setPaper('letter');
     	return $pdf->stream('Entrevista_alumno_'.$alumno->nia.'.pdf');
	}     
}
