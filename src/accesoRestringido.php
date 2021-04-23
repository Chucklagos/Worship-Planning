<?php
  include 'db/conexion.php';
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'include/head.php'; ?>
</head>
<body class="m-0 row justify-content-center">
    <div class="content" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-auto  col-12">
                    <br>
                    <br>
                    <br>
                        <center><img src="../assets/img/restringido.png" height="250px" width="250px"/></center>
                        <br>
                            <center><h2>Se ha denegado el acceso al usuario <?php echo $_SESSION['primerNombre'] ?> <?php echo $_SESSION['primerApellido'] ?> (cuenta: <?php echo $_SESSION['rolUsuario'] ?>) </h2><center>
                        <br>
                            <center><h3>Razón: La página solicitada pertenece a la categoría de administrador</h3><center>
                        <br>
                        <a href="javascript: history.go(-1)" class="btn btn-outline-danger">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
