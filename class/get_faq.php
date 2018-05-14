<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','sei_bd');

if (!$con) {
    die('No se pudo conectar: ' . mysqli_error($con));
}

mysqli_query($con,"SET CHARACTER SET 'utf8'");
mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");


$sql="SELECT * FROM informacion_general WHERE titulo_ig like '%".$q."%'";
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);

echo "$row[info_ig]";

mysqli_close($con);
?>