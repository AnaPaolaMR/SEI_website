<?php 
	//mysqli_connect() ocupa SERVIDOR, USUARIO, CONTRASEÑA y BASE DE DATOS
	$con= mysqli_connect('localhost','root','','sei_bd') or die('Error en la conexion al servidor');
	$sql="UPDATE cursos SET id_curso=103, info_curso='".$_POST["regular_info"]."'";

	//Variable de Query de SQL, requiere parametros de mysqli_connect($con) y instruccion de SQL($sql)
	$resultado=mysqli_query($con, $sql) or die ('Error en el query database');

	//cierra la conexion
	mysqli_close($con);

 ?>