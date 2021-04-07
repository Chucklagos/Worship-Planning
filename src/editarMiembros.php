<?php
include 'db/conexion.php';
if(!isset($_GET['idUsario'])){
	$idUsuario=$_GET['idUsuario'];
	$query= "SELECT * FROM usuario WHERE idUsuario = $idUsuario";
	$result= mysqli_query($conexion, $query);
	if(mysqli_num_rows($result)==1){
		$row=mysqli_fetch_array($result);
		$email=$row['email'];
		$contrasena=$row['contrasena'];
		$primerNombre=$row['primerNombre'];
		$segundoNombre=$row['segundoNombre'];
		$primerApellido=$row['primerApellido'];
		$segundoApellido=$row['segundoApellido'];
		$telefono=$row['telefono'];
		$fechaNacimiento=$row['fechaNacimiento'];
		$estadoCivil=$row['estadoCivil'];
		$rolUsuario=$row['rolUsuario'];
	}
 }

//var_dump($_POST);
if(isset($_POST['Actualizar'])){
	$idUsuario = $_GET['idUsuario'];
    //echo $idUsuario;
    $rolUsuario=$_POST['rolUsuario'];
	$query= "UPDATE usuario SET rolUsuario='$rolUsuario' WHERE idUsuario='$idUsuario' " ;
	$resultado = mysqli_query($conexion, $query);
	header("Location: membresia.php");
}   

?>


<html lang="es">
	<head>
		<?php include('include/head.php'); ?>
	</head>
	
<body>
	<div class="wrapper">
        	<?php include 'include/panel.php'; ?>
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
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>





		<!---------------------------------------------------------------------------------------------------------------->
			<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
									<div class="card-header">
										<h4 class="card-title">Editar Miembro</h4>
										<hr>
									</div>
                                <div class="card-body">
									<form id="enviando" action="editarMiembros.php?idUsuario=<?php echo $row['idUsuario']?>" method="POST">
										
										<div class="row">
											<div class="form-group col-md-4 pr-1">
												<label>Identidad</label>
												<input value="<?php echo $idUsuario;?>" type="text" class="form-control" id="identidad" name="identidad" placeholder="Identidad sin guiones" minlength="13" maxlength="13" required>
											</div>
											<div  class="form-group col-md-4 pl-1">
												<label>Correo Electrónico</label>
												<input value="<?php echo $email;?>" type="email" class="form-control" id="email" name="email" placeholder="ejemplo@mail.com" required>
											</div>
											
											<div  class="form-group col-md-4 pl-1">
												<label>Contraseña</label>
												<input  value="<?php echo $contrasena;?>" type="password" class="form-control" id="contrasena" name="contrasena" minlength="8" required>
												
											</div>
										</div>
										<div class="row">
											<div  class="form-group col-sm-6 pr-1">
												<label>Primer Nombre</label>
												<input  value="<?php echo $primerNombre;?>" type="text" class="form-control" id="pnombre" name="pnombre" required>
											</div>
											<div  class="form-group col-sm-6 pl-1">
												<label>Segundo Nombre</label>
												<input  value="<?php echo $segundoNombre;?>" type="text" class="form-control" id="snombre" name="snombre">
											</div>
											
										</div>
										
										<div class="row">
											<div class="form-group col-sm-6 pr-1">
												<label>Primer Apellido</label>
												<input  value="<?php echo $primerApellido;?>" type="text" class="form-control" id="papellido" name="papellido" required>
											</div>
											<div class="form-group col-sm-6 pl-1">
												<label>Segundo Apellido</label>
												<input  value="<?php echo $segundoApellido;?>" type="text" class="form-control" id="sapellido" name="sapellido">
											</div>
										</div>
										<div class="row">
											<div class="form-group col-sm-4 pr-1">
												<label>Telefono</label>
												<input  value="<?php echo $telefono;?>" type="tel" class="form-control" id="telefono" name="telefono" required>
											</div>
											<div class="form-group col-sm-4 pl-1">
												<label>Fecha de Nacimiento</label>
												<input  value="<?php echo $fechaNacimiento;?>" type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required>
											</div>
											<div class="form-group col-sm-4 pl-1">
												<label>Estado Civil</label>
												<select  value="<?php echo $estadoCivil;?>" class="form-control" id="estadoCivil" name="estadoCivil">
													<option value="soltero">Soltero(a)</option>
													<option value="casado">Casado(a)</option>
													<option value="divorciado">Divorciado(a)</option>
													<option value="viudo">Viudo(a)</option>
												</select>
											</div>
										</div>
										
										<div class="row">
											<div class="form-group col-sm-4 pr-1">
												<label>Rol de Usuario</label>
												<input  value="<?php echo $rolUsuario;?>" type="tel" class="form-control" id="rolUsuario" name="rolUsuario" required>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-offset-2 col-sm-10">
												<input type="button" class="btn btn-outline-danger" data-dismiss="modal" value="Cancelar">
												<input type="submit" class="btn btn-outline-primary" name="Actualizar" value="Actualizar">
											</div>
										</div>
									</form>
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
