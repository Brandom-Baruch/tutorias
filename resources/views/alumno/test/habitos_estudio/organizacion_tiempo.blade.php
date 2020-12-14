@extends('layouts.app')

@section('titulo','Organización del Tiempo')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">		   
			<h2 class="title text-center" style="margin-bottom: 30px;">Organización del Tiempo</h2>
			<h4 style="margin-bottom: 20px;" class="text-justify"><b>Instrucciones:</b> Lee cuidadosamente las siguientes 
			afirmaciones y marca la respuesta si, con base en tu experiencia, son falsas o verdaderas.</h4>
				
			<form method="post" action="{{url('alumno/test/habitos_estudio/organizacion_tiempo')}}">
				{{ csrf_field() }} 
				<div class="table-responsive" style="width: 80%; margin: auto;">       												
					<table class="table table-bordered">				
						<tbody>							
							<!--R1-->
							<tr>							
								<td>1. No tengo un lugar fijo para estudiar.</td>
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
								<td>2. Me gusta estudiar viendo televisión o escuchando música.</td>
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
								<td>3. Me gusta estudiar frente a la ventana.</td>
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
								<td>4. Frecuentemente estudio o leo acostado en la cama.</td>
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
								<td>5. No me importa estudiar con poca luz.</td>
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
