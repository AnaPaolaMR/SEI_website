<?php
	//Clases requeridas para iniciar seison y conectarse a la base de datos
	require'sessions.php';
	require'con_bd.php';
	
	$objses = new Sessions();
	$objses->init();

	//Variables para recuperar datos del usuario de la sesion actual
	$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
	$iduser = isset($_SESSION['iduser']) ? $_SESSION['iduser'] : null ;
	$profile = isset($_SESSION['profile']) ? $_SESSION['profile'] : null ;

	//Condicion para bloquear el acceso a usuarios que no han iniciado sesion
	if($user == ''){
	  header('Location: 403/');
	}
	else{

			if ($_POST["faq_titulo"] != "Elija una pregunta"){

				// Conexion a la base de datos
				$obj = new conexion();
				$con=$obj->get_conexion();

				//Validacion para evitar preguntas repetidas

				if ($_POST["faq_titulo"] != $_POST["faq_mod_titulo"]){

					$sql_validacion = "SELECT * FROM informacion_general WHERE titulo_ig ='".$_POST["faq_mod_titulo"]."'";
					$resultado_validacion = mysqli_query($con, $sql_validacion) or die ('Error en el query 1');
					$fila_validacion = mysqli_fetch_array($resultado_validacion);	
				}
				else{
					$fila_validacion["id_ig"]=0;
				}

				if ($fila_validacion["id_ig"] == 0){

					$sql="UPDATE informacion_general SET titulo_ig='".$_POST["faq_mod_titulo"]."', info_ig='".$_POST["faq_mod_info"]."' WHERE titulo_ig='".$_POST["faq_titulo"]."'";

					//Variable de Query de SQL, requiere parametros de mysqli_connect($con) y instruccion de SQL($sql)
					$resultado = mysqli_query($con, $sql) or die ('Error en el query 2');

					//cierra la conexion y redirige al backend correspondiente con un mensaje de exito
					if ($profile=='admin'){
						mysqli_close($con);
						$objses->set('msg', '6');
						header("location: ../admin");
					}
					else{
						mysqli_close($con);
						$objses->set('msg', '6');
						header("location: ../estandar");
					} 
					
				}
				else {
					//cierra la conexion y redirige al backend correspondiente con un error
					if ($profile=='admin'){
						mysqli_close($con);
						$objses->set('error', '8');
						header("location: ../admin");
					}
					else{
						mysqli_close($con);
						$objses->set('error', '8');
						header("location: ../estandar");

					} 
				}
			}
			else{
				//cierra la conexion y redirige al backend correspondiente con un error
				if ($profile=='admin'){
						mysqli_close($con);
						$objses->set('error', '12');
						header("location: ../admin");
					}
					else{
						mysqli_close($con);
						$objses->set('error', '12');
						header("location: ../estandar");

					}
			}
	}
	
 ?>