<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<?php
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
  <?php include 'include/head.php'; ?>
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
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon"></span>
                                </a>
                            </li>
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
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Datos Personales</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-2 pr-1">
                                                <div class="form-group">
                                                    <label>ID </label>
                                                    <input type="text" class="form-control" disabled="" placeholder="" value="<?php echo $_SESSION['identidad'] ?>">
                                                </div>
                                            </div>


                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"  >Correo electronico</label>
                                                    <input type="email" class="form-control" value= "<?php echo $_SESSION['email'] ?>" disabled="">
                                                </div>
                                            </div>
                                            <!--
                                            <div class="col-md-2 pr-1">
                                                <div class="form-group">
                                                    <label>Genero</label>
                                                    <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" disabled="">
                                                        Seleccione
                                                      </button>
                                                      <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Femenino</a>
                                                        <a class="dropdown-item" href="#">Masculino</a>
                                                      </div>
                                                </div>
                                            </div>
                                            -->



                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label >Primer Nombre</label>
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $_SESSION['primerNombre'] ?>" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label>Segundo Nombre</label>
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $_SESSION['segundoNombre'] ?>" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label>Primer Apellido</label>
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $_SESSION['primerApellido'] ?>" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label>Segundo Apellido</label>
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $_SESSION['segundoApellido'] ?>" disabled="">
                                                </div>
                                            </div>
                                        </div>
                                        <!--
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Direccion</label>
                                                    <input type="text" class="form-control" placeholder="" value="" disabled="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>Telefono</label>
                                                    <input type="tel" class="form-control" placeholder="0000-0000" value="" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>Ocupacion</label>
                                                    <input type="text" class="form-control" placeholder="" value="" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Fecha de Nacimiento</label>
                                                    <input type="date" class="form-control" placeholder="" value="" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-md-2 pr-1">
                                                <div class="form-group">
                                                    <label>Estado Civil</label>
                                                    <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" disabled="">
                                                        Seleccione
                                                      </button>
                                                      <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Soltero(a)</a>
                                                        <a class="dropdown-item" href="#">Casado(a)</a>
                                                        <a class="dropdown-item" href="#">Divorciado(a)</a>
                                                        <a class="dropdown-item" href="#">Viudo(a)</a>
                                                      </div>
                                                </div>
                                            </div>
                                            -->


                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">

                                                </div>
                                            </div>
                                            <div class="col-md-4 px-1">
                                                <div class="form-group">

                                                </div>
                                        </div>



                                        <!-- BOTONES DE EDITAR Y GUARDAR
                                        <div class="row">
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-info btn-fill pull-right">Editar</button>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 px-1">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-info btn-fill pull-right">Guardar</button>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                         -->


                                    </form>
                                </div>
                            </div>
                        </div>


                        <!--
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="../assets/img/faces/face-3.jpg" alt="...">
                                            <h5 class="title">Mike Andrew</h5>
                                        </a>
                                        <p class="description">
                                            michael24
                                        </p>
                                    </div>
                                    <p class="description text-center">
                                        "Lamborghini Mercy
                                        <br> Your chick she so thirsty
                                        <br> I'm in that two seat Lambo"
                                    </p>
                                </div>
                                <hr>
                                <div class="button-container mr-auto ml-auto">
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-google-plus-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    -->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--   -->
    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>
 -->
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>
