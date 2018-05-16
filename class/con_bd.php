<?php

//Clase para conectarse a la base de datos
class conexion{
	
	public function get_conexion(){
		
		//Datos para conectarse a MySQL
		$host = "localhost";
		$user = "root";
		$pw = "";
		$db = "sei_bd";

		$con = mysqli_connect($host, $user, $pw, $db) or die ('Error en la conexion al servidor');
		return $con;
	}
	
}

?>