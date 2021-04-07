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
													<h2>Inventario General <b></b></h2>
												</div>
												
											</div>
										</div>
										<hr>
										<br>
										<table class="table table-striped table-hover">
											<thead>
											<tr>
												<th>Cantidad</th>
												<th>Descripción</th>
												<th>Ministerio</th>
												<th>Acción</th>



											</tr>
											</thead>
											<tbody>

												<tr>

                                             <?php
                                             $query = "SELECT inventario.idInventario, inventario.descripcion, inventario.cantidad, inventario.idMinisterio, ministerio.nombre FROM inventario INNER JOIN ministerio ON inventario.idMinisterio = ministerio.idMinisterio ORDER BY idMinisterio DESC";
                                             $result_tasks = mysqli_query($conexion, $query);
                                             while($row = mysqli_fetch_assoc($result_tasks)) { ?>
											 <td><?php echo $row['cantidad']; ?></td>
											 <td><?php echo $row['descripcion']; ?></td>
											 <td><?php echo $row['nombre']; ?></td>

											<td>
							<a style="margin-right:2px" href="borrarInventario.php?idInventario=<?php echo $row['idInventario']?>"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>

											</tr>
                                            <?php } ?>

												<td></td>
												<td></td>
												<td></td>


											</tbody>
										</table>
										<br>
												<div class="col-12">
													<a href="inventario.php" class="btn btn-outline-primary" role="button">Regresar</a>
													<br>
													<br>
												</div>
												<br>
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



</body>
<?php include('include/foot.php') ?>
</html>
