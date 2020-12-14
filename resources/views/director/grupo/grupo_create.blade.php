@extends('layouts.app')

@section('titulo','Agregar Grupo')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')    

  @include('includes.links_director')

@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/galaxia.jpg')}} '); height: 200px;"></div>
<div class="main main-raised">
    <div class="container">             
        <div class="section">
            <h2 class="title text-center" style="color:black;">Registrar nuevo Grupo</h2>
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
            <form method="post" action="{{url('director/grupos/create')}}">
              {{csrf_field()}}
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label>Nombre</label>
                  <input type="text" class="form-control" placeholder="Ejemplo: Los conchas" name="name" 
                         value="{{old('name')}}">
                </div>
                <div class="form-group col-md-4">
                  <label>Grado</label>
                  <input type="text" class="form-control" placeholder="Ejemplo:1ro" name="grado"
                         value="{{old('grado')}}">
                </div>
                <div class="form-group col-md-4">
                  <label>Grupo</label>
                  <input type="text" class="form-control"  placeholder="Ejemplo: A" name="grupo" 
                         value="{{old('grupo')}}">
                </div>
                <div class="form-group col-md-3">
                  <label>Semestre</label>
                  <input type="text" class="form-control"  placeholder="Ejemplo 3er Semestre" name="semestre"
                         value="{{old('semestre')}}">
                </div>
                <div class="form-group col-md-3">
                  <label>Año</label>
                  <input type="text" class="form-control"  placeholder="Ejemplo: 2020" name="year"
                         value="{{old('year')}}">
                </div>                
              </div>              
            	<button type="submit" class="btn btn-success">Agregar Grupo</button>
            	<a href="{{url('director/grupos/index')}}" class="btn btn-danger">Cancelar</a>
            </form>                  
        </div>              
    </div>
</div>
@include('includes.footer')
@endsection
