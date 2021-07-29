<?php
  include 'db/conexion.php';
  session_start();
  $idMinisterio = $_POST['idMinisterio'];
  $cantidad = $_POST['cantidad'];
  $descripcion = $_POST['descripcion'];

  $identidad = $_SESSION['identidad'];
  echo "$idMinisterio, $cantidad, $descripcion, $identidad";
  $query = "INSERT INTO inventario VALUES(idInventario, '$descripcion', '$cantidad', '6', '$identidad')";
  $resultado = mysqli_query($conexion, $query);
  if(!$resultado) {
    die("Query Failed.");
  }

    /*$namesession = $_SESSION['primerNombre'];
    $lastnamesession = $_SESSION['primerApellido'];
    $rolsession = $_SESSION['rolUsuario'];

    $query="INSERT INTO logs VALUES(idLog, '$namesession', '$lastnamesession', '$rolsession', 'inventario', 'Registró $cantidad $descripcion en Inventario de Danza', CURDATE(), CURTIME())";
    $resultado = mysqli_query($conexion, $query);
    if(!$resultado) {
      die("Query Failed.");
    }*/


  header('location: invDanza.php');

 ?>
