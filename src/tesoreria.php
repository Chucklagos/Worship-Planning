<?php
  include 'db/conexion.php';
  session_start();
  $varsession=$_SESSION['email'];
  $rolsession=$_SESSION['rolUsuario'];
  if($varsession==null || $varsession== ''){
     echo 'Usted no tiene autorizacion para ver los datos de este usuario';
     die();
  }
  if ($rolsession=='miembro') {
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
        <?php include'include/panel.php'; ?>
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
                                    <a class="dropdown-item" href="perfil.php"></a>
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
								<br>
                                <div class="container-xl">

									<div class="table-wrapper">
										<div class="table-title">
											<div class="row">
												<div class="col-sm-6">
													<h2>Tesorería<b></b></h2>
												</div>
												<div class="col-sm-6">
													<a href="#agregarModal"  data-toggle="modal">
													<button type="button" name="agregarRegistro" style="margin:5px" class="btn btn-primary btn-fill pull-right">Agregar</button>
													</a>


													<a href="#reporteModal"  data-toggle="modal">
                          <a href="hojaReporte.php" style="margin:5px" class="btn btn-primary btn-fill pull-right" target="_blank">Ver Reporte</a>
													</a>
												</div>
											</div>
										</div>
										<hr>
										<br>
											<table class="table table-striped table-hover">
											<thead>
											<tr>



												<th>Fecha</th>
												<th>Concepto</th>
												<th>Monto</th>
												<th>Tipo</th>
												<th>Acción</th>
											</tr>
											</thead>
											<tbody>

												<tr>
                      <?php
                        $query = "SELECT idMovimiento, fecha, concepto, monto, tipoMovimiento FROM movimiento ORDER BY fecha DESC";
                        $result_tasks = mysqli_query($conexion, $query);
                        while($row = mysqli_fetch_assoc($result_tasks)) {

                          $fecha = $row['fecha'];
                          $dia = substr($fecha,8);
                          $mes = substr($fecha, 5, 2);
                          $anio = substr($fecha, 0, 4);

                          switch ($mes) {
                            case '01':
                                $f_fecha = "$dia/Enero/$anio";
                              break;
                            case '02':
                                $f_fecha = "$dia/Febrero/$anio";
                              break;
                            case '03':
                                $f_fecha = "$dia/Marzo/$anio";
                              break;
                            case '04':
                                $f_fecha = "$dia/Abril/$anio";
                              break;
                            case '05':
                                $f_fecha = "$dia/Mayo/$anio";
                              break;
                            case '06':
                                $f_fecha = "$dia/Junio/$anio";
                              break;
                            case '07':
                                $f_fecha = "$dia/Julio/$anio";
                              break;
                            case '08':
                                $f_fecha = "$dia/Agosto/$anio";
                              break;
                            case '09':
                                $f_fecha = "$dia/Septiembre/$anio";
                              break;
                            case '10':
                                $f_fecha = "$dia/Octubre/$anio";
                              break;
                            case '11':
                                $f_fecha = "$dia/Noviembre/$anio";
                              break;
                            case '12':
                                $f_fecha = "$dia/Diciembre/$anio";
                              break;
                            default:
                                $f_fecha = "error";
                              break;
                          }

                          ?>
											<td><?php echo $f_fecha; ?></td>
											<td><?php echo $row['concepto']; ?></td>
											<td><?php echo $row['monto']; ?></td>
											<td><?php echo $row['tipoMovimiento']; ?></td>
											<td>

                        <a style="margin-right:2px" href="borrarTesoreria.php?idMovimiento=<?php echo $row['idMovimiento']?>"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        <a style="margin-left:2px" href="#editarModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>


											</td>
											</tr>
                    <?php } ?>
											</tbody>
											</table>
								<br>
								<br>
								</div>
</div>
<!-- AGREGAR REGISTRO MODAL  -->
<div id="agregarModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="validarTesoreria.php" method="post">
				<div class="modal-header">
					<h4 class="modal-title">Agregar Registro</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Tipo</label>
						<select class="form-control" name="tipoMovimiento">
                            <option value="Ingreso">Ingreso</option>
                            <option value="Egreso">Egreso</option>
                        </select>
					</div>
					<div class="form-group">
						<label>Fecha</label>
						<input type="date" class="form-control" name="fechaRegistro" required>
					</div>
					<div class="form-group">
						<label>Concepto</label>
            <input type="text" class="form-control" name="concepto" required>
					</div>
					<div class="form-group">
						<label>Monto</label>
						<input type="text" class="form-control" placeholder="L." name="monto" required>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn btn-dark" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-primary" value="Agregar">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- EDITAR REGISTRO MODAL -->
<div id="#editarModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">
					<h4 class="modal-title">Editar Registro</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
					<label>Tipo</label>
						<select class="form-control" name="Tipo">
                            <option value="ingreso">Ingreso</option>
                            <option value="wgreso">Egreso</option>
                        </select>
					</div>
					<div class="form-group">
					<label>Fecha</label>
						<input type="date" class="form-control" name="fechaRegistro" required>
					</div>
					<div class="form-group">
						<label>Concepto</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Monto</label>

						<input type="number" min="0" max="10000" step="1" name="Broker_Fees" id="broker_fees" required="required">
					</div>


				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn btn-dark" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-primary" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- ELIMINAR REGISTRO MODAL -->
<div id="eliminarModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">
					<h4 class="modal-title">Eliminar Registro</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<h5>¿Está seguro de que desea eliminar estos registros?</h5>
					<p><h6 class="text-primary">Esta acción no se puede deshacer.</h6></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn btn-dark" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>


<!-- REPORTE FINANCIERO MODAL -->
<div id="reporteModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">
					<h4 class="modal-title">Reporte</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>

                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title"></h4>
                                    <p class="card-category"></p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
											<th></th>
                                            <th>Tipo</th>
                                            <th>Fecha</th>
                                            <th>Concepto</th>
                                            <th>Monto</th>
                                        </thead>
                                        <tbody>
                                            <tr>
												<td></td>
                                                <td>Entrada</td>
                                                <td>24/02/2021</td>
                                                <td>Ofrenda</td>
                                                <td>L.500</td>
                                            </tr>
                                        </tbody>
										<tfoot>
											<tr>
												<td colspan="4"><strong>Total</strong></td>
												<td class="text-right"><strong>L.500</strong></td>
											</tr>
										</tfoot>
                                    </table>
                                </div>
                            </div>
			</form>

		</div>

	</div>
</div>


</body>
<?php include('include/foot.php') ?>
</html>
