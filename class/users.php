<?php
	require'con_bd.php';

class Users{
	
	//Metodo para iniciar sesion con los datos del formulario login
	public function login_in(){

		// Conexion a la base de datos
		$obj = new conexion();
		$con=$obj->get_conexion();

		
		$query = "SELECT * FROM usuario WHERE nickname = '".$_POST['nickname']."' and contrasena = '".$_POST['password']."'";

		$result = mysqli_query($con, $query);
		$row=mysqli_fetch_array($result);

		$objSe = new Sessions();
		$objSe->init();
		
		//Devuelve a Login con un error
		if($row == ""){
			$objSe->set('error', '1');
			header('Location: ../login');
			
			}
			
		else{
			//Inicializa las variables de sesion
			$objSe->set('user', $row["nombre"]);
			$objSe->set('iduser', $row["id_usuario"]);
			$objSe->set('profile', $row["tipo_usuario"]);
			$objSe->set('error', '');
			$objSe->set('msg', '');
				
			$useropc = $row["tipo_usuario"];
			
			//Redirige a el backend correspondiente segun el tipo de usuario	
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