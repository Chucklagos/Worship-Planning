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
							<!--
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
							-->
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
													<h3>Miembros <b></b></h3>
												</div>
												
												<div class="col-sm-6">
													<a href="#agregarModal"  data-toggle="modal">
													<!--<button type="button" name="agregarRegistro" style="margin:5px" class="btn btn-info btn-fill pull-right">Agregar</button>-->
													</a>
												</div>
												
											</div>
										</div>
										<hr>
										<br>
										<table class="table table-striped table-hover">
											<thead>
											<tr>
												

                                                <th>Identidad</th>
												<th>Nombre</th>
												<th>Apellido</th>
												<th>Teléfono</th>
												<th>Correo Electrónico </th>
												
												<th>Acción</th>

												
											</tr>
											</thead>
											<tbody>
											  <tr>
					    <?php
                        $query = "SELECT idUsuario, primerNombre, primerApellido, telefono, email FROM usuario ORDER BY idUsuario DESC";
                        $result_tasks = mysqli_query($conexion, $query);
                        while($row = mysqli_fetch_assoc($result_tasks)) { ?>
												
												<td><?php echo $row['idUsuario']; ?></td>
												<td><?php echo $row['primerNombre']; ?></td>
												<td><?php echo $row['primerApellido']; ?></td>
												<td><?php echo $row['telefono']; ?></td>
												<td><?php echo $row['email']; ?></td>
												<td>
													<a href="#editarModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
													<a href="borrarMiembro.php?idUsuario=<?php echo $row['idUsuario']?>"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
												</td>

											</tr>
											<?php } ?>
											</tbody>
										</table>
										<br>
									</div>
								
</div>
<!-- AGREGAR REGISTRO MODAL  -->
<div id="agregarModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="formModalAg" action="validarMiembros.php" method="post" >
				<div class="modal-header">
					<h5 class="modal-title">Agregar Miembro</h5>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>

				<div class="modal-body">
					<div class="col-md-12">
							<div class="form-group">
								<label>Identidad</label>
								<input value='0801199703939' type="text" class="form-control" id="identidad" name="identidad" placeholder="Identidad sin guiones" minlength="13" maxlength="13" required>
							</div>

							<div class="form-group">
								<label>Correo Electrónico</label>
								<input value='erick_javier96@yahoo.com' type="email" class="form-control" id="email" name="email" placeholder="ejemplo@mail.com" required>
							</div>
							
							<div class="form-group">
								<label>Contraseña</label>
								<input value='jejejejeejejejeje' type="password" class="form-control" id="contrasena" name="contrasena" minlength="8" required>
								
							</div>

							<div class="row">
								<div class="form-group col-md-6 ">
									<label>Primer Nombre</label>
									<input value='E' type="text" class="form-control" id="pnombre" name="pnombre" required>
								</div>

								<div class="form-group col-md-6 ">
									<label>Segundo Nombre</label>
									<input value='J' type="text" class="form-control" id="snombre" name="snombre">
								</div>
							</div>


							<div class="row">
                                <div class="form-group col-md-6 ">
                                    <label>Primer Apellido</label>
                                    <input value='M' type="text" class="form-control" id="papellido" name="papellido" required>
                                </div>

                                <div class="form-group col-md-6 ">
                                    <label>Segundo Apellido</label>
                                    <input value='M' type="text" class="form-control" id="sapellido" name="sapellido">
                                </div>
							</div>

							<div class="row">
                                <div class="form-group col-md-6 ">
                                    <label>Telefono</label>
                                    <input value='22330105' type="tel" class="form-control" id="telefono" name="telefono" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Fecha de Nacimiento</label>
                                    <input  type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required>
                                </div>
                            </div>

							<div class="row">
								<div class="form-group col-md-6	">
									<label>Estado Civil</label>
									<select value='Soltero(a)' class="form-control" id="estadoCivil" name="estadoCivil">
										<option value="soltero">Soltero(a)</option>
										<option value="casado">Casado(a)</option>
										<option value="divorciado">Divorciado(a)</option>
										<option value="viudo">Viudo(a)</option>
									</select>
								</div>
							</div>

							
							<div class="modal-footer">
								<input type="button" class="btn btn btn-dark" data-dismiss="modal" value="Cancelar">
								<input type="submit" class="btn btn-primary submitBtn" value="Agregar">
							</div>
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
					<h4 class="modal-title">Editar Miembrro</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="col-md-12">
							<div class="form-group">
								<label>Identidad</label>
								<input type="text" class="form-control" id="identidad" name="identidad" placeholder="Identidad sin guiones" minlength="13" maxlength="13" required>
							</div>

							<div class="form-group">
								<label>Correo Electrónico</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@mail.com" required>
							</div>
							
							<div class="form-group">
								<label>Contraseña</label>
								<input type="password" class="form-control" id="contrasena" name="contrasena" minlength="8" required>
								
							</div>

							<div class="row">
								<div class="form-group col-md-6 ">
									<label>Primer Nombre</label>
									<input type="text" class="form-control" id="pnombre" name="pnombre" required>
								</div>

								<div class="form-group col-md-6 ">
									<label>Segundo Nombre</label>
									<input type="text" class="form-control" id="snombre" name="snombre">
								</div>
							</div>


							<div class="row">
                                <div class="form-group col-md-6 ">
                                    <label>Primer Apellido</label>
                                    <input type="text" class="form-control" id="papellido" name="papellido" required>
                                </div>

                                <div class="form-group col-md-6 ">
                                    <label>Segundo Apellido</label>
                                    <input type="text" class="form-control" id="sapellido" name="sapellido">
                                </div>
							</div>

							<div class="row">
                                <div class="form-group col-md-6 ">
                                    <label>Telefono</label>
                                    <input type="tel" class="form-control" id="telefono" name="telefono" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required>
                                </div>
                            </div>

							<div class="row">
								<div class="form-group col-md-6	">
									<label>Estado Civil</label>
									<select class="form-control" id="estadoCivil" name="estadoCivil">
										<option value="soltero">Soltero(a)</option>
										<option value="casado">Casado(a)</option>
										<option value="divorciado">Divorciado(a)</option>
										<option value="viudo">Viudo(a)</option>
									</select>
								</div>
							</div>

							
							<div class="modal-footer">
								<input type="button" class="btn btn btn-dark" data-dismiss="modal" value="Cancelar">
								<input type="submit" class="btn btn-primary" value="Guardar">
							</div>
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