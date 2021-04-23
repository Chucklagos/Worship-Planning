<?php
include 'db/conexion.php';
session_start();
$query = "DELETE FROM logs";
$resultado = mysqli_query($conexion, $query);
if(!$resultado) {
  die("Query Failed.");
}
header('location: logs.php');
?>
