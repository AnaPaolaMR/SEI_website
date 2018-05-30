<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Hojas de estilo personalizadas, Boostrap y fuentes de Google -->
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="icon" href="img/smart.ico">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
	<?php include("class/consulta.php");?>

	<title>Curso Sabatino | SEI</title>
</head>
<body>

	<header>
		<div class="container-fluid">
			<div class="row justify-content-between">

				<!-- Imagen de usuario -->
				<div class="col-sm-12 col-md-3 align-self-center text-center">
					<a href="index"><img class="img-fluid" src="img/logo.png" alt="Logo SEI" width="100%"></a>
				</div>
				
				<!-- Titulo -->
				<div class="col-sm-12 col-md-6 align-self-center text-center title title-md title-lg title-xl">
					Sabatino
				</div>
				
				<!-- Menu desplegable -->
				<div class="col-sm-12 col-md-3 align-self-center text-center">
					<div class="dropdown text text-menu">
						<button class="float-right float-sm-right float-md-none float-lg-none float-xl-none btn btn-outline-success no-border" type="button" id="dropdownmenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i style="font-size: 48px" class="icon-menu material-icons">menu</i>
						<!-- <img class="icon-menu" src="menu.svg"> -->
							
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

					<!-- Modals del menu desplegable-->
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
		</div>
	
	</header>


	<!-- Recuperando informacion de la base de datos del curso sabatino -->
	<div class="container-fluid">
		<section class="main row">
			<article class="margin-custom col-xs-12 col-sm-12 col-md-12 col-lg-7">
			
				<div class="embed-responsive embed-responsive-16by9">
  					<iframe class="embed-responsive-item" src="<?php
                        $con = new consultas();
                        $con->recuperarCurso('sabatino','video_curso');

                    ?>" allowfullscreen></iframe>
				</div>

			</article>

			<aside class="col-xs-12 col-sm-12 col-md-12 col-lg 5">
				<div class="container container-white margin-custom border-custom rounded-custom text-justify padding-custom text">
					<h3><?php
                        $con = new consultas();
                        $con->recuperarCurso('sabatino','titulo_curso');

                    ?> </h3>
					<hr class="my-4">

					<?php
                        $con = new consultas();
                        $con->recuperarCurso('sabatino','info_curso');

                    ?>
				</div>
			</aside>
		</section>

	</div>

	<footer>
		<!-- Marca de SEI -->
		<div class="container-fluid align-self-center text-center footer-custom">
			<p>
				<br> Smart English Institute &copy;
			</p>		
		</div>

		<!-- Boton de volver -->
		<a href="cursos" class="btn btn-lg btn-outline-success text-center justify-center text-volver">
			Volvér
		</a>
	</footer>
	
</body>

<!-- Scripts: Jquery y Bootstrap -->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>


