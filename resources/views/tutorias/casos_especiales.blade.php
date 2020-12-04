@extends('layouts.app')

@section('titulo','Casos especiales')

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
				<h2 class="title text-center" style="color: black;">Casos especiales</h2>								
				<div class="row">
					<div class="col-12 col-md-12 col-sm-12">				     				    	
						<div class="input-group col-5 col-md-5 col-sm-12  mb-5" style="margin-left:  40%;">
							<form class="form-inline" method="get" action="{{ url('/docente/tutorias/casos_especiales') }}" >	                      	
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
				      <label for="inputState">Situación Especial</label>
				      <select id="inputState" class="form-control">
				        <option selected>Inestabilidad emocional en el grupo</option>
				        <option>Embarazo de alto riesgo</option>
				        <option>Necesidades economicas</option>
				        <option>Otra</option>
				      </select>
				    </div>
					<div class="col-md-4 mt-1">
						<label >Especificar situacion:</label>
						<input type="text" class="form-control" name="">
					</div>
					<div class="col-md-4 mt-1">
						<label>Fecha en la que se origino la situacion</label>
						<input type="date" class="form-control" name="">
					</div>
					<div class="col-md-4 mt-1">
						<label>Fecha de la platica con el alumno</label>
						<input type="date" class="form-control" name="">
					</div>
					<div class="col-md-4 mt-1">
						<label>Fecha de la platica con el padre de familia</label>
						<input type="date" class="form-control" name="">
					</div>

					<div class="col-md-4 mt-1">
						<label>Acuerdo o compromiso con el padre de familia</label>
						<input type="text" class="form-control" name="">
					</div>
					<div class="col-md-4 mt-3">
						<label>Seguimento de inasistencias</label>
						<input type="text" class="form-control" name="">
					</div>
					<div class="col-md-4 mt-2">
						<label>Seguimento de alumnos con mas de dos materias reprobadas</label>
						<input type="text" class="form-control" name="">
					</div>
					<div class="col-md-4 mt-3">
						<label>Seguimento de conducta</label>
						<input type="text" class="form-control" name="">
					</div>
					<div class="col-md-12 ">
						<label>Observaciones</label>	
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