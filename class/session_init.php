<?php

error_reporting(E_ALL ^ E_DEPRECATED);

//LLamado a la clase Usuarios para realizar el inicio de sesion
require'users.php';

//llamado a la clase encargada de las sesiones
require'sessions.php';


//objeto de la clase users
$objUser = new Users();

//function que realiza la verificación de usuarios e inicio de sesion
$objUser->login_in();



?>