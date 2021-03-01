<?php
  include 'db/conexion.php';
  session_start();
  $tipoMovimiento = $_POST['tipoMovimiento'];
  $fechaRegistro = $_POST['fechaRegistro'];
  $concepto = $_POST['concepto'];
  $monto = $_POST['monto'];

  $identidad = $_SESSION['identidad'];
  echo "$tipoMovimiento, $fechaRegistro, $concepto, $monto, $identidad";
  $query = "INSERT INTO movimiento VALUES(idMovimiento, '$fechaRegistro', '$concepto', '$monto', '$tipoMovimiento', '$identidad')";
  $resultado = mysqli_query($conexion, $query);
  if(!$resultado) {
    die("Query Failed.");
  }

  header('location: tesoreria.php');

 ?>
