<html>
<head>
	<title>Seguimiento del  Alumno {{$seguimiento->alumno_id}} en riesgo</title>		
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
		.justify-content-end {
			justify-content: flex-end !important;
		}
		.col-6 {
			flex: 0 0 50%;
			max-width: 50%;
		}
		td{
			font-size: 15px;
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
				<h2 style="margin: auto">
					Seguimiento del Alumno:  
					<b class="text-primary">
						{{ $seguimiento->alumnos[0]->name }} {{ $seguimiento->alumnos[0]->apellidoP}} {{ $seguimiento->alumnos[0]->apellidoM }}
					</b>
				</h2>		
			</div><br><br><br>					
			<span style="float: right; margin-right: 30px; font-size: 20px;">{{ $seguimiento->fecha }}</span><br><br>				

			<div style="border-style: solid; padding: 5px; width: 100%;">
				<table style="margin: auto; width: 100%; " cellspacing="10" >
					<tbody>
						<tr>
							<td>Nombre del alumno(a): {{ $seguimiento->alumnos[0]->name }} {{ $seguimiento->alumnos[0]->apellidoP}} {{ $seguimiento->alumnos[0]->apellidoM }}</td>
							<td colspan="2" style="text-align: center;">Matricula: {{ $seguimiento->alumnos[0]->nia }}</td>
						</tr>
						<tr>
							<td>Semestre que cursa: {{ $seguimiento->alumnos[0]->grupo->semestre }}</td>
							<td>Promedio acumulado: {{ $seguimiento->promedio_acumulado }}</td>
							<td>Promedio del ciclo actual: {{ $seguimiento->promedio_acumulado_ciclo_actual }}</td>
						</tr>
						<tr>
							<td colspan="3">Maestro tutor: {{ Auth::user()->name }} {{ Auth::user()->apellidoP }} {{ Auth::user()->apellidoM }}</td>
						</tr>
						<tr>
							<td colspan="3">¿Es beneficiario(a) de algún programa de becas o apoyos financieros?
								{{ $seguimiento->beneficiario_beca_apoyo }}
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!---->
			<div style="border-style: solid; padding: 5px; width: 100%; margin-top: 10px;">
				<table style="margin: auto; width: 100%; ">
					<tbody>
						<tr>
							<td colspan="3">
								<h3 style="text-align: center;">
									¿Se cuenta con información sobre cuestiones relacionadas con el estado de salud del alumnoa(a)?
								</h3><br>
								{{ $seguimiento->estado_salud_alumno }}
							</td>
						</tr>
						<tr>
							<td colspan="3">
								<h3 style="text-align: center;">
									¿Se cuenta con alguna información específica sobre el contexto familiar del alumno(a)?	
								</h3><br>
								{{ $seguimiento->contexto_familiar_alumno }}
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!---->
			<div style="border-style: solid; padding: 5px; width: 100%; margin-top: 10px;">
				<h4 style="text-align: center;">COMENTARIOS DE LOS DOCENTES SOBRE LA FORTALEZA Y ÁREAS DE OPORTUNIDAD DEL ALUMNO(A) ACADÉMICAS Y PERSONALES</h4>
				<table style="margin: auto; width: 100%; ">
					<tbody>
						<tr>
							<td>Nombre maestro: {{ $seguimiento->docente1 }}</td>
							<td>Materia: {{ $seguimiento->materia1 }}</td>
							<td>Comentarios: {{ $seguimiento->comentarios1 }}</td>
						</tr>
						<tr>
							<td>Nombre maestro: {{ $seguimiento->docente2 }}</td>
							<td>Materia: {{ $seguimiento->materia2 }}</td>
							<td>Comentarios: {{ $seguimiento->comentarios2 }}</td>
						</tr>
						<tr>
							<td>Nombre maestro: {{ $seguimiento->docente3 }}</td>
							<td>Materia: {{ $seguimiento->materia3 }}</td>
							<td>Comentarios: {{ $seguimiento->comentarios3 }}</td>
						</tr>
						<tr>
							<td>Nombre maestro: {{ $seguimiento->docente4 }}</td>
							<td>Materia: {{ $seguimiento->materia4 }}</td>
							<td>Comentarios: {{ $seguimiento->comentarios4 }}</td>
						</tr>
						<tr>
							<td>Nombre maestro: {{ $seguimiento->docente5 }}</td>
							<td>Materia: {{ $seguimiento->materia5 }}</td>
							<td>Comentarios: {{ $seguimiento->comentarios5 }}</td>
						</tr>
						<tr>
							<td>Nombre maestro: {{ $seguimiento->docente6 }}</td>
							<td>Materia: {{ $seguimiento->materia6 }}</td>
							<td>Comentarios: {{ $seguimiento->comentarios6 }}</td>
						</tr>
						<tr>
							<td>Nombre maestro: {{ $seguimiento->docente7 }}</td>
							<td>Materia: {{ $seguimiento->materia7 }}</td>
							<td>Comentarios: {{ $seguimiento->comentarios7 }}</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!---->
			<div style="border-style: solid; padding: 5px; width: 100%; margin-top: 10px;">
				<h4>REGISTRO DEL DESEMPEÑO ESCOLAR (Calificaciones parciales y comentarios de sus maestros)</h4>
				<table style="margin: auto; width: 100%; ">
					<tbody>
						<tr>
							<td>Nombre maestro: {{ $seguimiento->desempeño_escolar }}</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!--<h3 class="text-center">Gracias por compartir esta información usted es lo más importante para nosotros.</h3>-->
		</div>
	</div>
	<div class="pie">
		<h3>Dirección: Calle Emiliano Zapata Sur N, Sexto Barrio Emiliano Zapata, 90140 Panotla, Tlax. <br>
			Teléfono: 246 462 5147
		</h3>
	</div><hr>
	<div class="container">
		<div class="section">			
			<div style="border-style: solid; padding: 5px; width: 100%; margin-top: 40px;">
				<h4 style="text-align: center;">PRINCIPALES COMPROMISOS Y ACUERDOS</h4>
				<table style="margin: auto; width: 100%; ">
					<tbody>
						<tr>
							<td>{{ $seguimiento->compromisos_acuerdos }}</td>
						</tr>
					</tbody>
				</table>
			</div>
			<h3 class="text-center">Movimiento contra el Abandono Escolar en la Educación Media Superior</h3>
		</div>
	</div>
</body>
</html>