<?php
	require'class/sessions.php';
	$objses = new Sessions();
	$objses->init();

	$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
	$iduser = isset($_SESSION['iduser']) ? $_SESSION['iduser'] : null ;

	//mysqli_connect() ocupa SERVIDOR, USUARIO, CONTRASEÑA y BASE DE DATOS
	$con= mysqli_connect('localhost','root','','sei_bd') or die('Error en la conexion al servidor');

	//Validacion para asegurarse de que el usuario ingreso la contraseña actual para guardar cambios
	$sql_validacion = "SELECT * FROM usuario WHERE id_usuario = '$iduser' AND contrasena ='".$_POST["actual_pass_usuario"]."'";

	$resultado_validacion = mysqli_query($con, $sql_validacion) or die ('Error en el query database 1');

	$fila_validacion = mysqli_fetch_array($resultado_validacion);

	//Validacion para evitar nicknames repetidos
	$sql_validacion_2 = "SELECT * FROM usuario WHERE id_usuario != '$iduser' AND nickname ='".$_POST["nickname_usuario"]."'";

	$resultado_validacion_2 = mysqli_query($con, $sql_validacion_2) or die ('Error en el query 2');

	$fila_validacion_2 = mysqli_fetch_array($resultado_validacion_2);

	if ($fila_validacion["contrasena"] != ""){

		if ($fila_validacion_2["nickname"] == ""){

			$sql_1="UPDATE usuario SET nombre='".$_POST["nombre_usuario"]."', nickname='".$_POST["nickname_usuario"]."', contrasena='".$_POST["pass_usuario"]."' WHERE id_usuario='$iduser'";
			$sql_2= "SELECT * FROM usuario WHERE id_usuario='$iduser'";

			//Variable de Query de SQL, requiere parametros de mysqli_connect($con) y instruccion de SQL($sql)
			$resultado_1 = mysqli_query($con, $sql_1) or die ('Error en el query 1');
			$resultado_2 = mysqli_query($con, $sql_2) or die ('Error en el query 2');

			$fila = mysqli_fetch_array($resultado_2) or die ('Error');

			$objses->set('user', $fila["nombre"]);
			$objses->set('iduser', $fila["id_usuario"]);
			$objses->set('profile', $fila["tipo_usuario"]);

			//cierra la conexion
			mysqli_close($con);
			header("location:admin?msg=2"); 
			
		}
		else {
			header("location:admin.php?error=2"); 
		}
	}
	else {
			header("location:admin.php?error=1");
	}
	
 ?>