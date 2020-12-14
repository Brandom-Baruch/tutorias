<html>
<head>
	<title>Reporte Grupal {{ $grupo->name }}</title>		
	<style type="text/css">
		@page {
			margin: 0cm 0cm;
			font-family: Arial;
		}	
		body {
			font-family: Arial;
		}			
		.cabeza  {
			position: fixed;
			top: 0cm;
			left: 0cm;
			right: 0cm;
			height: 2.3cm;
			background-color: #7F1E57;
			color: white;
			text-align: center;
			line-height: 30px;
		}

		.pie {
			position: fixed;
			bottom: 0cm;
			left: 0cm;
			right: 0cm;
			height: 2.5cm;
			background-color: #7F1E57;
			color: white;
			text-align: center;
			line-height: 35px;
		}

		.izquierda {
			float: left;
			width: 58px;						
			margin: 4px; 			
		}
		.derecha {
			float: right;
			width: 70px;
			margin: 4px; 
		}
		.escuela {
			font-family: Arial;
			text-align: center;
			margin-left: 60px;
			margin-top: 25px; 
		}		
		.container {
			width: 100%;
			padding-right: 15px;
			padding-left: 15px;
			margin-right: auto;
			margin-left: auto;
		}
		.section {
			padding: 70px 0;
		}		
		.text-center {
			text-align: center !important;
		}					

		.title {
			margin-top: 30px;
			margin-bottom: 25px;
			min-height: 32px;
		}
		.text-primary {
			color: #9c27b0 !important;
		}
		.row {
			display: flex;
			flex-wrap: wrap;
			margin-right: -15px;
			margin-left: -15px;
		}				
		.text-primary {
			color: #9c27b0 !important;
		}	
		hr{
			page-break-after: always;
			border: none;
			margin: 0;
			padding: 0;
		}
		table.tabla1 {
			font-family: Arial, Helvetica, sans-serif;
			width: 100%;
			height: 100px;
			text-align: center;
			border-collapse: collapse;
			margin: auto;
		}
		table.tabla1 td, table.tabla1 th {
			border: 1px solid #FFFFFF;
			padding: 3px 2px;
		}
		table.tabla1 tbody td {
			border: 1px solid #D0E4F5;
			font-size: 15px;
		}
		table.tabla1 thead {
			background: #0B6FA4;
			border-bottom: 5px solid #FFFFFF;
		}
		table.tabla1 thead th {
			font-size: 15px;
			font-weight: bold;
			color: #FFFFFF;
			text-align: center;
			border-left: 2px solid #FFFFFF;
		}
		table.tabla1 thead th:first-child {
			border-left: none;
		}

		table.tabla1 tfoot td {
			font-size: 6px;
		}
	</style>
	<?php $puebla = '/img/logo_puebla.png'; ?>	
	<?php $escuela = '/img/alumno.png'; ?>	
</head>
<body>
	<header class="cabeza">
		<div style="float: left; width: 95%;">
			<img class="izquierda" src="{{ public_path() . $puebla }}"/>
			<h2 class="escuela">Colegio de Bachilleres del Estado de Tlaxcala Plantel 11</h2>						
		</div>						
		<div style="float: right; width: 5%;">
			<img class="derecha" src="{{ public_path() . $escuela }}"/>
		</div>
	</header>		
	<div class="container">
		<div class="section">			
			<div class="text-center">   														
				<h2 style="margin: auto 2px;">
					Reporte grupal del Grupo: <b class="text-primary">{{ $grupo->name }} {{ $grupo->grado }} {{ $grupo->grupo }}</b>
				</h2>		
			</div><br><br>
			<table class="tabla1">
				<thead>
					<tr>
						<th>Lista de tutorados</th>
						<th>Bajas</th>
						<th>Altas</th>
						<th colspan="5">Indice de reprobación</th>
						<th colspan="5">Indice de regularización</th>
						<th>Alumnos que se certifican</th>
						<th>Porcentaje de eficiencia terminal</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td rowspan="2">{{ $grupo->alumnos()->count() }} Alumnos</td>
						<td rowspan="2">{{ $reporte->bajas }} Alumnos</td>
						<td rowspan="2">{{ $reporte->altas }} Alumnos</td>
						<td>Semana A</td>
						<td>Semana B</td>
						<td>Semana C</td>
						<td>Semana D</td>
						<td>Semana E</td>

						<td>Semana A</td>
						<td>Semana B</td>
						<td>Semana C</td>
						<td>Semana D</td>
						<td>Semana E</td>
						<td rowspan="2">H = {{$reporte->alumno_cerfiticacion->hombres}}<br>
							M = {{$reporte->alumno_cerfiticacion->mujeres}}
						</td>
						<td rowspan="2">{{ $reporte->porcentaje_eficiencia }}% <br>pasa al siguiente semestre</td>
					</tr>
					<tr>
						<td>{{ $reporte->indice_reprobacion->semanaA }}<br>Alumnos</td>
						<td>{{ $reporte->indice_reprobacion->semanaB }}<br>Alumnos</td>
						<td>{{ $reporte->indice_reprobacion->semanaC }}<br>Alumnos</td>
						<td>{{ $reporte->indice_reprobacion->semanaD }}<br>Alumnos</td>
						<td>{{ $reporte->indice_reprobacion->semanaE }}<br>Alumnos</td>

						<td>{{ $reporte->indice_regularizacion->semanaA }}<br>Alumnos</td>
						<td>{{ $reporte->indice_regularizacion->semanaB }}<br>Alumnos</td>
						<td>{{ $reporte->indice_regularizacion->semanaC }}<br>Alumnos</td>
						<td>{{ $reporte->indice_regularizacion->semanaD }}<br>Alumnos</td>
						<td>{{ $reporte->indice_regularizacion->semanaE }}<br>Alumnos</td>
					</tr>
				</tbody>
			</table>							
			
		</div>
	</div>
	<div class="pie">
		<h3>Dirección: Calle Emiliano Zapata Sur N, Sexto Barrio Emiliano Zapata, 90140 Panotla, Tlax. <br>
			Teléfono: 246 462 5147
		</h3>
	</div>
</body>
</html>