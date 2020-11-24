@extends('layouts.app')

@section('titulo','Materias del grupo')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')    

@include('includes.links_director')

@endsection

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/galaxia.jpg')}} '); height: 280px"></div>
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
			</div>
			<div class="description text-center">
				<h3 class="title">Materias del grupo <b class="text-primary">{{$grupo->name}}</b></h3>
				<h4 class="text-dark">Grado:{{$grupo->grado}} y Grupo:{{$grupo->grupo}}</h4>
			</div>                            
			<div class="text-center">
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
				@if($tutorias)
					<h4>Este grupo ya tiene asignada la materia de <b>{{$tutorias->name}}</b></h4>
				@else
					<h4>Este grupo no tiene asignada la materia de tutoria</h4>
				@endif										                  					                     
				<a href="{{url('/director/grupo/'.$grupo->id.'/materias')}}" class="btn btn-primary">Agregar materias</a>
				<a href="{{url('/director/grupos/index')}}" class="btn btn-danger">Regresar</a>           					
				<div class="team">
					<div class="row">
						@foreach($materias as $materia)
						<div class="col-md-4">
							<div class="team-player">
								<div class="card card-plain">
									<div class="col-md-6 ml-auto mr-auto">
										<img src="{{asset('img/materia.png')}}"  class="img-raised rounded-circle img-fluid">
									</div>
									<h4 class="card-title">{{$materia->name}}
										<br>
										<small class="card-description text-dark">Clave: {{$materia->clave}}</small>              
									</h4>
									<div class="card-body">
										<p class="card-description text-dark">{{$materia->descripcion}}</p>
									</div>               
									<div class="card-footer justify-content-center">                                      
										<div>
											<form method="post" action="{{url('/director/grupo/'.$grupo->id.'/materia/'.$materia->id.'/delete')}}">
												{{csrf_field()}}                       												
												<button type="submit" rel="tooltip" title="Quitar Materia" 
												class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
												<i class="fa fa-times"></i>
												</button>
											</form>                                                                         
										</div>
									</div>
								</div>
							</div>						
						</div>	
						@endforeach				
					</div>
					<div class="d-flex">
						<div class="mx-auto">
							{{$materias->links("pagination::bootstrap-4")}}                
						</div>
					</div>
				</div>
			</div>                       
		</div>
	</div>
</div>
@include('includes.footer')
@endsection