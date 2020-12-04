@extends('layouts.app')

@section('titulo','Seguimientos de alumnos')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('docente')}}" class="dropdown-item">Panel de control</a>
@if(Auth::user()->puestos()->where('puesto','Tutor')->first() 
&& Auth::user()->materias()->where('name','like','Tutorias%')->first())
<a href="{{url('docente/tutorias')}}">Tutorias</a>
@endif
@endsection

@section('styles')

<style type="text/css">
	.tt-query {
		-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
		-moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
		box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	}

	.tt-hint {
		color: #999
	}

	.tt-menu {    /* used to be tt-dropdown-menu in older versions */
		width: 200px;
		margin-top: 4px;
		padding: 4px 0;
		background-color: #fff;
		border: 1px solid #ccc;
		border: 1px solid rgba(0, 0, 0, 0.2);
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px;
		-webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
		-moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
		box-shadow: 0 5px 10px rgba(0,0,0,.2);
	}

	.tt-suggestion {
		padding: 3px 20px;
		line-height: 24px;
	}

	.tt-suggestion.tt-cursor,.tt-suggestion:hover {
		color: #fff;
		background-color: #9c27b0;
		cursor: pointer;

	}

	.tt-suggestion p {
		margin: 0;
	}
</style>
@endsection


@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="title text-center" style="color: black;">Seguimiento del alumno</h2>								
				<div class="row">
					<div class="col-12 col-md-12 col-sm-12">				     				    	
						<div class="input-group col-5 col-md-5 col-sm-12  mb-5" style="margin-left:  40%;">
							<form class="form-inline" method="get" action="{{ url('/docente/tutorias/seguimiento_alumno') }}" >	                      	
								<input type="text"  placeholder="Nombre del alumno" class="form-control" 
								name="searches" id="search">
								<button class="btn btn-primary btn-just-icon mt-4" type="submit">
									<i class="material-icons">search</i>
								</button>
							</form>
						</div>				     	
					</div>			    

					<div class="col-md-4 ">
						<label >Nombre</label>
						<p style="font-size: 22px;">{{$alumno->name}}</p>
					</div>				    
					<div class="col-md-4 ">
						<label >Apellido Paterno</label>
						<p style="font-size: 22px;">{{$alumno->apellidoP}}</p>
					</div>				    
					<div class="col-md-4 ">
						<label >Apellido Materno</label>
						<p style="font-size: 22px;">{{$alumno->apellidoM}}</p>
					</div>			
					<div class="col-md-4 ">
						<label >Nia</label>
						<p style="font-size: 22px;">{{$alumno->nia}}</p>
					</div>	    
					<div class="col-md-4 ">
						<label >Grado</label>
						<p style="font-size: 22px;">{{$alumno->grupo->grado}}</p>
					</div>				    
					<div class="col-md-4 ">
						<label >Grupo</label>
						<p style="font-size: 22px;">{{$alumno->grupo->grupo}}</p>
					</div>		
					<div class="col-md-4">
						<label >¿Que se debe de hacer?</label>
						<input type="text" class="form-control" name="">
					</div>
					<div class="col-md-4">
						<label >¿Que ganancias se obtendra?</label>
						<input type="text" class="form-control" name="">
					</div>
					<div class="col-md-4">
						<label >¿Que riesgos correra?</label>
						<input type="text" class="form-control" name="">
					</div>
					<div class="col-md-4  mt-4">
						<label >¿Es beneficiario de algun programa o beca?</label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Si" >
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="No" >
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>												
						<div class="form-check ">
							<label style="color: black;">¿Cuál?</label>
							<input type="text" class="form-control text-dark" name="r1">
						</div>						
					</div>
					<div class="col-md-4 mt-3">
						<label >
							¿Se cuenta con informacion relacionada con la salun del estudiante?
						</label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Si" >
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="No" >
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>												
						<div class="form-check ">
							<label style="color: black;">Especificar</label>
							<input type="text" class="form-control text-dark" name="r1">
						</div>						
					</div>
					<div class=" col-md-4 mt-4">
						<label >
							¿Se cuenta con informacion de algun familiar?
						</label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Si" >
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="No" >
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>												
						<div class="form-check ">
							<label style="color: black;">Especificar</label>
							<input type="text" class="form-control text-dark" name="r1">
						</div>						
					</div>
					<!--COMENTARIOS-->			    
					<div class="col-md-4">
						<label>Nombre del Docente</label>
						<p style="font-size: 22px;">{{Auth::user()->name}} {{Auth::user()->apellidoP}} {{Auth::user()->apellidoM}}</p>
					</div>

					<div class="col-md-4">
						<label>Materia que imparte</label>
						<select id="inputState" class="form-control">
							@foreach(Auth::user()->materias as $materia)
							<option value="{{$materia->id}}">{{$materia->name}}</option>			
							@endforeach				
						</select>
					</div>			    
					<div class="col-md-12 ">
						<label>Comentarios</label>
						<textarea class="form-control mt-2" rows="1"></textarea>
					</div>
					<div class="col-md-12 ">
						<label>Principales compromisos y acuerdos</label>	
						<textarea class="form-control mt-2" rows="1"></textarea>
					</div>		
					<div class="col-12 text-center mt-4 mb-4">
						<button class="btn btn-success">Registrar</button>
						<a href="{{url('/alumno/entrevista')}}" class="btn btn-danger">Cancelar</a> 
					</div>
				</div>				
			</div>
		</div>             	
	</div>              	
</div>
@include('includes.footer')
@endsection
@section('scripts')
<script src="{{ asset('/js/typeahead.bundle.min.js') }}"></script>
<script>
	$(function (){
            //Inicilizar typeahead sobre el input de busqueda
            var alumnos = new Bloodhound({
            	datumTokenizer: Bloodhound.tokenizers.whitespace,
            	queryTokenizer: Bloodhound.tokenizers.whitespace,              
            	prefetch: '{{url('docente/tutorias/listado_alumnos/json')}}'
            });

            //Inicilizar typeahead sobre nuestro input de busqueda
            $('#search').typeahead({
                //Pasamos el objeto de las propiedades
                hint: true,
                highlight: true,
                minLength: 1
            }, {
                //Pasamos el objeto de datasend
                name: 'alumno',
                source: alumnos
            });
        });
    </script>
    @endsection