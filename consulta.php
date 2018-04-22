<?php
	class cursos{
		
		function recuperarCurso($curso, $dato){
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "sei_bd";

			$con = mysqli_connect($host, $user, $pw, $db) or die ('Error en la conexion al servidor');

			$query = "SELECT * from cursos WHERE tipo_curso='$curso'";

			$resultado = mysqli_query($con, $query);

			$fila = mysqli_fetch_array($resultado);
				
			echo "$fila[$dato]";
			
			mysqli_close($con);

		}

		function recuperarContacto($dato){
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "sei_bd";

			$con = mysqli_connect($host, $user, $pw, $db) or die ('Error en la conexion al servidor');

			$query = "SELECT * from contacto WHERE id_contacto=100";

			$resultado = mysqli_query($con, $query);

			$fila = mysqli_fetch_array($resultado);
				
			echo "$fila[$dato]";
			
			mysqli_close($con);

		}
	}

?>