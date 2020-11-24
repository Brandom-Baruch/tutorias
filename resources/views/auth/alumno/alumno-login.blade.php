@extends('layouts.app')

@section('titulo','Login Alumno')
@section('body-class','login-page sidebar-collapse')

@section('content')


<div class="page-header header-filter" style="background-image: url('{{asset('img/arbol_rojo.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="POST" action="{{url('/alumno/login')}}">
                {{csrf_field()}}
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Hola Alumno</h4>
                <div class="social-line">                 
                </div>
              </div>
              <p class="text-center">Ingresa tus datos</p>
              <div class="card-body">               

                <div class="input-group {{ $errors->has('nia') ? ' has-error' : '' }}">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">fingerprint</i>
                    </span>
                  </div>
                  <input type="number" class="form-control" placeholder="Coloca tu nia" 
                   name="nia" value="{{ old('nia') }}">
                </div>

                @if ($errors->has('nia'))
                    <span class="help-block" style="color: red;">
                        <strong>{{ $errors->first('nia') }}</strong>
                    </span>
                @endif   

                <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="Contraseña" 
                  id="password" name="password">
                </div> 

                @if ($errors->has('password'))
                    <span class="help-block" style="color: red;">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif                              


                @if (session('mensaje'))              
                    <span class="help-block text-danger">
                      <strong>{{ session('mensaje') }}</strong>
                    </span>
                @endif 

              </div>
              <div class="footer text-center">
                <button  type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Ingresar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    @include('includes.footer')
</div>
@endsection

