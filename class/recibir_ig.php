<?php
	require'../class/sessions.php';
	$objses = new Sessions();
	$objses->init();

	$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
	
	if($user == ''){
	  header('Location: 403/');
	}
	else{

		//mysqli_connect() ocupa SERVIDOR, USUARIO, CONTRASEÑA y BASE DE DATOS
		$con= mysqli_connect('localhost','root','','sei_bd') or die('Error en la conexion al servidor');
		$sql_1="UPDATE informacion_general SET info_ig='".$_POST["q_somos_info"]."', titulo_ig='".$_POST["q_somos_titulo"]."', img_ig='".$_POST["q_somos_img"]."' WHERE id_ig=100";
		$sql_2="UPDATE informacion_general SET info_ig='".$_POST["mision_info"]."', titulo_ig='".$_POST["mision_titulo"]."', img_ig='".$_POST["mision_img"]."' WHERE id_ig=101";
		$sql_3="UPDATE informacion_general SET info_ig='".$_POST["vision_info"]."', titulo_ig='".$_POST["vision_titulo"]."', img_ig='".$_POST["vision_img"]."' WHERE id_ig=102";
		$sql_4="UPDATE informacion_general SET info_ig='".$_POST["historia_info"]."', titulo_ig='".$_POST["historia_titulo"]."', img_ig='".$_POST["historia_img"]."' WHERE id_ig=103";


		//Variable de Query de SQL, requiere parametros de mysqli_connect($con) y instruccion de SQL($sql)
		$resultado_1=mysqli_query($con, $sql_1) or die ('Error en el query database 1');
		$resultado_2=mysqli_query($con, $sql_2) or die ('Error en el query database 2');
		$resultado_3=mysqli_query($con, $sql_3) or die ('Error en el query database 3');
		$resultado_4=mysqli_query($con, $sql_4) or die ('Error en el query database 4');


		//cierra la conexion
		mysqli_close($con);
		$objses->set('msg', '4');
		header("location: ../admin");
	} 
	

 ?>