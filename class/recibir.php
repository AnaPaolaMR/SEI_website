<?php
	//Clases requeridas para iniciar seison y conectarse a la base de dato
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
		
		$sql_1="UPDATE cursos SET id_curso=100, tipo_curso='regular', info_curso='".$_POST["regular_info"]."', titulo_curso='".$_POST["regular_titulo"]."', video_curso='".$_POST["regular_enlace"]."', FK_id_usuario='$iduser' WHERE id_curso=100";
		$sql_2="UPDATE cursos SET id_curso=101, tipo_curso='semestral', info_curso='".$_POST["semestral_info"]."', titulo_curso='".$_POST["semestral_titulo"]."', video_curso='".$_POST["semestral_enlace"]."', FK_id_usuario='$iduser' WHERE id_curso=101";
		$sql_3="UPDATE cursos SET id_curso=102, tipo_curso='sabatino', info_curso='".$_POST["sabatino_info"]."', titulo_curso='".$_POST["sabatino_titulo"]."', video_curso='".$_POST["sabatino_enlace"]."', FK_id_usuario='$iduser' WHERE id_curso=102";
		$sql_4="UPDATE cursos SET id_curso=103, tipo_curso='verano', info_curso='".$_POST["verano_info"]."', titulo_curso='".$_POST["verano_titulo"]."', video_curso='".$_POST["verano_enlace"]."', FK_id_usuario='$iduser' WHERE id_curso=103";


		//Variable de Query de SQL, requiere parametros de mysqli_connect($con) y instruccion de SQL($sql)
		$resultado_1=mysqli_query($con, $sql_1) or die ('Error en el query database 1');
		$resultado_2=mysqli_query($con, $sql_2) or die ('Error en el query database 2');
		$resultado_3=mysqli_query($con, $sql_3) or die ('Error en el query database 3');
		$resultado_4=mysqli_query($con, $sql_4) or die ('Error en el query database 4');


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