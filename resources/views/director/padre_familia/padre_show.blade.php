@extends('layouts.app')

@section('titulo','Información del padre ' . $padre->name)

@section('body-class','profile-page sidebar-collapse')


@section('opciones_director')    

  @include('includes.links_director')

@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/galaxia.jpg')}} ');" ></div>
<div class="main main-raised">
<div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <img src="{{url('img/padre6.png')}}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
                <h3 class="title">{{$padre->name}} {{$padre->apellidoP}} {{$padre->apellidoM}}</h3>
                <h6>Es tutor de  @foreach ($padre->alumnos as $alumno) <b class="text-primary">{{$alumno->name}}</b>@endforeach</h6>
                <a href="{{url('/director/alumno/1/edit')}}" rel="tooltip" 
                   title="Editar Alumno" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm" target="_blank">
                   <i class="fa fa-edit"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="description text-center p-5">
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>         
      </div>
    </div>
  </div>
@include('includes.footer')
@endsection