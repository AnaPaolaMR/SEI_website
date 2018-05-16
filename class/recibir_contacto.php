<?php
	//Clases requeridas para iniciar seison y conectarse a la base de datos
	require'../class/sessions.php';
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

		// Conexion a la base de datos
		$obj = new conexion();
		$con=$obj->get_conexion();
		
		$sql_1="UPDATE contacto SET id_contacto=100, telefono='".$_POST["contacto_telefono"]."', celular ='".$_POST["contacto_celular"]."', email_contacto='".$_POST["contacto_email"]."', direccion_contacto ='".$_POST["contacto_direccion"]."', enlace_facebook='".$_POST["contacto_facebook"]."', enlace_twitter='".$_POST["contacto_twitter"]."', enlace_instagram='".$_POST["contacto_instagram"]."', FK_id_usuario='$iduser' WHERE id_contacto=100";

		//Variable de Query de SQL, requiere parametros de mysqli_connect($con) y instruccion de SQL($sql)
		$resultado_1=mysqli_query($con, $sql_1) or die ('Error en el query database 1');

		//cierra la conexion y redirige al backend correspondiente con un mensaje de exito
		if ($profile=='admin'){
			mysqli_close($con);
			$objses->set('msg', '4');
			header("location: ../admin");
		}
		else{
			mysqli_close($con);
			$objses->set('msg', '4');
			header("location: ../estandar");
		}
	} 


 ?>