@extends('layouts.app')

@section('titulo','Alumno de bajo rendimiento')

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
				<h2 class="title text-center" style="color: black;">Registrar  alumnos de bajo rendimiento</h2>
				<form method="post" action="{{url('docente/tutorias/alumnos_bajo_rendimiento')}}">
					{{csrf_field()}}
					<div class="row mb-5">
						<div class="col-md-6">
					      <label class="text-dark">Nombre de la materia</label>
					      <select class="form-control" name="materia_name">
					      	@foreach($materias as $materia)
					        	<option value="{{$materia->name}}">{{$materia->name}} || {{$materia->clave}}</option>
					        @endforeach        
					      </select>
					    </div>
					    <div class="col-md-6">
					      <label class="text-dark">Nombre del docente</label>
					      <select class="form-control" name="docente_name">
					      	@foreach($docentes as $docente)				      						      		
					        	<option value="{{$docente->name}} {{$docente->apellidoP}} {{$docente->apellidoM}}">
					        		{{$docente->name}} {{$docente->apellidoP}} {{$docente->apellidoM}}
					        	</option>        	
					        @endforeach        
					      </select>
					    </div>
					   	<div class="col-md-4 mt-1">
					      <label class="text-dark">Total de alumnos</label>
					      <input type="number" class="form-control" name="total_alumnos">
					    </div>		
						<div class="col-md-4">
							<label class="text-dark">Grupo</label>
							<input class="form-control mt-1" 
									value="{{$materia_grupo->name}} {{$materia_grupo->semestre}} {{$materia_grupo->grupo}}"
									name="grupo">
						</div>
						<div class="col-md-4 mt-2">
							<label class="text-dark">Porcentaje</label>
							<input type="number" class="form-control" name="porcentaje">
						</div>						
					</div>				
					<div class="text-center">
						<button class="btn btn-success" type="submit">Agregar registro</button>
						<a href="{{url('/docente/tutorias/alumnos_bajo_rendimiento')}}" class="btn btn-danger">Cancelar</a>		
					</div>
				</form>						   					
			</div>
		</div>             	
	</div>              	
</div>
@include('includes.footer')
@endsection