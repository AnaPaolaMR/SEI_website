<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<link rel="icon" href="img/smart.ico">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilos1.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php include("class/consulta.php");?>

	<title>Inicio | SEI</title>
</head>
<body>

	<header>
		<div style="backgrond-color: #a2ef44" class="container-fluid">
			<div class="row justify-content-between">
				<div class="col-sm-12 col-md-3 align-self-center text-center">
					<a href="index"><img class="img-fluid" src="img/logo.png" alt="Logo SEI" width="100%"></a>
				</div>

				<div class="col-sm-12 col-md-6 align-self-center text-center">
					<div><h1 class="coiny title title-md title-lg title-lg"></h1></div>
				</div>

				<div class="col-sm-12 col-md-3 align-self-center text-center">
					<div class="dropdown text-menu text">
						<button class="float-right float-md-none float-lg-none float-xl-none btn btn-outline-success no-border" type="button" id="dropdownmenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i style="font-size: 48px" class="icon-menu material-icons">menu</i>
							
						</button>

						<div class="dropdown-menu" aria-labelledby="dropdownmenu1">
		
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
						<div class="modal fade" id="mostrarmodal">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<!--<img class="img-fluid" src="giphy.gif" alt="Logo SEI" width="100%">
											<div class="embed-responsive embed-responsive-16by9">
  												<iframe class="embed-responsive-item" src="intro.mp4" allowfullscreen = "false"></iframe>
											</div>-->

											<video autoplay="autoplay">
												<source src="intro.mp4" type="video/mp4" />
											</video>
											
								</div>

							</div>
						</div>
					</div>

					<div class="text">
						<div class="modal fade" id="q_somos">
						    	<div class="modal-dialog">
						    		<div class="modal-content">
						    			<div class="modal-header modal-header-custom">
						    				<h4 class="modal-title"><?php
                                  				$con = new consultas();
                                  				$con->recuperarIG('quienes somos','titulo_ig');?></h4>
						    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						    				
						    			</div>

						    			<div class="modal-body">
						    				<p>
						    					<img class="img-fluid" src="img/<?php
                                  				$con = new consultas();
                                  				$con->recuperarIG('quienes somos','img_ig');  

                          					?>" alt="Logo SEI" width="100%">
						    				</p>

						    				<p class="text-left">
						    				<?php
                                  				$con = new consultas();
                                  				$con->recuperarIG('quienes somos','info_ig');?>
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
						    				<h4 class="modal-title"><?php
                                  				$con = new consultas();
                                  				$con->recuperarIG('mision','titulo_ig');?></h4>
						    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						    				
						    			</div>

						    			<div class="modal-body">
						    				<p class="text-left">
						    					<?php
                                  					$con = new consultas();
                                  					$con->recuperarIG('mision','info_ig');?>
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
						    				<h4 class="modal-title"><?php
                                  				$con = new consultas();
                                  				$con->recuperarIG('vision','titulo_ig');?></h4>
						    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						    				
						    			</div>

						    			<div class="modal-body">
						    				<p class="text-left">
						    					<?php
                                  				$con = new consultas();
                                  				$con->recuperarIG('vision','info_ig');?>
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
						    				<h4 class="modal-title"><?php
                                  				$con = new consultas();
                                  				$con->recuperarIG('historia','titulo_ig');?></h4>
						    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						    				
						    			</div>

						    			<div class="modal-body">

						    				<p>
						    					<img class="img-fluid" src="img/<?php
                                  				$con = new consultas();
                                  				$con->recuperarIG('historia','img_ig');?>" alt="Logo SEI" width="100%">
						    				</p>

						    				<p class="text-left">
						    					<?php
                                  				$con = new consultas();
                                  				$con->recuperarIG('historia','info_ig');?>
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
												    Nuestros precios varian segun el tipo de curso. Puede consultar los precios en el area de cursos <a href="cursos">aqui</a>
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
	  											<a class="b1 btn btn-block btn-outline-success no-border" href="contacto" role="button">
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
	<div class="container">
		<section class="main row">
			<article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				
				<div class="text-center">
					<a href="cursos" class="btn btn-lg btn-outline-success text-center text-boton btn-responsive-sm btn-responsive-md btn-responsive-lg btn-responsive-xl">
						Cursos
						<p class="text-ingles">courses</p>
					</a>
				</div>
				
				<div class="text-center">
					<a href="club" class="ocultar btn btn-lg btn-outline-success text-center text-boton btn-club-large btn-responsive-sm btn-responsive-md btn-responsive-lg btn-responsive-xl">
					Club de <br>Conversacion<br>
					<p class="text-ingles"> conversation club</p>
					</a>
				</div>

				<div class="text-center">
					<a href="club" class="btn btn-lg btn-outline-success text-center text-boton btn-club-small btn-responsive-sm btn-responsive-md btn-responsive-lg btn-responsive-xl">
					Club
					<p class="text-ingles"> conversation club </p>
					</a>
				</div>
				

			</article>

			<aside class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
				<div class="text-center">
					<a href="galeria" class="btn btn-lg btn-outline-success text-center text-boton btn-responsive-sm btn-responsive-md btn-responsive-lg btn-responsive-xl">
						Galeria
						<p class="text-ingles">gallery</p>
					</a>
				</div>

				<div class="text-center">
					<a href="contacto" class="btn btn-lg btn-outline-success text-center text-boton btn-responsive-sm btn-responsive-md btn-responsive-lg btn-responsive-xl">
						Contacto
						<p class="text-ingles">contact</p>
					</a>
				</div>
			</aside>
		
		</section>
	</div>

	<footer class="container">
		<!-- <p class="text-center footer-custom"><br> Smart English Institute&copy;</p> -->
	</footer>
    <!--Scripts para auto mostrar modal de presentación-->
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#mostrarmodal").modal("show");

		setTimeout(function() {
		    $('#mostrarmodal').modal('hide');
		}, 8000);
        });
	</script>
	<script src="js\jquery.js"></script>
	<script src="js\popper.min.js"></script>
	<script src="js\bootstrap.min.js"></script> 
</body>
</html>


