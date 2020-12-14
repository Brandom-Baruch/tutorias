@extends('layouts.app')

@section('titulo','Atención Individualizada')

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
								Respuestas del test de atención individualizada del Alumno 	<br>	 
								<b class="text-primary">{{$alumno->name}} {{$alumno->apellidoP}} {{$alumno->apellidoM}}</b>
							</h3>		
						</div>
					</div>
				</div>
			</div>		
			<div class="text-center">
				<a href="{{url('docente/tutorias/encuestas')}}" class="btn btn-danger">Regresar</a>
				<a href="{{url('docente/atencion_individual/'.$alumno->nia)}}" class="btn btn-success">
					Descargar Pdf
				</a> 
			</div>
			<h3 class="title text-center">
				Test para detectar tutorados que requieran atención indivualizada
			</h3>
					
			<div class="row">
				<div class="col-md-6">
					<span><b>Nombre del Tutor:</b> {{ $test->nombre_docente }}</span>
				</div>
				<div class="col-md-6">
					<span><b>Grupo:</b> {{ $test->grupo }}</span>					    
				</div>
			</div><br>
			<h4 class="text-center">Por favor marca las situaciones que actualmente se presentan en tu vida cotidiana. Tu honestidad permitirá un mejor trabajo.</h4><br>						
			<table class="table table-bordered" style="margin: auto;">
				<thead>
					<tr class="text-center">
						<th scope="col" style="width: 10%">FACTORES</th>
						<th scope="col" style="width: 50%">SITUACIONES</th>
						<th scope="col" style="width: 2%"></th>							
					</tr>
				</thead>
				<!--Salud y peso-->
				<tr>
					<td rowspan="7"  class="text-center" style="padding-top: 13%; font-size: 20px;">Salud y peso</td>
					<td>Presentas deficiencia visual y auditiva</td>
					<td>
						{{ $test->respuesta1 }}
					</td>
				</tr>
				<tr>
					<td>Presentas desnutrición</td>
					<td>
						{{ $test->respuesta2 }}
					</td>
				</tr>
				<tr>
					<td>Tienes obesidad (más de 10 kilos arriba de tu peso)</td>
					<td>
						{{ $test->respuesta3 }}
					</td>
				</tr>
				<tr>
					<td>Tienes problemas de anorexia</td>
					<td>
						{{ $test->respuesta4 }}
					</td>
				</tr>
				<tr>
					<td>Tienes problemas de bulimia</td>
					<td>
						{{ $test->respuesta5 }}
					</td>
				</tr>
				<tr>
					<td>Eres sexualmente activo</td>
					<td>
						{{ $test->respuesta6 }}
					</td>
				</tr>
				<tr>
					<td>Has tenido enfermedades sexualmente transmisibles (ETS)</td>
					<td>
						{{ $test->respuesta7 }}
					</td>
				</tr>
				<!--Fin Salud y peso-->					
				<!--Académicos -->
				<tr>
					<td rowspan="4"  class="text-center" style="padding-top: 8%; font-size: 20px;">Académicos</td>
					<td>Sientes apatía hacia el estudio</td>
					<td>
						{{ $test->respuesta8 }}
					</td>
				</tr>
				<tr>
					<td>Presentan deficiencia en la comprensión lectora</td>
					<td>
						{{ $test->respuesta9 }}
					</td>
				</tr>
				<tr>
					<td>Te faltan técnicas de estudio</td>
					<td>
						{{ $test->respuesta10 }}
					</td>
				</tr>
				<tr>
					<td>Tienes ideas claras sobre que harás en el futuro</td>
					<td>
						{{ $test->respuesta11 }}
					</td>
				</tr>
				<!--Fin Académicos -->
				<!--Psicosocial -->
				<tr>
					<td rowspan="6"  class="text-center" style="padding-top: 10%; font-size: 20px;">Psicosocial</td>
					<td>Tienes problemas para expresar tu afecto</td>
					<td>
						{{ $test->respuesta12 }}
					</td>
				</tr>
				<tr>
					<td>Te consideras una persona violenta</td>
					<td>
						{{ $test->respuesta13 }}
					</td>
				</tr>
				<tr>
					<td>Tienes problemas de depresión</td>
					<td>
						{{ $test->respuesta14 }}
					</td>
				</tr>
				<tr>
					<td>Puedes presentar problemas de ansiedad, nerviosismo o angustia sin motivos aparentes</td>
					<td>
						{{ $test->respuesta15 }}
					</td>
				</tr>
				<tr>
					<td>Fumas</td>
					<td>
						{{ $test->respuesta16 }}
					</td>
				</tr>
				<tr>
					<td>Tomas</td>
					<td>
						{{ $test->respuesta17 }}
					</td>
				</tr>
				<!--Fin Psicosocial-->
				<!--Familiar -->
				<tr>
					<td rowspan="3"  class="text-center" style="padding-top: 5%; font-size: 20px;">Familiar</td>
					<td>Hay violencia familiar</td>
					<td>
						{{ $test->respuesta18 }}
					</td>
				</tr>
				<tr>
					<td>Falta comunicación entre tú y tus padres</td>
					<td>
						{{ $test->respuesta19 }}
					</td>
				</tr>
				<tr>
					<td>Pasas mucho tiempo solo en tu casa</td>
					<td>
						{{ $test->respuesta20 }}
					</td>
				</tr>
				<!--Fin Familiar -->
			</table><br>
			<div class="form-group">
			    <b>Si lo necesitas, en las siguientes líneas escribe que otra problemática tienes que no se mencione en el listado anterior.</b>
			    <p>{{ $test->respuesta21 }}</p>
			</div>
			 
			<div class="text-center">
				<a href="{{url('docente/tutorias/encuestas')}}" class="btn btn-danger">Regresar</a>
				<a href="{{url('docente/atencion_individual/'.$alumno->nia)}}" class="btn btn-success">
					Descargar Pdf
				</a> 
			</div>
		</div>
		@include('includes.footer')
		@endsection
