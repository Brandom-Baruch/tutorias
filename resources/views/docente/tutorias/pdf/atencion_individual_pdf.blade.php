<html>
<head>
	<title>Atención individual del Alumno {{$alumno->nia}}</title>		
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
			border: 1px solid #FFFFFF;
			width: 780px;
			height: 200px;
			text-align: left;
			border-collapse: collapse;
		}
		table.tabla1 td, table.tabla1 th {
			border: 1px solid #D0E4F5;
			padding: 3px 2px;
		}
		table.tabla1 tbody td {
			font-size: 13px;
		}
		table.tabla1 tr:nth-child(even) {
			background: #D0E4F5;
		}
		table.tabla1 thead {
			background: #0B6FA4;
			border-bottom: 5px solid #FFFFFF;
		}
		table.tabla1 thead th {
			font-size: 17px;
			font-weight: bold;
			color: #FFFFFF;
			text-align: center;
			border-left: 2px solid #FFFFFF;
		}
		table.tabla1 thead th:first-child {
			border-left: none;
		}

		table.tabla1 tfoot td {
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
					Respuestas del Alumno: <b class="text-primary">{{$alumno->name}} {{$alumno->apellidoP}} {{$alumno->apellidoM}}</b>
				</h2>		
			</div>							
			<h3 class="title text-primary text-center">Test para detectar tutorados que requieran atención indivualizada</h3>

			<div style="padding: 10px; float: left; width: 50%; text-align: center;">
				<span><b>Nombre del Tutor:</b> {{ $test->nombre_docente }}</span>	
			</div>
			<div style="padding: 10px; float: right; width: 50%; text-align: center;">
				<span><b>Grupo:</b> {{ $test->grupo }}</span>
			</div>	<br><br><br>

			<table class="tabla1">
				<thead>
					<tr class="text-center">
						<th scope="col" style="width: 10%">FACTORES</th>
						<th scope="col" style="width: 50%">SITUACIONES</th>
						<th scope="col" style="width: 2%"></th>							
					</tr>
				</thead>
				</tbody>
					<!--Salud y peso-->
					<tr>
						<td rowspan="7"  class="text-center">Salud y peso</td>
						<td>Presentas deficiencia visual y auditiva</td>
						<td>
							{{ $test->respuesta1 }}
						</td>
					</tr>
					<tr>
						<td>Presentas desnutrición</td>
						<td>
							{{ $test->respuesta2 }}
						</td>
					</tr>
					<tr>
						<td>Tienes obesidad (más de 10 kilos arriba de tu peso)</td>
						<td>
							{{ $test->respuesta3 }}
						</td>
					</tr>
					<tr>
						<td>Tienes problemas de anorexia</td>
						<td>
							{{ $test->respuesta4 }}
						</td>
					</tr>
					<tr>
						<td>Tienes problemas de bulimia</td>
						<td>
							{{ $test->respuesta5 }}
						</td>
					</tr>
					<tr>
						<td>Eres sexualmente activo</td>
						<td>
							{{ $test->respuesta6 }}
						</td>
					</tr>
					<tr>
						<td>Has tenido enfermedades sexualmente transmisibles (ETS)</td>
						<td>
							{{ $test->respuesta7 }}
						</td>
					</tr>
					<!--Fin Salud y peso-->					
					<!--Académicos -->
					<tr>
						<td rowspan="4" class="text-center">Académicos</td>
						<td>Sientes apatía hacia el estudio</td>
						<td>
							{{ $test->respuesta8 }}
						</td>
					</tr>
					<tr>
						<td>Presentan deficiencia en la comprensión lectora</td>
						<td>
							{{ $test->respuesta9 }}
						</td>
					</tr>
					<tr>
						<td>Te faltan técnicas de estudio</td>
						<td>
							{{ $test->respuesta10 }}
						</td>
					</tr>
					<tr>
						<td>Tienes ideas claras sobre que harás en el futuro</td>
						<td>
							{{ $test->respuesta11 }}
						</td>
					</tr>
					<!--Fin Académicos -->
					<!--Psicosocial -->
					<tr>
						<td rowspan="6" class="text-center">Psicosocial</td>
						<td>Tienes problemas para expresar tu afecto</td>
						<td>
							{{ $test->respuesta12 }}
						</td>
					</tr>
					<tr>
						<td>Te consideras una persona violenta</td>
						<td>
							{{ $test->respuesta13 }}
						</td>
					</tr>
					<tr>
						<td>Tienes problemas de depresión</td>
						<td>
							{{ $test->respuesta14 }}
						</td>
					</tr>
					<tr>
						<td>Puedes presentar problemas de ansiedad, nerviosismo o angustia sin motivos aparentes</td>
						<td>
							{{ $test->respuesta15 }}
						</td>
					</tr>
					<tr>
						<td>Fumas</td>
						<td>
							{{ $test->respuesta16 }}
						</td>
					</tr>
					<tr>
						<td>Tomas</td>
						<td>
							{{ $test->respuesta17 }}
						</td>
					</tr>
					<!--Fin Psicosocial-->
					<!--Familiar -->
					<tr>
						<td rowspan="3" class="text-center">Familiar</td>
						<td>Hay violencia familiar</td>
						<td>
							{{ $test->respuesta18 }}
						</td>
					</tr>
					<tr>
						<td>Falta comunicación entre tú y tus padres</td>
						<td>
							{{ $test->respuesta19 }}
						</td>
					</tr>
					<tr>
						<td>Pasas mucho tiempo solo en tu casa</td>
						<td>
							{{ $test->respuesta20 }}
						</td>
					</tr>>	
				</tbody>
			</table><br>
			<p>Si lo necesitas, en las siguientes líneas escribe que otra problemática tienes que no se mencione en el listado anterior.</p>
		    <p>{{ $test->respuesta21 }}</p>
			<h3 class="text-center">Gracias por compartir esta información usted es lo más importante para nosotros.</h3>
		</div>
	</div>
	<div class="pie">
		<h3>Dirección: Calle Emiliano Zapata Sur N, Sexto Barrio Emiliano Zapata, 90140 Panotla, Tlax. <br>
			Teléfono: 246 462 5147
		</h3>
	</div>
</body>
</html>