@extends('layouts.app')

@section('titulo','Entrevista Fresca')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')

@if(Auth::user()->materias()->where('name','like','%tutorias%')->get() && 
Auth::user()->puestos->where('puesto','Tutor')->first())
	@include('includes.links_tutor')
@endif
<a href="{{url('docente')}}">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">
			<div class="row">
				<div class="col-md-6 ml-auto mr-auto">
					<div class="profile">   						
						<div class="name">
							<h3 class="title">
								Respuestas de la entrevista fresca del Alumno 
								<b class="text-primary">{{$alumno->name}} {{$alumno->apellidoP}} {{$alumno->apellidoM}}</b>
							</h3>		
						</div>
					</div>
				</div>
			</div>		
			<div class="text-center">
				<a href="{{url('docente/tutorias/encuestas')}}" class="btn btn-danger">Regresar</a>
				<a href="{{url('docente/entrevista_fresca_alumno/'.$entrevista->alumno_id)}}" class="btn btn-success">
					Descargar Pdf
				</a> 
			</div>
			<h4 class="title text-primary">Datos Familiares</h4>	
			<div class="row">
				<!--R1-->            
				<div class="col-md-4">
					<div class="form-group">
						<b>¿Con quién vives?</b>
						<p>{{$entrevista->datoFamiliar->respuesta1}}</p>
						
						<b>Otro. ¿Cuál?</b>
						<p>{{$entrevista->datoFamiliar->r1}}</p>						
					</div>					
				</div>
				<!--R5-->
				<div class="col-md-4">
					<div class="form-group">
						<b>¿Hablas otro idioma o lengua indígena?</b>
						<p>{{$entrevista->datoFamiliar->respuesta5}}</p>						
						
						<b>¿Cuál?</b>
						<p>{{$entrevista->datoFamiliar->r5}}</p>						
					</div>					
				</div>				
				<!--R3-->
				<div class="col-md-4">
					<div class="form-group">
						<b>¿Qué lugar ocupas?</b>						
						<p>{{$entrevista->datoFamiliar->respuesta3}}</p>
						
						<b>Otro.</b>
						<p>{{$entrevista->datoFamiliar->r3}}</p>						
					</div>					
				</div>				
				<!--R4-->
				<div class="col-md-4">
					<div class="form-group">
						<b>¿Cómo te llevas con tu familia?</b>						
						<p>{{$entrevista->datoFamiliar->respuesta4}}</p>
					</div>					
				</div>
				<!--R2-->
				<div class="col-md-4">
					<div class="form-group">
						<b>¿Cuántos hermanos/as tienes?</b>						
						<p>{{$entrevista->datoFamiliar->respuesta2}}</p>
					</div>					
				</div>				
				<!--R7-->
				<div class="col-md-4">
					<div class="form-group">
						<b>¿Tienes hijos?</b>
						<p>{{$entrevista->datoFamiliar->respuesta7}}</p>
					</div>					
				</div>
				<!--R6-->
				<div class="col-md-6">
					<div class="form-group">
						<b>¿Cuánto es el ingreso económico mensual en tu casa?</b>	
						<p>{{$entrevista->datoFamiliar->respuesta6}}</p>
					</div>					
				</div>				
			</div> 
			<h4 class="title text-primary">Datos Academicos</h4>
			<div class="row">				
				<!--R1-->
				<div class="col-md-6">
					<div class="form-group">
						<b>¿En dónde cursaste la secundaria?</b>						
						<p>{{$entrevista->datoAcademico->respuesta1}}</p>
					</div>					
				</div>							
				<!--R3-->
				<div class="col-md-6">
					<div class="form-group">
						<b>¿Cómo consideras tu desempeño escolar al momento?</b>						
						<p>{{$entrevista->datoAcademico->respuesta3}}</p>
					</div>					
				</div>
				<!--R2-->
				<div class="col-md-6">
					<div class="form-group">
						<b>¿Qué materias te gustaron más en la secundaria?</b>	
						<p>{{$entrevista->datoAcademico->respuesta2}}</p>
						
						<b>¿Por qué?</b>
						<p>{{$entrevista->datoAcademico->r2}}</p>						
					</div>					
				</div>
				<!--R4-->
				<div class="col-md-6">
					<div class="form-group">
						<b>¿Crees que tus resultados escolares obtenido, corresponden con el esfuerzo que invierte en ellos?</b>
						<p>{{$entrevista->datoAcademico->respuesta4}}</p>						
						<b>¿Por qué?</b>
						<p>{{$entrevista->datoAcademico->r4}}</p>						
					</div>					
				</div>				
			</div>
			<h4 class="title text-primary">Hábitos de Estudio</h4>
			<div class="row">				
				<!--R1-->
				<div class="col-md-6">
					<div class="form-group">
						<b>¿Qué tiempo dedicas diariamente, después de la escuela (en tu casa) para las TAREAS?</b><br>
						<p>{{$entrevista->habitoEstudio->respuesta1}}</p>		
					</div>									
				</div>
				<!--R2-->
				<div class="col-md-6">
					<div class="form-group">
						<b>¿Qué tiempo dedicas diariamente, después de la escuela (en tu casa) para ESTUDIAR?</b><br>
						<p>{{$entrevista->habitoEstudio->respuesta2}}</p>
					</div>	
				</div>
				<!--R3-->
				<div class="col-md-6">
					<div class="form-group">
						<b>¿Qué tiempo a la semana dedicas a leer?</b>						
						<p>{{$entrevista->habitoEstudio->respuesta3}}</p>
					</div>	
				</div>
				<!--R4-->
				<div class="col-md-6">
					<div class="form-group">
						<b>¿Cuál es tu horario preferido para estudiar?</b>
						<p>{{$entrevista->habitoEstudio->respuesta4}}</p>			
					</div>	
				</div>
				<!--R5-->
				<div class="col-md-3">
					<div class="form-group">
						<b>¿Quién te ayuda a estudiar en casa?</b>
						<p>{{$entrevista->habitoEstudio->respuesta5}}</p>			
						<b>Otros</b>
						<p>{{$entrevista->habitoEstudio->r5}}</p>
					</div>					
				</div>
				<!--R6-->
				<div class="col-md-3">
					<div class="form-group">
						<b>¿En qué lugar prefieres estudiar?</b>
						<p>{{$entrevista->habitoEstudio->respuesta6}}</p>					
						<b>Otros</b>
						<p>{{$entrevista->habitoEstudio->r6}}</p>
					</div>	
				</div>
				<!--R7-->
				<div class="col-md-3">
					<div class="form-group">
						<b>¿Qué técnicas de estudio usas?</b>						
						<p>{{$entrevista->habitoEstudio->respuesta7}}</p>					
						<b>Otros</b>
						<p>{{$entrevista->habitoEstudio->r7}}</p>
					</div>	
				</div>
				<!--R8-->
				<div class="col-md-3">
					<div class="form-group">
						<b>¿Tus papas o hermanos te motivan a estudiar?</b>
						<p>{{$entrevista->habitoEstudio->respuesta8}}</p>					
						<b>Otros</b>
						<p>{{$entrevista->habitoEstudio->r8}}</p>
					</div>	
				</div>
				<div class="col-md-12">
					<h5 class="title text-center text-primary">Marca con una X el motivo principal que tienes para seguir estudiando</h5>
				</div>								
				<div class="table-responsive">
					<table class="table">					
						<tbody>
							<tr>
								<th>Aprender cada dia mas</th>
								<td>{{$entrevista->habitoEstudio->r9_1}}</td>							
							</tr>
							<tr>
								<th>Poder hacer las cosas por ti mismo y a tu manera</th>
								<td>{{$entrevista->habitoEstudio->r9_2}}</td>							
							</tr>
							<tr>
								<th>El interés de despertar en ti todo lo que estudias</th>
								<td>{{$entrevista->habitoEstudio->r9_3}}</td>							
							</tr>
							<tr>
								<th>La satisfacción por obtener buenos resultados</th>
								<td>{{$entrevista->habitoEstudio->r9_4}}</td>							
							</tr>
							<tr>
								<th>Evitar el fracaso en los estudios</th>
								<td>{{$entrevista->habitoEstudio->r9_5}}</td>							
							</tr>
							<tr>
								<th>Agradar a tus padres y/o profesores</th>
								<td>{{$entrevista->habitoEstudio->r9_6}}</td>							
							</tr>
							<tr>
								<th>Obtener premios por parte de tus padres o familia</th>
								<td>{{$entrevista->habitoEstudio->r9_7}}</td>							
							</tr>
						</tbody>
					</table>					
				</div> 
				<div class="col-md-12">
					<h4 class="title text-primary">Otras Actividades</h4>
				</div>								
				<!--R1-->
				<div class="col-md-6">
					<div class="form-group">
						<b>¿Qué te gusta hacer en tu tiempo libre? (pasatiempos)?</b>			
						<p>{{$entrevista->otraActividad->respuesta1}}</p>
					</div>									
				</div>
				<!--R2-->
				<div class="col-md-6">
					<div class="form-group">
						<b>¿Cuál es el momento MAS FELIZ de tu vida?</b>					
						<p>{{$entrevista->otraActividad->respuesta2}}</p>
					</div>	
				</div>
				<!--R3-->
				<div class="col-md-6">
					<div class="form-group">
						<b>¿Cuál el momento MAS TRISTE de tu vida?</b>						
						<p>{{$entrevista->otraActividad->respuesta3}}</p>			
					</div>	
				</div>
				<!--R4-->
				<div class="col-md-6">
					<div class="form-group">
						<b>Descríbete en los aspectos emocionales e intelectuales</b>			
						<p>{{$entrevista->otraActividad->respuesta4}}</p>
					</div>	
				</div>													
				
				<div class="col-md-12">
					<h4 class="title text-primary">Datos Adicionales</h4>
				</div>
				<div class="row">				
					<!--R1-->
					<div class="col-md-4">
						<div class="form-group">
							<b>¿Consideras que tienes alguna capacidad diferente?</b>		
							<p>{{$entrevista->datosAdicionales->respuesta1}}</p>
							
							<b>¿Cúal?</b>
							<p>{{$entrevista->datosAdicionales->r1}}</p>			
						</div>									
					</div>
					<!--R2-->
					<div class="col-md-4">
						<div class="form-group">
							<b>¿Padeces alguna enfermedad?</b>					
							<p>{{$entrevista->datosAdicionales->respuesta2}}</p>
							
							<b>¿Cúal?</b>
							<p>{{$entrevista->datosAdicionales->r2}}</p>							
						</div>	
					</div>							
					<!--R4-->
					<div class="col-md-4">
						<div class="form-group">
							<b>¿Te han intervenido quirúrgicamente?</b>					
							<p>{{$entrevista->datosAdicionales->respuesta4}}</p>
							
							<b>¿Cúal?</b>
							<p>{{$entrevista->datosAdicionales->r4}}</p>							
						</div>	
					</div>			
					<!--R6-->
					<div class="col-md-4">
						<div class="form-group">
							<b>¿Tienes acceso a una computadora portátil o de escritorio en casa?</b>
							<p>{{$entrevista->datosAdicionales->respuesta6}}</p>
						</div>	
					</div>
					<!--R7-->
					<div class="col-md-4">
						<div class="form-group">
							<b>¿Tienes acceso a internet en casa?</b>
							<p>{{$entrevista->datosAdicionales->respuesta7}}</p>
						</div>	
					</div>
					<!--R8-->
					<div class="col-md-4">
						<div class="form-group">
							<b>¿Tienes celular propio?</b>
							<p>{{$entrevista->datosAdicionales->respuesta8}}</p>
						</div>	
					</div>
					<!--R9-->
					<div class="col-md-4">
						<div class="form-group">
							<b>¿Cuántas horas al día haces uso del tu celular?</b>
							<p>{{$entrevista->datosAdicionales->respuesta9}}</p>
						</div>	
					</div>
					<!--R10-->
					<div class="col-md-4">
						<div class="form-group">
							<b>¿Cuántas horas al día ves televisión en tu casa?</b>							
							<p>{{$entrevista->datosAdicionales->respuesta10}}</p>
						</div>	
					</div>
					<!--R11-->
					<div class="col-md-4">
						<div class="form-group">
							<b>¿Cuántas horas al día haces uso de videojuegos?</b>		
							<p>{{$entrevista->datosAdicionales->respuesta11}}</p>
						</div>	
					</div>
					<!--R12-->
					<div class="col-md-4">
						<div class="form-group">
							<b>¿A qué hora te levantas para venir a la escuela?</b>
							<p>{{$entrevista->datosAdicionales->respuesta12}}</p>	
						</div>	
					</div>
					<!--R13-->
					<div class="col-md-4">
						<div class="form-group">
							<b>¿A qué hora te duermes entre semana?</b>	
							<p>{{$entrevista->datosAdicionales->respuesta13}}</p>	
						</div>	
					</div>													
					<!--R18-->
					<div class="col-md-4">
						<div class="form-group">
							<b>¿A qué persona le tienes confianza?</b>	
							<p>{{$entrevista->datosAdicionales->respuesta18}}</p>	
						</div>	
					</div>
					<!--19-->
					<div class="col-md-4">
						<div class="form-group">
							<b>¿A que persona le cuentas tus problemas?</b>
							<p>{{$entrevista->datosAdicionales->respuesta19}}</p>		
						</div>	
					</div>				
					<!--R14-->
					<div class="col-md-4">
						<div class="form-group">
							<b>¿Consideras que tu horario de alimentación es el correcto?</b>
							<p>{{$entrevista->datosAdicionales->respuesta15}}</p>
							
							<b>¿Por qué?</b>
							<p>{{$entrevista->datosAdicionales->r15}}</p>							
						</div>	
					</div>
					<!--R15-->
					<div class="col-md-4">
						<div class="form-group">
							<b>¿Se te dificulta conciliar el sueño?</b>
							<p>{{$entrevista->datosAdicionales->respuesta14}}</p>							
							
							<b>¿Por qué?</b>
							<p>{{$entrevista->datosAdicionales->r14}}</p>
						</div>	
					</div>
					<!--R16-->
					<div class="col-md-4">
						<div class="form-group">
							<b>¿Qué responsabilidades tienes dentro de casa?</b>
							<p>{{$entrevista->datosAdicionales->respuesta16}}</p>
							
							<b>¿Por qué?</b>
							<p>{{$entrevista->datosAdicionales->r16}}</p>							
						</div>	
					</div>		
					<!--R5-->
					<div class="col-md-4">
						<div class="form-group">
							<b>¿Te ha llamado la atención probar alguna droga?</b>		
							<p>{{$entrevista->datosAdicionales->respuesta5}}</p>						
							
							<b>¿Cúal?</b>		
							<p>{{$entrevista->datosAdicionales->r5}}</p>							
						</div>	
					</div>
					<!--R17-->
					<div class="col-md-4">
						<div class="form-group">
							<b>¿Cuentas con algún trabajo después de la escuela?</b>
							<p>{{$entrevista->datosAdicionales->respuesta17}}</p>
							
							<b>¿Cuál?</b>
							<p>{{$entrevista->datosAdicionales->r17}}</p>							
							
							<b>¿Horario?</b>
							<p>{{$entrevista->datosAdicionales->r17_2}}</p>
						</div>	
					</div>
					<!--R3-->
					<div class="col-md-4">
						<div class="form-group">
							<b>¿Te encuentras bajo tratamiento médico?</b>
							<p>{{$entrevista->datosAdicionales->respuesta3}}</p>
							
							<b>¿Cúal?</b>
							<p>{{$entrevista->datosAdicionales->r3}}</p>														
							
							<b>¿Horario?</b>
							<p>{{$entrevista->datosAdicionales->r3_2}}</p>
						</div>	
					</div>			
					<div class="col-md-12">
						<h5 class="title text-center text-primary">Marca SI o NO en las características y cualidades que consideres que tienes o no como persona</h5>
					</div>
					<div class="table-responsive">
						<table class="table">					
							<tbody>
								<tr>
									<th>ALEGRE</th>
									<td>{{$entrevista->datosAdicionales->r20_1}}</td>
									<th>CARIÑOSO</th>
									<td>{{$entrevista->datosAdicionales->r20_10}}</td>
								</tr>
								<tr>
									<th>TRISTE</th>
									<td>{{$entrevista->datosAdicionales->r20_2}}</td>
									<th>FRIO</th>
									<td>{{$entrevista->datosAdicionales->r20_11}}</td>
								</tr>
								<tr>
									<th>AGRESIVO</th>
									<td>{{$entrevista->datosAdicionales->r20_3}}</td>
									<th>OBEDIENTE</th>
									<td>{{$entrevista->datosAdicionales->r20_12}}</td>
								</tr>
								<tr>
									<th>DOCIL</th>
									<td>{{$entrevista->datosAdicionales->r20_4}}</td>
									<th>MENTIROSO</th>
									<td>{{$entrevista->datosAdicionales->r20_13}}</td>
								</tr>
								<tr>
									<th>TRANQUILO</th>
									<td>{{$entrevista->datosAdicionales->r20_5}}</td>
									<th>MEDIOSO</th>
									<td>{{$entrevista->datosAdicionales->r20_14}}</td>
								</tr>
								<tr>
									<th>INQUIETO</th>
									<td>{{$entrevista->datosAdicionales->r20_6}}</td>
									<th>VALIENTE</th>
									<td>{{$entrevista->datosAdicionales->r20_15}}</td>
								</tr>
								<tr>
									<th>IMAGINATIVO</th>
									<td>{{$entrevista->datosAdicionales->r20_7}}</td>
									<th>DISTRAIDO</th>
									<td>{{$entrevista->datosAdicionales->r20_16}}</td>
								</tr>
								<tr>
									<th>REALISTA</th>
									<td>{{$entrevista->datosAdicionales->r20_8}}</td>
									<th>ATENTO</th>
									<td>{{$entrevista->datosAdicionales->r20_17}}</td>
								</tr>
								<tr>
									<th>EXPRESIVO</th>
									<td>{{$entrevista->datosAdicionales->r20_9}}</td>
									<th>INTROVERTIDO</th>
									<td>{{$entrevista->datosAdicionales->r20_17}}</td>
								</tr>
							</tbody>
						</table>
					</div>			
					<div class="text-center col-md-12">
						<a href="{{url('docente/tutorias/encuestas')}}" class="btn btn-danger">Regresar</a> 
						<a href="{{url('docente/entrevista_fresca_alumno/'.$entrevista->alumno_id)}}" class="btn btn-success">Descargar Pdf</a>
					</div>
				</div>              
			</div>
		</div>
		@include('includes.footer')
		@endsection
