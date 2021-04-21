<?php
session_start();
include 'db/conexion.php';
$namesession = $_SESSION['primerNombre'];
$lastnamesession = $_SESSION['primerApellido'];
$rolsession = $_SESSION['rolUsuario'];

$query="INSERT INTO logs VALUES(idLog, '$namesession', '$lastnamesession', '$rolsession', 'sesiones', 'Cierre de Sesión', CURDATE(), CURTIME())";
$resultado = mysqli_query($conexion, $query);
if(!$resultado) {
  die("Query Failed.");
}
session_destroy();
header('location:login.php');
?>
