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
		$categoria = $_POST['categoria_2'];
		//echo $categoria."<br>";
		$id_foto = $_POST['fotos_2'];
		//echo $id_foto."<br>";
		
		if($categoria != "Escoja..."&& $id_foto != "Escoja..." && $categoria !="" && $id_foto !=0){

			//Recuperar el nombre de la foto con el id correspondiente
			$sql_1 = "SELECT nombre_foto FROM galeria WHERE id_foto =".$id_foto."";
			//echo $sql_1."<br>";
			$sql_2 = "DELETE FROM galeria WHERE id_foto =".$id_foto."";
			//echo $sql_2."<br>";

			//Variable de Query de SQL, requiere parametros de mysqli_connect($con) y instruccion de SQL($sql)
			$resultado_1= mysqli_query($con, $sql_1) or die ('Error en el query database');
			$fila_resultado = mysqli_fetch_array($resultado_1);

			$nombre_foto = $fila_resultado['nombre_foto'];
			//echo $nombre_foto;
			//Eliminacion de la imagen en el servidor
			unlink($_SERVER['DOCUMENT_ROOT'].'/img/'.$categoria.'/'.$nombre_foto);

			//Eliminacion de la imagen en la base de datos
			$resultado_2=mysqli_query($con, $sql_2) or die ('Error en el query database');

			

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