<?php

class Users{
	
	public function login_in(){
		$host = "localhost";
		$user = "root";
		$pw = "";
		$db = "sei_bd";

		$con = mysqli_connect($host, $user, $pw, $db) or die ('Error en la conexion al servidor');
		
		$query = "SELECT * FROM usuario WHERE nickname = '".$_POST['nickname']."' and contrasena = '".$_POST['password']."'";

		$result = mysqli_query($con, $query);
		$row=mysqli_fetch_array($result);

		$objSe = new Sessions();
		$objSe->init();
		
		if($row == ""){
			$objSe->set('error', '1');
			header('Location: ../login');
			
			}
			
		else{
			$objSe->set('user', $row["nombre"]);
			$objSe->set('iduser', $row["id_usuario"]);
			$objSe->set('profile', $row["tipo_usuario"]);
			$objSe->set('error', '');
			$objSe->set('msg', '');
				
			$useropc = $row["tipo_usuario"];
				
			switch($useropc){
					
				case 'estandar':
					header('Location: ../estandar');
					break;
						
				case 'admin':
					header('Location: ../admin');
					break;
			
			
			
			}
		
		}
		mysqli_close($con);
	
	}

}

?>