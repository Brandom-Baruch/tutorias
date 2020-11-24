{{Auth::user()->name}}<br>

<hr>

@foreach($entrevista_padre as $entrevista)
	<li>{{$entrevista}}</li>
	<li>{{$entrevista->padres->get(0)->name}}</li>
@endforeach

