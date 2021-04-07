<?php
session_start();
$email=$_POST['correo'];
$clave=$_POST['contrasena'];

$_SESSION['clave']= $_POST['contrasena'];

include ('db/conexion.php');
$consulta= "SELECT * FROM usuario WHERE email= '$email' and contrasena='$clave' ";
$resultado= mysqli_query($conexion,$consulta);

$datosUsuario=mysqli_fetch_array($resultado);
if ($datosUsuario){
     $_SESSION['identidad']= $datosUsuario['idUsuario'];
     $_SESSION['email']= $datosUsuario['email'];
     $_SESSION['contrasena']= $datosUsuario['contrasena'];
     $_SESSION['primerNombre']= $datosUsuario['primerNombre'];
     $_SESSION['segundoNombre']= $datosUsuario['segundoNombre'];
     $_SESSION['primerApellido']= $datosUsuario['primerApellido'];
     $_SESSION['segundoApellido']= $datosUsuario['segundoApellido'];
     $_SESSION['telefono']= $datosUsuario['telefono'];
     $_SESSION['fechaNacimiento']= $datosUsuario['fechaNacimiento'];
     $_SESSION['estadoCivil']= $datosUsuario['estadoCivil'];
}

$filas=mysqli_num_rows($resultado);
if ($filas>0) {
    header("location:perfil.php");
}
   else {
    ?>
    <?php
    include('login.php')
    ?>
    <script src="ventana.js"></script>
    
    <?php  
  }
mysqli_free_result($resultado);
mysqli_close($conexion);
