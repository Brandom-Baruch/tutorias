<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8"/>  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    @yield('titulo') 
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' / >
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{asset('css/material-kit.css')}}" rel="stylesheet" />    
  @yield('styles')  
</head>

<body class="@yield('body-class')">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/">
        Bienvenidos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">              
          @yield('contenido')   
          @guest
            <li class="dropdown nav-item">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                Iniciar Sesión
              </a>

              <ul class="dropdown-menu">
                <li class="nav-item">                
                  <a class="dropdown-item" href="/docente/login">Inciar Docente</a>
                  <a class="dropdown-item" href="/alumno/login">Inciar Alumno</a>
                  <a class="dropdown-item" href="/padre/login">Inciar Padre de Familia</a>                                  
                </li>
              </ul>
            </li>
            <!--<li class="nav-item"><a class="nav-link" href="/docente/register">Registrar</a></li>-->
            @else
            <li class="dropdown nav-item">
              <li class="dropdown nav-item">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                  {{ Auth::user()->name}} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                  <li class="nav-item">                                
                    @yield('opciones_director')
                    @yield('opciones_alumno')
                    @yield('opciones_padre')
                    <a class="dropdown-item" href="{{ route('all.logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Cerrar Sesión
                    </a>

                    <form id="logout-form" action="{{ route('all.logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </li>
                </ul>
              </li>
            </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
  @yield('content')   
<!--   Core JS Files   -->
<script src="{{asset('js/core/jquery-3.5.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/plugins/moment.min.js')}}"></script>
<!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{asset('js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset('js/material-kit.js?v=2.0.7')}}" type="text/javascript"></script>
 @yield('scripts')

</body>

</html>