<?php
session_start();

$conexion = mysqli_connect(
  'localhost',
  'iglesia',
  'iglesia',
  'Church'
);

if ($conexion) {
  //echo('Si hay conexion con la base de datos');
}
//or die(mysqli_erro($mysqli));
?>
