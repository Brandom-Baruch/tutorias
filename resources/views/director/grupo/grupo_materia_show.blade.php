@extends('layouts.app')

@section('titulo','Materias del grupo')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')    

  @include('includes.links_director')

@endsection

@section('styles')
    <style>
          .team .row .col-md-4 {
            margin-bottom: 5em;
        }
        .row {
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display:         flex;
          flex-wrap: wrap;
        }
        .row > [class*='col-'] {
          display: flex;
          flex-direction: column;
        }

    </style>
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
        <h3 class="title">Materias que pertenecen al grupo <b class="text-primary">{{$grupo->name}}</b></h3>                           
      </div>                            
      <div class="text-center gallery">                                  
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
    	             <h4 class="card-title"><a href="{{url('director/alumno/'.$materia->nia.'/show')}}">{{$materia->name}}</a>
                      <br>
                      <small class="card-description text-dark">Clave: {{$materia->clave}}</small>                                        
                     </h4>
	                  <div class="card-body">
		                <p class="card-description">{{$materia->descripcion}}</p>
			          </div>               
    	              <div class="card-footer justify-content-center">	                	                	
    	              	<div>
            		        <form method="post" action="{{url('/director/grupo/'.$materia->id.'/delete')}}">
                            {{csrf_field()}}                                                 
                          <a href="{{url('/director/grupo/'.$materia->id.'/edit')}}" rel="tooltip" title="Editar Grupo" 
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