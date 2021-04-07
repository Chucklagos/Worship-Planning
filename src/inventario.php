<?php
  include 'db/conexion.php';
  session_start();
 $varsession=$_SESSION['email'];
if($varsession==null || $varsession== ''){
   echo 'Usted no tiene autorizacion para ver los datos de este usuario';
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
                    <a class="navbar-brand" href="">  </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">

                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#"></a>
                                    <a class="dropdown-item" href="#"></a>
                                    <a class="dropdown-item" href="#"></a>
                                    <a class="dropdown-item" href="#"></a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#"></a>
                                </div>
                            </li>
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
                                    <h4 class="card-title">Categorías de Inventario</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <section id="gallery">
                                            <div class="container">
                                                <div class="row">

                                                    <div class="col-lg-4 mb-4">
                                                        <div class="card">
                                                            <img src="../assets/img/categorias/inventario.png" width="290" height="290" alt="" class="card-img-top">
                                                            <div class="card-body">
                                                                <h6 class="card-title">Inventario General</h6>
                                                                <br>
                                                                <p align="right">
                                                                    <a href="invGeneral.php" class="btn btn-outline-primary">Ver inventario</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-4 mb-4">
                                                        <div class="card">
                                                            <img src="../assets/img/categorias/alabanza.jpg"  alt="" class="card-img-top">
                                                            <div class="card-body">
                                                                <h6 class="card-title">Ministerio de Alabanza</h6>
                                                                <br>
                                                                <p align="right">
                                                                    <a href="invAlabanza.php" class="btn btn-outline-primary">Ver inventario</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 mb-4">
                                                        <div class="card">
                                                            <img src="../assets/img/categorias/niños.png"  alt="" class="card-img-top">
                                                            <div class="card-body">
                                                                <h6 class="card-title">Ministerio infantil</h6>
                                                                <br>
                                                                <p align="right">
                                                                    <a href="invInfantil.php" class="btn btn-outline-primary">Ver inventario</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                
                                                    <div class="col-lg-4 mb-4">
                                                        <div class="card">
                                                            <img src="../assets/img/categorias/jovenes.png"  alt="" class="card-img-top">
                                                            <div class="card-body">
                                                                <h6 class="card-title">Ministerio de Jóvenes</h6>
                                                                <br>
                                                                <p align="right">
                                                                    <a href="invJovenes.php" class="btn btn-outline-primary">Ver inventario</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 mb-4">
                                                        <div class="card">
                                                            <img src="../assets/img/categorias/damas.png"  alt="" class="card-img-top">
                                                            <div class="card-body">
                                                                <h6 class="card-title">Ministerio de Damas</h6>
                                                                <br>
                                                                <p align="right">
                                                                    <a href="invDamas.php" class="btn btn-outline-primary">Ver inventario</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 mb-4">
                                                        <div class="card">
                                                            <img src="../assets/img/categorias/hombres.png"  alt="" class="card-img-top">
                                                            <div class="card-body">
                                                                <h6 class="card-title">Ministerio de Caballeros</h6>
                                                                <br>
                                                                <p align="right">
                                                                    <a href="invCaballeros.php" class="btn btn-outline-primary">Ver inventario</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 mb-4">
                                                        <div class="card">
                                                            <img src="../assets/img/categorias/danza.png"  alt="" class="card-img-top">
                                                            <div class="card-body">
                                                                <h6 class="card-title">Ministerio de Danza</h6>
                                                                <br>
                                                                <p align="right">
                                                                    <a href="invDanza.php" class="btn btn-outline-primary">Ver inventario</a>
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
            </div>
        </div>
    </div>                

</body>
<?php include('include/foot.php') ?>
</html>
