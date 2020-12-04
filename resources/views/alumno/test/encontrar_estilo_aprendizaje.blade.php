@extends('layouts.app')

@section('titulo','Encontrar su estilo de aprendizaje')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">		   
			<h2 class="title text-center" style="margin-bottom: 30px;">Encontrar tu estilo de aprendizaje</h2>
			<h4 style="margin-bottom: 20px;" class="text-center">Lee con cuidado las siguientes declaraciones y califícalas, en términos de utilidad, según la siguiente escala:</h4>

			<div class="table-responsive">	
				<table class="table table-borderless" style="width: 500px; margin: auto; margin-bottom: 20px;">				
					<tbody>
						<tr>						
							<td class="text-center">Nada útil<br>1</td>
							<td class="text-center">No muy útil<br>2</td>
							<td class="text-center">Neutral<br>3</td>
							<td class="text-center">Algo útil<br>4</td>
							<td class="text-center">Muy útil<br>5</td>
						</tr>						
					</tbody>
				</table>				
			</div>
			
			<form method="post" action="{{url('alumno/test/encontrar_estilo_aprendizaje')}}">
				{{ csrf_field() }} 
				<div class="table-responsive">       												
					<table class="table table-bordered">				
						<tbody>
							<!--R1-->
							<tr>							
								<td>Estudiar solo.</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta1" value="1"> 1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta1" value="2"> 2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta1" value="3"> 3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta1" value="4"> 4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta1" value="5"> 5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>	
								</td>							
							</tr>
							<!--R2-->
							<tr>
								<td>Estudiar imágenes y diagramas para entender ideas complejas.</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta2" value="1"> 1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta2" value="2"> 2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta2" value="3"> 3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta2" value="4"> 4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta2" value="5"> 5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>	
								</td>						
							</tr>
							<!--R3-->
							<tr>
								<td>Escuchar la clase.</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta3" value="1"> 1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta3" value="2"> 2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta3" value="3"> 3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta3" value="4"> 4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta3" value="5"> 5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>	
								</td>							
							</tr>
							<!--R4-->
							<tr>
								<td>Realizar yo mismo en vez de leer y escuchar al respecto.</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta4" value="1"> 1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta4" value="2"> 2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta4" value="3"> 3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta4" value="4"> 4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta4" value="5"> 5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>	
								</td>							
							</tr>
							<!--R5-->
							<tr>
								<td>Aprender un procedimiento complicado mediante la lectura de instrucciones por escrito.</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta5" value="1"> 1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta5" value="2"> 2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta5" value="3"> 3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta5" value="4"> 4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta5" value="5"> 5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>	
								</td>							
							</tr>
							<!--R6-->
							<tr>
								<td>Ver y escuchar presentaciones en video, en computadora o en película.</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta6" value="1"> 1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta6" value="2"> 2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta6" value="3"> 3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta6" value="4"> 4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta6" value="5"> 5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>	
								</td>							
							</tr>
							<!--R7-->
							<tr>
								<td>Escuchar un libro o una clase en audio.</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta7" value="1"> 1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta7" value="2"> 2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta7" value="3"> 3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta7" value="4"> 4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta7" value="5"> 5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>	
								</td>							
							</tr>
							<!--R8-->
							<tr>
								<td>Realizar trabajo en laboratorio.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta8" value="1"> 1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta8" value="2"> 2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta8" value="3"> 3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta8" value="4"> 4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta8" value="5"> 5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>	
								</td>							
							</tr>
							<!--R9-->
							<tr>
								<td>Estudiar en libros.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta9" value="1"> 1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta9" value="2"> 2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta9" value="3"> 3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta9" value="4"> 4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta9" value="5"> 5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>	
								</td>							
							</tr>
							<!--R10-->
							<tr>
								<td>Estudiar en una habitación silenciosa.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta10" value="1"> 1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta10" value="2"> 2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta10" value="3"> 3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta10" value="4"> 4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta10" value="5"> 5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>	
								</td>							
							</tr>
							<!--R11-->
							<tr>
								<td>Tomar parte en las discusiones de grupo.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta11" value="1"> 1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta11" value="2"> 2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta11" value="3"> 3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta11" value="4"> 4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta11" value="5"> 5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>	
								</td>							
							</tr>
							<!--R12-->
							<tr>
								<td>Tomar parte en demostraciones prácticas en clase.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta12" value="1"> 1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta12" value="2"> 2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta12" value="3"> 3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta12" value="4"> 4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta12" value="5"> 5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>	
								</td>							
							</tr>
							<!--R13-->
							<tr>
								<td>Tomar apuntes y leerlos después.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta13" value="1"> 1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta13" value="2"> 2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta13" value="3"> 3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta13" value="4"> 4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta13" value="5"> 5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>	
								</td>							
							</tr>																		
						</tbody>
					</table>
				</div>
				<div class="text-center">
					<button class="btn btn-success">Finalizar</button>
					<a href="{{url('/alumno/test')}}" class="btn btn-danger">Cancelar</a> 
				</div>
			</form>                  
		</div>              
	</div>
</div>
@include('includes.footer')
@endsection
