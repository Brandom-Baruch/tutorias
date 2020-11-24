@extends('layouts.app')

@section('titulo','Entrevista Fresca Padre')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_padre')
<a href="{{url('/padre_familia')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
  <div class="container p-2">                   
    <h3 class="title text-center">Entrevista fresca para el padre de familia</h3>    
    <div class="row">   
      <h4>Realiza las encuestas para cada familiar que tengas</h4>      
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
          @foreach(Auth::user()->alumnos as $alumno)
          <tr>                                                        
            <td class="text-center">{{$alumno->nia}}</td>
            <td class="text-center">{{$alumno->name}} {{$alumno->apellidoP}} {{$alumno->apellidoM}} </td>
            <td class="text-center">{{$alumno->pivot->parentezco}}</td>            
            <td class="text-center">              
              @if(empty(Auth::user()->entrevista()->where('alumno_id',$alumno->nia)->first()))             
              <form method="post" action="{{url('padre_familia/entrevista')}}">                
               {{csrf_field()}}
               <input type="hidden" name="alumno_id" value="{{$alumno->nia}}">
               <button type="submit" class="btn btn-primary  btn-sm">Empezar Entrevista</button>
             </form>
             @endif
             @if(Auth::user()->entrevista()->where('descripcion','Finalizo la entrevista')->where('alumno_id',$alumno->nia)->first())
              <button  class="btn btn-success  btn-sm">Finalizo la entrevista</button>                  
             @elseif(Auth::user()->entrevista()->where('descripcion','Inicio la entrevista')->where('alumno_id',$alumno->nia)->first())
              <a href="{{url('alumno/entrevista')}}" class="btn btn-warning  btn-sm">Continuar con la entrevista</a>       
             @endif
           </td>           
         </tr>                        
         @endforeach         
       </tbody>                                
     </table>     
   </div>
   <div class="text-center">
     <a href="{{url('padre_familia')}}" class="btn btn-danger">Regresar</a>
   </div>                                                        
 </div>
</div>
@include('includes.footer')
@endsection
