<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CV - Matias Allegranza</title>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/w3.css">

</head>
<body class="w3-light-grey">

	<?php include("data/data.php"); ?>
	<h1 style="color: red">Faltantes</h1>
	<ol>
		<li> Cambiar la foto</li>
	</ol>
	<!-- Contenedor-->
	<div class="w3-content w3-margin-top" style="max-width: 1400px;">

		<!--Grilla-->

  		<div class="w3-row-padding">

			<!--Columna de la izquierda-->
			<div class="w3-third">
				<div class="w3-white w3-text-grey w3-card-4">
					<div class="w3-display-container">
						<img src="img/58866.jpg" alt="Matias Allegranza" style="width: 100%">
						<div class="w3-display-bottomleft w3-container w3-text-black">
							<?php  echo "<h2>".$datosPersonales['nombre']."</h2>" ?>
						</div>
					</div>
					<div class="w3-container">
						<p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-indigo"></i><?php echo $datosPersonales['domicilio']; ?></p>
						<p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-indigo"></i><?php echo $datosPersonales['mail']; ?></p>
						<p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-indigo"></i><?php echo $datosPersonales['telefono'] ?></p>
						<hr>
						<p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-indigo"></i>Habilidades</b></p>
						<?php 
							foreach($habilidades as $h) {
							 	echo "<p>".$h['conocimiento']."</p>";
							 	echo "<div class = 'w3-grey w3-round-xlarge w3-small'>";
							 	echo "<div class='w3-container w3-center w3-round-xlarge w3-indigo' style='width: ".$h['lvl']."%'>".$h['lvl']."%</div>";
							 	echo "</div>";
							 } ?>
						
						<br>
						<p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-indigo"></i>Idiomas</b></p>
						<?php 
							foreach ($idiomas as $i) {
							 	echo "<p>".$i['idioma']."</p>";
								echo "<div class='w3-grey w3-round-xlarge''>";
								echo "<div class='w3-container w3-round-xlarge w3-small w3-indigo w3-center' style='height: 24px;width: ".$i['lvl']."%'>".$i['obs']."</div>";							
								echo "</div>";
							 } 
						?>
						<br>
					</div>
				</div>
			</div>
			<!-- Fin columna de la izquerda-->
			<!-- Columna de la derecha -->
			<div class="w3-twothird">
				<div class="w3-container w3-card w3-white w3-margin-bottom">
					
					<!-- EXPERIENCIAS LABORALES -->
					<h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-indigo"></i>Experiencia Laboral</h2>
					<hr>
					<?php 
					foreach ($trabajos as $t) {
						echo "<div class='w3-container w3-hover-light-grey'>";
						echo "<h5 class='w3-opacity'><b>".$t['funcion']."</b></h5>";
						echo "<p class = 'w3-opacity'>".$t['te']."</p>";
						echo "<h6 class = 'w3-text-indigo'><i class = 'fa fa-calendar fa-fw w3-margin-right'></i>".$t['fecIni']." - ";
						if(is_null($t['fecFin'])){
							echo "<span class = 'w3-tag w3-indigo w3-round'>Actualidad</span></h6>";
						}
						else
						{
							echo $t['fecFin']."</h6>";
						}
						echo "<button class = 'collapsible w3-round w3-text-indigo' style = 'text-align: left;'>Descripción del Trabajo</button>";
						echo "<div class='content'>";
						echo "<p>".$t['desc']."</p>";
						echo "</div>";
						echo "<p class = 'w3-opacity'>Contacto:<i class = 'fa fa-phone fa-fw w3-text-indigo'></i>".$t['contacto']."</p>";
					 	echo "</div>";
					 	echo "<hr>";
					 } ?>
					<br>
					<!-- FIN EXPERIENCIAS LABORALES -->

					<!-- INICIO EDUCACION -->

					<div class="w3-container w3-card w3-white">
						<h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-indigo"></i>Educación</h2>
						<div class="w3-container w3-hover-light-grey">
							<h5 class="w3-opacity"><b>Universidad Tecnológica Nacional - Rosario</b></h5>
							<p class="w3-opacity">Adscripción a Soporte de datos con programación visual</p>
							<h6 class="w3-text-indigo"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jul 2018 - <span class="w3-tag w3-indigo w3-round">Actualidad</span></h6>
							<p>
								<b><em>Adscripción a la materia Soporte de Datos con Programación Visual</em> :</b>En esta materia se introducen los principios de la programación en capas, realizando un programa simple en 3 capas.<br>
								Originalmente en esta materia se enseñaba usando el lenguaje Visual FoxPro 9, pero actualmente se esta usando Python.<br>
								Mis funciones y objetivos son:<br>
								<ul>
									<li>Crear el material para guiar a los alumnos en la instalación y programación de Django.</li>
								   	<li>Desarrollar un sitio web en Django para ABMC de Socio.</li>
								   	<li>Desarrollar un webservice que consulte a la web.</li>
								   	<li>Planificar y desarrollar los test de pruebas.</li>
								</ul>
						    </p>
						</div>
						<hr>
						<div class="w3-container w3-hover-light-grey">
							<h5 class="w3-opacity"><b>Universidad Tecnológica Nacional - Rosario</b></h5>
							<p class="w3-opacity">Ingeniería en Sistemas de Información</p>
							<h6 class="w3-text-indigo"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2003 - <span class="w3-tag w3-indigo w3-round">Actualidad</span></h6>
							<p>Adeudando 6 materias para el título de Ingeniero en Sistemas de Información.<br>
							Desarrollando la tesis, teniendo como hipótesis base: La programación beneficia al desarrollamiento cognitivo?.</p>
						</div>
						<hr>
						<div class="w3-container w3-hover-light-grey">
							<h5 class="w3-opacity"><b>Universidad Tecnológica Nacional - Rosario</b></h5>
							<p class="w3-opacity">Analista Universitario en Sistemas</p>
							<h6 class="w3-text-indigo"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2003 - Ago 2015</h6>
							<p>Egresado con título intermedio de la carrera de Ingeniería en Sistemas de Información.</p>
						</div>
						<hr>
						<div class="w3-container w3-hover-light-grey">
							<h5 class="w3-opacity"><b>Esc. de Educ. Técnica N° 343 Gral. MM de Güemes - El Trébol</b></h5>
							<p class="w3-opacity">Técnico Electricista Mecánico</p>
							<h6 class="w3-text-indigo"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 1997 - Dic 2002</h6>
							<p>Egresado con el titulo de técnico Electricista Mecánico.</p>
						</div>
						<hr>
					</div>


					<!-- FIN EDUCACION -->

					<!-- INICIO CONOCIMIENTOS Y OTROS -->
					<div class="w3-container w3-card w3-white">
						<h2 class="w3-text-grey w3-padding-16">Otros conocimientos y habilidades</h2>
						<div class="w3-container w3-hover-light-grey">
							<?php 
								echo "<ul>"; 
								foreach ($otros as $o) {
									echo "<li>".$o['grupo']."</li>";
									echo "<ul>";
									foreach ($o['conocimiento'] as $c) {
										echo "<li>".$c."</li>";
									}
									echo "</ul>";
								}
								echo "</ul>";
							?>
							
						</div>
					</div>
					<!-- FIN CONOCIMIENTOS Y OTROS -->
				</div>
			</div>
			<!-- Fin columna de la derecha -->
		</div>
		<!-- Fin Grilla -->
	</div>
	<!-- Fin Contenedor -->

	<!-- Footer-->

	<footer class="w3-container w3-indigo w3-center w3-margin-top">
		<p>Redes Sociales</p>
		<a href="https://www.linkedin.com/in/matias-allegranza-30a39b47/" class="fa fa-linkedin-square w3-hover-opacity fa-2x" style="text-decoration: none;"></a>
		<p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
		<p>&copy - Developed by Matias Allegranza - v1.0</p>
	</footer>
	<!-- Fin footer -->


	<!--Javascript -->
	<script src="JS/scripts.js"></script>

</html>