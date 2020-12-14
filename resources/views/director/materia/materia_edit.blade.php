@extends('layouts.app')

@section('titulo','Editar Materia '. $materia->name)

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')    

  @include('includes.links_director')

@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/galaxia.jpg')}} '); height: 200px;"></div>
<div class="main main-raised">
    <div class="container">             

        <div class="section">

            <h2 class="title text-center" style="color:black;">Editar materia <b class="text-primary">{{$materia->name}}</b></h2>           
             <form method="post" action="{{url('/director/materia/'.$materia->id.'/edit')}}">
                {{ csrf_field() }}

                <div class="row">            
                    <div class="col-sm-6">
                          <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label>Nombre de la materia</label>
                            <input type="text" class="form-control"
                                   placeholder="Ejemplo: Matematicas" 
                                   value="{{ old('name' , $materia->name) }}" 
                                   name="name">
                          </div>
                          @if ($errors->has('name'))
                              <span class="help-block text-danger">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                    </div>
                                      
                    <div class="col-sm-6">
                          <div class="form-group {{ $errors->has('clave') ? ' has-error' : '' }}">
                            <label>Clave de la materia</label>
                            <input type="text" class="form-control" 
                                   placeholder="ACF-0901" 
                                   value="{{ old('clave' , $materia->clave) }}"
                                   name="clave" style="text-transform: uppercase;">
                          </div>
                          @if ($errors->has('clave'))
                              <span class="help-block text-center text-danger">
                                  <strong>{{ $errors->first('clave') }}</strong>
                              </span>
                          @endif
                    </div>                                           
                </div>

                <div class="form-group">
      				    <label>Descripción de la materia</label>
      				    <textarea class="form-control" rows="1" name="descripcion">{{$materia->descripcion}}</textarea>
        				    @if ($errors->has('descripcion'))
  	                      <span class="help-block text-center text-danger">
  	                          <strong>{{ $errors->first('descripcion') }}</strong>
  	                      </span>
  	                @endif
      			    </div>
                                                                                                                   

                <button class="btn btn-success">Registrar Materia</button>
                <a href="{{url('/director/materias/index')}}" class="btn btn-danger">Cancelar</a> 

             </form>                  
        </div>              
    </div>
</div>
@include('includes.footer')
@endsection
