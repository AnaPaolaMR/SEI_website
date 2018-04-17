<?php

	class conexion{
		
		function recuperarDatos(){
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "sei_bd";
			$result_type = "MYSQL_BOTH";

			$con = mysqli_connect($host, $user, $pw, $db) or die ('Error en la conexion al servidor');

			$query = "SELECT * from cursos";
			$resultado = mysqli_query($con, $query);

			$fila = mysqli_fetch_array($resultado);
				
			//echo "$fila[info_curso]";
			echo '<textarea class="form-control" id="exampleFormControlTextarea6" rows="3" name="regular_info">'.$fila[info_curso].'</textarea>';

			mysqli_close($con);

		}
	}

?>