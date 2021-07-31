<?php
session_start();


include ('db/conexion.php');
$iden=$_SESSION['identidad'];
$consulta= "SELECT * FROM usuario WHERE idUsuario=$iden ";
$resultado= mysqli_query($conexion,$consulta);
if(mysqli_num_rows($resultado)==1){
   $row=mysqli_fetch_array($resultado);
   $contrasena=$row['contrasena'];
   $primerNombre=$row['primerNombre'];
   $segundoNombre=$row['segundoNombre'];
   $primerApellido=$row['primerApellido'];
   $segundoApellido=$row['segundoApellido'];
   $telefono=$row['telefono'];
   $rolUsuario=$row['rolUsuario'];
   /*$fechaConversion=$row['fechaConversion'];*/
   /*$fechaBautismo=$row['fechaBautismo'];*/
   $estadoCivil=$row['estadoCivil'];
   /*$lugarBautismo=$row['lugarBautismo'];*/
}



$varsession=$_SESSION['email'];
$rolsession=$_SESSION['rolUsuario'];
if($varsession==null || $varsession== ''){
  header('location:accesoDenegado.php');
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
        <?php include 'include/panelT.php'; ?>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <!--<a class="navbar-brand" href="">Bienvenido(a): <?php echo $_SESSION['primerNombre'];?> </a>-->



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
                                <a class="nav-link" href="cerrar_session.php">
                                    <span class="no-icon">Cerrar Sesión</span>
                                </a>
                                <a class="nav-link" href="manual_de_usuario.php">
                                    <span class="no-icon">Ayuda</span>
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
                        <div class="col-md-8">

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Datos Personales</h4>
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
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Primer Nombre</label>
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $primerNombre ?>" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Segundo Nombre</label>
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $segundoNombre ?>" disabled="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Primer Apellido</label>
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $primerApellido ?>" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Segundo Apellido</label>
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $segundoApellido ?>" disabled="">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>Telefono</label>
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $telefono ?>" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 px-1">
                                                <div class="form-group">
                                                    <label>Fecha de Nacimiento</label>
                                                    <input type="date" class="form-control" placeholder="" value="<?php echo $_SESSION['fechaNacimiento'] ?>" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Estado Civil</label>
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $estadoCivil;?>" disabled="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" >
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="../assets/img/imagenPerfil.jpg" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                                <br>
                                            <a href="#">
                                              <!--Extraer Foto de Usuario de la carpeta de Fotos-->
                                              <?php $rid = $_SESSION['identidad'];
                                                    $ruta = "imagenperfil/".$rid.'.jpg';
                                                   // $fichero = $ruta.basename($_FILES['imagen']['name']);
                                               ?>
                                                <img class="avatar border-gray" src="<?php echo "$ruta"; ?>" alt="">
                                                
                                            </a>
                                           <form method="POST" action="" enctype="multipart/form-data">
                                            <input type="file" name="imagen" class="form-control-file form-control-sm"><br>
                                            <input type="submit" name="subir" value="Subir Imagen" class="btn btn-outline-primary btn-sm"><br><br>
                                           </form>
                                           <?php
                                           if(isset($_POST['subir'])){
                                               $ruta = "imagenperfil/";
                                               $fichero = $ruta.basename($_FILES['imagen']['name']);
                                               $rut = $_SESSION['identidad'].".jpg";
                                               if(move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta.$_SESSION['identidad'].".jpg")){
                                                   
                                                 require("db/conexion.php");
                                                 $insertar = $conexion->query("UPDATE usuario SET imagen = '$rut' WHERE identidad ='".$_SESSION['identidad']."' ");


                                               }

                                           }
                                           ?>
                                            <br>
                                            <h5 class="title"><?php echo $primerNombre;?></h5>
                                            <hr>
                                            <br>
                                            <a href="#">
                                                <h6 class="title"><?php echo $rolUsuario; ?></h6>
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--div class="col-auto  col-md-12" >
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
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $rolUsuario ?>" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 px-1">
                                                <div class="form-group">
                                                    <label >Fecha de Conversión</label>
                                                    <input type="date" class="form-control" value= "<?php echo $fechaConversion?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Fecha de Bautismo</label>
                                                    <input type="date" class="form-control" placeholder="" value="<?php echo $fechaBautismo;?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 pr-1">
                                                 <div class="form-group">
                                                    <label>Lugar Bautismo</label>
                                                    <input type="text" class="form-control" placeholder="" value="<?php echo $lugarBautismo ?>" disabled="">
                                                </div>
                                            </div>
                                        </div>
                                            
                                        <br>
                                        <div class="clearfix"></div>
                                    </form>

                                </div>
                            </div>
                        </div-->
                  


                    </div>
                </div>
                <?php include('include/footer.php') ?>
            </div>
        </div>
    </div>

 

</body>
<?php include('include/foot.php') ?>

</html>
