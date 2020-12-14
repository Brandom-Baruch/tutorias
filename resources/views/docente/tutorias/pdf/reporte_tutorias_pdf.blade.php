<html>
<head>
	<title>Control de Asistencias</title>		
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
		.tabla1{
			font-size: 18px;
		}
		table.tabla1 td, table.tabla1 th {
			padding: 8px;
		}
		table.tabla2 {
			font-family: Arial, Helvetica, sans-serif;
			border: 1px solid #FFFFFF;
			width: 100%;
			height: 200px;
			border-collapse: collapse; 
			margin: auto;
		}
		table.tabla2 td, table.tabla2 th {
			border: 1px solid #FFFFFF;
			padding: 3px 2px;
		}
		table.tabla2 tbody td {
			font-size: 13px;
		}
		table.tabla2 tr:nth-child(even) {
			background: #D0E4F5;
		}
		table.tabla2 thead {
			background: #0B6FA4;
			border-bottom: 5px solid #FFFFFF;
		}
		table.tabla2 thead th {
			font-size: 17px;
			font-weight: bold;
			color: #FFFFFF;
			text-align: center;
			border-left: 2px solid #FFFFFF;
		}
		table.tabla2 thead th:first-child {
			border-left: none;
		}

		table.tabla2 tbody td {
			font-size: 14px;
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
					Reporte de Tutoría y Orientación Escolar
				</h2>		
			</div><br>

			<table style="width: 100%; margin: auto; border-style: solid;"  class="tabla1">
				<tbody>
					<tr>
						<td>Ciclo Escolar:</td>
						<td>{{ $reporte->ciclo_escolar}}</td>
						<td>Fecha:</td>
						<td>{{ $reporte->fecha }}</td>
					</tr>
					<tr>
						<td>Nombre del Director:</td>
						<td>{{ $reporte->director_name }}</td>
					</tr>
					<tr>
						<td>Nombre del Tutor Escolar:</td>
						<td>{{ $reporte->tutor_escolar_name }}</td>
					</tr>
					<tr>
						<td>Nombre del Orientador Escolar</td>
						<td>{{ $reporte->orientador_name }}</td>
					</tr>
				</tbody>
			</table><br><br>
			<table class="tabla2">
				<thead>
					<tr>
						<th colspan="6" style="text-align: center;">INFORMACIÓN DEL ÁREA DE TUTORÍA</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td >Grado:</td>
						<td>{{ $grupo->grado }}</td>
						<td>Grupo</td>
						<td>{{ $grupo->grupo }}</td>
						<td>Nombre del Tutor:</td>
						<td>{{ Auth::user()->name }} {{ Auth::user()->apellidoP }} {{ Auth::user()->apellidoM	 }}</td>
					</tr>
					<tr>
						<td>Total de alumnos:</td>
						<td>{{ $grupo->alumnos()->count() }}</td>
						<td>Hombres</td>
						<td>{{ $reporte->total_hombres }}</td>
						<td>Mujeres:</td>
						<td>{{ $reporte->total_mujeres }}</td>
					</tr>
					<tr>
						<td colspan="2">Bajas registraras hasta la fecha:</td>
						<td>{{ $reporte->bajas_registradas }}</td>
						<td colspan="2">Altas registraras hasta la fecha:</td>
						<td>{{ $reporte->altas_registradas }}</td>	
					</tr>
					<tr><!--6-->
						<td colspan="3">Principales motivos de baja en el grupo:</td>
						<td colspan="3">{{ $reporte->principales_motivos_baja }}</td>
					</tr>
					<tr>
						<td colspan="3">Alumnos con 3 o más asignaturas reprobadas:</td>
						<td colspan="3">{{ $reporte->alumnos_mas_de_tres_materia_reprobada }}</td>
					</tr>
					<tr>
						<td colspan="3">Alumnos que estan o necesitan seguimiento del área de tutorías:</td>
						<td colspan="3">{{ $reporte->alumnos_necesitan_seguimiento }}</td>
					</tr>
					<tr>
						<td colspan="3">Alumnos que estan o necesitan seguimiento del área de orientación:</td>
						<td colspan="3">{{ $reporte->alumnos_requieren_orientacion }}</td>
					</tr>
					<tr>
						<td colspan="3">Alumnos que requieren atención especial:</td>
						<td colspan="3">{{ $reporte->alumnos_requieren_atencion_especial }}</td>
					</tr>
					<tr>
						<td colspan="3">Alumnos canalizados a alguna institución:</td>
						<td colspan="3">{{ $reporte->alumnos_canalizados_alguna_institucion }}</td>
					</tr>
				</tbody>
			</table>
			<br><br><br>
			<div style="margin: auto; text-align: center;">
				<b>_________________________________________</b>
				<p>Nombre y firma del tutor del grupo</p>
			</div>			
		</div>
	</div>
	<div class="pie">
		<h3>Dirección: Calle Emiliano Zapata Sur N, Sexto Barrio Emiliano Zapata, 90140 Panotla, Tlax. <br>
			Teléfono: 246 462 5147
		</h3>
	</div>
</body>
</html>