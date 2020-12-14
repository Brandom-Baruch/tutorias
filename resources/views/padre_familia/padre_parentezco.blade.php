@extends('layouts.app')

@section('titulo','Asignar familiar')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_padre')
<a href="{{url('/padre_familia')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}}');"></div>
<div class="main main-raised">
	<div class="profile-content">
		<div class="container">		
			<div class="description">           
				<div class="p-2">
					<h3 class="title text-center">Asignar familiar para el  <b class="text-primary">{{Auth::user()->name}}</b></h3>
				</div>    
				<form method="post" action="{{url('padre_familia/'.Auth::user()->id.'/parentezco')}}">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label style="color: black;">Selecciona un familiar</label>
								<select class="form-control selectpicker"  name="alumno_id"  style="color: black;">
									@foreach($alumnos as $alumno)
									<option value="{{$alumno->nia}}">{{$alumno->name}} {{$alumno->apellidoP}} {{$alumno->apellidoM}}</option>									    
									@endforeach
								</select>								
							</div>   
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label style="color: black;">Escribe el parentezco que tienen </label>
								<input type="text" class="form-control" placeholder="Ejemplo: Padre" name="parentezco">
							</div>   
						</div>
					</div>       
					<div class="text-center">
						<button type="submit" class="btn btn-success">Agregar parentezco</button>            
						<a href="{{url('/padre_familia')}}" class="btn btn-danger">Regresar</a>
					</div>
				</form>        
			</div>			                                                        
			@if (session('mensaje')) <!--Si existe un mensaje, mostrara el contenido del mensaje-->             
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
			@if (session('eliminado')) <!--Si existe un mensaje, mostrara el contenido del mensaje-->             
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
			<hr style="border-top-color: black;">
			<div class="row">         
				<table class="table table-responsive-sm table-responsive-md table-responsive-lg">
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th class="text-center">Nombre completo</th>
							<th class="text-center">Parentezco</th>                                                
							<th class="text-center">Opciones</th>
						</tr>
					</thead>                                
					<tbody>
						@foreach(Auth::user()->alumnos as $alumno)
						<tr>                                                        
							<td class="text-center">{{$alumno->nia}}</td>
							<td class="text-center">{{$alumno->name}} {{$alumno->apellidoP}} {{$alumno->apellidoM}} </td>
							<td class="text-center">{{$alumno->pivot->parentezco}}</td>
							<td class="td-actions text-center">
								<form method="post" 
								action="{{url('padre_familia/'.Auth::user()->id.'/parentezco/'.$alumno->nia.'/delete')}}">
								{{csrf_field()}}                                                                
								<button type="submit" rel="tooltip" title="Quitar familiar" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
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
