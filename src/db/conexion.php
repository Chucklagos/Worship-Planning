<?php
//session_start();

$conexion = mysqli_connect(
  'localhost',
  'iglesia',
  'iglesia',
  'church'
);

if ($conexion) {
 // echo('Si hay conexion con la base de datos');
}
//or die(mysqli_erro($mysqli));
?>
