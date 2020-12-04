@extends('layouts.app')

@section('titulo','Encuestas del alumno')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
	<div class="profile-content">
		<div class="container">
			<div class="row">
				<div class="col-md-6 ml-auto mr-auto">
					<div class="profile">   
						<div class="avatar">
							<img src="{{url('img/alumno.png')}}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
						</div>       
						<div class="name">
							<h3 class="title">Hola Alumno <b class="text-primary">{{Auth::user()->name}}</b></h3>               
						</div>
					</div>
				</div>
			</div>          	                                           
			<h3 class="text-center">
				Encuestas que debes de realizar            
			</h3>
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
			<div class="row">
				<div class=" table-responsive table-responsive-sm table-responsive-md table-responsive-lg">
					<table class="table">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th class="text-center">Nombre</th>                                                               
								<th class="text-center">Descripción</th>
								<th class="text-center">Tipo</th>
								<th class="text-center">Enlace</th>                                                                
							</tr>
						</thead>                                
						<tbody>              
							<tr>
								<td class="text-center">1</td>                                                        
								<td class="text-center">Entrevista fresca</td>
								<td class="text-center">Soy la descripcion de la entrevista fresca</td>
								<td class="text-center">Entrevista</td>
								<td class="text-center">
									@if(empty(Auth::user()->entrevista_fresca))      
										<form method="post" action="{{url('alumno/entrevista')}}">
											{{csrf_field()}}
											<button type="submit" class="btn btn-primary  btn-sm">Iniciar entrevista</button>     
										</form>              									
									@elseif(Auth::user()->entrevista_fresca->where('descripcion','Finalizo la entrevista')->where('alumno_id',auth()->user()->nia)->first())
										<button disabled="true" class="btn btn-success  btn-sm">{{Auth::user()->entrevista_fresca->descripcion}}</button>                   
									@elseif(Auth::user()->entrevista_fresca->where('descripcion','Inicio la entrevista')->where('alumno_id',auth()->user()->nia)->first())
										<a href="{{url('alumno/entrevista')}}" class="btn btn-warning  btn-sm">{{Auth::user()->entrevista_fresca->descripcion}}</a>
									@endif
								</td>                     
							</tr>
							<tr>
								<td class="text-center">2</td>                                                        
								<td class="text-center">Cuestionario Anexos</td>
								<td class="text-center">Soy la descripcion de la cuestionario anexos</td>
								<td class="text-center">Cuestionario</td>
								<td class="text-center">									             
									@if(empty(Auth::user()->cuestionario_anexo))
										<form method="post" action="{{url('alumno/cuestionario')}}">
											{{csrf_field()}}
											<button type="submit" class="btn btn-primary btn-sm">Iniciar cuestionario</button>    
										</form>																					
									@elseif(Auth::user()->cuestionario_anexo->where('descripcion','Finalizo cuestionario')->where('alumno_id',auth()->user()->nia)->first())
										<button disabled="true" class="btn btn-success btn-sm">
											{{Auth::user()->cuestionario_anexo->descripcion}}
										</button>
									@elseif(Auth::user()->cuestionario_anexo->where('descripcion','Inicio cuestionario')->where('alumno_id',auth()->user()->nia)->where('alumno_id',auth()->user()->nia)->first())
										<a href="{{url('alumno/cuestionario')}}" class="btn btn-warning btn-sm">
											{{Auth::user()->cuestionario_anexo->descripcion}}
										</a>
									@endif             																		
								</td>                     
							</tr>
							<tr>
								<td class="text-center">3</td>                                                        
								<td class="text-center">Test sobre estilos de aprendizaje</td>
								<td class="text-center">Soy la descripcion del Test</td>
								<td class="text-center">Test</td>
								<td class="text-center">
									@if(empty(Auth::user()->test))
										<form method="post" action="{{url('alumno/test/create')}}">
											{{csrf_field()}}
											<button  type="submit" class="btn btn-primary btn-sm">Iniciar test</button>
										</form>																		
									@elseif(Auth::user()->test->where('descripcion','Finalizo Test')->where('alumno_id',auth()->user()->nia)->first())
										<button disabled="true" class="btn btn-success btn-sm">
											{{Auth::user()->test->descripcion}}
										</button>									
									@elseif(Auth::user()->test->where('descripcion','Inicio Test')->where('alumno_id',auth()->user()->nia)->first())
										<a href="{{url('alumno/test')}}" class="btn btn-warning btn-sm">{{Auth::user()->test->descripcion}}
										</a>									
									@endif
								</td>                     
							</tr> 
							<tr>
								<td class="text-center">4</td>                                                        
								<td class="text-center">Test para detectar tutorados que requieran atención individual</td>
								<td class="text-center">Soy la descripcion del Test</td>
								<td class="text-center">Test</td>
								<td class="text-center">
									@if(empty(Auth::user()->atencion_individual))
										<a href="{{url('alumno/test/atencion_individual')}}" class="btn btn-primary btn-sm">
											Iniciar Test									
										</a>
									@else
										<button disabled="true" class="btn btn-success btn-sm">
											{{Auth::user()->atencion_individual->descripcion}}
										</button>
									@endif
								</td>                     
							</tr> 
							<tr>
								<td class="text-center">5</td>                                                        
								<td class="text-center">Cuestionario "No Abandono"</td>
								<td class="text-center">Soy la descripcion del cuestionario</td>
								<td class="text-center">Cuestionario</td>
								<td class="text-center">
									@if(empty(Auth::user()->perfil_academico))									
										<a href="{{url('alumno/cuestionario/perfil_academico')}}" class="btn btn-primary btn-sm">
											Iniciar Cuestionario									
										</a>
									@else
										<button disabled="true" class="btn btn-success btn-sm">
											Finalizo Test
										</button>
									@endif									
								</td>                     
							</tr>                               
						</tbody>                                
					</table>                                            					
				</div>
			</div>
		</div>                            
	</div>
</div>
@include('includes.footer')
@endsection
