@extends('layouts.app')

@section('titulo','Asignar familiar')

@section('body-class','profile-page sidebar-collapse')

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
        <h3 class="title">Asignar familiar para el  <b class="text-primary">{{Auth::user()->name}}</b></h3>    
        <form method="post" action="{{url('alumno/'.Auth::user()->nia.'/parentezco')}}">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label style="color: black;">Selecciona un familiar</label>
                <select class="form-control"  name="padre_id"  style="color: black;">
                  @foreach($padres as $padre)
                  <option value="{{$padre->id}}">{{$padre->name}} {{$padre->apellidoP}} {{$padre->apellidoM}}</option>      
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
          <button type="submit" class="btn btn-success">Agregar parentezco</button>            
          <a href="{{url('/alumno')}}" class="btn btn-danger">Regresar</a>
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
      <div class="tab-content tab-space">                                                    
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
          @foreach(Auth::user()->padres as $padre)
          <tr>                                                        
            <td class="text-center">{{$padre->id}}</td>
            <td class="text-center">{{$padre->name}} {{$padre->apellidoP}} {{$padre->apellidoM}} </td>
            <td class="text-center">{{$padre->pivot->parentezco}}</td>
            <td class="td-actions text-center">
              <form method="post" action="{{url('alumno/'.Auth::user()->nia.'/parentezco/'.$padre->id.'/delete')}}">
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
</div>
@include('includes.footer')
@endsection
