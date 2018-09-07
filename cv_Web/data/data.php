<?php 
	// VARIABLES
	$datosPersonales = array('nombre' => "Matias Allegranza",'domicilio' => "Rosario - Sta Fe.",'mail' => "matiasallegranza06@yahoo.com.ar",'telefono' => "341-153222351");

	$habilidades = array(
		array('conocimiento' => "HTML/CSS",'lvl' =>90),
		array('conocimiento' => "PHP",'lvl' => 80),
		array('conocimiento' => "JScript/JQuery",'lvl' => 50),
		array('conocimiento' => "JAVA",'lvl' => 70),
		array('conocimiento' => "MySQL/SQL",'lvl' => 100),
		array('conocimiento' => "Python/Django",'lvl' => 50));

	$idiomas = array(
		array('idioma' => "Español", 'lvl' => 100, 'obs' => "Nativo" ),
		array('idioma' => "Inglés Técnico", 'lvl' => 66, 'obs' => "Traducciones y escritura"));

	$otros = array(
		array('grupo' => "Carnet de conducir",'conocimiento' => array()),
		array('grupo' => "Ofimática",'conocimiento' => array("Word", "Excel", "PowerPoint", "Outlook")),
		array('grupo' => "Lenguajes de Programación",'conocimiento' => array("HTML/CSS","PHP","JScript/JQuery","C/C++","C#/VB.net","JAVA","SQL/MySQL/PostgreSQL","Prolog","Python/Django","Patrones/UML","POO","GIT / gitHub ")),
		array('grupo' => "Artes Marciales",'conocimiento' => array("3° Dan Tae Kwon Do ITF","2° Dan Full Contact","2° Dan Kick Boxing","1° Dan Muay Thai","Instructor de autodefensa civil y conocimientos de seguridad y custodia VIP","Instructor de cuchillo de combate"))
	);

	/*
	* Datos del array de trabajos
	*	funcion -- Que rol / funcion cumplo y el lugar del trabajo
	*	te -- Tipo de empleado (Transitorio, monotributista, etc)
	*	fecIni -- Fecha de inicio laboral
	*	fecFin -- Fecha de fin laboral, si esta en blanco es porque esta trabajando actualmente
	*	desc -- Descripcion del puesto y logros
	*	contacto -- datos del contacto del trabajo
	*/

	$municipalidad = array('funcion' => "Administrativo / Dirección General de Personal - Municipalidad de Rosario", 'te' => "Relación de dependencia - Transitorio", 'fecIni' => "Ago 2010", 'fecFin' => null, 'desc' => "<b><em>Help Desk lv 1 y 2: </em></b>Doy soporte al parque infórmatico de la Dir. gral de Personal de la Municipalidad de Rosario, tanto a PC (60 equipos) como a impresoras (12 equipos).<br>
		<b><em>Seguridad: </em></b>Encargado de la seguridad, configuración de los usuarios y sus permisos en el sistema MAP, configuración de roles, agrupamientos y permisos. Son aproximadamente 400 usuarios.<br><b><em>Rutina mensual: </em></b> Encargado de la carga de los archivos de las horas extras, movilidad y extensiones horarias de la Municipalidad de Rosario, como los descuentos que realizan entidades externas a los empleados. Encargado de la generación de los archivos y de la distribución de los mismos a los interesados.<br><b><em>Huellas Biométricas:</em></b> Enrolamiento de huellas dactilares para el marcado del personal.<br>
		<b><em>Generación de informes: </em></b> Generación de informes mediantes consultas SQL y usando la herramienta Pentaho.<br>
		<b><em>Redes: </em></b>Mantenimiento del servidor que nos provee red a la area local de la Dirección. <br>", 'contacto' => " 3401 - 4802942 | Analía Gonzalez | RRHH");
	$fagdut = array('funcion' => "Docente / Instituto de Capacitación Fagdut", 'te' => "Relación de dependencia - Monotributista", 'fecIni' => "May 2015", 'fecFin' => null, 'desc' => "<b><em>Docente del curso de Herramientas de PC </em>: </b>Enseñanza en el uso de la computadora con el objetivo de que el alumno adquiera las herramientas necesarias para desenvolverse en el ámbito hogareño, laboral y en la vida acádemica.<br>El cupo de alumnos es de 10 a 15 alumnos por comisión.<br>El temario del curso es:<br><ul><li><i>Introducción a la Informática:</i> Conceptos básicos.</li><li><i>Windows 10: </i>Manejo del Windows y configuraciones básicas.</li><li><i>Internet: </i>Historia básica, búsqueda, creación y uso de webmail, redes sociales, descarga de archivos.</li><li><i>Nube: </i>Concepto básco, trabajo colaborativo con Google Drive.</li><li><i>Word: </i>Uso de la aplicación, configuraciones de estilo, inserción de imágenes.</li><li><i>Excel: </i>Uso de la aplicación, aprendizaje en el uso de formúlas avanzadas y gráficos (Para uso administrativo).</li><li><i>PowerPoint: </i>Uso de la aplicación, creacion de una diapositiva.</li></ul>", 'contacto' => "0341 - 4247475 / 4265733 / 156816648 | Lucía Vega | Administrativa");

	$hdf = array('funcion' => "Docente / Escuela de Esgrima Criolla Herederos de Fierro", 'te' => "Fundador", 'fecIni' => "May 2018", 'fecFin' => null, 'desc' => "<b><em>Instructor práctica</em> : </b>Es la primer escuela de esgria criolla de Santa Fe y de Rosario, la segunda agrupación a nivel Nacional que busca recrear e investigar el arte de combate que utilizaban los gauchos de nuestras tierras.<br>
			En esta disciplina enseñamos el uso de los elementos y armas del gaucho como ser facón, boleadora, lanza, rebenque y poncho y la historia detrás de ellos, y del mismo gaucho, que fuera una figura importantisima en la historia Argentina ", 'contacto' => "0341 - 153222351 | Matias Allegranza | Fundador / Instructor");

	$desarrolladorWeb = array('funcion' => "Desarrollador Web / FullStack", 'te' => "Desarrollador Freelance", 'fecIni' => "Dic 2016", 'fecFin' => null, 'desc' => "Desarrollo de páginas web responsive con lenguajes actuales, buscando la eficiencia en el uso de los recursos sin descuidar la experiencia del usuario, usando como sistema de versionado a gitHub (GIT) <br><b><em>Proyectos</em>:</b><ul><li>Página web Herederos de Fierro: Página web de la agrupación de esgrima criolla.</li>Tecnologías usadas:<ul><li><em>Front End</em>: HTML/CSS (W3.css), JScript/JQuery</li><li><em>Back End</em>: PHP</li></ul>
		<li>Página web Allelectric: Página web del local de venta de insumos eléctricos Allelectric.</li>Tecnologías usadas:<ul><li><em>Front End</em>: HTML/CSS (bootstrap 3), JScript/JQuery</li><li><em>Back End</em>: Django / Python</li><li><em>Base de Datos</em>: PostgreSQL</li></ul></ul>", 'contacto' => "");

	$desarrolladorAppWeb = array('funcion' => "Desarrollador aplicaciones Web / FullStack", 'te' => "Desarrollador Freelance", 'fecIni' => "Dic 2016", 'fecFin' => null, 'desc' => "Desarrollo de aplicaciones web responsive con lenguajes actuales, buscando la eficiencia en el uso de los recursos sin descuidar la experiencia del usuario, usando como sistema de versionado a gitHub (GIT).<br><b><em>Proyectos</em>:</b><ul><li>sistanest: Aplicacion web para la gestoria de anestesias.</li>Tecnologías usadas:<ul><li><em>Front End</em>: HTML/CSS (W3.css), AngularJS 2/5, JSP</li><li><em>Back End</em>: JAVA (Servlet)</li><li><em>Base de Datos</em>: MySQL</li></ul></ul>", 'contacto' => "0341 - 153260682 | Jorgelina Deseta | Gestora de Anestesias");

	$tkd = array('funcion' => "Instructor / Martial Power",'te' => "Instructor adjunto",'fecIni' => "Ene 2006",'fecFin' => "Dic 2012",'desc' => "<b><em>Instructor de Tae Kwon Do</em> : </b>Me desempeñe como instructor asistente en la academia de Tae Kwon do Martial Power en la localidad de Rosario, llegando a ser Instructor adjunto de la misma.<br>El objetivo fue trasmitir los valores y las enseñanzas de esta arte marcial a los alumnos de todas las edades y generos, buscando como objetivo que fijen los conocimientos para poder rendir los examenes y asistir a competiciones Nacionales, sudamericanos e Internacionales con tranquildad y confianza en sus habilidades.<br>",'contacto' => "034 - telefono | M° Cristian Bonomini | Fundador / Maestro");

	$dibujante = array('funcion' => "Dibujante de Planos",'te' => "Freelance",'fecIni' => "Jun 1999",'fecFin' => "Jun 1999",'desc' => "Confección de plano de vivienda para ser presentado en la Dirección de Catastro de la Municipalidad de El Trébol, dicho plano fue autorizado por un Ingeniero Civil.", 'contacto' => "3401 - 422931 | Ricardo Allegranza | Dueño del domicilio");

	$trabajos = array($municipalidad, $fagdut, $hdf, $desarrolladorWeb, $desarrolladorAppWeb, $tkd, $dibujante);
	?>

