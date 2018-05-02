<?php
// Evitar los warnings the variables no definidas!!!
$err = isset($_GET['error']) ? $_GET['error'] : null ;

?>

<?php
  require'class/sessions.php';
  $objses = new Sessions();
  $objses->init();

  $user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;

  if($user != ''){
    header('Location: admin.php');
  }
?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="estilos1.css">
  <link rel="icon" href="smart.ico">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="estilos.css">
  <link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="screen" />

    <title>Iniciar Sesion | Smart English Institute</title>
  </head>

  <body class="text-center login">
    <form class="form-signin border border-success rounded" action="session_init.php" method="POST">
      <?php if($err==1){
        echo "<script type='text/javascript'>alert('Usuario o Contraseña Erróneos.');</script>";
      }
      if($err==2){
        echo "<script type='text/javascript'>alert('Debe iniciar sesion para poder acceder el sitio.');</script>";
      }
      ?>
      <img class="mb-4" src="Logo.png" alt="Smart English Institute" width="80%" height="autofocus"><br>
      <img class="mb-4" src="sesion.png" alt="" width="70" height="70">
      
      <h3>usuario</h3>
      <hr class="my-4">

      <label for="inputEmail" class="sr-only">Correo Electónico</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Correo Electónico" required autofocus>

      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
      <br>
      <button class="btn btn-lg btn-success btn-block" type="submit" >Entrar</button>
      <p class="text-center mt-5 mb-3 text-muted">Smart English Institute &copy;</p>
    </form>
  </body>
</html>
