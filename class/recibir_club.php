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

		$sql_1="UPDATE cursos SET id_curso=104, tipo_curso='club', info_curso='".$_POST["club_info"]."', titulo_curso='".$_POST["club_titulo"]."', video_curso='".$_POST["club_enlace"]."', FK_id_usuario='$iduser' WHERE id_curso=104";

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