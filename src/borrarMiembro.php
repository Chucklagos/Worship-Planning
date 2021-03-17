<?php
  include 'db/conexion.php';

  $idUsuario = $_GET['idUsuario'];
  $query = "DELETE FROM usuario WHERE idUsuario = $idUsuario";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }
  header('location:membresia.php');
 ?>
