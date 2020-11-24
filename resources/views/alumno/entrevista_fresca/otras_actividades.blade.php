@extends('layouts.app')

@section('titulo','Otras Actividades')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">		   
			<h2 class="title text-center" style="color: black; margin-top: 10px;">Otras Actividades</h2>
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
			<form method="post" action="{{url('alumno/entrevista/otras/actividades')}}">
				{{ csrf_field() }}        												
				<div class="form-row">
					<div class="form-group col-md-6 {{ $errors->has('respuesta1') ? ' has-error' : '' }}">
						<label class="text-dark" class="text-dark">¿Qué te gusta hacer en tu tiempo libre? (pasatiempos)</label>
						<input type="text" class="form-control" value="{{old('respuesta1')}}" name="respuesta1">            
						@if ($errors->has('respuesta1'))
						<span class="help-block text-danger">
							<strong>{{ $errors->first('respuesta1') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group col-md-6 {{ $errors->has('respuesta2') ? ' has-error' : '' }}">
						<label class="text-dark" class="text-dark">¿Cuál es el momento MAS FELIZ de tu vida</label>
						<input type="text" class="form-control" value="{{old('respuesta2')}}" name="respuesta2">
						@if ($errors->has('respuesta2'))
						<span class="help-block text-danger">
							<strong>{{ $errors->first('respuesta2') }}</strong>
						</span>
						@endif        
					</div>	
					<div class="form-group col-md-6 {{ $errors->has('respuesta3') ? ' has-error' : '' }}">
						<label class="text-dark" class="text-dark">¿Cuál el momento MAS TRISTE de tu vida</label>
						<input type="text" class="form-control" value="{{old('respuesta3')}}" name="respuesta3">
						@if ($errors->has('respuesta3'))
						<span class="help-block text-danger">
							<strong>{{ $errors->first('respuesta3') }}</strong>
						</span>
						@endif            
					</div>
					<div class="form-group col-md-6 {{ $errors->has('respuesta4') ? ' has-error' : '' }}">
						<label class="text-dark" class="text-dark">Descríbete en los aspectos emocionales e intelectuales</label>
						<input type="text" class="form-control" value="{{old('respuesta4')}}" name="respuesta4">
						@if ($errors->has('respuesta4'))
						<span class="help-block text-danger">
							<strong>{{ $errors->first('respuesta4') }}</strong>
						</span>
						@endif            
					</div>															
				</div>																							
				<button class="btn btn-success">Finalizar</button>
				<a href="{{url('/alumno/entrevista')}}" class="btn btn-danger">Cancelar</a> 
			</form>                  
		</div>              
	</div>
</div>
@include('includes.footer')
@endsection
