<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="icon" href="smart.ico">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">

	<title>Club de Conversacion | SEI</title>
</head>
<body>

	<header>
		<div style="backgrond-color: #a2ef44" class="container-fluid">
			<div class="row justify-content-between">
				<div class="col-sm-12 col-md-3 align-self-center text-center">
					<a href="index.php"><img class="img-fluid" src="logo.png" alt="Logo SEI" width="100%"></a>
				</div>

				<div class="col-sm-12 col-md-6 align-self-center text-center">
					<img src="SVG/club_conv.png" class="img-fluid" alt="Club de Conversacion" width="40%">
				</div>

				<div class="col-sm-12 col-md-3 align-self-center text-center">
					<div class="dropdown text text-menu">
						<button class="float-right float-sm-right float-md-none float-lg-none float-xl-none btn btn-outline-success no-border" type="button" id="dropdownmenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i style="font-size: 48px" class="icon-menu material-icons">menu</i>
							
						</button>

						<div class="dropdown-menu" aria-labelledby="dropdownmenu1">
							<a class="dropdown-item" href="cursos.php">Cursos</a>
							<a class="dropdown-item" href="club.php">Club de conversacion</a>
							<a class="dropdown-item" href="galeria.php">Galeria</a>
							<a class="dropdown-item" href="contacto.php">contacto</a>
							<li class="dropdown-divider"></li>
							
						    <a class="dropdown-item" href="#q_somos" data-toggle="modal" >¿Quienes somos?</a>
						    <a class="dropdown-item" href="#mision" data-toggle="modal">Mision</a>
							<a class="dropdown-item" href="#vision" data-toggle="modal">Vision</a>
						    <a class="dropdown-item" href="#historia" data-toggle="modal">Historia</a>
						    <li class="dropdown-divider"></li>
						    <a class="dropdown-item" href="#faqs" data-toggle="modal">Preguntas Frecuentes</a>
						</div>
					</div>

					<!-- Modals -->
					<div class="text">
						<div class="modal fade" id="q_somos">
						    	<div class="modal-dialog">
						    		<div class="modal-content">
						    			<div class="modal-header modal-header-custom">
						    				<h4 class="modal-title">¿Quiénes somos?</h4>
						    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						    				
						    			</div>

						    			<div class="modal-body">
						    				<p>
						    					<img class="img-fluid" src="logo.png" alt="Logo SEI" width="100%">
											</p>

						    				<p class="text-left">
						    					Somos una institución enfocada a capacitar en excelencia a personas de todas las edades en el desarrollo  comunicativo del idioma inglés. 
						    				</p>
						    				<p class="text-left">
						    					A lo largo de 19 años hemos obtenido muy buenos resultados, evidentes y eficaces, en el progreso de las cuatro destrezas básicas del idioma, formando a nuestros alumnos para que alcancen altos estándares en las habilidades auditivas, orales escritas, y de comprensión de lectura.
						    				</p>
						    				<p class="text-left">
						    					Hoy en día seguimos contando con la preferencia de nuestros alumnos y la recomendación de muchos de nuestros egresados. Asimismo contamos con la oportunidad de poner cada vez el inglés al alcance de más personas.
						    				</p>				    				
						    			</div>

						    			<div class="modal-footer">
						    				<button type="button" class="btn btn-outline-success" data-dismiss="modal">Cerrar</button>
						    			</div>
						    		</div>
						    	</div>
						</div>

						<div class="modal fade" id="mision">
						    	<div class="modal-dialog">
						    		<div class="modal-content">
						    			<div class="modal-header modal-header-custom">
						    				<h4 class="modal-title">Misión</h4>
						    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						    				
						    			</div>

						    			<div class="modal-body">
						    				<p class="text-left">
						    					Nuestra institución tiene como principal objetivo desarrollar las habilidades lingüísticas de nuestros alumnos proporcionándoles las herramientas necesarias del idioma Inglés a través de una educación de alta calidad para que alcancen un nivel comunicativo óptimo en todas las áreas del lenguaje.
						    				</p>				    				
						    			</div>

						    			<div class="modal-footer">
						    				<button type="button" class="btn btn-outline-success" data-dismiss="modal">Cerrar</button>
						    			</div>
						    		</div>
						    	</div>
						</div>
						
						<div class="modal fade" id="vision">
						    	<div class="modal-dialog">
						    		<div class="modal-content">
						    			<div class="modal-header modal-header-custom">
						    				<h4 class="modal-title">Visión</h4>
						    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						    				
						    			</div>

						    			<div class="modal-body">
						    				<p class="text-left">
						    					A través de nuestros esfuerzos y acciones pretendemos potenciar las capacidades de nuestros alumnos, donde ellos sientan el respaldo sólido que les proporcione la seguridad y confianza de un equipo de trabajo de primer nivel. Así mismo elevar nuestros estándares educativos hasta alcanzar el prestigio de una institución consolidada, donde sean nuestros egresados bilingües incorporados al sector productivo nuestra principal carta de recomendación.
						    				</p>				    				
						    			</div>

						    			<div class="modal-footer">
						    				<button type="button" class="btn btn-outline-success" data-dismiss="modal">Cerrar</button>
						    			</div>
						    		</div>
						    	</div>
						</div>

						<div class="modal fade" id="historia">
						    	<div class="modal-dialog">
						    		<div class="modal-content">
						    			<div class="modal-header modal-header-custom">
						    				<h4 class="modal-title">Historia</h4>
						    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						    				
						    			</div>

						    			<div class="modal-body">

						    				<p>
						    					<img class="img-fluid" src="historia.jpg" alt="Logo SEI" width="100%">
						    				</p>

						    				<p class="text-left">
						    					Smart English institute fue fundada el 4 de febrero de 1999 con la finalidad de impartir asesorías y clases grupales que faciliten el aprendizaje del idioma inglés. Desde entonces a la fecha hemos recibido  niños, jóvenes y adultos  que se han interesado en asimilar o mejorar sus capacidades en el idioma. 
						    				</p>
						    				<p class="text-left">
						    					Hoy en día, estamos ofreciendo clases presenciales en un ambiente agradable y sencillo donde los alumnos sientan la confianza y vean el avance constante de sus destrezas comunicativas. Impulsamos  de forma continua las habilidades del idioma tanto orales como escritas, es decir nuestros cursos están diseñados para que paso a paso el alumno pueda en inglés hablar, entender lo que escucha, escribir, y leer comprendiendo la lectura.
						    				</p>				    				
						    			</div>

						    			<div class="modal-footer">
						    				<button type="button" class="btn btn-outline-success" data-dismiss="modal">Cerrar</button>
						    			</div>
						    		</div>
						    	</div>
						</div>

						<div class="modal fade" id="faqs">
						    	<div class="modal-dialog">
						    		<div class="modal-content">
						    			<div class="modal-header modal-header-custom">
						    				<h4 class="modal-title">Preguntas frecuentes</h4>
						    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						    				
						    			</div>

						    			<div class="modal-body">

						    				<p>
	  											<a class="b1 btn btn-block btn-outline-success no-border" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapseExample">
	    											¿Hay inscripciones abiertas todo el año?
	  											</a>
											</p>
												<div class="collapse" id="collapse1">
												  <div class="card card-body">
												    No. Conforme nuestros cursos abren la convocatoria se inicia el periodo de inscripciones correspondiente.
												  </div>
												</div>

											<p>
	  											<a class="b1 btn btn-block btn-outline-success no-border" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample">
	    											¿Que precios manejan?
	  											</a>
											</p>
												<div class="collapse" id="collapse2">
												  <div class="card card-body">
												    Nuestros precios varian segun el tipo de curso. Puede consultar los precios en el area de cursos <a href="cursos.php">aqui</a>
												  </div>
												</div>

						    				<p>
	  											<a class="b1 btn btn-block btn-outline-success no-border" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapseExample">
	    											¿Que horarios manejan?
	  											</a>
											</p>
												<div class="collapse" id="collapse3">
												  <div class="card card-body">
												    Nuestra institución es vespertina de lunes viernes, donde manejamos horarios desde las 2:00 de la tarde hasta las 8:00 de la noche, y además ofrecemos cursos matutinos en sábado de 9:00 de la mañana a 12:00 mediodía.
												  </div>
												</div>

											<p>
	  											<a class="b1 btn btn-block btn-outline-success no-border" data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false" aria-controls="collapseExample">
	    											¿Cuántas personas son por grupo?
	  											</a>
											</p>
												<div class="collapse" id="collapse4">
												  <div class="card card-body">
												    Depende del nivel manejamos grupos desde 14, 16,  o un máximo de 20 participantes.
												  </div>
												</div>

											<p>
	  											<a class="b1 btn btn-block btn-outline-success no-border" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapseExample">
	    											¿Aplican examen de colocación?
	  											</a>
											</p>
												<div class="collapse" id="collapse5">
												  <div class="card card-body">
												    Sí, es importante para nosotros ubicar a los alumnos en el nivel adecuado para que continué con su aprendizaje en el idioma. El examen que nosotros aplicamos no tiene ningún costo, y es necesario apartar una cita a nuestros teléfonos tan pronto se tengan las convocatorias para el inicio de curso.
												  </div>
												</div>

							    			<p>
	  											<a class="b1 btn btn-block btn-outline-success no-border" data-toggle="collapse" href="#collapse6" role="button" aria-expanded="false" aria-controls="collapseExample">
	    											¿Manejan grupos de preescolar?
	  											</a>
											</p>
												<div class="collapse" id="collapse6">
												  <div class="card card-body">
												    Por disposición de las autoridades, solamente podemos recibir niños a partir de seis años cumplidos, acreditando esto con el acta de nacimiento.
												  </div>
												</div>

											<p>
	  											<a class="b1 btn btn-block btn-outline-success no-border" data-toggle="collapse" href="#collapse7" role="button" aria-expanded="false" aria-controls="collapseExample">
	    											¿Aplican algún descuento por hermanos inscritos?
	  											</a>
											</p>
												<div class="collapse" id="collapse7">
												  <div class="card card-body">
												    No, dado que somos una opción bastante accesible para familias enteras. Nuestros costos son los más bajos de La ciudad.
												  </div>
												</div>

											<p>
	  											<a class="b1 btn btn-block btn-outline-success no-border" data-toggle="collapse" href="#collapse8" role="button" aria-expanded="false" aria-controls="collapseExample">
	    											¿Ofrecen asesorías individuales o cursos personalizados?
	  											</a>
											</p>
												<div class="collapse" id="collapse8">
												  <div class="card card-body">
												    Cursos personalizados no. Asesorías  individuales Las manejamos con previa cita.
												  </div>
												</div>

											<p>
	  											<a class="b1 btn btn-block btn-outline-success no-border" data-toggle="collapse" href="#collapse9" role="button" aria-expanded="false" aria-controls="collapseExample">
	    											¿Imparten cursos empresariales?
	  											</a>
											</p>
												<div class="collapse" id="collapse9">
												  <div class="card card-body">
												    Sí, siempre y cuando el grupo que esté solicitando manejen aproximadamente el mismo nivel de inglés. Además manejamos inglés para fines específicos es decir, desarrollamos cursos dirigidos exclusivamente al área de desempeño de los solicitantes.
												  </div>
												</div>											

											<p>
	  											<a class="b1 btn btn-block btn-outline-success no-border" data-toggle="collapse" href="#collapse10" role="button" aria-expanded="false" aria-controls="collapseExample">
	    											¿Se puede presentar con ustedes el examen TOEFL?
	  											</a>
											</p>
												<div class="collapse" id="collapse10">
												  <div class="card card-body">
												    Oficialmente no. Por el momento solo ofrecemos cursos de preparación para presentar el examen, tan pronto tengamos 10 solicitantes para que se abra un grupo exclusivo con ese fin.
												  </div>
												</div>																																	

											<p>
	  											<div class="b1 btn btn-block btn-outline-success no-border" data-toggle="collapse" href="#collapse11" role="button" aria-expanded="false" aria-controls="collapseExample">
	    											¿Cuánto tiempo considera que se necesite para que un adulto pueda llegar a ser bilingüe?</div>
	  										</p>
											
												<div class="collapse" id="collapse11">
												    Nuestros cursos están diseñados para una duración de seis semestres para jóvenes o adultos y podemos considerar que depende mucho de los alumnos el hacer el curso de manera óptima para dominar todas las áreas de lenguaje.
												</div>

											<hr>

											<p>
	  											<a class="b1 btn btn-block btn-outline-success no-border" href="contacto.php" role="button">
	    											Ponte en contacto con Smart English Institute aqui
	    										</a>
	  										</p>
												 											
						    			</div>

						    			<div class="modal-footer">
						    				<button type="button" class="btn btn-outline-success" data-dismiss="modal">Cerrar</button>
						    			</div>
						    		</div>
						    	</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</header>
		
	<div class="container-fluid">
		<section class="main row">
			<article class="margin-custom col-xs-12 col-sm-12 col-md-12 col-lg-7">
			
				<div class="embed-responsive embed-responsive-16by9">
  					<iframe class="embed-responsive-item" src="https://streamable.com/s/nkxrz/htjijg" allowfullscreen></iframe>
				</div>

			</article>

			<aside style="backgrond-color: #00BBF0" class="col-xs-12 col-sm-12 col-md-12 col-lg 5">
				<div class="container container-white margin-custom border-custom rounded-custom padding-custom text text-justify">

					<h3>Inscribete ahora</h3>
					<hr class="my-4">
					<p>
						<ul class="text-left">
							<li>El club de conversación ha sido establecido y orientado para todos aquellos alumnos que han superado el nivel "Intermedio Básico", o superior a este. </li> 
							<li>El  propósito de este club es que los alumnos se reúnan con el afán de practicar el idioma dirigidos por un asesor. </li> 
							<li>Se promueven diversas dinámicas comunicativas y se abordan temas de interés para los miembros del club. </li>
							<li>La sesión del club consta de dos horas a la semana los viernes, y, los alumnos atienden el club a lo largo del semestre.</li>
						</ul>
					</p>

					<br>

					<h3>¿Como me inscribo?</h3>
					<hr class="my-4">
					<p>
						El proceso inscripción para el club es muy sencillo. Solo debe: 
						<ul class="text-left">
							<li>Haber acreditado el nivel cuatro aquí en nuestro instituto. </li>
							<li>O, haber presentado el examen de colocación si es alumno externo.</li>
						</ul>

						A mayor horas de práctica mejor resultado, por ello, la recomendación siempre es la asistencia regular a este club. 
					</p>

					<p>
						A todo el alumno que le interese, sin importar la edad la  edad le damos la mas cordial bienvenida.
					</p>

				</div>
			</aside>
		</section>

	</div>

	<footer>
		<div class="container-fluid footer-custom align-self-center text-center footer-custom">
			<p>
				<br> Smart English Institute &copy;
			</p>		
		</div>
		<a href="index.php" class="btn btn-lg btn-outline-success text-center justify-center text-volver">
			volver
		</a>
	</footer>
	
</body>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>


