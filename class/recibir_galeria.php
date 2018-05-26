<?php
	require'sessions.php';
	require'con_bd.php';

	$objses = new Sessions();
	$objses->init();

	$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
	$iduser = isset($_SESSION['iduser']) ? $_SESSION['iduser'] : null ;
	$profile = isset($_SESSION['profile']) ? $_SESSION['profile'] : null ;

	if($user == ''){
	  header('Location: 403/');
	}
	else{
		
		// Conexion a la base de datos
		$obj = new conexion();
		$con=$obj->get_conexion();

		//Recibir datos
		$categoria = $_POST['categoria'];
		echo "$categoria";
		$descripcion = $_POST['descripcion'];

		if ($categoria != "Escoja..."){
			if (isset($_FILES['valor_imagen'])){
				$cantidad = count($_FILES['valor_imagen']['tmp_name']);

				//Validacion de cantidad de imagenes, deberán ser menor a 10
				if ($cantidad < 11){

					//Ciclo que sube cada una de las imagenes contenidas en el vector valor_imagen[]
					for ($i=0; $i <$cantidad ; $i++) {
					
						$nombre_imagen = $_FILES['valor_imagen']['name'][$i];
						echo "<br>Nombre: $nombre_imagen";
						$tipo_imagen = $_FILES['valor_imagen']['type'][$i];
						echo "<br>Tipo: $tipo_imagen";
						$tamanio_imagen = $_FILES['valor_imagen']['size'][$i];
						echo "<br>Tamaño: $tamanio_imagen";

						//Comprobar que el fichero sea una imagen
						if ($tipo_imagen == "image/jpg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/jpeg") {

							if ( $tamanio_imagen <= 10000000 && $tamanio_imagen > 0) {
								
								//Ruta de la carpeta destino del servidor
								$carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/img/'.$categoria.'/';
								echo "$carpeta_destino<br>";

								//Mover imagen de la carpeta temporal al directoriio escogido.
								move_uploaded_file($_FILES['valor_imagen']['tmp_name'][$i],$carpeta_destino.$nombre_imagen);


								//Query para interactuar con la based de datos
								$sql = "INSERT INTO galeria (categoria_foto, nombre_foto, descripcion_foto) VALUES ('".$categoria."', '".$nombre_imagen."', '".$descripcion."')";
								

								//Variable de Query de SQL, requiere parametros de mysqli_connect($con) y instruccion de SQL($sql)
								$resultado_1=mysqli_query($con, $sql) or die ('Error en el query database');

								
							//Error en el tamaño de imagen
							}else{
								if ($profile=='admin'){
									mysqli_close($con);
									$objses->set('error', '9');
									header("location: ../admin");
								}
								else{
									mysqli_close($con);
									$objses->set('error', '9');
									header("location: ../estandar");
								}
							}
						//Error en el tipo de imagen
						}else{
							if ($profile=='admin'){
								mysqli_close($con);
								$objses->set('error', '10');
								header("location: ../admin");
							}
							else{
								mysqli_close($con);
								$objses->set('error', '10');
								header("location: ../estandar");
							}

						}
					}
				//Error en la cantidad de imagenes subidas
				}else{
					if ($profile=='admin'){
						mysqli_close($con);
						$objses->set('error', '11');
						header("location: ../admin");
					}
					else{
						mysqli_close($con);
						$objses->set('error', '11');
						header("location: ../estandar");
					}
				}
				
			}
		//Error en el tipo de categoria
		}else{
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

		//Una vez subidos las imagenes correctamente...
		if ($profile=='admin'){
			mysqli_close($con);
			$objses->set('msg', '4');
			header("location: ../admin");
		}else{
			mysqli_close($con);
			$objses->set('msg', '4');
			header("location: ../estandar");
		}
	}

 ?>