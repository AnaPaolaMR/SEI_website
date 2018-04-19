<?php

    //Recibe datos de login.php -> email, password
    $email = $_POST['email'];
    echo($email);

    $contraseña = $_POST['password'];
    echo($contraseña);

    if ($email == 'smart_eteacher@hotmail.com' && $contraseña == 'sei2018') {
    	
    	header("Location: admin.php");
    }else{
    	echo "<br> Error: Datos incorrectos";    	
    	//header("Location: login.php");
    }

?>