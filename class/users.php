<?php

class Users{
	
	public function login_in(){
		$host = "localhost";
		$user = "root";
		$pw = "";
		$db = "sei_bd";

		$con = mysqli_connect($host, $user, $pw, $db) or die ('Error en la conexion al servidor');
		
		$query = "SELECT * FROM usuario WHERE email = '".$_POST['email']."' and contrasena = '".$_POST['password']."'";

		$result = mysqli_query($con, $query);
		$row=mysqli_fetch_array($result);
		
		if($row == ""){
			header('Location: login.php?error=1');
			
			}
			
		else{
			$objSe = new Sessions();
			$objSe->init();
			$objSe->set('user', $row["nombre"]);
			$objSe->set('iduser', $row["id_usuario"]);
			$objSe->set('profile', $row["tipo_usuario"]);
				
			$useropc = $row["tipo_usuario"];
				
			switch($useropc){
					
				case 'Standard':
					header('Location: user/index.php');
					break;
						
				case 'admin':
					header('Location: admin.php');
					break;
			
			
			
			}
		
		}
		mysqli_close($con);
	
	}

}

?>