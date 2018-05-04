<?php
	require'class/sessions.php';
	$objses = new Sessions();
	$objses->init();

	$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
	$iduser = isset($_SESSION['iduser']) ? $_SESSION['iduser'] : null ;

	//mysqli_connect() ocupa SERVIDOR, USUARIO, CONTRASEÑA y BASE DE DATOS
	$con= mysqli_connect('localhost','root','','sei_bd') or die('Error en la conexion al servidor');

	//Validacion para asegurarse de que el usuario ingreso la contraseña actual para guardar cambios
	$sql_validacion = "SELECT * FROM usuario WHERE id_usuario = '$iduser' AND contrasena ='".$_POST["actual_pass_usuario_nuevo"]."'";

	$resultado_validacion = mysqli_query($con, $sql_validacion) or die ('Error en el query database 1');

	$fila_validacion = mysqli_fetch_array($resultado_validacion);

	if ($fila_validacion["contrasena"] != ""){
	
		$sql_contador = "SELECT * FROM usuario ORDER BY id_usuario DESC LIMIT 1";
		$resultado_contador = mysqli_query($con, $sql_contador) or die ('Error en el query contador');

		$fila_contador = mysqli_fetch_array($resultado_contador) or die ('Error');

		$sql="INSERT INTO  usuario VALUES ($fila_contador[id_usuario]+1, '".$_POST["nombre_usuario_nuevo"]."', '".$_POST["email_usuario_nuevo"]."', '".$_POST["pass_usuario_nuevo"]."', '', '".$_POST["tipo_usuario_nuevo"]."')";

		//Variable de Query de SQL, requiere parametros de mysqli_connect($con) y instruccion de SQL($sql)
		$resultado = mysqli_query($con, $sql) or die ('Error en el query database 1');

		//cierra la conexion
		mysqli_close($con);
		header("location:admin.php");
	}
	else{
		header("location:admin.php?error=1"); 
	} 
 ?>