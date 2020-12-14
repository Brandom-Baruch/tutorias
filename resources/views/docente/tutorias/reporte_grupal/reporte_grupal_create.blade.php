@extends('layouts.app')

@section('titulo','Registrar reporte grupal')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')
@if(Auth::user()->puestos->where('puesto','Director')->first())
	@include('includes.links_director')
@endif
@if(Auth::user()->materias()->where('name','like','%tutorias%')->get() && 
Auth::user()->puestos->where('puesto','Tutor')->first())
	@include('includes.links_tutor')
@endif
<a  class="dropdown-item" href="{{url('docente')}}">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">
		<div class="row">
			<div class="col-12">
				@if($errors->any())
				<div class="alert alert-danger mt-4">
					<div class="container-fluid">                     
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true"><i class="material-icons">clear</i></span>
						</button>
						<ul>    
							@foreach($errors->all() as $error)                        
							<li>{{$error}}</li>
							@endforeach
						</ul>
					</div>
				</div>
				@endif 
				<h2 class="title text-center" style="color: black;">Registrar reporte grupal</h2>
				<h4 class="text-center">Grupo: <b class="text-primary">{{ $grupo->name }} {{ $grupo->grado }} {{ $grupo->grupo }}</b></h4>
				<h4 class="text-center">No. Alumnos:<b> {{ $grupo->alumnos()->count() }}</b></h4><br>
				<form method="post" action="{{url('docente/tutorias/reporte_grupal')}}">
					{{csrf_field()}}
					<div class="row mb-5">						
						
						<div class="col-md-4">
							<label class="text-dark">Porcentaje de eficiencia terminal</label>
							<input  type="number" class="form-control mb-3" name="porcentaje_eficiencia"
							value="{{old('porcentaje_eficiencia')}}">
						</div>	

						<div class="col-md-4">
							<label class="text-dark">No. Bajas de alumnos</label>
							<input  type="text" class="form-control mb-3" name="bajas" 
							value="{{old('bajas')}}">
						</div>	

						<div class="col-md-4">
							<label class="text-dark">No. Altas de alumnos</label>
							<input  type="text" class="form-control mb-3" name="altas" 
							value="{{old('altas')}}">
						</div>
					</div>
					
					<h4 class="title text-primary">Índice de reprobación</h4>
					<h4>Indica el No de reprobados en las semanas colocadas.</h4><br>

					<div class="row">
						<div class="col-md-4">
							<label class="text-dark">Semana A</label>
							<input  type="number" class="form-control mb-3" name="semanaAR" 
							value="{{old('semanaA')}}">
						</div>

						<div class="col-md-4">
							<label class="text-dark">Semana B</label>
							<input  type="number" class="form-control mb-3" name="semanaBR" 
							value="{{old('semanaB')}}">
						</div>

						<div class="col-md-4">
							<label class="text-dark">Semana C</label>
							<input  type="number" class="form-control mb-3" name="semanaCR" 
							value="{{old('semanaC')}}">
						</div>

						<div class="col-md-4">
							<label class="text-dark">Semana D</label>
							<input  type="number" class="form-control mb-3" name="semanaDR" 
							value="{{old('semanaD')}}">
						</div>

						<div class="col-md-4">
							<label class="text-dark">Semana E</label>
							<input  type="number" class="form-control mb-3" name="semanaER" 
							value="{{old('semanaE')}}">
						</div>						
					</div>
						
					<h4 class="title text-primary">Índice de regularización</h4>
					<h4>Indica el No de reprobados en las semanas colocadas.</h4><br>

					<div class="row">
						<div class="col-md-4">
							<label class="text-dark">Semana A</label>
							<input  type="number" class="form-control mb-3" name="semanaA" 
							value="{{old('semanaA')}}">
						</div>

						<div class="col-md-4">
							<label class="text-dark">Semana B</label>
							<input  type="number" class="form-control mb-3" name="semanaB" 
							value="{{old('semanaB')}}">
						</div>

						<div class="col-md-4">
							<label class="text-dark">Semana C</label>
							<input  type="number" class="form-control mb-3" name="semanaC" 
							value="{{old('semanaC')}}">
						</div>

						<div class="col-md-4">
							<label class="text-dark">Semana D</label>
							<input  type="number" class="form-control mb-3" name="semanaD" 
							value="{{old('semanaD')}}">
						</div>

						<div class="col-md-4">
							<label class="text-dark">Semana E</label>
							<input  type="number" class="form-control mb-3" name="semanaE" 
							value="{{old('semanaE')}}">
						</div>						
					</div>	
					
					<h4 class="title text-primary">Alumnos que se certifican</h4>
					<h4>Indica el No de alumnos que se certifican.</h4><br>

					<div class="row">
						<div class="col-md-6">
							<label class="text-dark">Hombres</label>
							<input  type="number" class="form-control mb-3" name="hombres" 
							value="{{old('hombres')}}">
						</div>

						<div class="col-md-6">
							<label class="text-dark">Mujeres</label>
							<input  type="number" class="form-control mb-3" name="mujeres" 
							value="{{old('mujeres')}}">
						</div>				
					</div>	
					<div class="text-center">
						<button class="btn btn-success" type="submit">Agregar registro</button>
						<a class="btn btn-danger" href="{{ url('/docente/tutorias/reporte_grupal') }}">Regresar</a>
					</div>
				</form>	
			</div>
		</div>             	
	</div>              	
</div>
@include('includes.footer')
@endsectionreporte_tutorias_create.blade.php