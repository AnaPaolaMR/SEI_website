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
		
		//Recibir Datos
		$categoria = $_POST['categoria_1'];
		$id_foto = $_POST['fotos_1'];
		$des = $_POST['descripcion_1'];

		if (empty($categoria) || empty($id_foto)) {
			//Error de captura de categoria o foto
			if ($profile=='admin'){
				mysqli_close($con);
				$objses->set('error', '13');
				header("location: ../admin");
			}
			else{
				mysqli_close($con);
				$objses->set('error', '13');
				header("location: ../estandar");
			}
		}else{
			if (empty($des)) {
				//Error de captura de categoria o foto
				if ($profile=='admin'){
					mysqli_close($con);
					$objses->set('error', '14');
					//header("location: ../admin");
				}
				else{
					mysqli_close($con);
					$objses->set('error', '14');
					//header("location: ../estandar");
				}
			}else{
				if($categoria != "Escoja..."&& $id_foto != "Escoja..." && $categoria !="" && $id_foto !=0){

					$sql = "UPDATE galeria SET descripcion_foto ='".$des."' WHERE id_foto ='".$id_foto."'";
					echo $sql;

					//Variable de Query de SQL, requiere parametros de mysqli_connect($con) y instruccion de SQL($sql)
					$resultado_1=mysqli_query($con, $sql) or die ('Error en el query database');

					//Una vez modificadas las imagenes correctamente...
					if ($profile=='admin'){
						mysqli_close($con);
						$objses->set('msg', '4');
						header("location: ../admin");
					}else{
						mysqli_close($con);
						$objses->set('msg', '4');
						header("location: ../estandar");
					}

				}else{
					//Error de captura de categoria o foto
					if ($profile=='admin'){
						mysqli_close($con);
						$objses->set('error', '13');
						header("location: ../admin");
					}
					else{
						mysqli_close($con);
						$objses->set('error', '13');
						header("location: ../estandar");
					}
				}
			}
		}
	}
?>