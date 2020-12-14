@extends('layouts.app')

@section('titulo','Datos Familiares')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">
			<h2 class="title text-center" style="color: black;">Datos Familiares</h2>
			@if (session('mensaje'))              
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
			<form method="post" action="{{url('alumno/entrevista/datos/familiares')}}">
				{{ csrf_field() }}        												
				<div class="form-row">
					<div class="form-group col-md-3">
						<label style="color: black;"><b>¿Con quién vives?</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Solo Mamá" >
								Solo Mamá 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Solo Papá" >
								Solo Papá
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Ambos" >
								Ambos 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<div class="form-check col-md-8">
								<label style="color: black;">Otro</label>
								<input type="text" class="form-control text-dark" placeholder="¿Cuál?" name="r1">
							</div>
						</div>
					</div>
					<div class="form-group col-md-3">
						<label style="color: black;"><b>¿Cuántos hermanos/as tienes?</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="Soy hijo único" >
								Soy hijo único 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="Somos 2-3" >
								Somos 2-3
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="Somos 4-5" >
								Somos 4-5 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="6 o más" >
								6 o más 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
					</div>
					<div class="form-group col-md-3">
						<label style="color: black;"><b>¿Qué lugar ocupas?</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="Primero" >
								Primero 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="El de en medio" >
								El de en medio
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="El último" >
								El último   
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check col-md-8">
							<label style="color: black;">Otro</label>
							<input type="text" class="form-control text-dark" placeholder="¿Cuál?" name="r3">
						</div>
					</div>	
					<div class="form-group col-md-3">
						<label style="color: black;"><b>¿Cómo te llevas con tu familia?</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="Bien" >
								Bien 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="Mal" >
								Mal
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>										
					</div>
					<div class="form-group col-md-4">
						<label style="color: black;"><b>¿Hablas otro idioma o lengua indígena?</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="Si">
								 Si
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="no" >
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check col-md-8">
							<label style="color: black;">Otro</label>
							<input type="text" class="form-control text-dark" placeholder="¿Cuál?" name="r5">
						</div>										
					</div>
					<div class="form-group col-md-4">
						<label style="color: black;"><b>¿Cuánto es el ingreso económico mensual en tu casa?</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="2,000" >
								2,000
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="de 2,000-5,000" >
								de 2,000-5,000
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="de 5,000-8,000" >
								de 5,000-8,000
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="más de 8,000" >
								más de 8,000
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>											
					</div>
					<div class="form-group col-md-4">
						<label style="color: black;"><b>¿Tienes hijos?</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="Si">
								Si
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="No" >
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>																				
					</div>							
				</div>																							
				<button class="btn btn-primary">Finalizar</button>
				<a href="{{url('/alumno/entrevista')}}" class="btn btn-danger">Cancelar</a> 
			</form>                  
		</div>              
	</div>
</div>
@include('includes.footer')
@endsection
