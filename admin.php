<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="estilos1.css">
  <link rel="icon" href="smart.ico">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="estilos.css">
  <link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="screen" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <?php include("consulta.php");?>

    <title>Configuracion | Smart English Institute</title>
  </head>

  <body >
      <div class="container-fluid">
          <div class="row text-right">
            <div class="col edit">
				          <div class="row justify-content-between">

					           <div class="col-md-2">
						            <img class="img-fluid" src="logo.png">
					           </div>

                     <div class="col-md-5">
                       
                     </div>

					           <div style="backgrond-color: orange" class="col-md-3 align-self-center text-right">
						            <a href="#" class="text-admin text-subtitulo">¡ hola gladys patrón ! </a>   
					           </div>

                     <div style="backgrond-color: green" class="dropdown col-md-1 align-self-center text-left">

                        <img class="img-fluid" src="sesion.png" alt="Logo SEI" id="dropdownmenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" width="50">

                        <div class="dropdown-menu" aria-labelledby="dropdownmenu1">
                          <a class="dropdown-item" href="#">Configuracion de la cuenta</a>

                          <li class="dropdown-divider"></li>
                          
                          <a href="user/log_out.php" class="dropdown-item" href="login.php">Cerrar Sesion</a>
                        </div>  
                     </div>

                      <div class="col-md-1">
                       
                     </div>

				          </div>            
        	   </div>
          </div>
      </div>

    <div class="container-fluid">
        <section class="row justify-content-lg-center">
            <article class="col-lg-10">
              <div id="accordion">
  		            <div class="card" >
    		            <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link accordion-style text-admin text-subtitulo" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" >
                                <i class="material-icons ">&#xE145;</i> Información General 
                            </button>
                        </h5>
                    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      	  <form>
	      	  <div class="form-group">
	   			 <label for="exampleFormControlTextarea1">Mision</label>
	   				 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	  		</div>
	      	  <div class="form-group">
	   			 <label for="exampleFormControlTextarea1">Vision</label>
	   				 <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
  				</div>
  				<div class="form-group">
	   			 <label for="exampleFormControlTextarea1">Historia</label>
	   				 <textarea class="form-control" id="exampleFormControlTextarea3" rows="3"></textarea>
  				</div>
  				<div class="form-group">
	   			 <label for="exampleFormControlTextarea1">¿Quienes somos?</label>
	   				 <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
  				</div>
  				<div class="form-group">
	   			 <label for="exampleFormControlTextarea1">Preguntas frecuentes</label>
	   				 <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
  				</div>
  			</form>
  			<a href="#" class="btn btn-lg btn-success text-right text-guardar">
					Guardar
				</a>
        <button class="btn btn-lg btn-outline-secondary text-center text-cancel" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" >
         Cancelar
        </button>
      </div>
    </div>
  </div>
  <div class="card" >
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed accordion-style text-admin text-subtitulo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <i class="material-icons">&#xE145;</i> Cursos 
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
      	  <form action="recibir.php" method="POST">

            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#curso_regular" role="tab" aria-controls="nav-home" aria-selected="true"><h5> Regular </h5></a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#curso_semestral" role="tab" aria-controls="nav-profile" aria-selected="false"><h5> Semestral </h5></a>
              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#curso_sabatino" role="tab" aria-controls="nav-contact" aria-selected="false"><h5> Sabatino </h5></a>
              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#curso_verano" role="tab" aria-controls="nav-contact" aria-selected="false"><h5>  Verano </h5></a>
            </div>
          </nav>

          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="curso_regular" role="tabpanel" aria-labelledby="nav-home-tab">

                <div class="form-group">
                    <br>
                    <label>Titulo</label>
                    <input type="text" class="form-control" name="regular_titulo" value="<?php
                                  $con = new cursos();
                                  $con->recuperarCurso('regular','titulo_curso');  

                          ?>">
                </div> 

                <div class="form-group">
                       <label for="exampleFormControlTextarea6">Información del curso</label>
                         <textarea class="form-control" id="exampleFormControlTextarea6" rows="15" name="regular_info"><?php
                                  
                                  $con = new cursos();
                                  $con->recuperarCurso('regular','info_curso');

                          ?></textarea>
                </div>

                <div class="form-group">
                  <label>Enlace del video: </label>
                  <input type="text" class="form-control" name="regular_enlace" value="<?php
                                  
                                  $con = new cursos();
                                  $con->recuperarCurso('regular','video_curso');

                          ?>">
                </div>
            </div>

            <div class="tab-pane fade" id="curso_semestral" role="tabpanel" aria-labelledby="nav-profile-tab">
                <br>
                <div class="form-group">
                    <label>Titulo</label>
                    <input type="text" class="form-control" name="semestral_titulo" value="<?php
                                  $con = new cursos();
                                  $con->recuperarCurso('semestral','titulo_curso');  

                          ?>"> 
                </div> 

                <div class="form-group">
                    <label for="exampleFormControlTextarea7">Información del curso</label>
                    <textarea class="form-control" id="exampleFormControlTextarea7" rows="15" name="semestral_info"><?php
                                  $con = new cursos();
                                  $con->recuperarCurso('semestral','info_curso');  

                          ?></textarea>
                </div>

                <div class="form-group">
                    <label>Enlace del video: </label>
                    <input type="text" class="form-control" name="semestral_enlace" value="<?php
                                  $con = new cursos();
                                  $con->recuperarCurso('semestral','video_curso');  

                          ?>">
                </div>
            </div>

            <div class="tab-pane fade" id="curso_sabatino" role="tabpanel" aria-labelledby="nav-contact-tab">
                <br>
                <div class="form-group">
                    <label>Titulo</label>
                    <input type="text" class="form-control" name="sabatino_titulo" value="<?php
                                  $con = new cursos();
                                  $con->recuperarCurso('sabatino','titulo_curso');  

                          ?>">
                </div> 

                <div class="form-group">
                    <label for="exampleFormControlTextarea8">Información del curso</label>
                    <textarea class="form-control" id="exampleFormControlTextarea8" rows="15" name="sabatino_info" ><?php
                                  $con = new cursos();
                                  $con->recuperarCurso('sabatino','info_curso');  

                          ?></textarea>
                </div>

                <div class="form-group">
                    <label>Enlace del video: </label>
                    <input type="text" class="form-control" name="sabatino_enlace" value="<?php
                                  $con = new cursos();
                                  $con->recuperarCurso('sabatino','video_curso');  

                          ?>">
                </div>
            </div>


            <div class="tab-pane fade" id="curso_verano" role="tabpanel" aria-labelledby="nav-contact-tab">
                <br>
                <div class="form-group">
                    <label>Titulo</label>
                    <input type="text" class="form-control" name="verano_titulo" value="<?php
                                  $con = new cursos();
                                  $con->recuperarCurso('verano','titulo_curso');  

                          ?>">
                </div> 

                <div class="form-group">
                    <label for="exampleFormControlTextarea9">Información del curso</label>
                    <textarea class="form-control" id="exampleFormControlTextarea9" rows="15" name="verano_info"><?php
                                  $con = new cursos();
                                  $con->recuperarCurso('verano','info_curso');  

                          ?></textarea>
                </div>

                <div class="form-group">
                    <label>Enlace del video: </label>
                    <input type="text" class="form-control" name="verano_enlace" value="<?php
                                  $con = new cursos();
                                  $con->recuperarCurso('verano','video_curso');  

                          ?>">
                </div>

            </div>
          </div>
          
          <!-- Boton de guardar -->
          <button type="button" class="btn btn-lg btn-success text-right text-guardar" data-toggle="modal" data-target="#guardar_curso">
            Guardar
          </button>

          <!-- Modal activado por el boton "Guardar"-->
          <div class="modal fade" id="guardar_curso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Guardar Cambios</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  ¿Estas seguro de que deseas guardar cambios?
                </div>
                <div class="modal-footer">

                  <button type="submit" class="btn btn-lg btn-success text-right text-guardar">Guardar</button>
                  <button type="button" class="btn btn-lg btn-outline-secondary text-center text-cancel" data-dismiss="modal">Cerrar</button>
                  
                </div>
              </div>
            </div>
          </div> 
          <input type="button" value="Cancelar" class="btn btn-lg btn-outline-secondary text-center text-cancel" onclick="javascript:window.location.reload();"/>
  			  </form>
  			  	
      </div>
    </div>
  </div>
  <div class="card" >
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed accordion-style text-admin text-subtitulo" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <i class="material-icons">&#xE145;</i> Club de Conversación 
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      	  <form action="recibir_club.php" method="POST">
            <div class="form-group">
              <label>Titulo</label>
              <input type="text" class="form-control" name="club_titulo" value="<?php
                                  $con = new cursos();
                                  $con->recuperarCurso('club','titulo_curso');  

                          ?>">
            </div> 

            <div class="form-group">
               <label for="exampleFormControlTextarea10">Información del curso</label>
               <textarea class="form-control" id="exampleFormControlTextarea10" rows="15" name="club_info"><?php
                    $con = new cursos();
                    $con->recuperarCurso('club','info_curso');  

                  ?></textarea>
            </div>

            <div class="form-group">
              <label>Enlace del video: </label>
              <input type="text" class="form-control" name="club_enlace" value="<?php
                                  $con = new cursos();
                                  $con->recuperarCurso('club','video_curso');  

                          ?>">
            </div>
          <!-- Boton de guardar -->
          <button type="button" class="btn btn-lg btn-success text-right text-guardar" data-toggle="modal" data-target="#guardar_club">
            Guardar
          </button>

          <!-- Modal activado por el boton "Guardar"-->
          <div class="modal fade" id="guardar_club" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Guardar Cambios</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  ¿Estas seguro de que deseas guardar cambios?
                </div>
                <div class="modal-footer">

                  <button type="submit" class="btn btn-lg btn-success text-right text-guardar">Guardar</button>
                  <button type="button" class="btn btn-lg btn-outline-secondary text-center text-cancel" data-dismiss="modal">Cerrar</button>
                  
                </div>
              </div>
            </div>
          </div> 
          <input type="button" value="Cancelar" class="btn btn-lg btn-outline-secondary text-center text-cancel" onclick="javascript:window.location.reload();"/>
  			  </form>
  			  	
      </div>
    </div>
  </div>
   <div class="card" >
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed accordion-style text-admin text-subtitulo" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <i class="material-icons">&#xE145;</i> Galeria 
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
      	  <form>
			  <div class="form-group">
			    <label for="exampleFormControlFile1">Seleccione Imagen</label>
			    <input type="file" class="form-control-file" id="exampleFormControlFile1">
			  </div>
			</form>
  			<a href="#" class="btn btn-lg btn-success text-right text-guardar">
          Guardar
        </a>
        <button class="btn btn-lg btn-outline-secondary text-center text-cancel" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" >
         Cancelar
        </button>		
      </div>
    </div>
  </div>
  <div class="card" >
    <div class="card-header" id="headingFive">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed accordion-style text-admin text-subtitulo" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
         <i class="material-icons">&#xE145;</i> Contacto 
        </button>
      </h5>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
      <div class="card-body">
        <form action="recibir_contacto.php" method="POST">
          <div class="form-group">

            <h5> Datos de Contacto </h5>

            <div class="form-group">
              <label>Telefono</label>
              <input type="text" class="form-control" name="contacto_telefono" value="<?php
                        $con = new cursos();
                        $con->recuperarContacto('telefono');

                    ?>">
            </div> 

            <div class="form-group">
               <label>Celular</label>
               <input type="text" class="form-control" name="contacto_celular" value="<?php
                        $con = new cursos();
                        $con->recuperarContacto('celular');

                    ?>">
            </div>

            <div class="form-group">
              <label>Correo Electronico </label>
              <input type="text" class="form-control" name="contacto_email" value="<?php
                        $con = new cursos();
                        $con->recuperarContacto('email_contacto');

                    ?>">
            </div>

            <div class="form-group">
               <label for="exampleFormControlTextarea11">Direccion</label>
               <textarea class="form-control" id="exampleFormControlTextarea11" rows="2" name="contacto_direccion"><?php
                        $con = new cursos();
                        $con->recuperarContacto('direccion_contacto');

                    ?></textarea>
            </div>

            <h5> Redes Sociales </h5>

            <div class="form-group">
              <label>Enlace a Facebook</label>
              <input type="text" class="form-control" name="contacto_facebook" value="<?php
                        $con = new cursos();
                        $con->recuperarContacto('enlace_facebook');

                    ?>">
            </div> 

            <div class="form-group">
               <label>Enlace a Twitter</label>
               <input type="text" class="form-control" name="contacto_twitter" value="<?php
                        $con = new cursos();
                        $con->recuperarContacto('enlace_twitter');

                    ?>">
            </div>

            <div class="form-group">
              <label>Enlace a Instagram </label>
              <input type="text" class="form-control" name="contacto_instagram" value="<?php
                        $con = new cursos();
                        $con->recuperarContacto('enlace_instagram');

                    ?>">
            </div>
            
          </div>
          <!-- Boton de guardar -->
          <button type="button" class="btn btn-lg btn-success text-right text-guardar" data-toggle="modal" data-target="#guardar_contacto">
            Guardar
          </button>

          <!-- Modal activado por el boton "Guardar"-->
          <div class="modal fade" id="guardar_contacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Guardar Cambios</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  ¿Estas seguro de que deseas guardar los cambios?
                </div>
                <div class="modal-footer">

                  <button type="submit" class="btn btn-lg btn-success text-right text-guardar">Guardar</button>
                  <button type="button" class="btn btn-lg btn-outline-secondary text-center text-cancel" data-dismiss="modal">Cerrar</button>
                  
                </div>
              </div>
            </div>
          </div> 
          <input type="button" value="Cancelar" class="btn btn-lg btn-outline-secondary text-center text-cancel" onclick="javascript:window.location.reload();"/> 
  			</form>
  				
      </div>
    </div>
  </div>
</div>
 	<a href="login.php" class="btn btn-lg btn-outline-success text-center text-volver">
		SALIR
	</a>
</section>
</article>

</div>
  </body>

 <footer>

 </footer>
 
  <script src="js\jquery.js"></script>
  <script src="js\popper.min.js"></script>
  <script src="js\bootstrap.min.js"></script> 
  
</html>
