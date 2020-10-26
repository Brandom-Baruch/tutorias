@extends('layouts.app')

@section('titulo','Panel del Docente')

@section('body-class','profile-page sidebar-collapse')

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/galaxia.jpg')}} ');"></div>
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
        <h3 class="title">Hola Maestro {{Auth::user()->name}}</h3>        
      </div>                                    
    </div>
  </div>
</div>
@include('includes.footer')
@endsection
