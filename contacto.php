<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Hojas de estilo personalizadas, bootstrap y fuentes de Google -->
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="icon" href="img/smart.ico">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/estilos1.css">

	<!-- Clase para consultar la base de datos -->
	<?php include("class/consulta.php");?>

	<title>Contacto | Smart English Institute</title>
</head>
<body>

	<header>
		<div class="container-fluid">
			<div class="row justify-content-between">

				<!-- Imagen de usuario -->
				<div class="col-sm-12 col-md-3 align-self-center text-center">
					<a href="index"><img class="img-fluid" src="img/logo.png" alt="Logo SEI" ></a>
				</div>
				
				<!-- Titulo -->
				<div class="col-sm-12 col-md-6 align-self-center text-center title title-md title-lg title-xl">
					Contacto
				</div>
				
				<!-- Menu desplegable -->
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

					<!-- Modals del menu desplegable -->
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
	
	<!-- Desplegando informacion de contacto de la base de datos -->
	<div class="container">
		<div class="row justify-content-around">
		
			<div class="col-sm-12 col-md-4 border border-success  container-white rounded-custom">
					<h3><br>Teléfono</h3>
					<p class="contenido "><h2 style="text-align: center;"><?php
                        $con = new consultas();
                        $con->recuperarContacto('telefono');

                    ?></h2> </p>
					<hr class="my-4">
					<h3>Celular</h3>
					<p class="contenido "><h2 style="text-align: center;"><?php
                        $con = new consultas();
                        $con->recuperarContacto('celular');

                    ?></h2> </p>
					<hr class="my-4">
					<h3>correo electrónico</h3>
					
					<p class="contenido" style="text-align: center;">
						<br> 
						<a href="mailto:smart_eteacher@hotmail.com" class="align-middle "><?php
                        $con = new consultas();
                        $con->recuperarContacto('email_contacto');

                    ?></a>
					</p> 

			</div>

			<div class="col-sm-12 col-md-6">
				
				<!-- Mapa de google -->
				<div class="container">
					<p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3485.4824370549304!2d-111.00023428502223!3d29.120957568557863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ce86b52bf6653d%3A0xabd94b39e5407d91!2sCalle+Rep%C3%BAblica+de+Hait%C3%AD+93%2C+Uni%C3%B3n+de+Colonos%2C+83120+Hermosillo%2C+Son.!5e0!3m2!1ses-419!2smx!4v1520810974951" style="margin: 0 auto; border: 0;"></iframe>
					</p>

					<div class="row border-success border rounded-custom justify-content-center container-white padding-custom">
						<p class="contenido text" style="text-align: center;" ><?php
                        $con = new consultas();
                        $con->recuperarContacto('direccion_contacto');

                    ?></p>
					</div>


				</div>

			</div>

			<div class="col-sm-12 col-md-2" >
				<a target="_blank" href="https://www.facebook.com/<?php
                        $con = new consultas();
                        $con->recuperarContacto('enlace_facebook');

                    ?>" style="margin: 10px;"><img src="img/facebook.png" alt="Facebook/SEI"></a>
				<a target="_blank" href="https://www.twitter.com/<?php
                        $con = new consultas();
                        $con->recuperarContacto('enlace_twitter');

                    ?>"><img src="img/twiter.png" alt="Twiter/SEI" style="margin: 10px;"></a>
				<a target="_blank" href="https://www.instagram.com/<?php
                        $con = new consultas();
                        $con->recuperarContacto('enlace_instagram');

                    ?>"><img src="img/instagram.png" alt="Facebook/SEI" style="margin: 10px;"></a>
			</div>
			

		</div>
		
		
	</div>

	<footer>

		<!-- Marca de SEI -->
		<div class="container-fluid align-self-center text-center">
			<p class="footer-custom ">
				<br> Smart English Institute &copy;
			</p>		
		</div>

		<!-- Boton de volver -->
		<a href="index" class="btn btn-lg btn-outline-success text-center justify-center text-volver">
			Volvér
		</a>
	</footer>

<!-- Scripts de javascript: Jquery y Bootstrap -->
<script src="js\jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js\bootstrap.min.js"></script> 
</body>
</html>
