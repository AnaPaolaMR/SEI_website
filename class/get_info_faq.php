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
		$q = strval($_GET['q']);

		// Conexion a la base de datos
		$obj = new conexion();
		$con=$obj->get_conexion();

		if (!$con) {
		    die('No se pudo conectar: ' . mysqli_error($con));
		}

		$sql="SELECT * FROM informacion_general WHERE titulo_ig = '$q'";
		$result = mysqli_query($con, $sql);

		$row = mysqli_fetch_array($result);

		echo "$row[info_ig]";

		mysqli_close($con);
	}
?>