<?php
session_start();
include 'db/conexion.php';
$varsession=$_SESSION['email'];
if($varsession==null || $varsession== ''){
   echo 'Usted no tiene autorizacion para ver los datos de este usuario';
   die();
}

$nombreIglesia = $_POST['nombreIglesia'];
$nombreCompleto = $_POST['nombreCompleto'];
$nombrePadre = $_POST['nombrePadre'];
$nombreMadre = $_POST['nombreMadre'];
$nombrePastor = $_POST['nombrePastor'];
$fecha = $_POST['fecha'];

//Para logs
$namesession = $_SESSION['primerNombre'];
$lastnamesession = $_SESSION['primerApellido'];
$rolsession = $_SESSION['rolUsuario'];

$query="INSERT INTO logs VALUES(idLog, '$namesession', '$lastnamesession', '$rolsession', 'documentos', 'Generó  un certificado de presentación para $nombreCompleto', CURDATE(), CURTIME())";
$resultado = mysqli_query($conexion, $query);
if(!$resultado) {
  die("Query Failed.");
}
//---------------


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/head.php'; ?>
</head>

<body class="m-0 row justify-content-center">
    <div class="container-fluid" style="background-image: url('../assets/img/ninos.png'); ">
        <div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <h6 class=" text-center"><label><?php echo "$nombreIglesia"; ?></label></h6><br><!-------------------------------------->
            <h3 class=" text-center font-weight-bold">Certificado de Presentación de Niños</h3><br>
        </div>
        <div>
        <br>
            <h5 class=" text-center">Por este medio se certifica que:</h5><br><br>
            <h2 class=" text-center text-uppercase font-weight-bold"><label><?php echo "$nombreCompleto"; ?></label></h2><!-------------------------------------->
        </div>

        <div>
            <h5 class=" text-center"><label>Hijo(a) de:</label><br>
            <label><?php echo "$nombrePadre"; ?> </label><!-------------------------------------->
            <label>&nbsp;y &nbsp;</label>
            <label><?php echo "$nombreMadre"; ?></label><!-------------------------------------->
            <h5>


            <br><br>
            <h5 class=" text-center">Fue presentado(a) al Señor<h5>
            <h5 class=" text-center font-italic">"Dejad los niños venir a mi y no se lo impidáis<h5>
            <h5 class=" text-center font-italic">porque de los tales es el Reino de los cielos" Mateo 19:14 <h5>

        </div>
        <br><br><br><br>
        <div>
            <h5 class=" text-center">REALIZADO EN LA FECHA: <?php echo "$fecha"; ?><label></label><h5><!-------------------------------------->

        </div>
        <br><br>
        <div align="center" >
            <img  src="../assets/img/firma.png" alt="..." width="150" height="150">
            <hr color="black" size=3 style="width:300px; margin: auto;">
            <br>
            <h5 class=" text-center"><label><?php echo "$nombrePastor"; ?></label><h5><!-------------------------------------->
            <h6 class=" text-center">Pastor</h6>
        </div>




    </div>
</body>
<?php include('include/foot.php') ?>

</html>
<script>
  window.print();
</script>
