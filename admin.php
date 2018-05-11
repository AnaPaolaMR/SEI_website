<?php
	require'class/sessions.php';
	$objses = new Sessions();
	$objses->init();

  $err = isset($_GET['error']) ? $_GET['error'] : null ;
  $mensaje = isset($_GET['msg']) ? $_GET['msg'] : null ;

	$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
  $profile = isset($_SESSION['profile']) ? $_SESSION['profile'] : null ;

	if($user == ''){
	  header('Location: login?error=2');
	}

  if($profile == 'estandar' and $err != ""){
    header('Location: estandar?error='.$err);
  }

  if($profile == 'estandar' and $mensaje != ""){
    header('Location: estandar?msg='.$mensaje);
  }

  switch ($err) {
    case 1:
        echo "<script type='text/javascript'>alert('Error: Debe ingresar la contraseña de la sesion actual para guardar cambios');</script>";
        break;
    case 2:
        echo "<script type='text/javascript'>alert('Error: El nickname de usuario elegido ya existe');</script>";
        break;
      case 3:
        echo "<script type='text/javascript'>alert('Error: No se puede eliminar el usuario por que es el unico administrador');</script>";
        break;
}     

  switch ($mensaje) {
    case 1:
        echo "<script type='text/javascript'>alert('Usuario creado con Exito');</script>";
        break;
    case 2:
        echo "<script type='text/javascript'>alert('Usuario modificado con exito');</script>";
        break;
    case 3:
        echo "<script type='text/javascript'>alert('Usuario eliminado con exito');</script>";
        break;
}     
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
    <link rel="icon" href="smart.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php include("consulta.php");?>
    
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="estilos1.css">

    <title>Configuracion | Smart English Institute</title>
  </head>

  <body>
    <header>
      <div class="container-fluid">
          <div class="row text-right">
            <div class="col edit">
				<div class="row justify-content-between">

					<div class="col-md-2">
						<img class="img-fluid" src="logo.png">
					</div>

                     <div class="col-md-5">
                       
                     </div>

					           <div class="col-md-3 align-self-center text-right">
						            <div class="text-admin text-subtitulo">¡ hola <?php
                                        $objses = new Sessions();
                                        $objses->init();
                                        $user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
                                        echo "$user";?>! </div>   
					           </div>

                     <div class="dropdown col-md-1 align-self-center text-left">

                        <button class="btn btn-outline-success no-border" id="dropdownmenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="" src="sesion.png" alt="Logo SEI"  width="50"></button>

                        <div class="dropdown-menu" aria-labelledby="dropdownmenu1">
                          <a class="dropdown-item" href="#configuracion" data-toggle="modal">Configuracion de la cuenta</a>
                          <a class="dropdown-item" href="#eliminar_cuenta_admin" data-toggle="modal">Eliminar esta cuenta</a>

                          <li class="dropdown-divider"></li>

                          <a class="dropdown-item" href="#crear_usuario" data-toggle="modal">Crear Usuario</a>
                          <a class="dropdown-item" href="#eliminar_usuario" data-toggle="modal">Eliminar Usuario</a>

                          <li class="dropdown-divider"></li>
                          
                          <a href="user/log_out" class="dropdown-item" href="login">Cerrar Sesion</a>
                        </div>  
                     </div>

<!-- MODAL PARA ELIMINAR LA CUENTA DE ADMIN ACTUAL-->

                     <div class="text">
                        <div class="modal fade" id="eliminar_cuenta_admin">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header modal-header-custom">
                                            <h4 class="modal-title">Eliminar Cuenta</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            
                                        </div>

                                        <form action="eliminar_admin" method="POST">
                                          <div class="modal-body text-left">
                                                  <div class="form-group">
                                                    Introduza la contraseña para eliminar la cuenta actual:<br><br>
                                                
                                                    <input type="password" class="form-control is-valid" value="" aria-describedby="passwordHelp" name="actual_pass_usuario" placeholder="Contraseña" required>
                                                    <small id="passwordHelp" class="form-text text-muted">*Campo obligatorio para eliminar esta cuenta.</small>

                                                  </div>
                                                                             
                                          </div>

                                          <div class="modal-footer">
                                            <button type="submit" class="btn btn-success text-right text-guardar" data-toggle="modal" data-target="#">Eliminar mi cuenta</button>
                                            <button type="button" class="btn btn-outline-secondary text-center text-cancel" data-dismiss="modal">Cerrar</button>
                                          </div>
                                      </form>
                                    </div>
                                </div>
                        </div>
                    </div>

