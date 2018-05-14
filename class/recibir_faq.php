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

		$sql="INSERT INTO informacion_general (tipo_ig, info_ig, titulo_ig, FK_id_usuario) VALUES ('faq', '".$_POST["faq_respuesta"]."', '".$_POST["faq"]."', '$iduser')";


		//Variable de Query de SQL, requiere parametros de mysqli_connect($con) y instruccion de SQL($sql)
		$resultado_1=mysqli_query($con, $sql) or die ('Error en el query database 1');

		//cierra la conexion
		mysqli_close($con);
		$objses->set('msg', '4');
		header("location: ../admin");
	} 
	

 ?>