@extends('layouts.app')

@section('titulo','Resultado de padres')

@section('body-class','profile-page sidebar-collapse')


@section('opciones_director')    

  @include('includes.links_director')

@endsection


@section('content')


<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/galaxia.jpg')}} '); height: 200px;" ></div>
<div class="main main-raised">
  <div class="profile-content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
          <div class="profile">          
          	<div class="avatar">
                <img src="{{url('img/search.png')}}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
            <div class="name">
              <!--<h3 class="title" style="color: white;">Bienvenido {{Auth::user()->name}}</h3>-->
            </div>
          </div>
        </div>
      </div>
      <div class="description text-center">       
        <h3 class="title">Resultados de la busqueda del familiar</h3>
        <h4 class="text-dark">Se encontrado {{$padres->count()}} resultados para el termino <b>{{$search}}</b></h4>         
      </div>
     <div class="section text-center">        
        <div class="team">
          <div class="row">
          	@foreach($padres as $padre)
             <div class="col-md-4">
              <div class="team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                    <img src="{{asset('img/padre6.png')}}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                  </div>
                  <h4 class="card-title">{{$padre->name}} {{$padre->apellidoP}} {{$padre->apellidoM}}</h4>                  
                  <div class="card-footer justify-content-center">
                    <a href="{{url('director/padre_familia/'.$padre->id.'/edit')}}"
                       rel="tooltip" title="Editar Familiar" 
                       class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm" target="_blank" style="margin-right: 10px;">
                       <i class="fa fa-edit"></i>                      
                    </a>
                    <a href="{{url('director/padre_familia/'.$padre->id.'/show')}}" rel="tooltip" title="Ver Familiar" class="btn btn-info btn-fab btn-fab-mini btn-rect btn-sm" 
                       target="_blank">
                      <i class="fa fa-user"></i>
                    </a>
                  </div>
                </div>
              </div>
             </div>           
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('includes.footer')
@endsection
