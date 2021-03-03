<?php
  include 'db/conexion.php';
  //echo $identidad;
  //echo var_dump($_POST['identidad']);
  echo var_dump($_REQUEST['data']);
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

  $query = "INSERT INTO usuario VALUES('$identidad', '$email', '$contrasena', '$estado', '$pnombre', '$snombre', '$papellido', '$sapellido', '$telefono', '$fechaNacimiento', '$estadoCivil')";
  $resultado = mysqli_query($conexion, $query);
  if(!$resultado) {
    die("Query Failed.");
  }



 ?>
