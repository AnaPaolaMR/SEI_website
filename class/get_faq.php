<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','sei_bd');

if (!$con) {
    die('No se pudo conectar: ' . mysqli_error($con));
}

$sql_2="SELECT * FROM informacion_general WHERE id_ig = '$q'";
$result_2 = mysqli_query($con, $sql_2);

$row_2 = mysqli_fetch_array($result_2);

echo "$row_2[info_ig]";


mysqli_close($con);
?>