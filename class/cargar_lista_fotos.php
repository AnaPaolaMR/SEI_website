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
		
		function obtenerLista(){

			// Conexion a la base de datos
			$obj = new conexion();
			$con=$obj->get_conexion();

			if (!$con) {
			    die('No se pudo conectar: ' . mysqli_error($con));
			}

			//Recibir datos del formulario de modificar foto
			$id = $_POST['categoria_1'];
			echo $id."<br>";

			//Comando SQL que me traerá informacion en lista
			$sql = "SELECT * FROM galeria WHERE id_foto = $id";
			$resultado = mysqli_query($con, $sql) or die ('Error en el query database');

			$lista_fotos = '<option value ="0" selected disabled>Escoja...</option>';
			while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
				$lista_fotos .= "<option value='$fila[id_foto]'>$fila[nombre_foto]</option>";
			}
			return $lista_fotos;
		}
	}
	echo obtenerLista();
?>