<?php
  //Llamando clases para iniciar sesion
  require'class/sessions.php';
  $objses = new Sessions();
  $objses->init();

  //Variables de sesion para manejar errores y mensajes
  $err = isset($_SESSION['error']) ? $_SESSION['error'] : null ;
  $mensaje = isset($_SESSION['msg']) ? $_SESSION['msg'] : null ;

  //Variables de sesion para manejar datos del usuario de las sesion actual
  $user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
  $profile = isset($_SESSION['profile']) ? $_SESSION['profile'] : null ;

  //Condicion que bloquea usuarios que no hayan iniciado sesion
  if($user == ''){
  $objses->set('error', '2');
  header('Location: login');
  }

  //Condicion para redirigir a su backend a usuarios estandar
  if($profile == 'admin'){
    header('Location: admin');
  }

    //Condiciones para errores
    switch ($err) {
        case 1:
            echo "<script type='text/javascript'>alert('Error: Debe ingresar la contraseña de la sesion actual para guardar cambios');</script>";
            $objses->set('error', '0');
            break;
        case 2:
            echo "<script type='text/javascript'>alert('Error: El nickname de usuario elegido ya existe');</script>";
            $objses->set('error', '0');
            break;
          case 3:
            echo "<script type='text/javascript'>alert('Error: No se puede eliminar el usuario por que es el unico administrador');</script>";
            $objses->set('error', '0');
            break;
          case 4:
            echo "<script type='text/javascript'>alert('Error: La contraseña debe ser minimo de 8 digitos');</script>";
            $objses->set('error', '0');
            break;
          case 5:
            echo "<script type='text/javascript'>alert('Error: No hay usuarios que puedan ser eliminados');</script>";
            $objses->set('error', '0');
            break;
          case 6:
            echo "<script type='text/javascript'>alert('Error: Debe seleccionar la casilla donde acepta estar de acuerdo en eliminar este usuario');</script>";
            $objses->set('error', '0');
            break;
          case 7:
            echo "<script type='text/javascript'>alert('Error: Elija una pregunta para eliminar.');</script>";
            $objses->set('error', '0');
            break;
          case 8:
            echo "<script type='text/javascript'>alert('Error: Esta pregunta ya existe.');</script>";
            $objses->set('error', '0');
            break;
          case 9:
            echo "<script type='text/javascript'>alert('Error: El tamaño de la imagen es mayor de 5Mb.');</script>";
            $objses->set('error', '0');
            break;
          case 10:
            echo "<script type='text/javascript'>alert('Error: Solo se pueden subir archivos de tipo imagen.');</script>";
            $objses->set('error', '0');
            break;
          case 11:
            echo "<script type='text/javascript'>alert('Error: Solo se aceptan maximo 10 imagenes a la vez.');</script>";
            $objses->set('error', '0');
            break;
          case 12:
            echo "<script type='text/javascript'>alert('Error: Seleccione una pregunta para modificar.');</script>";
            $objses->set('error', '0');
            break;
          case 13:
            echo "<script type='text/javascript'>alert('Error: Debe seleccionar una categoria e imagen.');</script>";
            $objses->set('error', '0');
            break;
        case 14:
            echo "<script type='text/javascript'>alert('Error: No ha introducido una descripcion nueva.');</script>";
            $objses->set('error', '0');
            break;

    }

  //Condiciones para mensajes
  switch ($mensaje) {
    case 1:
        echo "<script type='text/javascript'>alert('Usuario creado con Exito');</script>";
        $objses->set('msg', '0');
        break;
    case 2:
        echo "<script type='text/javascript'>alert('Usuario modificado con exito');</script>";
        $objses->set('msg', '0');
        break;
    case 3:
        echo "<script type='text/javascript'>alert('Usuario eliminado con exito');</script>";
        $objses->set('msg', '0');
        break;
    case 4:
      echo "<script type='text/javascript'>alert('Los cambios se guardaron correctamente');</script>";
      $objses->set('msg', '0');
      break;
    case 5:
      echo "<script type='text/javascript'>alert('La pregunta se elimino correctamente');</script>";
      $objses->set('msg', '0');
      break;
    case 6:
      echo "<script type='text/javascript'>alert('La pregunta se guardo correctamente');</script>";
      $objses->set('msg', '0');
      break;
}
     
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <!-- Hojas de estilo personalizadas y bootstrap -->    
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
        <link rel="icon" href="img/smart.ico">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <?php include("class/consulta.php");?>    
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link rel="stylesheet" type="text/css" href="css/estilos1.css">

        <!-- Editor de texto -->  
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link rel="stylesheet" type="text/css" href="css/estilos1.css">
        <link rel="stylesheet" type="text/css" href="dist\summernote-bs4.css">

        <title>Configuracion | Smart English Institute</title>
    </head>

    <body>
        <header>
          <div class="container-fluid">
              <div class="row text-right">
                <div class="col edit">
                    <div class="row justify-content-between">

                        <div class="col-md-2">
                            <img class="img-fluid" src="img/logo.png">
                        </div>

                         <div class="col-md-5">
                           
                         </div>

                        <!-- recuperando el nombre del usuario de la sesion actual -->
                         <div style="backgrond-color: orange" class="col-md-3 align-self-center text-right">
                              <div class="text-admin text-subtitulo">¡ hola <?php
                                  $objses = new Sessions();
                                  $objses->init();
                                  $user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
                                  echo "$user";?>! </div>   
                         </div>

                          <!-- Menu desplegable -->
                         <div style="backgrond-color: green" class="dropdown col-md-1 align-self-center text-left">

                            <button class="btn btn-outline-success no-border" id="dropdownmenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="img/sesion.png" alt="Logo SEI"  width="50"></button>

                            <div class="dropdown-menu" aria-labelledby="dropdownmenu1">
                              <a class="dropdown-item" href="#configuracion" data-toggle="modal">Configuracion de la cuenta</a>

                              <li class="dropdown-divider"></li>
                              
                              <a href="user/log_out" class="dropdown-item">Cerrar Sesion</a>
                            </div>  
                         </div>
                        
                        <!-- Modal para configurar la cuenta del usuario de la sesion actual -->
                        <div class="text">
                            <div class="modal fade" id="configuracion">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header modal-header-custom">
                                            <h4 class="modal-title">Configuracion de la cuenta</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            
                                        </div>

                                        <form action="class/recibir_config" method="POST">
                                          <div class="modal-body text-left">
                                                  <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input required type="text" class="form-control" name="nombre_usuario" minlength="3" maxlength="100" value="<?php
                                                    $objses = new Sessions();
                                                    $objses->init();

                                                    $user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;

                                                    $con = new consultas();
                                                    $con->recuperarUsuario('nombre', $user);?>"><br>

                                                    <label>Nombre de usuario (Nickname)</label>
                                                    <input required type="text" class="form-control" name="nickname_usuario" minlength="3" maxlength="50" value="<?php
                                                    $objses = new Sessions();
                                                    $objses->init();

                                                    $user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;

                                                    $con = new consultas();
                                                    $con->recuperarUsuario('nickname', $user);?>" ><br>

                                                    <label>Contraseña</label>
                                                    <input required type="password" class="form-control" name="pass_usuario" minlength="8" maxlength="100" value="<?php
                                                    $objses = new Sessions();
                                                    $objses->init();

                                                    $user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;

                                                    $con = new consultas();
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

        <!--Informacion General  -->

        <div class="container-fluid">
            <section class="row justify-content-lg-center">
                <article class="col-lg-10">
                    <div id="accordion">
                    <!-- Cursos -->
                    <div class="card" >
                        <div class="card-header" id="headingTwo">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed accordion-style text-admin text-subtitulo" data-toggle="collapse" data-target="#collapse_cursos" aria-expanded="false" aria-controls="collapseTwo">
                              <i class="material-icons">&#xE145;</i> Cursos 
                            </button>
                          </h5>
                        </div>

                        <!-- Formulario de configuracion de cursos -->
                        <div id="collapse_cursos" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                          <div class="card-body">
                              <form action="class/recibir" method="POST">

                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#curso_regular" role="tab" aria-controls="nav-home" aria-selected="true"><h5> Regular </h5></a>
                                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#curso_semestral" role="tab" aria-controls="nav-profile" aria-selected="false"><h5> Semestral </h5></a>
                                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#curso_sabatino" role="tab" aria-controls="nav-contact" aria-selected="false"><h5> Sabatino </h5></a>
                                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#curso_verano" role="tab" aria-controls="nav-contact" aria-selected="false"><h5>  Verano </h5></a>
                                    </div>
                                </nav>
                              
                              <!-- Recuperando informacion de la base de datos para modificar -->
                              <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="curso_regular" role="tabpanel" aria-labelledby="nav-home-tab">

                                    <div class="form-group">
                                        <br>
                                        <label>Titulo</label>
                                        <input type="text" class="form-control" name="regular_titulo" value="<?php
                                                      $con = new consultas();
                                                      $con->recuperarCurso('regular','titulo_curso');  

                                              ?>">
                                    </div> 

                                    <div class="form-group">
                                           <label>Información del curso</label>
                                             <textarea class="form-control summernote" name="regular_info"><?php
                                                      
                                                      $con = new consultas();
                                                      $con->recuperarCurso('regular','info_curso');

                                              ?></textarea>
                                    </div>

                                    <div class="form-group">
                                      <label>Enlace del video: </label>
                                      <input type="text" class="form-control" name="regular_enlace" value="<?php
                                                      
                                                      $con = new consultas();
                                                      $con->recuperarCurso('regular','video_curso');

                                              ?>">
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="curso_semestral" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <br>
                                    <div class="form-group">
                                        <label>Titulo</label>
                                        <input type="text" class="form-control" name="semestral_titulo" value="<?php
                                                      $con = new consultas();
                                                      $con->recuperarCurso('semestral','titulo_curso');  

                                              ?>"> 
                                    </div> 

                                    <div class="form-group">
                                        <label>Información del curso</label>
                                        <textarea class="form-control summernote" name="semestral_info"><?php
                                                      $con = new consultas();
                                                      $con->recuperarCurso('semestral','info_curso');  

                                              ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Enlace del video: </label>
                                        <input type="text" class="form-control" name="semestral_enlace" value="<?php
                                                      $con = new consultas();
                                                      $con->recuperarCurso('semestral','video_curso');  

                                              ?>">
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="curso_sabatino" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <br>
                                    <div class="form-group">
                                        <label>Titulo</label>
                                        <input type="text" class="form-control" name="sabatino_titulo" value="<?php
                                                      $con = new consultas();
                                                      $con->recuperarCurso('sabatino','titulo_curso');  

                                              ?>">
                                    </div> 

                                    <div class="form-group">
                                        <label>Información del curso</label>
                                        <textarea class="form-control summernote" name="sabatino_info" ><?php
                                                      $con = new consultas();
                                                      $con->recuperarCurso('sabatino','info_curso');  

                                              ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Enlace del video: </label>
                                        <input type="text" class="form-control" name="sabatino_enlace" value="<?php
                                                      $con = new consultas();
                                                      $con->recuperarCurso('sabatino','video_curso');  

                                              ?>">
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="curso_verano" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <br>
                                    <div class="form-group">
                                        <label>Titulo</label>
                                        <input type="text" class="form-control" name="verano_titulo" value="<?php
                                                      $con = new consultas();
                                                      $con->recuperarCurso('verano','titulo_curso');  

                                              ?>">
                                    </div> 

                                    <div class="form-group">
                                        <label>Información del curso</label>
                                        <textarea class="form-control summernote" name="verano_info"><?php
                                                      $con = new consultas();
                                                      $con->recuperarCurso('verano','info_curso');  

                                              ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Enlace del video: </label>
                                        <input type="text" class="form-control" name="verano_enlace" value="<?php
                                                      $con = new consultas();
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
                              
                              <!-- Boton de cancelar -->
                              <input type="button" value="Cancelar" class="btn btn-lg btn-outline-secondary text-center text-cancel" onclick="javascript:window.location.reload();"/><br><br>

                              <label>Ultima modificacion: <?php
                                            $con = new consultas();
                                            $con->recuperarMod('cursos','fecha_mod_curso','tipo_curso','regular');

                                        ?></label>
                                  </form>
                                    
                          </div>
                        </div>
                    </div>
                    <!-- Club de Conversacion -->
                    <div class="card" >
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed accordion-style text-admin text-subtitulo" data-toggle="collapse" data-target="#collapse_club" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="material-icons">&#xE145;</i> Club de Conversación 
                                </button>
                            </h5>
                        </div>

                        <!-- Formulario de configuracion del club de conversacion -->
                        <div id="collapse_club" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body">
                              <form action="class/recibir_club" method="POST">
                                <div class="form-group">
                                  <label>Titulo</label>
                                  <input type="text" class="form-control" name="club_titulo" value="<?php
                                                      $con = new consultas();
                                                      $con->recuperarCurso('club','titulo_curso');  

                                              ?>">
                                </div> 

                                <div class="form-group">
                                   <label>Información del curso</label>
                                   <textarea class="form-control summernote" name="club_info"><?php
                                        $con = new consultas();
                                        $con->recuperarCurso('club','info_curso');  

                                      ?></textarea>
                                </div>

                                <div class="form-group">
                                  <label>Enlace del video: </label>
                                  <input type="text" class="form-control" name="club_enlace" value="<?php
                                                      $con = new consultas();
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
                              
                              <!-- Boton de cancelar -->
                              <input type="button" value="Cancelar" class="btn btn-lg btn-outline-secondary text-center text-cancel" onclick="javascript:window.location.reload();"/><br><br>

                              <label>Ultima modificacion: <?php
                                            $con = new consultas();
                                            $con->recuperarMod('cursos','fecha_mod_curso','tipo_curso','club');

                                        ?></label>
                              
                                  </form>
                                    
                          </div>
                        </div>
                    </div>
                    <!-- Galeria -->
                    <div class="card" >
                        <div class="card-header" id="headingFour">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed accordion-style text-admin text-subtitulo" data-toggle="collapse" data-target="#collapse_galeria" aria-expanded="false" aria-controls="collapseFour">
                              <i class="material-icons">&#xE145;</i> Galeria 
                            </button>
                          </h5>
                        </div>
        
                        <div id="collapse_galeria" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                          <div class="card-body">

                            <div class="row">
                                <div class="col-4">
                                    <div class="list-group" id="list-tab" role="tablist">
                                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#subir_fotos" role="tab" aria-controls="home">Subir Fotos</a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#editar_fotos" role="tab" aria-controls="profile">Editar Fotos</a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#eliminar_fotos" role="tab" aria-controls="messages">Eliminar Fotos</a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="tab-content" id="nav-tabContent">
                                        <!-- Subir Fotos -->
                                        <div class="tab-pane fade show active" id="subir_fotos" role="tabpanel" aria-labelledby="list-home-list">
                                            <form action="class/recibir_galeria" method="POST" enctype="multipart/form-data" class="needs-validation">
                                                <div class="container-fluid">
                                                    <h5>Subir fotos</h5><br>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-3">
                                                            <div class="input-group-prepend">
                                                                <label>Categoría</label>
                                                            </div>

                                                            <div class="input-group form-group">
                                                                <select class="custom-select" id="inputGroupSelect01" name="categoria" required>
                                                                    <option selected disabled value="0">Escoja...</option>
                                                                    <option value="Graduados">Graduados</option>
                                                                    <option value="Cuadro_de_Honor">Cuadro de Honor</option>
                                                                    <option value="Eventos_Especiales">Eventos Especiales</option>
                                                                    <option value="Otros">Otras fotos</option>
                                                                </select>
                                                                <div class="invalid"></div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="mb-3 col-md-4">
                                                            <div>
                                                                <label>Seleccione Imagen</label>
                                                                <input type="file" class="form-control-file" id="exampleFormControlFile1" accept=".png, .jpg, .jpeg, .PNG, .JPEG, .JPG" multiple="true" name="valor_imagen[]" required>
                                                                <small class="form-text text-muted">
                                                                      Máximo 10 imagenes por carga, formatos: .jpg, .jpeg o .png.
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-md-7">
                                                            <label>Descripcion</label>
                                                                <div class="input-text">
                                                                    <textarea class="form-control" name="descripcion" placeholder="Escriba aquí una descripcion para sus imagenes..."></textarea>
                                                                </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Boton de guardar -->
                                                <button type="button" class="btn btn-lg btn-success text-right text-guardar" data-toggle="modal" data-target="#guardar_galeria">
                                                  Guardar
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
                                                
                                                <!-- Boton de cancelar -->
                                                <input type="button" value="Cancelar" class="btn btn-lg btn-outline-secondary text-center text-cancel" onclick="javascript:window.location.reload();"/><br><br>
                                            </form>

                                        </div>

                                        <!-- Modificar Fotos -->
                                        <div class="tab-pane fade" id="editar_fotos" role="tabpanel" aria-labelledby="list-profile-list">
                                            <form action="class/modificar_foto.php" method="POST" class="needs-validation">
                                                <div class="container-fluid">
                                                    <h5>Modificar la descripcion de las fotos</h5><br>
                                                    <div class="row">
                                                        <div class="col-md-4 mb-3">
                                                            <div class="input-group-prepend">
                                                                Categoría
                                                            </div>
                                                            <div class="input-group-prepend">
                                                                <select class="custom-select" id="categoria_1" name="categoria_1" required>
                                                                    <option selected disabled value="0">Escoja...</option>
                                                                    <option value="Graduados">Graduados</option>
                                                                    <option value="Cuadro_de_Honor">Cuadro de Honor</option>
                                                                    <option value="Eventos_Especiales">Eventos Especiales</option>
                                                                    <option value="Otros">Otras fotos</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-group-prepend" >
                                                                Escoja una foto:
                                                            </div>
                                                            <div class="input-group-prepend">
                                                                <select class="custom-select" id="fotos_1" name="fotos_1" required>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                             <div class="input-group-prepend" >
                                                                Escogió esta foto:
                                                            </div>
                                                            <div class="container-fluid" id="img_1">
                                                                <img src="./img/img.png" class="img-thumbnail img-fluid" alt="Foto a modificar" style="margin: 10px; margin-bottom: 25px;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-group-prepend">
                                                                Descripcion:
                                                            </div>
                                                            <div class="input-text">
                                                                <textarea class="form-control" id ="descripcion_1"name="descripcion_1" required placeholder="Escriba aquí una descripcion para sus imagenes..."></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <!-- Boton de guardar -->
                                                <button type="button" class="btn btn-lg btn-success text-right text-guardar" data-toggle="modal" data-target="#modificar_galeria">
                                                    Guardar
                                                </button>

                                                <!-- Modal activado por el boton "Guardar"-->
                                                <div class="modal fade" id="modificar_galeria" tabindex="-1" role="dialog"  aria-hidden="true">
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
                                                <!-- Boton de cancelar -->
                                                <input type="button" value="Cancelar" class="btn btn-lg btn-outline-secondary text-center text-cancel" onclick="javascript:window.location.reload();"/><br><br>
                                            </form>
                                            
                                        </div>

                                        <!-- Eliminar Fotos -->
                                        <div class="tab-pane fade" id="eliminar_fotos" role="tabpanel" aria-labelledby="list-messages-list">
                                            <form action="class/eliminar_foto.php" method="POST" class="needs-validation">
                                                <div class="container-fluid">
                                                    <h5>Eliminar fotos</h5><br>
                                                    <div class="row">
                                                        <div class="col-md-4 mb-3">
                                                            <div class="input-group-prepend" >
                                                                Categoría
                                                            </div>
                                                            <div class="input-group-prepend">
                                                                <select class="custom-select" id="categoria_2" name="categoria_2" required>
                                                                    <option selected disabled>Escoja...</option>
                                                                    <option value="Graduados">Graduados</option>
                                                                    <option value="Cuadro_de_Honor">Cuadro de Honor</option>
                                                                    <option value="Eventos_Especiales">Eventos Especiales</option>
                                                                    <option value="Otros">Otras fotos</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="input-group-prepend" >
                                                                Escoja una foto:
                                                            </div>
                                                            <div class="input-group-prepend">
                                                                <select class="custom-select" id="fotos_2" name="fotos_2" required>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>

                                                </div>
                                                
                                                <div class="row ">
                                                    <div class="col-md-4">
                                                        <div class="input-group-prepend" >
                                                            Escogió esta foto:
                                                        </div>
                                                        <div class="container-fluid" id="img_2">
                                                            <img src="./img/img.png" class="img-thumbnail img-fluid" alt="Foto a Eliminar"style="margin: 10px; margin-bottom: 25px;">
                                                        </div>
                                                    </div>
                                                    

                                                </div>
                                                <!-- Boton de Eliminar -->
                                                <button type="button" class="btn btn-lg btn-success text-right text-guardar" data-toggle="modal" data-target="#eliminar_galeria">
                                                    Eliminar
                                                </button>

                                                <!-- Modal activado por el boton "Eliminar"-->
                                                    <div class="modal fade" id="eliminar_galeria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Guardar Cambios</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          ¿Estas seguro de que deseas eliminar la foto?
                                                        </div>
                                                        <div class="modal-footer">

                                                          <button type="submit" class="btn btn-lg btn-success text-right text-guardar">Guardar</button>
                                                          <button type="button" class="btn btn-lg btn-outline-secondary text-center text-cancel" data-dismiss="modal">Cerrar</button>
                                                          
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                    <!-- Boton de cancelar -->
                                                    <input type="button" value="Cancelar" class="btn btn-lg btn-outline-secondary text-center text-cancel" onclick="javascript:window.location.reload();"/><br><br>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                          </div>
                        </div>
                    </div>
                    <!-- Contacto -->
                    <div class="card" >
                        <div class="card-header" id="headingFive">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed accordion-style text-admin text-subtitulo" data-toggle="collapse" data-target="#collapse_contacto" aria-expanded="false" aria-controls="collapseFive">
                             <i class="material-icons">&#xE145;</i> Contacto 
                            </button>
                          </h5>
                        </div>

                        <!-- Formulario para configurar informacion de contacto -->
                        <div id="collapse_contacto" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                          <div class="card-body">
                            <form action="class/recibir_contacto" method="POST">
                                <div class="form-group">
                                    <h5> Datos de Contacto </h5>

                                    <div class="form-group">
                                      <label>Telefono</label>
                                      <input type="text" class="form-control" name="contacto_telefono" value="<?php
                                                $con = new consultas();
                                                $con->recuperarContacto('telefono');

                                            ?>">
                                    </div> 

                                    <div class="form-group">
                                       <label>Celular</label>
                                       <input type="text" class="form-control" name="contacto_celular" value="<?php
                                                $con = new consultas();
                                                $con->recuperarContacto('celular');

                                            ?>">
                                    </div>

                                    <div class="form-group">
                                      <label>Correo Electronico </label>
                                      <input type="text" class="form-control" name="contacto_email" value="<?php
                                                $con = new consultas();
                                                $con->recuperarContacto('email_contacto');

                                            ?>">
                                    </div>

                                    <div class="form-group">
                                       <label>Direccion</label>
                                       <textarea class="form-control summernote" name="contacto_direccion"><?php
                                                $con = new consultas();
                                                $con->recuperarContacto('direccion_contacto');

                                            ?></textarea>
                                    </div>
                                    <h5> Redes Sociales </h5>

                                    <div class="form-group">
                                      <label>Enlace a Facebook</label>
                                      <input type="text" class="form-control" name="contacto_facebook" value="<?php
                                                $con = new consultas();
                                                $con->recuperarContacto('enlace_facebook');

                                            ?>">
                                    </div> 

                                    <div class="form-group">
                                       <label>Enlace a Twitter</label>
                                       <input type="text" class="form-control" name="contacto_twitter" value="<?php
                                                $con = new consultas();
                                                $con->recuperarContacto('enlace_twitter');

                                            ?>">
                                    </div>

                                    <div class="form-group">
                                      <label>Enlace a Instagram </label>
                                      <input type="text" class="form-control" name="contacto_instagram" value="<?php
                                                $con = new consultas();
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

                                  <!-- Boton de cancelar --> 
                                <input type="button" value="Cancelar" class="btn btn-lg btn-outline-secondary text-center text-cancel" onclick="javascript:window.location.reload();"/><br><br>

                                <label>Ultima modificacion: <?php
                                                $con = new consultas();
                                                $con->recuperarMod('contacto','fecha_mod_contacto','','');

                                ?></label>
                            </form>
                                    
                          </div>
                        </div>
                    </div>
                </article> 
            </section>
        </div>


    </body>

     <footer>
        <!-- Boton para cerrar sesion -->
        <a href="user/log_out" class="btn btn-lg btn-outline-success text-center text-volver">
            SALIR
        </a>
     </footer>

    <!-- Scripts: Bootstrap, Jquery y editor de texto -->
    <script src="js\jquery.js"></script>
    <script src="js\popper.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="dist\summernote-bs4.js"></script>
    <script src="dist\lang\summernote-es-ES.js"></script>
    <script src="js/galeria.js"></script>
    
    <!-- Script para personalizar el editor de texto -->
    <script>
      $('.summernote').summernote({
        placeholder: 'Introduzca su informacion aqui',
        tabsize: 2,
        height: 200,
        disableDragAndDrop: true,
        lang: "es-ES",
        fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '24', '36'],

        toolbar: [
        // [groupName, [list of button]]
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['undo-redo', ['undo', 'redo']]
      ]

      });
    </script>
    <!-- Script de AJAX para desplegar los datos de las FAQS en el area de modificacion -->
    <script>
    function showFAQ(str) {

        if (str == "Elija una pregunta") {
            document.getElementById("txtHint").value = "";
            document.getElementById("txtHint_2").value = "";
            return;
        } else { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").value = this.responseText;
                }
            };
            xmlhttp.open("GET","../class/get_titulo_faq.php?q="+str,true);
            xmlhttp.send();
        }

        if (str == "Elija una pregunta") {
            document.getElementById("txtHint_2").value = "";
            return;
        } else { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint_2").value = this.responseText;
                }
            };
            xmlhttp.open("GET","../class/get_info_faq.php?q="+str,true);
            xmlhttp.send();
        }
    }
    </script>

  
</html>
