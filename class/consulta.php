<?php
	class consultas{
		
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

		function recuperarIG($ig, $dato){
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "sei_bd";

			$con = mysqli_connect($host, $user, $pw, $db) or die ('Error en la conexion al servidor');

			$query = "SELECT * from informacion_general WHERE tipo_ig='$ig'";

			$resultado = mysqli_query($con, $query);

			$fila = mysqli_fetch_array($resultado);
				
			echo "$fila[$dato]";
			
			mysqli_close($con);

		}

		function recuperarUsuario($dato, $usuario){
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "sei_bd";

			$con = mysqli_connect($host, $user, $pw, $db) or die ('Error en la conexion al servidor');

			$query = "SELECT * from usuario WHERE nombre='$usuario'";

			$resultado = mysqli_query($con, $query);

			$fila = mysqli_fetch_array($resultado);
				
			echo "$fila[$dato]";
			
			mysqli_close($con);
		}

		function recuperarUsuariosStndr(){
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "sei_bd";

			$con = mysqli_connect($host, $user, $pw, $db) or die ('Error en la conexion al servidor');

			$query = "SELECT * from usuario WHERE tipo_usuario='estandar'";

			$resultado = mysqli_query($con, $query);

			while($fila = mysqli_fetch_array($resultado)){
				
			echo "<option>".$fila["nombre"]."</option>";
			
			
			}

			mysqli_close($con);
		}

		function recuperarMod($tabla, $dato, $campo_extra, $dato_extra){
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "sei_bd";

			$con = mysqli_connect($host, $user, $pw, $db) or die ('Error en la conexion al servidor');

			if ($dato_extra == '' || $campo_extra == ''){
				$query = "SELECT * from $tabla, usuario WHERE FK_id_usuario=id_usuario";

				$resultado = mysqli_query($con, $query);

				$fila = mysqli_fetch_array($resultado);
					
				echo "$fila[$dato] $fila[nombre]";
				
				mysqli_close($con);
			}
			else{
				$query = "SELECT * from $tabla, usuario WHERE FK_id_usuario=id_usuario AND $campo_extra = '$dato_extra'";

				$resultado = mysqli_query($con, $query);

				$fila = mysqli_fetch_array($resultado);
					
				echo "$fila[$dato] $fila[nombre]";
				
				mysqli_close($con);
			}

		}
	}

?>