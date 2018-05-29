<?php
	//Clases requeridas para iniciar seison y conectarse a la base de datos
	require'sessions.php';
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
		
		function obtenerFoto(){

			// Conexion a la base de datos
			$obj = new conexion();
			$con=$obj->get_conexion();

			if (!$con) {
			    die('No se pudo conectar: ' . mysqli_error($con));
			}

			//Recibir datos del formulario de modificar foto
			$id_foto = $_POST['foto'];
			$categoria = $_POST['dato_cate'];

			//Comando SQL que me traerá informacion en lista
			$sql = "SELECT * FROM galeria WHERE id_foto = '$id_foto'";
			$resultado = mysqli_query($con, $sql) or die ('Error en el query database');

			$fila = $resultado->fetch_array(MYSQLI_ASSOC);

			$ruta = "./img/$categoria/$fila[nombre_foto]";
			$etiqueta = "<img src='$ruta' class='img-thumbnail img-fluid' alt='Foto a Eliminar' style='margin: 10px; margin-bottom: 25px;''>";


			return $etiqueta;
		}
	}
	echo obtenerFoto();
?>