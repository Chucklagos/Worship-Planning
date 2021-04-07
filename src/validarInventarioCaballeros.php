<?php
  include 'db/conexion.php';
  session_start();
  $idMinisterio = $_POST['idMinisterio'];
  $cantidad = $_POST['cantidad'];
  $descripcion = $_POST['descripcion'];

  $identidad = $_SESSION['identidad'];
  echo "$idMinisterio, $cantidad, $descripcion, $identidad";
  $query = "INSERT INTO inventario VALUES(idInventario, '$descripcion', '$cantidad', '5', '$identidad')";
  $resultado = mysqli_query($conexion, $query);
  if(!$resultado) {
    die("Query Failed.");
  }

  header('location: invCaballeros.php');

 ?>
