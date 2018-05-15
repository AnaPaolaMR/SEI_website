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

		function recuperarFAQS($dato){
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "sei_bd";

			$con = mysqli_connect($host, $user, $pw, $db) or die ('Error en la conexion al servidor');

			$query = "SELECT * from informacion_general WHERE tipo_ig='faq'";

			$resultado = mysqli_query($con, $query);

			while($fila = mysqli_fetch_array($resultado)){

			echo "<option>".$fila[$dato]."</option>";

			}

			mysqli_close($con);
		}

		function recuperarFAQS_menu(){
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "sei_bd";

			$con = mysqli_connect($host, $user, $pw, $db) or die ('Error en la conexion al servidor');

			$query = "SELECT * from informacion_general WHERE tipo_ig='faq'";

			$resultado = mysqli_query($con, $query);

			$a=0;

			while($fila = mysqli_fetch_array($resultado)){
			$a++;
			echo "<p>
						<a class='b1 btn btn-block btn-outline-success no-border' data-toggle='collapse' href='#collapse".$a."' role='button' aria-expanded='false' aria-controls='collapseExample'>
						".$fila["titulo_ig"]."
						</a>
				</p>
					<div class='collapse' id='collapse".$a."'>
					  <div class='card card-body'>
					    ".$fila["info_ig"]."
					  </div>
					</div>";

			}

			mysqli_close($con);
		}
	}

?>