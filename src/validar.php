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
     $_SESSION['rolUsuario']= $datosUsuario['rolUsuario'];
     $_SESSION['estado']= $datosUsuario['estado'];
     /*$_SESSION['fechaConversion']= $datosUsuario['fechaConversion'];
     $_SESSION['fechaBautismo']= $datosUsuario['fechaBautismo'];
     $_SESSION['lugarBautismo']= $datosUsuario['lugarBautismo'];*/
}

$filas=mysqli_num_rows($resultado);
/*if ($filas>0 && $_SESSION['estado']=='inactivo') {
  header('location: accesoRestringido.php');
}*/
if ($filas>0 && ($_SESSION['rolUsuario']=='admin' || $_SESSION['rolUsuario']=='lider') && $_SESSION['estado']=='activo') {

  /*$namesession = $_SESSION['primerNombre'];
  $lastnamesession = $_SESSION['primerApellido'];
  $rolsession = $_SESSION['rolUsuario'];

  $query="INSERT INTO logs VALUES(idLog, '$namesession', '$lastnamesession', '$rolsession', 'sesiones', 'Inicio de Sesión', CURDATE(), CURTIME())";
  $resultado = mysqli_query($conexion, $query);
  if(!$resultado) {
    die("Query Failed.");
  }*/

    header("location:perfil.php");
} else if ($filas>0 && $_SESSION['rolUsuario']=='miembro') {
    header("location:perfilBasico.php");
} else {
    ?>
    <?php
    include('login.php')
    ?>
    <script src="ventana.js"></script>

    <?php
  }
mysqli_free_result($resultado);
mysqli_close($conexion);
