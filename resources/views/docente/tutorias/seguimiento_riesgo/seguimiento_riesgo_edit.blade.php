@extends('layouts.app')

@section('titulo','Editar seguimiento del  alumno '. $seguimiento->alumno_id)

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')    

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

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
	<div class="profile-content">
		<div class="container">
			<div class="row">
				<div class="col-md-6 ml-auto mr-auto">
					<div class="profile">          
						<div class="name">              
						</div>
					</div>
				</div>
			</div><br>
			@if($errors->any())
			<div class="alert alert-danger">
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
			<div class="description text-center">
				<h3 class="title">Editar  seguimiento del alumno 
					<b class="text-primary">{{ $seguimiento->alumnos[0]->name }}</b>
				</h3>
			</div>        					
			<form method="post" action="{{url('docente/tutorias/seguimientos_alumno_riesgo/'.$seguimiento->id.'/edit')}}">
				{{ csrf_field() }}
				<div class="row  justify-content-end">
					<div class="col-md-4 mb-3">
						<label class="text-dark">Fecha de aplicación</label>
						<input type="date" class="form-control" name="fecha" value="{{ old('fecha', $seguimiento->fecha) }}">
					</div>
				</div>
				<div class="row border border-dark">

					<div class="col-md-4 mb-2">
				      <label class="text-dark">Nombre del alumno(a)</label>
				      <select class="form-control" name="alumno_id">
				      		<option value="">
				      			Sin Alumno
				        	</option>
				        @foreach($alumnos as $alumno)
				        	<option value="{{ $alumno->nia}}" 
				        		@if($seguimiento->alumno_id == old('alumno_id', $alumno->nia)) selected @endif>
				        		{{ $alumno->name }} {{ $alumno->apellidoP }} {{ $alumno->apellidoM }}
				        	</option>
				        @endforeach
				      </select>
				    </div>

					<!--<div class="col-md-4 mb-5">
						<label class="text-dark">Matricula</label>
						<input type="number" step="any" class="form-control">
					</div>
					<div class="col-md-4 mb-5">
						<label class="text-dark">Semestre que cursa</label>
						<input type="text" class="form-control">
					</div>-->
					<div class="col-md-4 mb-5">
						<label class="text-dark">Promedio acumulado</label>
						<input type="text" step="any"  class="form-control" name="promedio_acumulado" 
							value="{{ old('promedio_acumulado', $seguimiento->promedio_acumulado) }}">
					</div>
					<div class="col-md-4 mb-5">
						<label class="text-dark">Promedio del ciclo actual</label>
						<input type="number" step="any" class="form-control" name="promedio_acumulado_ciclo_actual"
							value="{{ old('promedio_acumulado_ciclo_actual', $seguimiento->promedio_acumulado_ciclo_actual) }}">
					</div>
					
					<!--<div class="col-md-4 mb-5">
						<label class="text-dark">Maestro Tutor</label>
						<input type="text" class="form-control">
					</div>-->


					<div class="col-md-12 mb-5">
						<label class="text-dark">¿Es beneficiario(a) de algún programa de becas o apoyos financieros?</label>
						<input type="text" class="form-control text-dark" placeholder="¿Cuál" name="beneficiario_beca_apoyo"
							value="{{ old('beneficiario_beca_apoyo', $seguimiento->beneficiario_beca_apoyo) }}">
					</div>
				</div> 	
				<div class="row border border-dark mt-5">
					<div class="col-md-12 mt-2 mb-4">
						<label class="text-dark">
							¿Se cuenta con información sobre cuestiones relacionadas con el estado de salud del alumnoa(a)?
						</label>
						<input type="text" class="form-control" placeholder="(Breve descripción)" name="estado_salud_alumno"
							value="{{ old('estado_salud_alumno', $seguimiento->estado_salud_alumno) }}">
					</div>					
					<div class="col-md-12 mb-5">
						<label class="text-dark">
							¿Se cuenta con alguna información específica sobre el contexto familiar del alumno(a)?
						</label>
						<input type="text" class="form-control" placeholder="(Breve descripción)" name="contexto_familiar_alumno"
							value="{{ old('contexto_familiar_alumno', $seguimiento->contexto_familiar_alumno) }}">
					</div>
				</div> 
				<!--Docentes-->
				<div class="row border border-dark mt-5">
					<h4 class="title text-center">
						COMENTARIOS DE LOS DOCENTES SOBRE LA FORTALEZA Y ÁREAS DE OPORTUNIDAD DEL ALUMNO(A) ACADÉMICAS Y PERSONALES
					</h4>
					<div class="col-12">
						<h4><b>Nota:</b> Por lo menos escoga 3 docentes para realizar el seguimiento</h4>
					</div>
					<!--Docente 1-->
					<br>
					<div class="col-md-4 mt-1 mb-4">
				      <label class="text-dark">1. Nombre del maestro</label>
				      <select class="form-control" name="docente1">
				      		<option value="">
				      			Sin maestro
				        	</option>
				        @foreach($docentes as $docente)
				        	<option value="{{ $docente->name }} {{ $docente->apellidoP }} {{ $docente->apellidoM }}"
				        		@if($seguimiento->docente1 == old('docente1', "$docente->name $docente->apellidoP $docente->apellidoM")) selected @endif>
				        		{{ $docente->name }} {{ $docente->apellidoP }} {{ $docente->apellidoM }}
				        	</option>
				        @endforeach
				      </select>
				    </div>


				    <div class="col-md-4 mt-1 mb-4">
				      <label class="text-dark">1. Nombre de la materia</label>
				      <select class="form-control" name="materia1">
				      		<option value="">
				      			Sin Materia
				        	</option>
				        @foreach($materias as $materia)
				        	<option value="{{ $materia->name }}"
				        		@if($seguimiento->materia1 == old('materia1',  $materia->name)) selected @endif>
				        		{{ $materia->name }}
				        	</option>
				        @endforeach
				      </select>
				    </div>
	
					<div class="col-md-4 mt-2 mb-4">
						<label class="text-dark">1. Comentarios</label>
						<textarea class="form-control" rows="1" name="comentarios1">{{ old('comentarios1', $seguimiento->comentarios1) }}</textarea>
					</div>
					<!--Docente 2-->
					<div class="col-md-4 mt-1 mb-4">
				      <label class="text-dark">2. Nombre del maestro</label>
				      <select class="form-control" name="docente2">
				      		<option value="">
				      			Sin maestro
				        	</option>
				        @foreach($docentes as $docente)
				        	<option value="{{ $docente->name }} {{ $docente->apellidoP }} {{ $docente->apellidoM }}"
				        		@if($seguimiento->docente2 == old('docente2', "$docente->name $docente->apellidoP $docente->apellidoM")) selected @endif>
				        		{{ $docente->name }} {{ $docente->apellidoP }} {{ $docente->apellidoM }}
				        	</option>
				        @endforeach
				      </select>
				    </div>

					<div class="col-md-4 mt-1 mb-4">
				      <label class="text-dark">2. Nombre de la materia</label>
				      <select class="form-control" name="materia2">
				      		<option value="">
				      			Sin Materia
				        	</option>
				        @foreach($materias as $materia)
				        	<option value="{{ $materia->name }}"
				        		@if($seguimiento->materia2 == old('materia2',  $materia->name)) selected @endif>
				        		{{ $materia->name }}
				        	</option>
				        @endforeach
				      </select>
				    </div>

					<div class="col-md-4 mt-2 mb-4">
						<label class="text-dark">2. Comentarios</label>
						<textarea class="form-control" rows="1" name="comentarios2">{{ old('comentarios2',$seguimiento->comentarios2) }}</textarea>
					</div>
					<!--Docente 3-->
					<div class="col-md-4 mt-1 mb-4">
				      <label class="text-dark">3. Nombre del maestro</label>				      		
				      <select class="form-control" name="docente3">
				      		<option value="">
				      			Sin maestro
				        	</option>
				        @foreach($docentes as $docente)
				        	<option value="{{ $docente->name }} {{ $docente->apellidoP }} {{ $docente->apellidoM }}"
				        		@if($seguimiento->docente3 == old('docente3', "$docente->name $docente->apellidoP $docente->apellidoM")) selected @endif>
				        		{{ $docente->name }} {{ $docente->apellidoP }} {{ $docente->apellidoM }}
				        	</option>
				        @endforeach
				      </select>
				    </div>

					<div class="col-md-4 mt-1 mb-4">
				      <label class="text-dark">3. Nombre de la materia</label>
				      <select class="form-control" name="materia3">
				      		<option value="">
				      			Sin Materia
				        	</option>
				        @foreach($materias as $materia)
				        	<option value="{{ $materia->name }}"
				        		@if($seguimiento->materia3 == old('materia3',  $materia->name)) selected @endif>
				        		{{ $materia->name }}
				        	</option>
				        @endforeach
				      </select>
				    </div>

					<div class="col-md-4 mt-2 mb-4">
						<label class="text-dark">3. Comentarios</label>
						<textarea class="form-control" rows="1" name="comentarios3">{{ old('comentarios3',$seguimiento->comentarios3) }}</textarea>
					</div>
					<!--Docente 4-->
					<div class="col-md-4 mt-1 mb-4">
				      <label class="text-dark">4. Nombre del maestro</label>
				      <select class="form-control" name="docente4">
				      		<option value="">
				      			Sin maestro
				        	</option>
				        @foreach($docentes as $docente)
				        	<option value="{{ $docente->name }} {{ $docente->apellidoP }} {{ $docente->apellidoM }}"
				        		@if($seguimiento->docente4 == old('docente4', "$docente->name $docente->apellidoP $docente->apellidoM")) selected @endif>
				        		{{ $docente->name }} {{ $docente->apellidoP }} {{ $docente->apellidoM }}
				        	</option>
				        @endforeach
				      </select>
				    </div>

					<div class="col-md-4 mt-1 mb-4">
				      <label class="text-dark">4. Nombre de la materia</label>
				      <select class="form-control" name="materia4">
				      		<option value="">
				      			Sin Materia
				        	</option>
				        @foreach($materias as $materia)
				        	<option value="{{ $materia->name }}"
				        		@if($seguimiento->materia4 == old('materia4',  $materia->name)) selected @endif>
				        		{{ $materia->name }}
				        	</option>
				        @endforeach
				      </select>
				    </div>

					<div class="col-md-4 mt-2 mb-4">
						<label class="text-dark">4. Comentarios</label>
						<textarea class="form-control" rows="1" name="comentarios4">{{ old('comentarios4',$seguimiento->comentarios4) }}</textarea>
					</div>
					<!--Docente 5-->
					<div class="col-md-4 mt-1 mb-4">
				      <label class="text-dark">5. Nombre del maestro</label>
				      <select class="form-control" name="docente5">
				      		<option value="">
				      			Sin maestro
				        	</option>
				        @foreach($docentes as $docente)
				        	<option value="{{ $docente->name }} {{ $docente->apellidoP }} {{ $docente->apellidoM }}"
				        		@if($seguimiento->docente5 == old('docente5', "$docente->name $docente->apellidoP $docente->apellidoM")) selected @endif>
				        		{{ $docente->name }} {{ $docente->apellidoP }} {{ $docente->apellidoM }}
				        	</option>
				        @endforeach
				      </select>
				    </div>

					<div class="col-md-4 mt-1 mb-4">
				      <label class="text-dark">5. Nombre de la materia</label>
				      <select class="form-control" name="materia5">
				      		<option value="">
				      			Sin Materia
				        	</option>
				        @foreach($materias as $materia)
				        	<option value="{{ $materia->name }}"
				        		@if($seguimiento->materia5 == old('materia5',  $materia->name)) selected @endif>
				        		{{ $materia->name }}
				        	</option>
				        @endforeach
				      </select>
				    </div>

					<div class="col-md-4 mt-2 mb-4">
						<label class="text-dark">5. Comentarios</label>
						<textarea class="form-control" rows="1" name="comentarios5">{{ old('comentarios5',$seguimiento->comentarios5) }}</textarea>
					</div>
					<!--Docente 6-->
					<div class="col-md-4 mt-1 mb-4">
				      <label class="text-dark">6. Nombre del maestro</label>
				      <select class="form-control" name="docente6">
				      		<option value="">
				      			Sin maestro
				        	</option>
				        @foreach($docentes as $docente)
				        	<option value="{{ $docente->name }} {{ $docente->apellidoP }} {{ $docente->apellidoM }}"
				        		@if($seguimiento->docente6 == old('docente6', "$docente->name $docente->apellidoP $docente->apellidoM")) selected @endif>
				        		{{ $docente->name }} {{ $docente->apellidoP }} {{ $docente->apellidoM }}
				        	</option>
				        @endforeach
				      </select>
				    </div>

					<div class="col-md-4 mt-1 mb-4">
				      <label class="text-dark">6. Nombre de la materia</label>
				      <select class="form-control" name="materia6">
				      		<option value="">
				      			Sin Materia
				        	</option>
				        @foreach($materias as $materia)
				        	<option value="{{ $materia->name }}"
				        		@if($seguimiento->materia6 == old('materia6',  $materia->name)) selected @endif>
				        		{{ $materia->name }}
				        	</option>
				        @endforeach
				      </select>
				    </div>

					<div class="col-md-4 mt-2 mb-4">
						<label class="text-dark">6. Comentarios</label>
						<textarea class="form-control" rows="1" name="comentarios6">{{ old('comentarios6',$seguimiento->comentarios6) }}</textarea>
					</div>
					<!--Docente 7-->
					<div class="col-md-4 mt-1 mb-4">
				      <label class="text-dark">7. Nombre del maestro</label>
				      <select class="form-control" name="docente7">
				      		<option value="">
				      			Sin maestro
				        	</option>
				        @foreach($docentes as $docente)
				        	<option value="{{ $docente->name }} {{ $docente->apellidoP }} {{ $docente->apellidoM }}"
				        		@if($seguimiento->docente7 == old('docente7', "$docente->name $docente->apellidoP $docente->apellidoM")) selected @endif>
				        		{{ $docente->name }} {{ $docente->apellidoP }} {{ $docente->apellidoM }}
				        	</option>
				        @endforeach
				      </select>
				    </div>

					<div class="col-md-4 mt-1 mb-4">
				      <label class="text-dark">7. Nombre de la materia</label>
				      <select class="form-control" name="materia7">
				      		<option value="">
				      			Sin Materia
				        	</option>
				        @foreach($materias as $materia)
				        	<option value="{{ $materia->name }}"
				        		@if($seguimiento->materia7 == old('materia7',  $materia->name)) selected @endif>
				        		{{ $materia->name }}
				        	</option>
				        @endforeach
				      </select>
				    </div>

					<div class="col-md-4 mt-2 mb-4">
						<label class="text-dark">7. Comentarios</label>
						<textarea class="form-control" rows="1" name="comentarios7">{{ old('comentarios7',$seguimiento->comentarios7) }}</textarea>
					</div>
				</div> 
				<div class="row border border-dark mt-5">
					<h4 class="title text-center">
						REGISTRO DEL DESEMPEÑO ESCOLAR (Calificaciones parciales y comentarios de sus maestros)
						Si se trata de boletas de califiación separadas, pueden incluirse como anexo.
					</h4>
					<div class="col-md-12 mt-2 mb-4">
						<textarea class="form-control" rows="3" name="desempeño_escolar">{{ old('desempeño_escolar',$seguimiento->desempeño_escolar) }}</textarea>
					</div>
				</div>	
				<div class="row border border-dark mt-5">
					<div class=" col-12 text-center">
						<h4 class="title">PRINCIPALES COMPROMISOS Y ACUERDOS</h4>
					</div>
					<div class="col-md-12 mt-2 mb-5">
						<label class="text-dark">Compromisos y acuerdos</label>
						<textarea class="form-control" rows="5" name="compromisos_acuerdos">{{ old('compromisos_acuerdos',$seguimiento->compromisos_acuerdos) }}</textarea>
					</div>
				</div><br>
				<div class="col-12 text-center">
					<button class="btn btn-success">Registrar</button>
					<a href="{{ url('/docente/tutorias/seguimientos_alumno_riesgo') }}" class="btn btn-danger">Cancelar</a>
				</div>			
			</form><br>                                                                          			                      
		</div>
	</div>
</div>
@include('includes.footer')
@endsection
