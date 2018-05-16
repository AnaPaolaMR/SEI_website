<?php
	//Clases requeridas para iniciar seison y conectarse a la base de datos
	require'../class/sessions.php';
	require'con_bd.php';
	
	$objses = new Sessions();
	$objses->init();

	//Variables para recuperar datos del usuario de la sesion actual
	$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
	$iduser = isset($_SESSION['iduser']) ? $_SESSION['iduser'] : null ;
	$profile= isset($_SESSION['profile']) ? $_SESSION['profile'] : null ;
	
	//Condicion para bloquear el acceso a usuarios que no han iniciado sesion
	if($user == ''){
	  header('Location: 403/');
	}
	else{

		// Conexion a la base de datos
		$obj = new conexion();
		$con=$obj->get_conexion();

		//Validacion para evitar preguntas repetidas
		$sql_validacion = "SELECT COUNT(*) FROM informacion_general WHERE titulo_ig ='".$_POST["faq"]."'";

		$resultado_validacion = mysqli_query($con, $sql_validacion) or die ('Error en el query 1');

		$fila_validacion = mysqli_fetch_array($resultado_validacion);

		if ($fila_validacion["COUNT(*)"] == 0){

			$sql="INSERT INTO informacion_general (tipo_ig, info_ig, titulo_ig, FK_id_usuario) VALUES ('faq', '".$_POST["faq_respuesta"]."', '".$_POST["faq"]."', '$iduser')";


			//Variable de Query de SQL, requiere parametros de mysqli_connect($con) y instruccion de SQL($sql)
			$resultado_1=mysqli_query($con, $sql) or die ('Error en el query 2');

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
		else{
			//cierra la conexion y redirige al backend correspondiente con un error
			if ($profile=='admin'){
				mysqli_close($con);
				$objses->set('error', '8');
				header("location: ../admin");
			}
			else{
				mysqli_close($con);
				$objses->set('error', '8');
				header("location: ../estandar");

			}
		}
	} 
	

 ?>