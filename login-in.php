<?php
	
	$host = "localhost";
	$user = "root";
	$pw = "";
	$db = "sei_bd";

	$con = mysqli_connect($host, $user, $pw, $db) or die ('Error en la conexion al servidor');



	//Toma los registros del campo email de la tabla usuario
	$query = "SELECT email, contrasena FROM usuario WHERE email = '".$_POST['email']."' and contrasena = '".$_POST['password']."'";

	$resultado = mysqli_query($con, $query);
	$fila = mysqli_fetch_array($resultado);

	echo "$fila[email]";

	if ($fila == "") {
		header("Location: login.php");
		echo "<br> ¡Correo o contraseña incorrectos!

		";  	
		//header("Location: login.php");
	}else{
		header("Location: admin.php");
	}
/*
	Recibe datos de login.php -> email, password
	$correo = $_POST['email'];
	
	$contraseña = $_POST['password'];

	if ($correo == 'smart_eteacher@hotmail.com' && $contraseña == 'sei2018') {
		
		header("Location: admin.php");
	}else{
		echo "<br> Error: Datos incorrectos";    	
		//header("Location: login.php");
	}
*/
	mysqli_close($con);

?>