<?php
		//mysqli_connect() ocupa SERVIDOR, USUARIO, CONTRASEÑA y BASE DE DATOS
		$con= mysqli_connect('localhost','root','','sei_bd') or die('Error en la conexion al servidor');

		//Recibir datos
		$categoria = $_POST['categoria'];
		$descripcion = $_POST['descripcion'];

		//atributos del array de $_FILES: nombre, type, size, tmp_name
		$nombre_imagen = $_FILES['valor_imagen']['name'];
		echo "$nombre_imagen<br>";
		$tipo_imagen = $_FILES['valor_imagen']['type'];
		echo "$tipo_imagen<br>";
		$tamanio_imagen = $_FILES['valor_imagen']['size'];
		echo "$tamanio_imagen<br>";

		if ($tamanio_imagen <= 5000000) {

			if ($tipo_imagen == "image/jpg" || $tipo_imagen == "image/png") {
				
				//Ruta de la carpeta destino del servidor
				$carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/img/'.$categoria.'/';
				echo "$carpeta_destino<br>";

				//Mover imagen de la carpeta temporal al directoriio escogido.
				move_uploaded_file($_FILES['valor_imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);


				//Query para interactuar con la based de datos
				$sql = "INSERT INTO galeria (categoria_foto, nombre_foto, descripcion_foto) VALUES ('".$categoria."', '".$nombre_imagen."', '".$descripcion."')";
				

				//Variable de Query de SQL, requiere parametros de mysqli_connect($con) y instruccion de SQL($sql)
				$resultado_1=mysqli_query($con, $sql) or die ('Error en el query database ');
				//cierra la conexion
				mysqli_close($con);
				header("location: ../estandar");

			}else{
				//cierra la conexion
				mysqli_close($con);
				header("location: ../estandar?error=4");
			}

			
		}else{
			//cierra la conexion
			mysqli_close($con);
			header("location: ../estandar?error=3");

		}
		
		//cierra la conexion
		mysqli_close($con);

 ?>