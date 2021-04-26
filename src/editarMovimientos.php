<?php
include 'db/conexion.php';
session_start();
if (isset($_GET['idMovimiento'])) {
    $idMovimiento = $_GET['idMovimiento'];
    $query = "SELECT * FROM movimiento WHERE idMovimiento = $idMovimiento";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $idUsuario = $row['idUsuario'];
        $tipoMovimiento = $row['tipoMovimiento'];
        $fechaRegistro = $row['fecha'];
        $concepto = $row['concepto'];
        $monto = $row['monto'];
    }
}

//var_dump($_POST);
if (isset($_POST['Actualizar']) && $_POST['tipoMovimiento'] != $row['tipoMovimiento']) {
    $tipoMovimiento = $_POST['tipoMovimiento'];
    $query = "UPDATE movimiento SET tipoMovimiento='$tipoMovimiento' WHERE idMovimiento='$idMovimiento' ";
    $resultado = mysqli_query($conexion, $query);
    header("Location: tesoreria.php");
}

if (isset($_POST['Actualizar']) && $_POST['fechaRegistro'] != $row['fechaRegistro']) {
    $fechaRegistro = $_POST['fechaRegistro'];
    $query = "UPDATE movimiento SET fecha='$fechaRegistro' WHERE idMovimiento='$idMovimiento' ";
    $resultado = mysqli_query($conexion, $query);
    header("Location: tesoreria.php");
}

if (isset($_POST['Actualizar']) && $_POST['concepto'] != $row['concepto']) {
    $concepto = $_POST['concepto'];
    $query = "UPDATE movimiento SET concepto='$concepto' WHERE idMovimiento='$idMovimiento' ";
    $resultado = mysqli_query($conexion, $query);
    header("Location: tesoreria.php");
}
if (isset($_POST['Actualizar']) && $_POST['monto'] != $row['monto']) {
    $monto = $_POST['monto'];
    $query = "UPDATE movimiento SET monto='$monto' WHERE idMovimiento='$idMovimiento' ";
    $resultado = mysqli_query($conexion, $query);
    header("Location: tesoreria.php");
}
if (isset($_POST['Actualizar'])) {
    $idUsuarioN = $_SESSION['identidad'];
    $query = "UPDATE movimiento SET idUsuario='$idUsuarioN' WHERE idMovimiento='$idMovimiento' ";
    $resultado = mysqli_query($conexion, $query);
    header("Location: tesoreria.php");
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
                <!--<a class="navbar-brand" href="">Bienvenido(a): <?php echo $_SESSION['primerNombre']; ?> </a>-->
                <div class="container-fluid">
                    <a class="navbar-brand" href=""> </a>
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
                                    <h4 class="card-title">Editar Datos del Movimiento</h4>
                                    <hr>
                                </div>
                                <div class="card-body">

                                    <form id="enviar" action="editarMovimientos.php?idMovimiento=<?php echo $row['idMovimiento'] ?>" method="POST">

                                        <div>
                                            <div class="form-group col-md-4 pr-1 pl-1">
                                                <label>Fecha</label>
                                                <input value="<?php echo $fechaRegistro; ?>" type="date" class="form-control" id="fechaRegistro" name="fechaRegistro" required>
                                            </div>
                                            <div class="form-group col-md-4 pr-1 pl-1">
                                                <label>Concepto</label>
                                                <input value="<?php echo $concepto; ?>" type="text" class="form-control" id="concepto" name="concepto" required>
                                            </div>
                                            <div class="form-group col-md-4 pr-1 pl-1">
                                                <label>Monto</label>
                                                <input value="<?php echo $monto; ?>" type="text" class="form-control" placeholder="L." id="monto" name="monto" required>
                                            </div>
                                            <div class="form-group col-md-4 pr-1 pl-1">
                                                <label>Tipo</label>
                                                <select class="form-control" id="tipoMovimiento" name="tipoMovimiento">
                                                    <option value="Ingreso" <?php if ($tipoMovimiento == 'Ingreso') echo 'selected'; ?>>Ingreso</option>
                                                    <option value="Egreso" <?php if ($tipoMovimiento == 'Egreso')  echo 'selected'; ?>>Egreso</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <input onclick="location.href='tesoreria.php'" type="button" class="btn btn-outline-danger" data-dismiss="modal" value="Cancelar">
                                            <input type="submit" class="btn btn-outline-primary" name="Actualizar" value="Actualizar">
                                        </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
</body>
<?php include('include/foot.php') ?>

</html>