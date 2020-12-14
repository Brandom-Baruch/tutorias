@extends('layouts.app')

@section('titulo','Crear registro de tutorias')

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
				<h2 class="title text-center" style="color: black;">Registrar información del área de  tutorías</h2>
				<form method="post" action="{{url('docente/tutorias/reporte_tutorias')}}">

					{{csrf_field()}}
					<div class="row mb-5">						
						<div class="col-md-4">
					      <label class="text-dark">Nombre del director</label>
					      <input  type="text" class="form-control mb-3" name="director_name" 
					      		  value="{{old('director_name')}}">
					    </div>					   						   				

					    <div class="col-md-4">
					      <label class="text-dark">Nombre del tutor escolar</label>
					      <input  type="text" class="form-control mb-3" name="tutor_escolar_name"
					      		  value="{{old('tutor_escolar_name')}}">
					    </div>

					    <div class="col-md-4">
					      <label class="text-dark">Nombre del orientador (psicólogo escolar)</label>
					      <input  type="text" class="form-control mb-3" name="orientador_name"
					      		 value="{{old('orientador_name')}}">
					    </div>


						<div class="col-md-4">
					      <label class="text-dark">Ciclo Escolar</label>
					      <input  type="text" class="form-control " name="ciclo_escolar"
					      		  value="{{old('ciclo_escolar')}}">
					    </div>
					    
					    <div class="col-md-4">
					      <label class="text-dark">Fecha</label>
					      <input  type="date" class="form-control mb-3" name="fecha"
								  value="{{old('fecha')}}">
					    </div>			
					    

					    <div class="col-md-4">
					      <label class="text-dark">Total hombres</label>
					      <input  type="number" class="form-control mb-3" name="total_hombres"
								  value="{{old('total_hombres')}}">
					    </div>

					    <div class="col-md-4">
					      <label class="text-dark">Total mujeres</label>
					      <input  type="number" class="form-control mb-3" name="total_mujeres"
					      		  value="{{old('total_mujeres')}}">
					    </div>

					    <div class="col-md-4">
					      <label class="text-dark">Bajas registradas</label>
					      <input  type="number" class="form-control mb-3" name="bajas_registradas"
					      		  value="{{old('bajas_registradas')}}">
					    </div>

					    <div class="col-md-4">
					      <label class="text-dark">Altas registradas</label>
					      <input  type="number" class="form-control mb-3" name="altas_registradas"
					      		  value="{{old('altas_registradas')}}">
					    </div>					    

					    <div class="col-md-3">
					      <label class="text-dark">Numero de alumnos que tienen 3 materias reprobadas</label>
					      <input  type="number" class="form-control mb-3" name="alumnos_mas_de_tres_materia_reprobada"
					      		  value="{{old('alumnos_mas_de_tres_materia_reprobada')}}">
					    </div>

					    <div class="col-md-3">
					      <label class="text-dark">Numero de alumnos que necestian seguimiento</label>
					      <input  type="number" class="form-control mb-3" name="alumnos_necesitan_seguimiento"
					      		  value="{{old('alumnos_necesitan_seguimiento')}}">
					    </div>

					    <div class="col-md-3">
					      <label class="text-dark">Numero de alumnos que requieren orientación</label>
					      <input  type="number" class="form-control mb-3" name="alumnos_requieren_orientacion"
					      		  value="{{old('alumnos_requieren_orientacion')}}">
					    </div>

					    <div class="col-md-3">
					      <label class="text-dark">Numero de alumnos que requieren atención especial</label>
					      <input  type="number" class="form-control mb-3" name="alumnos_requieren_atencion_especial"
								  value="{{old('alumnos_requieren_atencion_especial')}}">
					    </div>					

					    <div class="col-md-3">
					      <label class="text-dark">Numero de alumnos canalizados a alguna institución</label>
					      <input  type="number" class="form-control mb-3" name="alumnos_canalizados_alguna_institucion"
					      		  value="{{old('alumnos_canalizados_alguna_institucion')}}">
					    </div>

					    <div class="col-md-9">
					      <label class="text-dark">Principales motvos de baja</label>					      
					      <textarea class="form-control" rows="2" name="principales_motivos_baja">{{old('principales_motivos_baja')}}</textarea>
					    </div>
					</div>				
					<div class="text-center">
						<button class="btn btn-success" type="submit">Agregar registro</button>
						<a href="{{url('docente/tutorias/reporte_tutorias')}}" class="btn btn-danger">Cancelar</a>		
					</div>
				</form>						   					
			</div>
		</div>             	
	</div>              	
</div>
@include('includes.footer')
@endsectionreporte_tutorias_create.blade.php