<?php
	require'sessions.php';
	require'con_bd.php';

	$objses = new Sessions();
	$objses->init();

	$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
	$iduser = isset($_SESSION['iduser']) ? $_SESSION['iduser'] : null ;

	if($user == ''){
	  header('Location: 403/');
	}
	else{

		// Conexion a la base de datos
		$obj = new conexion();
		$con=$obj->get_conexion();

		//Validacion para asegurarse de que el usuario ingreso la contraseña actual para guardar cambios
		$sql_validacion = "SELECT * FROM usuario WHERE id_usuario = '$iduser' AND contrasena ='".$_POST["actual_pass_usuario_nuevo"]."'";

		$resultado_validacion = mysqli_query($con, $sql_validacion) or die ('Error en el query 1');

		$fila_validacion = mysqli_fetch_array($resultado_validacion);

		//Validacion para evitar nicknames repetidos
		$sql_validacion_2 = "SELECT * FROM usuario WHERE id_usuario != '$iduser' AND nickname ='".$_POST["nickname_usuario_nuevo"]."'";

		$resultado_validacion_2 = mysqli_query($con, $sql_validacion_2) or die ('Error en el query 2');

		$fila_validacion_2 = mysqli_fetch_array($resultado_validacion_2);

		if ($fila_validacion["contrasena"] != ""){

			if ($fila_validacion_2["nickname"] == ""){

				//Validacion para que la contraseña sea minimo de 8 caracteres
				if (strlen($_POST["pass_usuario_nuevo"]) >= 8){

					$sql="INSERT INTO  usuario (nombre, nickname, contrasena, img_usuario, tipo_usuario) VALUES ('".$_POST["nombre_usuario_nuevo"]."', '".$_POST["nickname_usuario_nuevo"]."', '".$_POST["pass_usuario_nuevo"]."', '', '".$_POST["tipo_usuario_nuevo"]."')";

					//Variable de Query de SQL, requiere parametros de mysqli_connect($con) y instruccion de SQL($sql)
					$resultado = mysqli_query($con, $sql) or die ('Error en el query 3');

					//cierra la conexion
					mysqli_close($con);
					$objses->set('msg', '1');
					header("location: ../admin");
				}
				else{
					mysqli_close($con);
					$objses->set('error', '4');
					header("location: ../admin");
				}
			}
			else{
				mysqli_close($con);
				$objses->set('error', '2');
				header("location: ../admin"); 
			}
		}
		else{
			mysqli_close($con);
			$objses->set('error', '1');
			header("location: ../admin"); 
		}
	} 
 ?>