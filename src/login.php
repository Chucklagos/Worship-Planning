<?php //session_start();
include ('db/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Worship Planning</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="../assets/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="../assets/fonts/material-design-iconic-font.min.css">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../assets/img/imagenLogin.jpg');">
			<div class="wrap-login100">
				<div class="login100-form">
					<span class="login100-form-logo">
						<img src="../assets/img/logo.png" width="110" height="110">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Iniciar Sesión
					</span>

					<form action="validar.php" method="post">
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="correo" required placeholder="Correo Electronico">
						<span class="focus-input100" data-placeholder=""></span>

					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="contrasena" required placeholder="Contraseña">
						<span class="focus-input100" data-placeholder=""></span>
					</div>

					<div class="container-login100-form-btn">

						<button type="submit" class="login100-form-btn" onclick="ventana()">
							Entrar
						</button>

					</div>
					</form>
					<?php
					//$correo=$_POST['correo'];
					//$contrasena=$_POST['contrasena'];
					?>

							<!--<div class="text-center p-t-90">
								<a class="txt1" href="#">
									¿Olvidó su contraseña?
								</a>
							</div>-->
				</div>
			</div>
		</div>
	</div>
</body>
</html>
