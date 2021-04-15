<?php
  include 'db/conexion.php';
  session_start();
  $varsession=$_SESSION['email'];
  $rolsession=$_SESSION['rolUsuario'];
  if($varsession==null || $varsession== ''){
    header('location:accesoRestringido.php');
    die();
  }
  if ($rolsession=='miembro') {
    header('location:accesoRestringido.php');
    die();
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('include/head.php'); ?>

</head>
<body>
    <div class="wrapper">
        <?php include 'include/panel.php'; ?>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">

                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="cerrar_session.php">
                                    <span class="no-icon">Cerrar Sesión</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>



            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Categorías de Documentos</h4>
                                    <hr>
                                    <br>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <section id="gallery">
                                            <div class="container">
                                                <div class="row">

                                                    <div class="col-lg-4 mb-4">
                                                        <div class="card">
                                                            <img src="../assets/img/documentos/bautizo.png" width="150" height="150" alt="Responsive image" class="rounded mx-auto d-block">
                                                            <div class="card-body">
                                                                <h6 class="card-title">Bautismo</h6>
                                                                <br>
                                                                <p align="right">
                                                                    <a href="bautismo.php" class="btn btn-outline-primary">Realizar documento</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-4 mb-4">
                                                        <div class="card">
                                                            <img src="../assets/img/documentos/niños.png" width="150" height="150" alt="Responsive image" class="rounded mx-auto d-block">
                                                            <div class="card-body">
                                                                <h6 class="card-title">Presentacion de Niños</h6>
                                                                <br>
                                                                <p align="right">
                                                                    <a href="ninos.php" class="btn btn-outline-primary">Realizar documento</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 mb-4">
                                                        <div class="card">
                                                            <img src="../assets/img/documentos/recomendacion.png" width="150" height="150" alt="Responsive image" class="rounded mx-auto d-block">
                                                            <div class="card-body">
                                                                <h6 class="card-title">Carta de Recomendación</h6>
                                                                <br>
                                                                <p align="right">
                                                                    <a href="recomendacion.php" class="btn btn-outline-primary">Realizar documento</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include('include/footer.php') ?>
            </div>
        </div>
    </div>

</body>
<?php include('include/foot.php') ?>
</html>
