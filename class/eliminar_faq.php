<?php
	require'sessions.php';
	$objses = new Sessions();
	$objses->init();

	$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
	$iduser = isset($_SESSION['iduser']) ? $_SESSION['iduser'] : null ;

	if($user == ''){
	  header('Location: 403/');
	}
	else{

		//mysqli_connect() ocupa SERVIDOR, USUARIO, CONTRASEÑA y BASE DE DATOS
		$con= mysqli_connect('localhost','root','','sei_bd') or die('Error en la conexion al servidor');

		//Validacion para asegurarse de que el usuario ingreso la contraseña actual para guardar cambios
		$sql_validacion = "SELECT * FROM usuario WHERE id_usuario = '$iduser' AND contrasena ='".$_POST["actual_pass_usuario"]."'";

		$resultado_validacion = mysqli_query($con, $sql_validacion) or die ('Error en el query database 1');

		$fila_validacion = mysqli_fetch_array($resultado_validacion);

		if ($fila_validacion["contrasena"] != ""){

			if ($_POST["faq_eliminar"] != ""){

				$sql="DELETE from informacion_general WHERE id_ig='".$_POST["faq_eliminar"]."'";

				//Variable de Query de SQL, requiere parametros de mysqli_connect($con) y instruccion de SQL($sql)
				$resultado_1 = mysqli_query($con, $sql) or die ('Error en el query');

				//cierra la conexion
				mysqli_close($con);
				$objses->set('msg', '3');
				header("location:../admin"); 
			}
			else{
				mysqli_close($con);
				$objses->set('error', '5');
				header("location:../admin"); 
			}

			}
		else {
			mysqli_close($con);
			$objses->set('error', '1');
			header("location:../admin");
		}
		
	}
	
 ?>