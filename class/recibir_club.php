<?php
	require'../class/sessions.php';
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
		$sql_1="UPDATE cursos SET id_curso=104, tipo_curso='club', info_curso='".$_POST["club_info"]."', titulo_curso='".$_POST["club_titulo"]."', video_curso='".$_POST["club_enlace"]."', FK_id_usuario='$iduser' WHERE id_curso=104";

		//Variable de Query de SQL, requiere parametros de mysqli_connect($con) y instruccion de SQL($sql)
		$resultado_1=mysqli_query($con, $sql_1) or die ('Error en el query database 1');

		//cierra la conexion
		mysqli_close($con);
		$objses->set('msg', '4');
		header("location: ../admin");
	} 

 ?>