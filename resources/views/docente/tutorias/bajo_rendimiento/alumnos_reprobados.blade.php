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
				<div class="col-md-12 mt-5">
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
		      		@if (session('eliminado'))
				       	<div class="alert alert-danger text-left">
				          <div class="container-fluid">
				            <div class="alert-icon">
				              <i class="material-icons">check</i>
				            </div>
				            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				              <span aria-hidden="true"><i class="material-icons">clear</i></span>
				            </button>
				            {{ session('eliminado') }}
				          </div>
				        </div>
		      		@endif
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
				</div>	
				<h2 class="title text-center" style="color: black;">
					Registrar  alumnos reprobados para la materia <br><b class="text-primary">{{$alumno_bajo_rendimiento->materia_name}}</b>
				</h2>				
				<form method="post" action="{{url('docente/tutorias/'.$alumno_bajo_rendimiento->id.'/alumnos_reprobados')}}">
					{{csrf_field()}}
					<div class="row mb-5">
						<div class="col-md-12">
					      <label class="text-dark">Nombre del Alumno</label>
					      <select class="form-control" name="alumno_name">
					      	@foreach($alumnos as $alumno)
					        	<option value="{{$alumno->name}} {{$alumno->apellidoP}} {{$alumno->apellidoM}}">
					        		{{$alumno->name}} {{$alumno->apellidoP}} {{$alumno->apellidoM}}
					        	</option>
					        @endforeach        
					      </select>
					    </div>
					    <div class="col-md-6 mt-2">
						    <label class="text-dark">Motivo de la reprobación</label>
						    <textarea class="form-control" rows="3" name="motivo"></textarea>
						</div>
						<div class="col-md-6 mt-2">
						    <label class="text-dark">Estrategia especifica</label>
						    <textarea class="form-control" rows="3" name="estrategia_especifica"></textarea>
						</div>
					</div>				
					<div class="text-center ">
						<button class="btn btn-success" type="submit">Registrar</button>
						<a  href="{{url('/docente/tutorias/alumnos_bajo_rendimiento')}}" class="btn btn-danger">Cancelar</a>	
					</div>
				</form>	<br>
				<table class="table  table-responsive-sm table-responsive-md table-responsive-lg">
                <thead>
                  <tr>                                  
                    <th class="text-center">Alumno</th>              
                    <th class="text-center">Motivo</th>
                    <th class="text-center">Estrategia Especifica</th>
                    <th class="text-center">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                	@foreach($alumno_bajo_rendimiento->alumnos_reprobados as $alumno_reprobado)
                      <tr>              
                        <td class="text-center">{{$alumno_reprobado->alumno_name}}</td>
                        <td class="text-center">{{$alumno_reprobado->motivo}}</td>            
                        <td class="text-center">{{$alumno_reprobado->estrategia_especifica}}</td>                       
                        <td class="td-actions text-center">
                        	<form method="post" 
                        		action="{{url('docente/tutorias/'.$alumno_reprobado->id.'/alumnos_reprobados/delete')}}">
                        		{{csrf_field()}}
	                        	<button rel="tooltip" title="Eliminar Alumno" 
	                        		class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
				                    <i class="fa fa-times"></i>
			                  	</button>                         
			                </form>
                        </td>
                      </tr>                
        			@endforeach
                </tbody>                
            </table>					   					
			</div>
		</div>             	
	</div>              	
</div>
@include('includes.footer')
@endsection