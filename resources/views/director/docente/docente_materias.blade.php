@extends('layouts.app')

@section('titulo','Asignar materias para el docente')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')    

  @include('includes.links_director')

@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/galaxia.jpg')}} '); height: 300px;"></div>
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
        <h3 class="title">Agregar materias para el docente <b class="text-primary">{{$docente->name}}</b></h3>         
        <form method="post" action="{{url('director/docente/'.$docente->id.'/materias')}}">
          {{ csrf_field() }}
            <div class="form-group">
              <label style="color: black;">Selecciona una materia </label>
              <select class="form-control"  name="materia_id"  style="color: black;">
                @foreach($materias as $materia)
                  <option value="{{$materia->id}}">{{$materia->name}}</option>                
                @endforeach
              </select>
            </div>          
            <button type="submit" class="btn btn-success">Agregar puesto</button>            
            <a href="{{url('/director/docentes/index')}}" class="btn btn-danger">Regresar al panel de docentes</a>
        </form>        
      </div>
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
      <div class="tab-content tab-space">        
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
          <hr style="border-top-color: black;">
          <div class="row">         
           <table class="table table-responsive-sm table-responsive-md table-responsive-lg">
                <thead>
                    <tr>                        
                        <th class="text-center">Materia</th>
                        <th class="text-center">Descripción</th>
                        <th class="text-center">Clave</th>                                                    
                        <th class="text-center">Opciones</th>
                    </tr>
                </thead>                                
                    <tbody>
                      @foreach($docente->materias as $materia)
                        <tr>                            
                            <td class="text-center">{{$materia->name}}</td>
                            <td class="text-center">{{$materia->descripcion}}</td>
                            <td class="text-center">{{$materia->clave}}</td>                                                 
                            <td class="td-actions text-center opcionesM">
                              <form method="post" 
                                    action="{{url('director/docente/'.$docente->id.'/materia/'.$materia->id.'/delete')}}">
                                {{csrf_field()}}                                                                
                                <button type="submit" rel="tooltip" title="Quitar puesto" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
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
</div>
@include('includes.footer')
@endsection
