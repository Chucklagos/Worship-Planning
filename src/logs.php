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

                            $query="SELECT idLog, nombre, apellido, rol, tipoLog, fecha, hora FROM logs l ORDER BY idLog DESC";
                            $resultado=mysqli_query($conexion, $query);
                            while($row = mysqli_fetch_assoc($resultado)) { ?>
                                      <td><?php echo $row['nombre']; ?></td>
                                      <td><?php echo $row['apellido']; ?></td>
                                      <td><?php echo $row['rol']; ?></td>
                                      <td><?php echo $row['tipoLog']; ?></td>
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
                                      <h4 class="card-title">Registros en Tesoreria</h4>
                                  </div>
                                  <div class="card-body">

                                    <table class="table table-striped table-hover">
                                      <thead>
                                      <tr>
                                        <th>Fecha</th>
                                        <th>Concepto</th>
                                        <th>Monto</th>
                                        <th>Tipo</th>
                                        <th>Realizado por</th>
                                        <th>Cargo</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                              <?php

                              $query="SELECT fecha, concepto, monto, tipoMovimiento, primerNombre, rolUsuario FROM movimiento m
                                      INNER JOIN usuario u ON m.idUsuario = u.idUsuario";
                              $resultado=mysqli_query($conexion, $query);
                              while($row = mysqli_fetch_assoc($resultado)) { ?>
                                        <td><?php echo $row['fecha']; ?></td>
                                        <td><?php echo $row['concepto']; ?></td>
                                        <td><?php echo $row['monto']; ?></td>
                                        <td><?php echo $row['tipoMovimiento']; ?></td>
                                        <td><?php echo $row['primerNombre']; ?></td>
                                        <td><?php echo $row['rolUsuario']; ?></td>
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
                                      <h4 class="card-title">Registros en Inventario</h4>
                                  </div>
                                  <div class="card-body">

                                    <table class="table table-striped table-hover">
                                      <thead>
                                      <tr>
                                        <th>Descripcion</th>
                                        <th>Cantidad</th>
                                        <th>Ministerio</th>
                                        <th>Realizado por</th>
                                        <th>Cargo</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                              <?php

                              $query="SELECT descripcion, cantidad, m.nombre, u.primerNombre, u.rolUsuario FROM inventario i
                                      INNER JOIN usuario u ON i.idUsuario = u.idUsuario
                                      INNER JOIN ministerio m ON i.idMinisterio = m.idMinisterio";
                              $resultado=mysqli_query($conexion, $query);
                              while($row = mysqli_fetch_assoc($resultado)) { ?>
                                        <td><?php echo $row['descripcion']; ?></td>
                                        <td><?php echo $row['cantidad']; ?></td>
                                        <td><?php echo $row['nombre']; ?></td>
                                        <td><?php echo $row['primerNombre']; ?></td>
                                        <td><?php echo $row['rolUsuario']; ?></td>
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
