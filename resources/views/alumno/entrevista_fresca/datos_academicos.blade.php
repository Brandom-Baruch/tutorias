@extends('layouts.app')

@section('titulo','Datos Academicos')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">		   
			<h2 class="title text-center" style="color: black;">Datos Academicos</h2>
			@if (session('mensaje'))              
			<div class="alert alert-success text-left">
				<div class="container-fluid">
					<div class="alert-icon">
						<i class="material-icons">check</i>
					</div>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true"><i class="material-icons">clear</i></span>
					</button>
					{{ session('mensaje') }}
				</div>
			</div>
			@endif
			<form method="post" action="{{url('alumno/entrevista/datos/academicos')}}">
				{{ csrf_field() }}        												
				<div class="form-row">
					<div class="form-group col-md-4">
						<label style="color: black;"><b>¿En dónde cursaste la secundaria?</b></label>						
						<div class="form-check">
							<div class="form-check col-md-8">								
								<input type="text" class="form-control text-dark" name="respuesta1" value="{{old('respuesta1')}}">
							</div>
						</div>
					</div>
					<div class="form-group col-md-4">
						<label style="color: black;"><b>¿Qué materias te gustaron más en la secundaria?</b></label>					
						<div class="form-check">
							<div class="form-check col-md-10">								
								<input type="text" class="form-control text-dark" name="respuesta2" value="{{old('respuesta2')}}">
							</div>
						</div>
						<div class="form-check {{ $errors->has('r2') ? ' has-error' : '' }}">						
							<label style="color: black;">Porque?</label>
							@if ($errors->has('r2'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('r2') }}</strong>
							</span>
							@endif
							<div class="form-check col-md-10">								
								<input type="text" class="form-control text-dark" name="r2">
							</div>							
						</div>
					</div>
					<div class="form-group col-md-4">
						<label style="color: black;"><b>¿Cómo consideras tu desempeño escolar al momento?</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="Bueno" >
								Bueno 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="Regular">
								Regular
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="Malo">
								Malo  
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>						
					</div>	
					<div class="form-group col-md-12">
						<label style="color: black;"><b>¿Crees que tus resultados escolares obtenido, corresponden con el esfuerzo que invierte en ellos?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="Si" >
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="No" >
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label style="color: black;">Porque?</label>
							<div class="form-check col-md-6">								
								<input type="text" class="form-control text-dark" name="r4">
							</div>
						</div>									
					</div>										
				</div>																							
				<button class="btn btn-primary">Finalizar</button>
				<a href="{{url('/alumno/entrevista')}}" class="btn btn-danger">Cancelar</a> 
			</form>                  
		</div>              
	</div>
</div>
@include('includes.footer')
@endsection
