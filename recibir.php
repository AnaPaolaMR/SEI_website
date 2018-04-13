<?php 

	$con= mysqli_connect('localhost','root','','sei_bd') or die('Error en la conexion al servidor');
	$sql="INSERT INTO cursos (id_curso, info_curso) values (103,'".$_POST["regular_info"]."')";
	$resultado=mysqli_query($con, $sql) or die ('Error en el query database');
	mysqli_close($con);

 ?>