<table class="table table-responsive-sm table-responsive-md table-responsive-lg">
        <thead>
          <tr>
            <th class="text-center">#</th>
            <th class="text-center">Nombre completo</th>
            <th class="text-center">Parentezco</th>                                                
            <th class="text-center">Opciones</th>
            <th>entrevista</th>
          </tr>
        </thead>                                
        <tbody>
          @foreach(Auth::user()->alumnos as $alumno)
          <tr>                                                        
            <td class="text-center">{{$alumno->nia}}</td>
            <td class="text-center">{{$alumno->name}} {{$alumno->apellidoP}} {{$alumno->apellidoM}} </td>
            <td class="text-center">{{Auth::user()->entrevista()->where('alumno_id' , $alumno->nia)->first()}}</td>            
            <td class="text-center">                                      
            @if(Auth::user()->entrevista()->where('descripcion','Finalizo la entrevista')->first())
             <button disabled="true" class="btn btn-primary btn-round btn-sm">Realizar Entrevista</button>                   
            @elseif(Auth::user()->entrevista()->where('descripcion','Inicio la entrevista')->first())
             <a href="{{url('padre_familia/entrevista/'.$alumno->nia.'/secciones')}}" class="btn btn-primary btn-round btn-sm">Realizar Entrevista</a>                          
            @endif
            @if(empty(Auth::user()->entrevista))             
              <form method="post" action="{{url('padre_familia/entrevista')}}">                
               {{csrf_field()}}
               <input type="hidden" name="alumno_id" value="{{$alumno->nia}}">
               <button type="submit" class="btn btn-primary btn-round btn-sm">Realizar Entrevista</button>
              </form>                                              
            @endif                                                                                    
           </td>
           <td>@if(Auth::user()->entrevista()->where('alumno_id' , $alumno->nia)->first() && Auth::user()->entrevista()->where('descripcion' , 'Inicio la entrevista')->first())
           		{{$alumno->nia}}
           	@endif
           </td>           	
         </tr>                        
         @endforeach         
       </tbody>                                
     </table> 