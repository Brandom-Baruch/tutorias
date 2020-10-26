@extends('layouts.app')

@section('titulo','Datos del docente')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')    

  @include('includes.links_director')

@endsection

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/galaxia.jpg')}} '); height: 250px;"></div>
<div class="main main-raised">
  <div class="profile-content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
          <div class="profile">          
            <div class="name">
              <!--<h3 class="title" style="color: white;">Bienvenido {{Auth::user()->name}}</h3>-->
            </div>
          </div>
        </div>
      </div>
       @if (session('mensaje')) <!--Si existe un mensaje, mostrara el contenido del mensaje-->	    <div class="alert alert-success text-left">
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
      <div class="description text-center">       
        <h3 class="title">Datos del docente <b class="text-primary">{{$docentes->name}}</b></h3>       
      </div>          
      	<div class="row">
        	<div class="col-md-6" style="max-height: 550px; overflow-y: auto;">
		      <div class="card" style="height: 500px;">
		          <div class="card-header card-header-text card-header-primary">
		            <div class="card-text">
		              <h4 class="card-title text-center">Puestos del Docente</h4>
		            </div>
		          </div>
		          <div class="card-body">
		               @foreach($docentes->puestos as $docente)
							<ul class="list-group">
								<li class="list-group-item">{{$docente->puesto}}</li>		
							</ul>						
					   @endforeach
					   
		          </div>
		          <div class="text-center">
						<a  href="{{url('director/docente/'.$docentes->id.'/puestos')}}" class="btn btn-success" target="_blank">
						  Asignar un puesto
						</a>							
				   </div>
		      </div>
		  	</div>
		  	<div class="col-md-6" style="max-height: 550px; overflow-y: auto;">
		      <div class="card" style="height: 500px;">
		          <div class="card-header card-header-text card-header-primary">
		            <div class="card-text">
		              <h4 class="card-title text-center">Materias del  Docente</h4>
		            </div>
		          </div>
		          <div class="card-body" >
			            @foreach($docentes->materias as $materias)
							<ul class="list-group"> 
								<li class="list-group-item">{{$materias->name}}</li>							
							</ul>						
						@endforeach     
		          </div>
					<div class="text-center">
						<a href="{{url('director/docente/'.$docentes->id.'/materias')}}" class="btn btn-success" target="_blank">
						  Asignar una materia
						</a>	
					</div>
		      </div>		      
		  	</div>			  	
        </div>		
        <div class="text-center">
			<a href="{{url('/director/docentes/index')}}" class="btn btn-danger">Volver al panel de docentes</a>
	  	</div>		                                                   			
    </div>
  </div>
</div>

@include('includes.footer')

@endsection
