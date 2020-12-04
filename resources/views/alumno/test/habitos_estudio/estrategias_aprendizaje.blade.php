@extends('layouts.app')

@section('titulo','Estrategias de aprendizaje')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">		   
			<h2 class="title text-center" style="margin-bottom: 30px;">Estrategias de aprendizaje</h2>
			<h4 style="margin-bottom: 20px;" class="text-justify"><b>Instrucciones:</b> Lee cuidadosamente las siguientes 
			afirmaciones y marca la respuesta si, con base en tu experiencia, son falsas o verdaderas.</h4>				
			<form method="post" action="{{url('alumno/test/habitos_estudio/estrategia_aprendizaje')}}">
				{{ csrf_field() }} 
				<div class="table-responsive" style="margin: auto;">       												
					<table class="table table-bordered">				
						<tbody>							
							<!--R1-->
							<tr>							
								<td>1. Cuando estudio, procuro aprenderme los temas de memoria.</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta1" value="V"> V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta1" value="F"> F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>									
								</td>							
							</tr>
							<!--R2-->
							<tr>							
								<td>2. Me cuesta relacionar la asignatura con otros temas o ideas.</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta2" value="V"> V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta2" value="F"> F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>									
								</td>							
							</tr>
							<!--R3-->
							<tr>							
								<td>3. Estudio con base en mis apuntes y no consulto otras fuentes.</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta3" value="V"> V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta3" value="F"> F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>									
								</td>							
							</tr>
							<!--R4-->
							<tr>							
								<td>4. Me cuesta mucho realizar preguntas si tengo dudas en clase.</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta4" value="V"> V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta4" value="F"> F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>									
								</td>							
							</tr>
							<!--R5-->
							<tr>							
								<td>5. Cuando estudio me cuesta trabajo resumir mentalmente lo que estoy aprendiendo.</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta5" value="V"> V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta5" value="F"> F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>									
								</td>							
							</tr>
							<!--R6-->
							<tr>							
								<td>6. Nunca empleo procedimientos para recordar fechas, datos, etc.</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta6" value="V"> V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta6" value="F"> F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>									
								</td>							
							</tr>	
							<!--R7-->
							<tr>							
								<td>7. Cuando leo no acostumbro tomar notas ni subrayar las palabras interesantes.</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta7" value="V"> V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta7" value="F"> F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>									
								</td>							
							</tr>
							<!--R8-->
							<tr>							
								<td>8. No acostumbro leer previamente la portada e índice del libro.</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta8" value="V"> V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta8" value="F"> F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>									
								</td>							
							</tr>
							<!--R9-->
							<tr>							
								<td>9. Por lo regular no tomo apuntes en clase.</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta9" value="V"> V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta9" value="F"> F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>									
								</td>							
							</tr>	
							<!--R10-->
							<tr>							
								<td>10. Me cuesta trabajo cumplir con los compromisos académicos.</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta10" value="V"> V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta10" value="F"> F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>									
								</td>							
							</tr>	
							<!--R11-->
							<tr>							
								<td>11. Tengo dificultad para seguir las explicaciones del profesor en clase.</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta11" value="V"> V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta11" value="F"> F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>									
								</td>							
							</tr>
							<!--R12-->
							<tr>							
								<td>12. No subrayo las palabras más importantes.</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta12" value="V"> V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta12" value="F"> F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>									
								</td>							
							</tr>
							<!--R13-->
							<tr>							
								<td>13. No acostumbro realizar esquemas.</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta13" value="V"> V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta13" value="F"> F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>									
								</td>							
							</tr>																	
							<!--R14-->
							<tr>							
								<td>14. Estudio un día antes del examen.</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta14" value="V"> V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta14" value="F"> F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>									
								</td>							
							</tr>
							<!--R15-->
							<tr>							
								<td>15. Me pongo muy nervioso cuando tengo un examen.</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta15" value="V"> V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta15" value="F"> F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>									
								</td>							
							</tr>
							<!--R16-->
							<tr>							
								<td>16. En los exámenes empleo normalmente mucho más tiempo en las primeras preguntas y tengo que apresurarme en las restantes.</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta16" value="V"> V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta16" value="F"> F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>									
								</td>							
							</tr>
							<!--R17-->
							<tr>							
								<td>17. Cuando tengo que realizar un trabajo no planifico el tiempo que debo dedicarle.</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta17" value="V"> V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta17" value="F"> F
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
					<a href="{{url('/alumno/test/habitos_estudio')}}" class="btn btn-danger">Cancelar</a> 
				</div>
			</form>                  
		</div>              
	</div>
</div>
@include('includes.footer')
@endsection
