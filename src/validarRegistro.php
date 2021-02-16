<?php
  include 'db/conexion.php';

if (isset($_POST['registrarse'])) {
  $identidad = $_POST['identidad'];
  $email = $_POST['email'];
  $contrasena = $_POST['contrasena'];
  $pnombre = $_POST['pnombre'];
  $snombre = $_POST['snombre'];
  $papellido = $_POST['papellido'];
  $sapellido = $_POST['sapellido'];
  $telefono = $_POST['telefono'];
  $fechaNacimiento = $_POST['fechaNacimiento'];
  $estadoCivil = $_POST['estadoCivil'];
  $estado = "activo";
  echo "$email, $contrasena, $pnombre, $snombre, $papellido, $sapellido, $telefono, $fechaNacimiento, $estadoCivil";

  $query = "INSERT INTO Usuario VALUES('$identidad', '$email', '$contrasena', '$estado', '$pnombre', '$snombre', '$papellido', '$sapellido', '$telefono', '$fechaNacimiento', '$estadoCivil')";
  $resultado = mysqli_query($conexion, $query);
  if(!$resultado) {
    die("Query Failed.");
  }
}

header('location: registrarse.php');
 ?>
