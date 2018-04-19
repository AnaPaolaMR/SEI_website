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
						            <p class="text-admin text-subtitulo">¡ hola gladys patrón ! </p>   
					           </div>

                     <div style="backgrond-color: green" class="dropdown col-md-1 align-self-center text-left">

                        <img class="img-fluid" src="sesion.png" alt="Logo SEI" id="dropdownmenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" width="50">

                        <div class="dropdown-menu" aria-labelledby="dropdownmenu1">
                          <a class="dropdown-item" href="#">Configuracion de la cuenta</a>

                          <li class="dropdown-divider"></li>
                          
                          <a class="dropdown-item" href="#">Cerrar Sesion</a>
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
                                  $con->recuperarTitulo('regular');  

                          ?>">
                </div> 

                <div class="form-group">
                       <label for="exampleFormControlTextarea6">Información del curso</label>
                         <textarea class="form-control" id="exampleFormControlTextarea6" rows="15" name="regular_info">
                          <?php
                                  
                                  $con = new cursos();
                                  $con->recuperarInfo('regular');

                          ?>   
                            

                         </textarea>
                         

                </div>

                <div class="form-group">
                  <label>Enlace del video: </label>
                  <input type="text" class="form-control" name="regular_enlace" value="<?php
                                  
                                  $con = new cursos();
                                  $con->recuperarEnlace('regular');

                          ?>">
                </div>
            </div>

            <div class="tab-pane fade" id="curso_semestral" role="tabpanel" aria-labelledby="nav-profile-tab">
                <br>
                <div class="form-group">
                    <label>Titulo</label>
                    <input type="text" class="form-control" name="semestral_titulo" value="<?php
                                  $con = new cursos();
                                  $con->recuperarTitulo('semestral');  

                          ?>"> 
                </div> 

                <div class="form-group">
                    <label for="exampleFormControlTextarea7">Información del curso</label>
                    <textarea class="form-control" id="exampleFormControlTextarea7" rows="15" name="semestral_info"><?php
                                  $con = new cursos();
                                  $con->recuperarInfo('semestral');  

                          ?></textarea>
                </div>

                <div class="form-group">
                    <label>Enlace del video: </label>
                    <input type="text" class="form-control" name="semestral_enlace" value="<?php
                                  $con = new cursos();
                                  $con->recuperarEnlace('semestral');  

                          ?>">
                </div>
            </div>

            <div class="tab-pane fade" id="curso_sabatino" role="tabpanel" aria-labelledby="nav-contact-tab">
                <br>
                <div class="form-group">
                    <label>Titulo</label>
                    <input type="text" class="form-control" name="sabatino_titulo" value="<?php
                                  $con = new cursos();
                                  $con->recuperarTitulo('sabatino');  

                          ?>">
                </div> 

                <div class="form-group">
                    <label for="exampleFormControlTextarea8">Información del curso</label>
                    <textarea class="form-control" id="exampleFormControlTextarea8" rows="15" name="sabatino_info" ><?php
                                  $con = new cursos();
                                  $con->recuperarInfo('sabatino');  

                          ?>
                            
                          </textarea>
                </div>

                <div class="form-group">
                    <label>Enlace del video: </label>
                    <input type="text" class="form-control" name="sabatino_enlace" value="<?php
                                  $con = new cursos();
                                  $con->recuperarEnlace('sabatino');  

                          ?>">
                </div>
            </div>


            <div class="tab-pane fade" id="curso_verano" role="tabpanel" aria-labelledby="nav-contact-tab">
                <br>
                <div class="form-group">
                    <label>Titulo</label>
                    <input type="text" class="form-control" name="verano_titulo" value="<?php
                                  $con = new cursos();
                                  $con->recuperarTitulo('verano');  

                          ?>">
                </div> 

                <div class="form-group">
                    <label for="exampleFormControlTextarea9">Información del curso</label>
                    <textarea class="form-control" id="exampleFormControlTextarea9" rows="15" name="verano_info">
                      <?php
                                  $con = new cursos();
                                  $con->recuperarInfo('verano');  

                          ?>
                    </textarea>
                </div>

                <div class="form-group">
                    <label>Enlace del video: </label>
                    <input type="text" class="form-control" name="verano_enlace" value="<?php
                                  $con = new cursos();
                                  $con->recuperarEnlace('verano');  

                          ?>">
                </div>

            </div>
          </div>
                        

 
          <button type="submit" class="btn btn-lg btn-success text-right text-guardar"> Guardar </button>
          <button class="btn btn-lg btn-outline-secondary text-center text-cancel" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" > Cancelar </button>

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
      	  <form>
            <div class="form-group">
              <label>Titulo</label>
              <input type="text" class="form-control">
            </div> 

            <div class="form-group">
               <label for="exampleFormControlTextarea10">Información del curso</label>
               <textarea class="form-control" id="exampleFormControlTextarea10" rows="3" name="regular"></textarea>
            </div>

            <div class="form-group">
              <label>Enlace del video: </label>
              <input type="text" class="form-control">
            </div>
  			  </form>
  			  <a href="#" class="btn btn-lg btn-success text-right text-guardar"> Guardar </a>
          <button class="btn btn-lg btn-outline-secondary text-center text-cancel" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" > Cancelar </button>		
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
        <form>
          <div class="form-group">

            <h5> Datos de Contacto </h5>

            <div class="form-group">
              <label>Telefono</label>
              <input type="text" class="form-control">
            </div> 

            <div class="form-group">
               <label>Celular</label>
               <input type="text" class="form-control">
            </div>

            <div class="form-group">
              <label>Correo Electronico </label>
              <input type="text" class="form-control">
            </div>

            <div class="form-group">
               <label for="exampleFormControlTextarea11">Direccion</label>
               <textarea class="form-control" id="exampleFormControlTextarea11" rows="3" name="regular"></textarea>
            </div>

            <h5> Redes Sociales </h5>

            <div class="form-group">
              <label>Enlace a Facebook</label>
              <input type="text" class="form-control">
            </div> 

            <div class="form-group">
               <label>Enlace a Twitter</label>
               <input type="text" class="form-control">
            </div>

            <div class="form-group">
              <label>Enlace a Instagram </label>
              <input type="text" class="form-control">
            </div>
            
          </div>
  			</form>
  			<a href="#" class="btn btn-lg btn-success text-right text-guardar"> Guardar </a>
        <button class="btn btn-lg btn-outline-secondary text-center text-cancel" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" > Cancelar </button>		
      </div>
    </div>
  </div>
</div>
 	<a href="login.html" class="btn btn-lg btn-outline-success text-center text-volver">
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
