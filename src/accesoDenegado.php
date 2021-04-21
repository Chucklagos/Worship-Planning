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
                            <center><h2>Se ha denegado el acceso</h2><center>
                        <br>
                            <center><h3>Razón: NO ha iniciado sesión </h3><center>
                        <br>
                        <a class="btn btn-outline-dark " href="login.php">Iniciar Sesión</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
