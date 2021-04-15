<?php
session_start();
include 'db/conexion.php';
$varsession=$_SESSION['email'];
if($varsession==null || $varsession== ''){
   echo 'Usted no tiene autorizacion para ver los datos de este usuario';
   die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/head.php'; ?>
</head>

<body class="m-0 row justify-content-center">
    <div class="container-fluid" style="background-image: url('../assets/img/bautismo4.png'); ">
        <div>
            <br><br><br><br><br><br><br><br><br>
                <h6 class=" text-center"><label>NOMBRE DE LA IGLESIA</label></h6><br><br><br><!-------------------------------------->
                <h1 class=" text-center font-weight-bold">Certificado de Bautismo</h1><br>
        </div>
        <br><br><br><br>
        <div>
            <h4 class=" text-center">Por este medio certifico que:</h4><br><br><br>
            <h1 class=" text-center text-uppercase font-weight-bold"><label>NOMBRE COMPLETO DEL MIEMBRO</label></h1><!-------------------------------------->
        </div>
        <br><br><br><br>
        <div>
            <h5 class=" text-center">Demostrando públicamente su fe en Cristo recibió el bautismo por imersión 
            de acuerdo al evangelio de<h5>
            <h5 class=" text-center font-italic">Mateo 29:19 "Por tanto, id y haced discípulos a todas las naciones 
            bautizándolos en el <h5> 
            <h5 class=" text-center font-italic">nombre del Padre, Hijo y del Espirítu Santo."<h5>
        </div>
        <br><br><br><br><br><br><br><br>
        <div>
            <h5 class=" text-center">REALIZADO EN LA FECHA:<label></label><h5><!-------------------------------------->
            
        </div>
        <br><br>
        <div align="center" >
            <img  src="../assets/img/firma.png" alt="..." width="200" height="200">
            <hr color="black" size=3 style="width:400px; margin: auto;">
            <br>
            <h5 class=" text-center"><label>NOMBRE DEL PASTOR</label><h5><!-------------------------------------->
            <h6 class=" text-center">Pastor</h6>
        </div>

  

        
        
        

    </div>
</body>
<?php include('include/foot.php') ?>

</html>
