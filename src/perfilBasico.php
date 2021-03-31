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

<body class="m-0 row justify-content-center">

    <div class="wrapper">
        
        
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <a class="navbar-brand" href="">Bienvenido a Worship Planning </a>
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
                           
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">
                                    <span class="no-icon"></span>
                                </a>
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
            <div class="container-login100" style="background-image: url('../assets/img/fondo.jpg');">
            <div class="content">
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-auto  col-md-9" >
                            
                            <br>
                            
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Información Personal</h5>
                                    <hr>
                                </div>

                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>ID</label>
                                                    <input type="text" class="form-control" disabled="" placeholder="" value="<?php echo $_SESSION['identidad'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"  >Correo electronico</label>
                                                    <input type="email" class="form-control" value= "<?php echo $_SESSION['email'] ?>" disabled="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>Primer Nombre</label>
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $_SESSION['primerNombre'] ?>" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 pr-1">
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

                                        
                                        <div class="row">
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>Telefono</label>
                                                    <input type="text" class="form-control" placeholder="" value="" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 px-1">
                                                <div class="form-group">
                                                    <label>Fecha de Nacimiento</label>
                                                    <input type="text" class="form-control" placeholder="" value="" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Estado Civil</label>
                                                    <input type="number" class="form-control" placeholder="" disabled="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-auto col-md-3">
                            <br>
                            
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="../assets/img/imagenPerfil.jpg" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="../assets/img/profile.png" alt="..." >
                                        </a>
                                        <center><h6 class="title">Subir foto</h6></center>
                                        <label for="file-upload" class="custom-file-upload">
                                            <i class="fa fa-cloud-upload"></i> Seleccionar imagen
                                        </label>
                                        <br>
                                        <input id="file-upload" name='upload_cont_img' type="file" style="display:none;">

                                        <br>
                                            <h5 class="title"><?php echo $_SESSION['primerNombre'];?></h5>
                                            <hr>
                                            <br>
                                            <a href="#">
                                                <h6 class="title">Miembro</h6>
                                            </a>
                                       
                                        <br>
                                    </div>
                                </div>
                                
                            </div>
                        </div>



                        <div class="col-auto  col-md-12" >
                            <br>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Información Ministerial</h5>
                                    <hr>
                                </div>

                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>Cargo</label>
                                                    <input type="text" class="form-control" placeholder="" value="" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 px-1">
                                                <div class="form-group">
                                                    <label >Fecha de Conversión</label>
                                                    <input type="date" class="form-control" value= "" >
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Fecha de Bautismo</label>
                                                    <input type="date" class="form-control" placeholder="" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Lugar de Bautismo</label>
                                                    <textarea rows="4" cols="80" class="form-control" placeholder="" value="Mike"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                            <button type="submit" class="btn btn-info btn-fill pull-right">Actualizar</button>
                                        <br>
                                        <div class="clearfix"></div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>


                        <div class="col-auto  col-md-12" >
                            <br>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Eventos</h5>
                                    <hr>
                                    <br>
                                    <h6 class="card-title">Eventos próximos</h6>
                                </div>

                                <div class="card-body">
                                <form>
                                        <section id="gallery">
                                            <div class="container">
                                                <div class="row">

                                                    <div class="col-lg-2 mb-2">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-2 mb-2">
                                                        <div class="card">
                                                            
                                                            <div class="card-body">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2 mb-2">
                                                        <div class="card">
                                                            
                                                            <div class="card-body">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                
                                                    <div class="col-lg-2 mb-2">
                                                        <div class="card">
                                                            
                                                            <div class="card-body">
                                                               
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2 mb-2">
                                                        <div class="card">
                                                            
                                                            <div class="card-body">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2 mb-2">
                                                        <div class="card">
                                                            
                                                            <div class="card-body">
                                                                
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
            <?php include('include/footer.php') ?>
        </div>
    </div>
   

</div>
</body>
<?php include('include/foot.php') ?>

</html>
