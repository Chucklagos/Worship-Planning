<?php
  include 'db/conexion.php';

  $idMovimiento = $_GET['idMovimiento'];
  $query = "DELETE FROM movimiento WHERE idMovimiento = $idMovimiento";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }
  header('location:tesoreria.php');
 ?>
