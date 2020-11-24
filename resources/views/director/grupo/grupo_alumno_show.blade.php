@extends('layouts.app')

@section('titulo','Alumnos del grupo')

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
        <h3 class="title">Alumnos que pertenecen al grupo <b class="text-primary">{{$grupo->name}}</b></h3>                           
      </div>                            
      <div class="text-center gallery">                                  
          <a href="{{url('/director/grupo/'.$grupo->id.'/materias/show')}}" class="btn btn-primary">Materias del grupo</a>
          <div class="team">
    	      <div class="row">
    	       @foreach($alumnos as $alumno)
    	        <div class="col-md-4">
    	          <div class="team-player">
    	            <div class="card card-plain">
    	              <div class="col-md-6 ml-auto mr-auto">
    	                <img src="{{asset('img/alumno.png')}}"  class="img-raised rounded-circle img-fluid">
    	              </div>
    	             <h4 class="card-title"><a href="{{url('director/alumno/'.$alumno->nia.'/show')}}">
                                          {{$alumno->name}} {{$alumno->apellidoP}} {{$alumno->apellidoM}}
                                          </a>
                      <br>
                      <small class="card-description text-dark">Nia: {{$alumno->nia}}</small>
                      <br>
                      <small class="card-description text-dark ">Grupo: {{$grupo->name}}</small>   
                    </h4>               
    	              <div class="card-footer justify-content-center">	                	                	
    	              	<div>
            		        <form method="post" action="{{url('/director/grupo/'.$grupo->id.'/alumno/'.$alumno->nia.'/delete')}}">
                            {{csrf_field()}}                                                 
                          <a href="{{url('/director/alumno/'.$alumno->nia.'/edit')}}" rel="tooltip" title="Editar Grupo" 
                          class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                              <i class="fa fa-edit"></i>
                          </a>
                          <button type="submit" rel="tooltip" title="Eliminar Grupo" 
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
                {{$alumnos->links("pagination::bootstrap-4")}}                
              </div>
            </div>
	       </div>
      </div>                       
    </div>
  </div>
</div>
@include('includes.footer')
@endsection
