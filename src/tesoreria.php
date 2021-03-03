<?php
  include 'db/conexion.php';
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('include/head.php'); ?>

</head>
<body>
    <div class="wrapper">
        <!--sidebar-->
        <?php include('include/panel.php');?>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">

            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">

                                <div class="card-header">
                                    <h4 class="card-title">Tesoreria</h4>
                                </div>
                                <div class="container-xl">
								<div class="table-responsive">
									<div class="table-wrapper">
										<div class="table-title">
											<div class="row">
												<div class="col-sm-6">
													<h2> <b></b></h2>
												</div>
												<div class="col-sm-6">
													<a href="#agregarModal"  data-toggle="modal">
													<button type="button" name="agregarRegistro" style="margin:5px" class="btn btn-primary btn-fill pull-right">Agregar</button>
													</a>

													<a href="#eliminarModal"  data-toggle="modal">
													<button type="button" name="eliminarRegistro" style="margin:5px" class="btn btn-primary btn-fill pull-right">Eliminar</button>
													</a>


													<a href="#reporteModal"  data-toggle="modal">
													<button type="button" name="reporteRegistro" style="margin:5px" class="btn btn-primary btn-fill pull-right">Ver Reporte</button>
													</a>
												</div>
											</div>
										</div>
											<table class="table table-striped table-hover">
											<thead>
											<tr>
												<th>
													<span class="custom-checkbox">
														<input type="checkbox" id="selectAll">
														<label for="selectAll"></label>
													</span>
												</th>
												<th>Tipo</th>
												<th>Fecha</th>
												<th>Concepto</th>
												<th>Monto</th>
												<th>Acción</th>
											</tr>
											</thead>
											<tbody>
												<tr>
                      <?php
                        $query = "SELECT fecha, concepto, monto, tipoMovimiento FROM movimiento ORDER BY idMovimiento DESC";
                        $result_tasks = mysqli_query($conexion, $query);

                        while($row = mysqli_fetch_assoc($result_tasks)) { ?>
											<td><?php echo $row['fecha']; ?></td>
											<td><?php echo $row['concepto']; ?></td>
											<td><?php echo $row['monto']; ?></td>
											<td><?php echo $row['tipoMovimiento']; ?></td>
											<td>
												<!-- Boton editar

												<a href="#editarModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
												-->


												<a href="#eliminarModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>

											</td>
											</tr>
                    <?php } ?>
											</tbody>
											</table>
									</div>
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
                            <option value="ingreso">Ingreso</option>
                            <option value="egreso">Egreso</option>
                        </select>
					</div>
					<div class="form-group">
						<label>Fecha</label>
						<input type="date" class="form-control" name="fechaRegistro" required>
					</div>
					<div class="form-group">
						<label>Concepto</label>
            <input type="text" class="form-control" name="concepto" required>
						<!--textarea class="form-control" required></textarea-->
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
