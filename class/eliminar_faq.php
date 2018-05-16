<?php
	require'sessions.php';
	require'con_bd.php';

	$objses = new Sessions();
	$objses->init();

	$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
	$iduser = isset($_SESSION['iduser']) ? $_SESSION['iduser'] : null ;
	$profile = isset($_SESSION['profile']) ? $_SESSION['profile'] : null ;

	if($user == ''){
	  header('Location: 403/');
	}
	else{

		// Conexion a la base de datos
		$obj = new conexion();
		$con=$obj->get_conexion();

		//Validacion para asegurarse de que el usuario ingreso la contraseña actual para guardar cambios
		$sql_validacion = "SELECT * FROM usuario WHERE id_usuario = '$iduser' AND contrasena ='".$_POST["actual_pass_usuario"]."'";

		$resultado_validacion = mysqli_query($con, $sql_validacion) or die ('Error en el query database 1');

		$fila_validacion = mysqli_fetch_array($resultado_validacion);

		if ($fila_validacion["contrasena"] != ""){

			if ($_POST["faq_eliminar"] != "Elija una pregunta"){

				$sql="DELETE from informacion_general WHERE titulo_ig='".$_POST["faq_eliminar"]."'";

				//Variable de Query de SQL, requiere parametros de mysqli_connect($con) y instruccion de SQL($sql)
				$resultado_1 = mysqli_query($con, $sql) or die ('Error en el query');

				//cierra la conexion
				if ($profile=='admin'){
					mysqli_close($con);
					$objses->set('msg', '5');
					header("location: ../admin");
				}
				else{
					mysqli_close($con);
					$objses->set('msg', '5');
					header("location: ../estandar");
				} 
			}
			else{
				if ($profile=='admin'){
					mysqli_close($con);
					$objses->set('error', '7');
					header("location: ../admin");
				}
				else{
					mysqli_close($con);
					$objses->set('error', '7');
					header("location: ../estandar");
				} 
			}

			}
		else {
			if ($profile=='admin'){
					mysqli_close($con);
					$objses->set('error', '1');
					header("location: ../admin");
				}
				else{
					mysqli_close($con);
					$objses->set('error', '1');
					header("location: ../estandar");
				}
		}
		
	}
	
 ?>