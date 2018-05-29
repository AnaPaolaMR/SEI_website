<?php
	//Llamando a la clase para conectarse a la base de datos
	require'con_bd.php';

	class consultas{
		
		//Metodo para recuperar informacion de cursos	
		function recuperarCurso($curso, $dato){

			// Conexion a la base de datos
			$obj = new conexion();
			$con=$obj->get_conexion();

			$query = "SELECT * from cursos WHERE tipo_curso='$curso'";

			$resultado = mysqli_query($con, $query);

			$fila = mysqli_fetch_array($resultado);
				
			echo "$fila[$dato]";
			
			mysqli_close($con);

		}

		//Metodo para recuperar informacion de contacto
		function recuperarContacto($dato){

			// Conexion a la base de datos
			$obj = new conexion();
			$con=$obj->get_conexion();

			$query = "SELECT * from contacto WHERE id_contacto=100";

			$resultado = mysqli_query($con, $query);

			$fila = mysqli_fetch_array($resultado);
				
			echo "$fila[$dato]";
			
			mysqli_close($con);

		}

		//Metodo para recuperar informacion general
		function recuperarIG($ig, $dato){

			// Conexion a la base de datos
			$obj = new conexion();
			$con=$obj->get_conexion();

			$query = "SELECT * from informacion_general WHERE tipo_ig='$ig'";

			$resultado = mysqli_query($con, $query);

			$fila = mysqli_fetch_array($resultado);
				
			echo "$fila[$dato]";
			
			mysqli_close($con);

		}

		//Metodo para recuperar informacion de un usuario
		function recuperarUsuario($dato, $usuario){
			
			// Conexion a la base de datos
			$obj = new conexion();
			$con=$obj->get_conexion();

			$query = "SELECT * from usuario WHERE nombre='$usuario'";

			$resultado = mysqli_query($con, $query);

			$fila = mysqli_fetch_array($resultado);
				
			echo "$fila[$dato]";
			
			mysqli_close($con);
		}

		//Metodo para traer todos los usuarios de tipo estandar
		function recuperarUsuariosStndr(){
			
			// Conexion a la base de datos
			$obj = new conexion();
			$con=$obj->get_conexion();

			$query = "SELECT * from usuario WHERE tipo_usuario='estandar'";

			$resultado = mysqli_query($con, $query);

			while($fila = mysqli_fetch_array($resultado)){
				
			echo "<option>".$fila["nombre"]."</option>";
			
			
			}

			mysqli_close($con);
		}

		//Metodo para recuperar la ultima modificacion de algun apartado
		function recuperarMod($tabla, $dato, $campo_extra, $dato_extra){
			
			// Conexion a la base de datos
			$obj = new conexion();
			$con=$obj->get_conexion();

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

		//Metodo para recuperar todas las FAQS
		function recuperarFAQS($dato){

			// Conexion a la base de datos
			$obj = new conexion();
			$con=$obj->get_conexion();

			$query = "SELECT * from informacion_general WHERE tipo_ig='faq'";

			$resultado = mysqli_query($con, $query);

			while($fila = mysqli_fetch_array($resultado)){

			echo "<option>".$fila[$dato]."</option>";

			}

			mysqli_close($con);
		}

		//Metodo para desplegar las FAQS con formato en el menu desplegable
		function recuperarFAQS_menu(){
			
			// Conexion a la base de datos
			$obj = new conexion();
			$con=$obj->get_conexion();

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

		//Metodo para recuperar imagenes del servidor
		function recuperarFotos($categoria){
			//echo"$categoria<br>";

			// Conexion a la base de datos
			$obj = new conexion();
			$con=$obj->get_conexion();

			$query = "SELECT * from galeria WHERE categoria_foto = '$categoria'";

			$resultado = mysqli_query($con, $query);

			//$directorio = opendir("./img/$categoria");
			$n = 0;
			$fotos = array();

			while($fila = mysqli_fetch_array($resultado)){
				$archivo = $fila["nombre_foto"];
				$des = $fila["descripcion_foto"];

				$fotos[$n] = "<img src='/img/$categoria/$archivo' data-caption='$des'>";
					
				echo ($fotos[$n])."<br>";
				echo $n;
				
				$n++;

			}
			mysqli_close($con);
		}
	}

?>