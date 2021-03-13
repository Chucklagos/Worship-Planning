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
													<h3>Inventario Ministerio de Damas <b></b></h3>
												</div>
												
												<div class="col-sm-6">
													<a href="#agregarModal"  data-toggle="modal">
													<button type="button" name="agregarRegistro" style="margin:5px" class="btn btn-primary btn-fill pull-right">Agregar</button>
													</a>

												
												</div>
												
											</div>
										</div>
										<hr>
										<br>
										
										
										<table class="table table-striped table-hover ">
											<thead>
											<tr>
                                                
                                                <th>ID</th>
												<th>Cantidad</th>
												<th>Descripción</th>
												<th>Acción</th>	
											</tr>
											</thead>
											<tbody>
												<td></td><!--ESTA FILA SOLO SIRVE COMO ESPACIO NO UTILIZAR-->
												
												<tr>
                                             <?php
                                             $query = "SELECT descripcion, cantidad, idMinisterio FROM inventario where idMinisterio=4 ORDER BY idMinisterio DESC";
                                             $result_tasks = mysqli_query($conexion, $query);
                                             while($row = mysqli_fetch_assoc($result_tasks)) { ?>
											 <td><?php echo $row['idMinisterio']; ?></td>
											 <td><?php echo $row['cantidad']; ?></td>
											 <td><?php echo $row['descripcion']; ?></td>
								
											<td>
													<a href="#editarModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
													<a href="#eliminarModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
												</td>
											</tr>
                                            <?php } ?>
												<td></td>
												<td></td>
												<td></td>
												
											</tbody>
										</table>
									</div>
								</div>
</div>
												<br>
												<div class="col-12">
													<a href="inventario.php" class="btn btn-outline-primary" role="button">Regresar</a>
													<br>
													<br>
												</div>
												<br>

									</div>
									
									

												
									</div>
<!-- AGREGAR REGISTRO MODAL  -->
<div id="agregarModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="validarInventarioDamas.php" method="post">
				<div class="modal-header">
					<h4 class="modal-title">Agregar Registro</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">

                    <div class="form-group">
						<label>ID</label>
                        <input type="text" class="form-control" name="idMinisterio" required>
						<!--textarea class="form-control" required></textarea-->
					</div>

                    <div class="form-group">
						<label>Cantidad</label>
                        <input type="text" class="form-control" name="cantidad" required>
						<!--textarea class="form-control" required></textarea-->
					</div>
                    
                    <div class="form-group">
						<label>Descripción</label>
                        <input type="text" class="form-control" name="descripcion" required>
						<!--textarea class="form-control" required></textarea-->
					</div>


					
					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn btn-dark" data-dismiss="modal" value="Cancelar">
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
						<label>ID</label>
                        <input type="text" class="form-control" name="concepto" required>
						<!--textarea class="form-control" required></textarea-->
					</div>



                    <div class="form-group">
						<label>Cantidad</label>
                        <input type="text" class="form-control" name="concepto" required>
						<!--textarea class="form-control" required></textarea-->
					</div>
                    
                    <div class="form-group">
						<label>Descripción</label>
                        <input type="text" class="form-control" name="concepto" required>
						<!--textarea class="form-control" required></textarea-->
					</div>

				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn btn-dark" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-primary" value="Guardar">
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
					<input type="button" class="btn btn btn-dark" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-danger" value="Eliminar">
				</div>
			</form>
		</div>
	</div>
</div>



</body>
<?php include('include/foot.php') ?>
</html>