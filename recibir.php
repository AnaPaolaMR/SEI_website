<?php
	

		//mysqli_connect() ocupa SERVIDOR, USUARIO, CONTRASEÑA y BASE DE DATOS
		$con= mysqli_connect('localhost','root','','sei_bd') or die('Error en la conexion al servidor');
		$sql_1="UPDATE cursos SET id_curso=100, tipo_curso='regular', info_curso='".$_POST["regular_info"]."', titulo_curso='".$_POST["regular_titulo"]."', video_curso='".$_POST["regular_enlace"]."' WHERE id_curso=100";
		$sql_2="UPDATE cursos SET id_curso=101, tipo_curso='semestral', info_curso='".$_POST["semestral_info"]."', titulo_curso='".$_POST["semestral_titulo"]."', video_curso='".$_POST["semestral_enlace"]."' WHERE id_curso=101";
		$sql_3="UPDATE cursos SET id_curso=102, tipo_curso='sabatino', info_curso='".$_POST["sabatino_info"]."', titulo_curso='".$_POST["sabatino_titulo"]."', video_curso='".$_POST["sabatino_enlace"]."' 
		WHERE id_curso=102";
		$sql_4="UPDATE cursos SET id_curso=103, tipo_curso='verano', info_curso='".$_POST["verano_info"]."', titulo_curso='".$_POST["verano_titulo"]."', video_curso='".$_POST["verano_enlace"]."' WHERE id_curso=103";


		//Variable de Query de SQL, requiere parametros de mysqli_connect($con) y instruccion de SQL($sql)
		$resultado_1=mysqli_query($con, $sql_1) or die ('Error en el query database 1');
		$resultado_2=mysqli_query($con, $sql_2) or die ('Error en el query database 2');
		$resultado_3=mysqli_query($con, $sql_3) or die ('Error en el query database 3');
		$resultado_4=mysqli_query($con, $sql_4) or die ('Error en el query database 4');


		//cierra la conexion
		mysqli_close($con);
		header("location:admin.php"); 
	

 ?>