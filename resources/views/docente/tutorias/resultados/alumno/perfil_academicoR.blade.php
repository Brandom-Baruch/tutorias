@extends('layouts.app')

@section('titulo','Perfil Academico')

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
								Respuestas del cuestionario  <br>Perfil Academico del Alumno 
								<br><b class="text-primary">{{$alumno->name}} {{$alumno->apellidoP}} {{$alumno->apellidoM}}</b>
							</h3>		
						</div>
					</div>
				</div>
			</div>		
			<div class="text-center">
				<a href="{{url('docente/tutorias/encuestas')}}" class="btn btn-danger">Regresar</a>
				<a href="{{url('docente/perfil_academico/'.$alumno->nia)}}" class="btn btn-success">
					Descargar Pdf
				</a> 
				<h3 class="title text-center">Test para detectar tutorados que requieran atención indivualizada</h3>
			</div><br>
			<div class="row">							
				<div class="col-md-6">
					<span>Escuela de procedencia: <br>{{ $cuestionario->escuela_procedencia }}</span>				    
				</div>
				<div class="col-md-6">
					<span>Ubicación de la escuela secundaria de prosedencia: <br>{{ $cuestionario->ubicacion_escuela }}</span>
				</div>
			</div><br>
			<table class="table table-bordered">				
					<thead>
						<tr>
							<th scope="col" class="text-center">N°</th>
							<th scope="col" class="text-center">Descripción</th>
							<th scope="col" class="text-center">Respuesta <br> (V/F)</th>						      
						</tr>
					</thead>	
					<tbody>							
						<!--R1-->
						<tr>
							<td>1</td>							
							<td>Mi promedio de la secundaria es de igual o mayor a 7</td>
							<td class="text-center">
								{{ $cuestionario->respuesta1 }}							
							</td>							
						</tr>
						<!--R2-->
						<tr>
							<td>2</td>							
							<td>Reprobé 2 o más materias en la secundaria</td>
							<td class="text-center">
								{{ $cuestionario->respuesta2 }}								
							</td>							
						</tr>
						<!--R3-->
						<tr>
							<td>3</td>							
							<td>Yo elegí el plantel de bachillerato al que asisto</td>
							<td class="text-center">
								{{ $cuestionario->respuesta3 }}								
							</td>							
						</tr>													
						<!--R4-->
						<tr>
							<td>4</td>							
							<td>Asisto a la Media Superior porque creo que me sería útil</td>
							<td class="text-center">
								{{ $cuestionario->respuesta4 }}								
							</td>							
						</tr>
						<!--R5-->
						<tr>
							<td>5</td>							
							<td>Me gusta la escuela</td>
							<td class="text-center">
								{{ $cuestionario->respuesta5 }}									
							</td>							
						</tr>
						<!--R6-->
						<tr>
							<td>6</td>							
							<td>Soy bueno para estudiar</td>
							<td class="text-center">
								{{ $cuestionario->respuesta5 }}									
							</td>							
						</tr>
						<!--R7-->
						<tr>
							<td>7</td>							
							<td>En la secundaria sentía confianza con algún maestro(a) como para platicar con él(ella)</td>
							<td class="text-center">
								{{ $cuestionario->respuesta7 }}								
							</td>							
						</tr>
						<!--R8-->
						<tr>
							<td>8</td>							
							<td>En la secundaria preguntaba mis dudas al maestro(a)</td>
							<td class="text-center">
								{{ $cuestionario->respuesta8 }}									
							</td>							
						</tr>
						<!--R9-->
						<tr>
							<td>9</td>							
							<td>En la secundaria me molestaban con frecuencia otro u otros compañeros (burlas, intimidación, golpes, extorsiones, etc.)</td>
							<td class="text-center">
								{{ $cuestionario->respuesta9 }}								
							</td>							
						</tr>
						<!--R10-->
						<tr>
							<td>10</td>							
							<td>Si yo reprobara alguna materia, se lo platicaría a mi mamá o mi papá</td>
							<td class="text-center">
								{{ $cuestionario->respuesta10 }}								
							</td>							
						</tr>
						<!--R11-->
						<tr>
							<td>11</td>							
							<td>Si tuviera un problema personal, lo platicaría con mi mamá o mi papá</td>
							<td class="text-center">
								{{ $cuestionario->respuesta11 }}									
							</td>							
						</tr>
						<!--R12-->
						<tr>
							<td>12</td>							
							<td>Me gustaría emigrar a los Estados Unidos en los próximos 5 años</td>
							<td class="text-center">
								{{ $cuestionario->respuesta12 }}								
							</td>							
						</tr>
						<!--R13-->
						<tr>
							<td>13</td>							
							<td>Es posible que me case o viva con mi pareja antes de terminar el bachillerato</td>
							<td class="text-center">
								{{ $cuestionario->respuesta13 }}									
							</td>							
						</tr>
						<!--R14-->
						<tr>
							<td>14</td>							
							<td>En mi casa hemos tenido problemas económicos serios (deudas, no alcanza para los gastos del diario, etc).</td>
							<td class="text-center">
								{{ $cuestionario->respuesta14 }}									
							</td>							
						</tr>
						<!--R15-->
						<tr>
							<td>15</td>							
							<td>Es más importante trabajar que estudiar</td>
							<td class="text-center">
								{{ $cuestionario->respuesta15 }}									
							</td>							
						</tr>
					</tbody>
			</table>
			<div class="text-center">
				<a href="{{url('docente/tutorias/encuestas')}}" class="btn btn-danger">Regresar</a>
				<a href="{{url('docente/perfil_academico/'.$alumno->nia)}}" class="btn btn-success">
					Descargar Pdf
				</a> 
			</div>
		</div>
	</div>
</div>	
@include('includes.footer')
@endsection
