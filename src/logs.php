<?php
  session_start();
  include 'db/conexion.php';
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
<html lang="en" dir="ltr">
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
                    <form class="" action="borrarLog.php" method="post">
                      <input type="submit" class="btn btn-primary btn-fill" name="" value="Limpiar Registros"><br><hr>
                    </form>
                      <div class="row">
                          <div class="col-md-12">


                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Sesiones</h4>
                                </div>
                                <div class="card-body">

                                  <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                      <th>Nombre</th>
                                      <th>Apellido</th>
                                      <th>Rol</th>
                                      <th>Actividad</th>
                                      <th>Fecha</th>
                                      <th>Hora</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                            <?php

                            $query="SELECT idLog, nombre, apellido, rol, tipoLog, actividad, fecha, hora FROM logs l WHERE tipoLog='sesiones' ORDER BY idLog DESC";
                            $resultado=mysqli_query($conexion, $query);
                            while($row = mysqli_fetch_assoc($resultado)) { ?>
                                      <td><?php echo $row['nombre']; ?></td>
                                      <td><?php echo $row['apellido']; ?></td>
                                      <td><?php echo $row['rol']; ?></td>
                                      <td><?php echo $row['actividad']; ?></td>
                                      <td><?php echo $row['fecha']; ?></td>
                                      <td><?php echo $row['hora']; ?></td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                  </table>
                                    <?php
                                      ?>
                                </div>
                            </div>



                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tesoreria</h4>
                                </div>
                                <div class="card-body">

                                  <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                      <th>Nombre</th>
                                      <th>Apellido</th>
                                      <th>Rol</th>
                                      <th>Actividad</th>
                                      <th>Fecha</th>
                                      <th>Hora</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                            <?php

                            $query="SELECT idLog, nombre, apellido, rol, tipoLog, actividad, fecha, hora FROM logs l WHERE tipoLog='tesoreria' ORDER BY idLog DESC";
                            $resultado=mysqli_query($conexion, $query);
                            while($row = mysqli_fetch_assoc($resultado)) { ?>
                                      <td><?php echo $row['nombre']; ?></td>
                                      <td><?php echo $row['apellido']; ?></td>
                                      <td><?php echo $row['rol']; ?></td>
                                      <td><?php echo $row['actividad']; ?></td>
                                      <td><?php echo $row['fecha']; ?></td>
                                      <td><?php echo $row['hora']; ?></td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                  </table>
                                    <?php
                                      ?>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Inventario</h4>
                                </div>
                                <div class="card-body">

                                  <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                      <th>Nombre</th>
                                      <th>Apellido</th>
                                      <th>Rol</th>
                                      <th>Actividad</th>
                                      <th>Fecha</th>
                                      <th>Hora</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                            <?php

                            $query="SELECT idLog, nombre, apellido, rol, tipoLog, actividad, fecha, hora FROM logs l WHERE tipoLog='inventario' ORDER BY idLog DESC";
                            $resultado=mysqli_query($conexion, $query);
                            while($row = mysqli_fetch_assoc($resultado)) { ?>
                                      <td><?php echo $row['nombre']; ?></td>
                                      <td><?php echo $row['apellido']; ?></td>
                                      <td><?php echo $row['rol']; ?></td>
                                      <td><?php echo $row['actividad']; ?></td>
                                      <td><?php echo $row['fecha']; ?></td>
                                      <td><?php echo $row['hora']; ?></td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                  </table>
                                    <?php
                                      ?>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Documentos</h4>
                                </div>
                                <div class="card-body">

                                  <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                      <th>Nombre</th>
                                      <th>Apellido</th>
                                      <th>Rol</th>
                                      <th>Actividad</th>
                                      <th>Fecha</th>
                                      <th>Hora</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                            <?php

                            $query="SELECT idLog, nombre, apellido, rol, tipoLog, actividad, fecha, hora FROM logs l WHERE tipoLog='documentos' ORDER BY idLog DESC";
                            $resultado=mysqli_query($conexion, $query);
                            while($row = mysqli_fetch_assoc($resultado)) { ?>
                                      <td><?php echo $row['nombre']; ?></td>
                                      <td><?php echo $row['apellido']; ?></td>
                                      <td><?php echo $row['rol']; ?></td>
                                      <td><?php echo $row['actividad']; ?></td>
                                      <td><?php echo $row['fecha']; ?></td>
                                      <td><?php echo $row['hora']; ?></td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                  </table>
                                    <?php
                                      ?>
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