<!-- MODAL PARA CREAR USUARIO -->

                     <div class="text">
                        <div class="modal fade" id="crear_usuario">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header modal-header-custom">
                                            <h4 class="modal-title">Crear Usuario</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            
                                        </div>

                                        <form action="recibir_usuario_nuevo" method="POST">
                                          <div class="modal-body text-left">
                                                  <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input required type="text" class="form-control" name="nombre_usuario_nuevo"><br>

                                                    <label>Nombre de usuario (Nickname):</label>
                                                    <input required type="text" class="form-control" name="nickname_usuario_nuevo"><br>

                                                    <label>Contraseña</label>
                                                    <input required type="password" class="form-control" name="pass_usuario_nuevo"><br>

                                                    <label>Tipo de usuario: </label><br>
                                                    <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="tipo_usuario_nuevo" id="radios1" value="estandar" checked>
                                                      <label class="form-check-label" for="radios1">
                                                        Estandár
                                                      </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="tipo_usuario_nuevo" id="radios2" value="admin">
                                                      <label class="form-check-label" for="exampleRadios2">
                                                        Administrador
                                                      </label>
                                                    </div><br><br>

                                                    <label>Contraseña del Administrador*</label>
                                                    <input type="password" class="form-control is-valid" value="" aria-describedby="passwordHelp" name="actual_pass_usuario_nuevo" required>
                                                    <small id="passwordHelp" class="form-text text-muted">*Campo obligatorio para crear usuario nuevo.</small>

                                                  </div>
                                                                             
                                          </div>

                                          <div class="modal-footer">
                                            <button type="submit" class="btn btn-success text-right text-guardar" data-toggle="modal" data-target="#">Guardar</button>
                                            <button type="button" class="btn btn-outline-secondary text-center text-cancel" data-dismiss="modal">Cerrar</button>
                                          </div>
                                      </form>
                                    </div>
                                </div>
                        </div>
                    </div>

<!-- MODAL PARA ELIMINAR USUARIO -->
                    <div class="text">
                        <div class="modal fade" id="eliminar_usuario">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header modal-header-custom">
                                            <h4 class="modal-title">Eliminar Usuario</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            
                                        </div>

                                        <form action="eliminar_usuario" method="POST">
                                          <div class="modal-body text-left">
                                                  <div class="form-group">

                                                    <label>Seleccione un usuario a eliminar: </label><br>
                                                    <select class="form-control" name="usuario_eliminar">
                                                    <?php

                                                    $obj = new cursos();
                                                    $obj->recuperarUsuariosStndr();?>
                                                    </select><br>

                                                    <label>Contraseña del Administrador*</label>
                                                    <input type="password" class="form-control is-valid" value="" aria-describedby="passwordHelp" name="actual_pass_usuario" required>
                                                    <small id="passwordHelp" class="form-text text-muted">*Campo obligatorio para eliminar usuario.</small>

                                                  </div>
                                                                             
                                          </div>

                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-success text-right text-guardar">Eliminar</button>
                                            <button type="button" class="btn btn-outline-secondary text-center text-cancel" data-dismiss="modal">Cerrar</button>
                                          </div>
                                      </form>
                                    </div>
                                </div>
                        </div>
                    </div>

