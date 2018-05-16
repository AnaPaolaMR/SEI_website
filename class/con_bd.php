<?php

class conexion{
	
	public function get_conexion(){
		
		//Para conectarnos a MySQL
		$host = "localhost";
		$user = "root";
		$pw = "";
		$db = "sei_bd";

		$con = mysqli_connect($host, $user, $pw, $db) or die ('Error en la conexion al servidor');
		return $con;
	}
	
}

?>