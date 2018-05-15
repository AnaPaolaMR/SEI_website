<?php
		//mysqli_connect() ocupa SERVIDOR, USUARIO, CONTRASEÑA y BASE DE DATOS
		$con= mysqli_connect('localhost','root','','sei_bd') or die('Error en la conexion al servidor');

		//Recibir datos
		$categoria = $_POST['categoria'];
		$descripcion = $_POST['descripcion'];

		if (isset($_FILES['valor_imagen']) ) {
			$cantidad = count($_FILES['valor_imagen']['tmp_name']);
			echo "cantidad: $cantidad";

			//Validacion de cantidad de imagenes, deberán ser menor a 10
			if ($cantidad < 11) {

				//Ciclo que sube cada una de las imagenes contenidas en el vector valor_imagen[]
				for ($i=0; $i <$cantidad ; $i++) {
				
					$nombre_imagen = $_FILES['valor_imagen']['name'][$i];
					echo "<br>$nombre_imagen";
					$tipo_imagen = $_FILES['valor_imagen']['type'][$i];
					echo "<br>$tipo_imagen";
					$tamanio_imagen = $_FILES['valor_imagen']['size'][$i];
					echo "<br>$tamanio_imagen";

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

							echo "Really a Success? 9.9";
							//header("location: ../estandar");

						}else{
							echo "Fallo 2: Error de tamaño de imagen";
							//cierra la conexion
							mysqli_close($con);
							header("location: ../estandar?error=3");
						}
					}else{
						echo "Fallo 1: Error en el tipo de archivo";
						//cierra la conexion
						mysqli_close($con);
						header("location: ../estandar?error=4");

					}
				}
			}else{
				echo "Fallo 3: Error en la cantidad de imagenes soportadas";
				//cierra conexion
					mysqli_close($con);
					header("location: ../estandar?error=5");
			}
			
		}

 ?>