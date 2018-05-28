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

		// Conexion a la base de datos
		$obj = new conexion();
		$con=$obj->get_conexion();

		if (!$con) {
		    die('No se pudo conectar: ' . mysqli_error($con));
		}
		//Definir variables
		$categoria = ""; $id_foto=0;
		
		//Recibir Datos
		$categoria = $_POST['categoria_1'];
		echo $categoria."<br>";
		$id_foto = $_POST['fotos_1'];
		echo $id_foto."<br>";
		$des = $_POST['descripcion_1'];
		echo $des."<br>";

		if($categoria != "Escoja..."&& $id_foto != "Escoja..." && $categoria !="" && $id_foto !=0){

			$sql = "UPDATE galeria SET descripcion_foto ='".$des."' WHERE id_foto ='".$id_foto."'";
			echo $sql;

			//Variable de Query de SQL, requiere parametros de mysqli_connect($con) y instruccion de SQL($sql)
			$resultado_1=mysqli_query($con, $sql) or die ('Error en el query database');

		}else{
			echo "Error en la entrada de categoria o foto";
		}

		
		//Una vez modificadas las imagenes correctamente...
		/*if ($profile=='admin'){
			mysqli_close($con);
			$objses->set('msg', '4');
			header("location: ../admin");
		}else{
			mysqli_close($con);
			$objses->set('msg', '4');
			header("location: ../estandar");
		}*/
	}
?>