@extends('layouts.app')

@section('titulo','Agregar Puesto')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')    

  @include('includes.links_director')

@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/galaxia.jpg')}} '); height: 200px;"></div>
<div class="main main-raised">
    <div class="container">                    
        <div class="section">            
            <h2 class="title text-center" style="color:black;">Registrar nuevo Puesto</h2>           
             <form method="post" action="{{url('/director/puestos/create')}}">
                {{ csrf_field() }}

                <div class="row">            
                    <div class="col-sm-4">
                          <div class="form-group {{ $errors->has('puesto') ? ' has-error' : '' }}">
                            <label>Nombre del puesto</label>
                            <input type="text" class="form-control"
                                   placeholder="Ejemplo: Director" 
                                   value="{{ old('puesto') }}" 
                                   name="puesto">
							             @if ($errors->has('puesto'))
                              <span class="help-block text-danger">
                                  <strong>{{ $errors->first('puesto') }}</strong>
                              </span>
                          	@endif                                   
                          </div>                          
                    </div>

                    <div class="col-sm-8">
                    	<div class="form-group">
	      				    <label>Descripción del puesto</label>
	      				    <textarea class="form-control" rows="1" name="descripcion"></textarea>
	    				         @if ($errors->has('descripcion'))
	  	                      <span class="help-block text-center text-danger">
	  	                          <strong>{{ $errors->first('descripcion') }}</strong>
	  	                      </span>
	  	                	@endif
      			    	</div>
                    </div> 
                </div>                	                                                                                                                 
                <button class="btn btn-success">Registrar Puesto</button>
                <a href="{{url('director/puestos/index')}}" class="btn btn-danger">Cancelar</a> 

             </form>                  
        </div>              
    </div>
</div>
@include('includes.footer')
@endsection
