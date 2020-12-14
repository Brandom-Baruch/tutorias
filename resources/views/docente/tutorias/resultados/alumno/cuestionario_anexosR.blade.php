@extends('layouts.app')

@section('titulo','Cuestionario Anexos')

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
								Respuestas del cuestionario de anexos del Alumno 
								<b class="text-primary">{{$alumno->name}} {{$alumno->apellidoP}} {{$alumno->apellidoM}}</b>
							</h3>		
						</div>
					</div>
				</div>
			</div>		
			<div class="text-center">
				<a href="{{url('docente/tutorias/encuestas')}}" class="btn btn-danger">Regresar</a>
				<a href="{{url('docente/cuestionario_anexos/'.$cuestionario->alumno_id)}}" class="btn btn-success">
					Descargar Pdf
				</a> 
			</div>
			<h4 class="title text-primary">Atribuciones</h4>	
			<div class="row">
				<!--R1-->            
				<div class="col-md-7">
					<div class="form-group">
						<b>1. Tu maestra(o) califica tus tareas con más comentarios que los de tus amigos.</b>
						<p>R= {{ $cuestionario->atribucion->respuesta1}}</p>				
					</div>					
				</div>
				<!--R2-->            
				<div class="col-md-5">
					<div class="form-group">
						<b>2. Un estudiante te observa durante todo el recreo.</b>
						<p>R= {{ $cuestionario->atribucion->respuesta2}}</p>				
					</div>					
				</div>
				<!--R3-->            
				<div class="col-md-12">
					<div class="form-group">
						<b>3. A un amigo tuyo lo escogen para ser parte de un equipo que participará en un concurso académico y ya no tiene tanto tiempo para estar contigo.</b>
						<p>R= {{ $cuestionario->atribucion->respuesta3}}</p>				
					</div>					
				</div>
				<!--R4-->            
				<div class="col-md-6">
					<div class="form-group">
						<b>4. Un amigo te grita cuando intentas consolarlo por el divorcio de sus padres.</b>
						<p>R= {{ $cuestionario->atribucion->respuesta4}}</p>				
					</div>					
				</div>
				<!--R5-->            
				<div class="col-md-6">
					<div class="form-group">
						<b>5. Tu amigo(a) quiere llamar la atención de un(a) compañera (compañero).</b>
						<p>R= {{ $cuestionario->atribucion->respuesta5}}</p>				
					</div>					
				</div>
				<!--R6-->            
				<div class="col-md-4">
					<div class="form-group">
						<b>6. Alguien escribió algo negativo de ti en el pizarrón.</b>
						<p>R= {{ $cuestionario->atribucion->respuesta6}}</p>				
					</div>					
				</div>	
				<!--R7-->            
				<div class="col-md-8">
					<div class="form-group">
						<b>7. Te llaman a la oficina del director después de que fuiste testigo de una pelea en el pasillo.</b>
						<p>R= {{ $cuestionario->atribucion->respuesta7}}</p>				
					</div>					
				</div>	
			</div>
			<h4 class="title text-primary">Niveles de Empatía</h4>
			<h5 class="text-justify">
				La empatía incluye reconocer cómo se está sintiendo otra persona, teniendo la perspectiva de esa persona, en una escala de 1 a 5 (siendo 1 “baja empatía” y 5 “alta empatía”), califique el nivel de empatía que siente para cada persona en las siguientes situaciones.
			</h5><br>
			<!--Nivel de empatia-->
			<div class="row">
				<!--R1-->            
				<div class="col-md-6">
					<div class="form-group">
						<b>1. Un estudiante que no conoces es suspendido de la escuela por algo que no hizo.</b>
						<p>R= {{ $cuestionario->nivel_empatia->respuesta1}}</p>				
					</div>					
				</div>
				<!--R2-->            
				<div class="col-md-6">
					<div class="form-group">
						<b>2. Un amigo cercano es castigado por sus padres una semana.</b>
						<p>R= {{ $cuestionario->nivel_empatia->respuesta2}}</p>				
					</div>					
				</div>
				<!--R3-->            
				<div class="col-md-6">
					<div class="form-group">
						<b>3. Un estudiante de una de tus clases dice sentirse triste porque tiene problemas en casa.</b>
						<p>R= {{ $cuestionario->nivel_empatia->respuesta3}}</p>				
					</div>					
				</div>
				<!--R4-->            
				<div class="col-md-6">
					<div class="form-group">
						<b>4. Escuchas que un estudiante que apenas conoces se mudará a otro estado.</b>
						<p>R= {{ $cuestionario->nivel_empatia->respuesta4}}</p>				
					</div>					
				</div>
				<!--R5-->            
				<div class="col-md-6">
					<div class="form-group">
						<b>5. Tu maestra está triste y desilusionada porque el grupo salió muy mal en un examen importante.</b>
						<p>R= {{ $cuestionario->nivel_empatia->respuesta5}}</p>				
					</div>					
				</div>
				<!--R6-->            
				<div class="col-md-6">
					<div class="form-group">
						<b>6. Un estudiante que conoces ya no puede pagar el transporte para llegar a la escuela.</b>
						<p>R= {{ $cuestionario->nivel_empatia->respuesta6}}</p>				
					</div>					
				</div>	
				<!--R7-->            
				<div class="col-md-6">
					<div class="form-group">
						<b>7. Un estudiante con el que no tienes mucho en común está siendo víctima de acoso escolar.</b>
						<p>R= {{ $cuestionario->nivel_empatia->respuesta7}}</p>				
					</div>					
				</div>
				<!--R8-->            
				<div class="col-md-6">
					<div class="form-group">
						<b>8. Tu mamá o tu papá tuvieron un mal día en el trabajo.</b>
						<p>R= {{ $cuestionario->nivel_empatia->respuesta8}}</p>				
					</div>					
				</div>	
				<!--R9-->            
				<div class="col-md-6">
					<div class="form-group">
						<b>9. El perro de un amigo murió.</b>
						<p>R= {{ $cuestionario->nivel_empatia->respuesta9}}</p>				
					</div>					
				</div>	
			</div>
			<h4 class="title text-primary">Tipo de mentalidad</h4>	
			<h5>Lee cada enunciado y marca con una cruz si estás “de acuerdo” o “en desacuerdo”. No hay respuestas correctas o incorrectas.</h5><br>
			<div class="row">
				<!--R1-->            
				<div class="col-md-6">
					<div class="form-group">
						<b>1. Tu inteligencia es algo muy básico de ti y no la puedes cambiar mucho.</b>
						<p>R= {{ $cuestionario->tipo_mentalidad->respuesta1}}</p>				
					</div>					
				</div>
				<!--R2-->            
				<div class="col-md-6">
					<div class="form-group">
						<b>2. Puedes aprender nuevas cosas, pero realmente no puedes cambiar qué tan inteligente eres.</b>
						<p>R= {{ $cuestionario->tipo_mentalidad->respuesta2}}</p>				
					</div>					
				</div>
				<!--R3-->            
				<div class="col-md-6">
					<div class="form-group">
						<b>3. No importa qué tan inteligente seas, siempre podrás cambiar tu inteligencia aunque sea un poco.</b>
						<p>R= {{ $cuestionario->tipo_mentalidad->respuesta3}}</p>				
					</div>					
				</div>
				<!--R4-->            
				<div class="col-md-6">
					<div class="form-group">
						<b>4. Siempre puedes cambiar sustancialmente qué tan inteligente eres. </b>
						<p>R= {{ $cuestionario->tipo_mentalidad->respuesta4}}</p>				
					</div>					
				</div>
				<!--R5-->            
				<div class="col-md-6">
					<div class="form-group">
						<b> Completa el siguiente enunciado de tal modo que los números en los dos espacios sumen 100% </b>
						<p>
							R= INTELIGENCIA = {{$cuestionario->tipo_mentalidad->respuesta5}} % HABILIDADES +{{$cuestionario->tipo_mentalidad->r5}} % ESFUERZO.
						</p>				
					</div>					
				</div>
			</div> 
			<div class="text-center">
				<a href="{{url('docente/tutorias/encuestas')}}" class="btn btn-danger">Regresar</a>
				<a href="{{url('docente/cuestionario_anexos/'.$cuestionario->alumno_id)}}" class="btn btn-success">
					Descargar Pdf
				</a> 
			</div>
		</div>
		@include('includes.footer')
		@endsection
