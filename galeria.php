<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Hojas de estilo personalizadas, Boostrap y fuentes de Google -->
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/estilos1.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="icon" href="img/smart.ico">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
	<?php include("class/consulta.php");?>
	
	<!--  Titulo de la página en el navegador -->
	<title>Galería | Smart English Institute</title>
</head>
<body>

	<header>
		<div class="container-fluid">
			<div class="row justify-content-between">

				<!-- Logo de la página -->
				<div class="col-sm-12 col-md-3 align-self-center text-center">
					<a href="index"><img class="img-fluid" src="img/logo.png" alt="Logo SEI" width="100%"></a>
				</div>

				<!-- Imagen titulo de la página -->
				<div class="col-sm-12 col-md-6 align-self-center text-center">
					<img src="SVG/galeria.png" class="img-fluid" alt="Galeria" width="40%">
				</div>

				<!-- Menú desplegable, "explorador" del sistio -->
				<div class="col-sm-12 col-md-3 align-self-center text-center">
					<div class="dropdown text text-menu">
						<button class="float-right float-sm-right float-md-none float-lg-none float-xl-none btn btn-outline-success no-border" type="button" id="dropdownmenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i style="font-size: 48px" class="icon-menu material-icons">menu</i>
							
						</button>

						<div class="dropdown-menu" aria-labelledby="dropdownmenu1">
							<a class="dropdown-item" href="cursos">Cursos</a>
							<a class="dropdown-item" href="club">Club de conversación</a>
							<a class="dropdown-item" href="galeria">Galería</a>
							<a class="dropdown-item" href="contacto">contacto</a>
							<li class="dropdown-divider"></li>
							
						    <a class="dropdown-item" href="#q_somos" data-toggle="modal" >¿Quiénes somos?</a>
						    <a class="dropdown-item" href="#mision" data-toggle="modal">Misión</a>
							<a class="dropdown-item" href="#vision" data-toggle="modal">Visión</a>
						    <a class="dropdown-item" href="#historia" data-toggle="modal">Historia</a>
						    <li class="dropdown-divider"></li>
						    <a class="dropdown-item" href="#faqs" data-toggle="modal">Preguntas Frecuentes</a>
						</div>
					</div>
				</div>

					<!-- Modals -->
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

						    				<p>
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

						    				<?php
                                  				$con = new consultas();
                                  				$con->recuperarFAQS_menu();?>

											<hr>

											<p>
	  											<a class="b1 btn btn-block btn-outline-success no-border" href="contacto" role="button">
	    											Ponte en contacto con Smart English Institute aquí
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
	
	</header>
	
	<div class="container">
		<section class="main row text-center">

			<!-- Thumbnail de Catergoria: Graduados -->
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 justify-center" >
				<a href="#Mgraduados" data-toggle="modal"><img src="img/02.jpg" class="img-thumbnail img-fluid"></a>
				<p class="text-responsive text-center text-subtitulo">Graduados</p>

				<!-- Modal que muestra el visor de imagenes -->
				<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="Mgraduados">
				  <div class="modal-dialog modal-lg modal-dialog-centered">
				    <div class="modal-content">

				      	<!-- Clase que llama al visor de imagenes -->
						<div class="fotorama" data-width="100%" data-ratio="800/600" data-loop="true" data-nav="thumbs"  data-allowfullscreen="native" data-keyboard="true">
							
							<!-- Php que ejecuta la funcion de RecuperarFotos, recupera imagenes de la categoria correspondiente -->
				    		<?php
                                $con = new consultas();
                                $con->recuperarFotos("Graduados");?>
				    							
						</div>
				    </div>
				  </div>
				</div>
			</div>


			<!-- Thumbnail de Catergoria: Cuadro de Honor -->
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 justify-center">
				<a href="#MCuadro" data-toggle="modal"><img src="img/03.jpg" class="img-thumbnail img-fluid"> </a>
				<p class="text-responsive text-center text-subtitulo">Cuadro de Honor</p>

				<!-- Modal que muestra el visor de imagenes -->
				<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="MCuadro">
				  <div class="modal-dialog modal-lg modal-dialog-centered">
				    <div class="modal-content">

				      	<!-- Clase que llama al visor de imagenes -->
						<div class="fotorama" data-width="100%" data-ratio="800/600" data-loop="true" data-nav="thumbs"  data-allowfullscreen="native" data-keyboard="true">
							
							<!-- Php que ejecuta la funcion de RecuperarFotos, recupera imagenes de la categoria correspondiente -->
						 	<?php
                                $con = new consultas();
                                $con->recuperarFotos("Cuadro_de_Honor");?>
					
						</div>
				    </div>
				  </div>
				</div>
			</div>

			<!-- Thumbnail de Catergoria: Eventos Especiales -->
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 justify-center">
				<a href="#MEventos" data-toggle="modal"><img src="img/01.jpg" class="img-thumbnail img-fluid"> </a>
				<p class="text-responsive text-center text-subtitulo">Eventos especiales</p>

				<!-- Modal que muestra el visor de imagenes -->
				<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="MEventos">
				  <div class="modal-dialog modal-lg modal-dialog-centered">
				    <div class="modal-content">

				      	<!-- Clase que llama al visor de imagenes -->
						<div class="fotorama" data-width="100%" data-ratio="800/600" data-loop="true" data-nav="thumbs"  data-allowfullscreen="native" data-keyboard="true">
							
							<!-- Php que ejecuta la funcion de RecuperarFotos, recupera imagenes de la categoria correspondiente -->
						 	<?php
                                $con = new consultas();
                                $con->recuperarFotos("Eventos_Especiales");?>
					
						</div>
				    </div>
				  </div>
				</div>

			</div>

			<!-- Thumbnail de Catergoria: Eventos Especiales -->
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 justify-center">
				<a href="#MOtros" data-toggle="modal"><img src="img/04.jpg" class="img-thumbnail img-fluid"> </a>
				<p class="text-responsive text-center text-subtitulo">otras fotos</p>

				<!-- Modal que muestra el visor de imagenes -->
				<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="MOtros">
				  <div class="modal-dialog modal-lg modal-dialog-centered">
				    <div class="modal-content">

				      	<!-- Clase que llama al visor de imagenes -->
						<div class="fotorama" data-width="100%" data-ratio="800/600" data-loop="true" data-nav="thumbs"  data-allowfullscreen="native" data-keyboard="true">
							
							<!-- Php que ejecuta la funcion de RecuperarFotos, recupera imagenes de la categoria correspondiente -->
						 	<?php
                                $con = new consultas();
                                $con->recuperarFotos("Otros");?>
					
						</div>
				    </div>
				  </div>
				</div>
			</div>


		
		</section>
	</div>

	<!-- Pie de página -->
	<footer class="container-fluid">
		
		<!-- Marca de agua -->
		<div>
			<p class="text-center footer-custom"><br> Smart English Institute&copy;</p>
		</div>

		<!-- Botón de "volver" -->
		<a href="index" class="btn btn-lg btn-outline-success text-center justify-center text-volver">
				Volvér
		</a>
	</footer>

	<!-- Scripts necesarios para ejecutar bootstrap -->
	<script src="js\jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js\bootstrap.min.js"></script> 
	<!-- Scripts necesarios para ejecutar fotorama -->
	<script src="/jquery/dist/jquery.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
</body>
</html>
