<?php

class Sessions{

	//Inicia sesion
	public function __construct(){ }
	
	public function init(){
		@session_start();
	}
	
	//Metodo para guardar las variables de sesion
	public function set($varname, $value){
		
		$_SESSION[$varname] = $value;
		
	}
	
	//Cierra sesion
	public function destroy(){
		
		session_unset();
		session_destroy();
		
	}
	
}

?>