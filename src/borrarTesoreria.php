<?php
  include 'db/conexion.php';

  $id = $_GET['idMovimiento'];
  $query = "DELETE FROM movimiento WHERE idMovimiento = $id";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }
  header('location:tesoreria.php');
 ?>