<!-- MODAL PARA CONFIGURAR CUENTA -->
                     <div class="text">
                        <div class="modal fade" id="configuracion">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header modal-header-custom">
                                            <h4 class="modal-title">Configuracion de la cuenta</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            
                                        </div>

                                        <form action="recibir_config" method="POST">
                                          <div class="modal-body text-left">
                                                  <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" class="form-control" name="nombre_usuario" value="<?php
                                                    $objses = new Sessions();
                                                    $objses->init();

                                                    $user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;

                                                    $con = new cursos();
                                                    $con->recuperarUsuario('nombre', $user);?>"><br>

                                                    <label>Nombre de usuario (Nickname)</label>
                                                    <input type="text" class="form-control" name="nickname_usuario" value="<?php
                                                    $objses = new Sessions();
                                                    $objses->init();

                                                    $user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;

                                                    $con = new cursos();
                                                    $con->recuperarUsuario('nickname', $user);?>" ><br>

                                                    <label>Contraseña</label>
                                                    <input type="password" class="form-control" name="pass_usuario" value="<?php
                                                    $objses = new Sessions();
                                                    $objses->init();

                                                    $user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;

                                                    $con = new cursos();
                                                    $con->recuperarUsuario('contrasena', $user);?>" ><br>

                                                    <label>Contraseña Actual*</label>
                                                    <input type="password" class="form-control is-valid" value="" aria-describedby="passwordHelp" name="actual_pass_usuario" required>
                                                    <small id="passwordHelp" class="form-text text-muted">*Campo obligatorio para guardar cambios.</small>

                                                  </div>
                                                                             
                                          </div>

                                          <div class="modal-footer">
                                            <button type="submit" class="btn btn-success text-right text-guardar" data-toggle="modal" data-target="#">Guardar</button>
                                            <button type="button" class="btn btn-outline-secondary text-center text-cancel" data-dismiss="modal">Cerrar</button>
                                          </div>
                                      </form>
                                    </div>
                                </div>
                        </div>
                    </div>


                    <!-- Div solo para que la imagen de perfil no este totalmente pegada a la derecha -->
                      <div class="col-md-1">
                       
                     </div>

				</div>            
        	</div>
          </div>
      </div>
    </header>

<!--  *****************************INFORMACION GENERAL******************************************** --> 

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
        <form action="recibir_ig" method="POST">

            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#q_somos" role="tab" aria-controls="nav-home" aria-selected="true"><h5> ¿Quiénes Somos? </h5></a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#mision" role="tab" aria-controls="nav-profile" aria-selected="false"><h5> Misión </h5></a>
              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#vision" role="tab" aria-controls="nav-contact" aria-selected="false"><h5> Visión </h5></a>
              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#historia" role="tab" aria-controls="nav-contact" aria-selected="false"><h5>  Historia </h5></a>
            </div>
          </nav>

          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="q_somos" role="tabpanel" aria-labelledby="nav-home-tab">

                <div class="form-group">
                    <br>
                    <label>Titulo</label>
                    <input type="text" class="form-control" name="q_somos_titulo" value="<?php
                                  $con = new cursos();
                                  $con->recuperarIG('quienes somos','titulo_ig');  

                          ?>">
                </div> 

                <div class="form-group">
                       <label for="exampleFormControlTextarea6">Información</label>
                         <textarea class="form-control" id="exampleFormControlTextarea6" rows="15" name="q_somos_info"><?php
                                  
                                  $con = new cursos();
                                  $con->recuperarIG('quienes somos','info_ig');

                          ?></textarea>
                </div>

                <div class="form-group">
                  <label>Imagen</label>
                  <input type="text" class="form-control" name="q_somos_img" value="<?php
                                  
                                  $con = new cursos();
                                  $con->recuperarIG('quienes somos','img_ig');

                          ?>">
                </div>
            </div>

            <div class="tab-pane fade" id="mision" role="tabpanel" aria-labelledby="nav-profile-tab">
                <br>
                <div class="form-group">
                    <label>Titulo</label>
                    <input type="text" class="form-control" name="mision_titulo" value="<?php
                                  $con = new cursos();
                                  $con->recuperarIG('mision','titulo_ig');  

                          ?>"> 
                </div> 

                <div class="form-group">
                    <label for="exampleFormControlTextarea7">Información</label>
                    <textarea class="form-control" id="exampleFormControlTextarea7" rows="15" name="mision_info"><?php
                                  $con = new cursos();
                                  $con->recuperarIG('mision','info_ig');  

                          ?></textarea>
                </div>

                <div class="form-group">
                    <label>Enlace del video</label>
                    <input type="text" class="form-control" name="mision_img" value="<?php
                                  $con = new cursos();
                                  $con->recuperarIG('mision','img_ig');  

                          ?>">
                </div>
            </div>

            <div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="nav-contact-tab">
                <br>
                <div class="form-group">
                    <label>Titulo</label>
                    <input type="text" class="form-control" name="vision_titulo" value="<?php
                                  $con = new cursos();
                                  $con->recuperarIG('vision','titulo_ig');  

                          ?>">
                </div> 

                <div class="form-group">
                    <label for="exampleFormControlTextarea8">Información</label>
                    <textarea class="form-control" id="exampleFormControlTextarea8" rows="15" name="vision_info" ><?php
                                  $con = new cursos();
                                  $con->recuperarIG('vision','info_ig');  

                          ?></textarea>
                </div>

                <div class="form-group">
                    <label>Imagen</label>
                    <input type="text" class="form-control" name="vision_img" value="<?php
                                  $con = new cursos();
                                  $con->recuperarIG('vision','img_ig');  

                          ?>">
                </div>
            </div>


            <div class="tab-pane fade" id="historia" role="tabpanel" aria-labelledby="nav-contact-tab">
                <br>
                <div class="form-group">
                    <label>Titulo</label>
                    <input type="text" class="form-control" name="historia_titulo" value="<?php
                                  $con = new cursos();
                                  $con->recuperarIG('historia','titulo_ig');  

                          ?>">
                </div> 

                <div class="form-group">
                    <label for="exampleFormControlTextarea9">Información</label>
                    <textarea class="form-control" id="exampleFormControlTextarea9" rows="15" name="historia_info"><?php
                                  $con = new cursos();
                                  $con->recuperarIG('historia','info_ig');  

                          ?></textarea>
                </div>

                <div class="form-group">
                    <label>Enlace del video: </label>
                    <input type="text" class="form-control" name="historia_img" value="<?php
                                  $con = new cursos();
                                  $con->recuperarIG('historia','img_ig');  

                          ?>">
                </div>

            </div>
          </div>
          
          <!-- Boton de guardar -->
          <button type="button" class="btn btn-lg btn-success text-right text-guardar" data-toggle="modal" data-target="#guardar_ig">
            Guardar
          </button>

          <!-- Modal activado por el boton "Guardar"-->
          <div class="modal fade" id="guardar_ig" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<!--  ****************************************CURSOS**************************************************** --> 

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
      	  <form action="recibir" method="POST">

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

