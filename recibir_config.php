<?php
	require'class/sessions.php';
	$objses = new Sessions();
	$objses->init();

	$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
	$iduser = isset($_SESSION['iduser']) ? $_SESSION['iduser'] : null ;

	//mysqli_connect() ocupa SERVIDOR, USUARIO, CONTRASEÑA y BASE DE DATOS
	$con= mysqli_connect('localhost','root','','sei_bd') or die('Error en la conexion al servidor');
	$sql_1="UPDATE usuario SET nombre='".$_POST["nombre_usuario"]."', email='".$_POST["email_usuario"]."', contrasena='".$_POST["pass_usuario"]."' WHERE nombre='$user'";
	$sql_2= "SELECT * FROM usuario WHERE id_usuario='$iduser'";

	//Variable de Query de SQL, requiere parametros de mysqli_connect($con) y instruccion de SQL($sql)
	$resultado_1 = mysqli_query($con, $sql_1) or die ('Error en el query database 1');
	$resultado_2 = mysqli_query($con, $sql_2) or die ('Error en el query database 2');

	$fila = mysqli_fetch_array($resultado_2) or die ('Error');
	//echo "$fila["nombre"]";


	$objses->set('user', $fila["nombre"]);
	$objses->set('iduser', $fila["id_usuario"]);
	$objses->set('profile', $fila["tipo_usuario"]);

	//cierra la conexion
	mysqli_close($con);
	header("location:admin.php"); 
	

 ?>