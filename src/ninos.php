<?php
session_start();
$varsession=$_SESSION['email'];
$rolsession=$_SESSION['rolUsuario'];
if($varsession==null || $varsession== ''){
  header('location: accesoRestringido.php');
  die();
}
if ($rolsession=='miembro') {
  header('location: accesoRestringido.php');
  die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'include/head.php'; ?>
</head>
<body>
    <div class="wrapper">
        <?php include 'include/panel.php'; ?>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <!--<a class="navbar-brand" href="">Bienvenido(a): <?php echo $_SESSION['primerNombre'];?> </a>-->



                <div class="container-fluid">
                    <a class="navbar-brand" href="">  </a>

                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
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
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-md-12">

                          <form class="" action="docNinos.php" method="post">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Certificado Presentacion de Niños</h4>
                                    <hr>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-10 pr-1">
                                                <div class="form-group">
                                                    <label>Nombre de la Iglesia</label>
                                                    <input type="text" class="form-control" id="" name="nombreIglesia" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10 pr-1">
                                                <div class="form-group">
                                                    <label>Nombre Completo del Niño(a)</label>
                                                    <input type="text" class="form-control" id="" name="nombreCompleto"  required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Nombre del Padre</label>
                                                    <input type="text" class="form-control" id="" name="nombrePadre" placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-5 pl-1">
                                                <div class="form-group">
                                                    <label>Nombre de la Madre</label>
                                                    <input type="text" class="form-control" id="" name="nombreMadre" placeholder="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10 pr-1">
                                                <div class="form-group">
                                                    <label>Nombre del Pastor</label>
                                                    <input type="text" class="form-control" id="" name="nombrePastor" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                <label>Fecha </label>
                                              <input type="date" class="form-control" id="" name="fecha" required>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                  <input type="submit" class="btn btn-outline-primary" name="" value="Generar documento">
                                                    <!--a class="btn btn-outline-primary" href="docNinos.php" target="_blank">Generar documento</a-->
                                                  <a class="btn btn-outline-primary" href="documentos.php">Regresar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </form>

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
