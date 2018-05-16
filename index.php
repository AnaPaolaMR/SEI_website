<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Hojas de estilo personalizadas, Bootstrap y fuentes de Google  -->
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

				<!-- Imagen de usuario -->
				<div class="col-sm-12 col-md-3 align-self-center text-center">
					<a href="index"><img class="img-fluid" src="img/logo2.png" alt="Logo SEI" width="100%"></a>
				</div>
				
				<!-- Titulo -->
				<div class="col-sm-12 col-md-6 align-self-center text-center">
					<div><h1 class="coiny title title-md title-lg title-lg"></h1></div>
				</div>
				
				<!-- Menu desplegable -->
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
				</div>

					<!-- Modals del menu desplegable-->

					<!-- Video de inicio -->
					<div class="text">
						<div class="modal fade" id="mostrarmodal">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-headering">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<!--<div class="header">
									<<img class="img-fluid" src="giphy.gif" alt="Logo SEI" width="100%">
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
	
	</header>

	<!-- Botones con cada una de las secciones del sitio -->
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
		}, 6000);
        });
	</script>

	<!-- Scripts de javascript: Jquery y Bootstrap -->
	<script src="js\jquery.js"></script>
	<script src="js\popper.min.js"></script>
	<script src="js\bootstrap.min.js"></script> 
</body>
</html>