<!--  *******************************CLUB DE CONVERSACION***************************************** -->   			  	
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
      	  <form action="recibir_club" method="POST">
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


<!--  *****************************************************GALERIA********************************************************************************************* -->                           

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
      	<form action="recibir_galeria.php" method="POST" >

            <div class="container-fluid">
                
                <div class="row">
                    <div class="mb-3 col-md-3">
                        <div class="input-group-prepend">
                            <label>Categoría</label>
                        </div>

                        <div class="input-group">
                            <select class="custom-select" id="inputGroupSelect01" name="categoria">
                                <option selected>Escoja...</option>
                                <option value="1">Graduados</option>
                                <option value="2">Cuadro de Honor</option>
                                <option value="3">Eventos Especiales</option>
                                <option value="3">Otros</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="mb-3 col-md-3">
                        <div>
                            <label>Seleccione Imagen</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" accept=".png, .jpg" multiple="true">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-7">
                        <label>Descripcion</label>
                            <div class="input-text">
                                <textarea class="form-control"></textarea>
                            </div>
                    </div>
                </div>

            </div>
            
             <!-- Boton de guardar -->
                        <button type="button" class="btn btn-lg btn-success text-right text-guardar" data-toggle="modal" data-target="#guardar_galeria">
                            Guardar
                        </button>
                        <button class="btn btn-lg btn-outline-secondary text-center text-cancel" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" >
                        Cancelar
                        </button>

            <!-- Modal activado por el boton "Guardar"-->
              <div class="modal fade" id="guardar_galeria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

            
		</form>
      </div>
    </div>
  </div>


<!--  *****************************************************CONTACTO********************************************************************************************* -->                           
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
 	<a href="user/log_out" class="btn btn-lg btn-outline-success text-center text-volver">
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
