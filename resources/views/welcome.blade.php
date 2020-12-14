@extends('layouts.app')

@section('titulo', 'Bienvenido')

@section('body-class', 'landing-page sidebar-collapse')

@section('contenido')

	@include('includes.temas')

@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style=" background-image: url('{{asset('img/identidad-gobierno-federal.jpg')}}') ">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="title">TECNM Campus San Martín Texmelucan</h1>
				<h4>El TECNM Campus San Martín Texmelucan ubicado en Camino a Barranca de Pesos S/N San Lucas Atoyatenco San Martín Texmelucan, Puebla se dedica a formar especialistas, por lo que, en su tasa de eficiencia se mide el total de estudiantes egresados/as que integran la cohorte o generación respecto al total de los/las estudiantes que se inscribieron, en la misma generación.</h4>
				<br>          
			</div>
		</div>
	</div>
</div>
<div class="main main-raised">
	<div class="container">
		<div class="section text-center">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto">
					<h2 class="title">Acerca del TECNM</h2>
					<h5 class="description" style="color: black;">El TECNM San Martín Texmelucan imparte 7 carreras universitarias. Entre sus carreras universitarias, puedes estudiar alguna de sus 1 licenciatura y 6 ingenierías. El Instituto Tecnológico Superior de San Martín Texmelucan actualmente no imparte carreras en línea, licenciaturas en línea, ingenierías en línea ni posgrados en línea.</h5>
				</div>
			</div>
			<div class="features">
				<div class="row">
					<div class="col-md-4">
						<div class="info">
							<div class="icon icon-info">
								<i class="material-icons">chat</i>
							</div>
							<h5 class="info-title">descripción del programa</h5>
							<p style= "color: black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							<button type="button" class="btn btn-info">Saber más</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="info">
							<div class="icon icon-success">
								<i class="material-icons">chrome_reader_mode</i>
							</div>
							<h5 class="info-title">Guia para padres de familia</h5>
							<p style= "color: black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							<button type="button" class="btn btn-info">Saber más</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="info">
							<div class="icon icon-danger">
								<i class="material-icons">warning</i>
							</div>
							<h5 class="info-title">Como detectar un posible abandono escolar</h5>
							<p style= "color: black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							<button type="button" class="btn btn-info">Saber más</button>
						</div>
					</div>
				</div>
			</div>
		</div>   
	</div>
</div>
@include('includes.footer')
@endsection