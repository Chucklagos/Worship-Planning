<?php
  include 'db/conexion.php';

  $idInventario = $_GET['idInventario'];
  $query = "DELETE FROM inventario WHERE idInventario = $idInventario";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }
  header('location:invDanza.php');
 ?>
