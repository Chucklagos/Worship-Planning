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

  $namesession = $_SESSION['primerNombre'];
  $lastnamesession = $_SESSION['primerApellido'];
  $rolsession = $_SESSION['rolUsuario'];

  $query="INSERT INTO logs VALUES(idLog, '$namesession', '$lastnamesession', '$rolsession', 'tesoreria', 'Registró $concepto con valor $monto del tipo $tipoMovimiento', CURDATE(), CURTIME())";
  $resultado = mysqli_query($conexion, $query);
  if(!$resultado) {
    die("Query Failed.");
  }

  header('location: tesoreria.php');

 ?>
