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
    <div class="container-fluid">
        <div>
            <br><br><br><br><br><br>
                <h6 class=" text-center"><label>Nombre de la Iglesia</label></h6><br><br><br>
                <h4 class="text-right font-italic">Lugar: <label></label> </h4><!-------------------------------------->
                <h4 class="text-right font-italic">Fecha: <label></label></h4><br><br><!-------------------------------------->
        </div>
        <br><br><br><br>
        <div>
            <h4 class="text-left  text-uppercase">A quien corresponda:</h4><br><br>
            <h5 class="text-left">Aprovechamos este medio para saludarles en el nombre de nuestro Señor Jesucristo
            deseando que sus ricas bendiciones sean con cada uno de ustedes</h5>
            <br>
            <h5 class="text-left">Nos complace indicar que conocemos a 
            <label class="text-left  text-uppercase font-weight-bold" >NOMBRE COMPLETO DEL MIEMBRO</label> <!-------------------------------------->
            
            <label>como un miembro fiel y activo dentro de nuestra Iglesia en el cual se ha estado desenvolviendo como
            <label class="text-left  text-uppercase font-weight-bold" >CARGO QUE DESEMPEÑA</label> <!-------------------------------------->
            
            de nuestra Iglesia y su liderazgo nos resulta satisfactorio.</label>
           </h5>

            <br>
            <h5 class="text-left">Por lo cual no tenemos niingun incoveniente en extenderle la presente
            <br><br><br>
            <h3 class=" text-center text-uppercase font-weight-bold" >Carta de Recomendación</h3></h5>
            <br><br>
            <h5 class="text-left">Para los fines que al interesado convenga dentro de los lineamientos de nuestra Iglesia</h5>

        </div>
        <br><br><br><br><br><br><br><br>
        
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
