<?php
  include 'db/conexion.php';
  session_start();
 $varsession=$_SESSION['email'];
if($varsession==null || $varsession== ''){
   echo 'Usted no tiene autorizacion para ver los datos de este usuario';
   die();
}

  $totalIngreso = 0;
  $totalEgreso = 0;

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include('include/head.php'); ?>
  </head>
  <body>
    <div class="container">
      <h3>Resumen de Ingresos</h3>
      <table class="table table-striped table-hover">
      <thead>
      <tr>
        <th>Fecha</th>
        <th>Concepto</th>
        <th>Monto</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <?php
        $query = "SELECT idMovimiento, fecha, concepto, monto, tipoMovimiento FROM movimiento WHERE tipoMovimiento='Ingreso' ORDER BY fecha ASC";
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
      </tr>
      <?php
        $totalIngreso = $totalIngreso + $row['monto'];
      } ?>
      <tr>
        <td></td>
        <td style="background-color: yellow"><strong>Total de Ingresos</strong></td>
        <td style="background-color: yellow"><strong><?php echo "$totalIngreso"; ?></strong></td>
      </tr>
      </tbody>
      </table>
      <h3>Resumen de Egresos</h3>
      <table class="table table-striped table-hover">
      <thead>
      <tr>
        <th>Fecha</th>
        <th>Concepto</th>
        <th>Monto</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <?php
        $query = "SELECT idMovimiento, fecha, concepto, monto, tipoMovimiento FROM movimiento WHERE tipoMovimiento='Egreso' ORDER BY fecha ASC";
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
      </tr>
      <?php
        $totalEgreso = $totalEgreso + $row['monto'];
      } ?>
      <tr>
        <td></td>
        <td style="background-color: yellow"><strong>Total de Egresos</strong></td>
        <td style="background-color: yellow"><strong><?php echo "$totalEgreso"; ?></strong></td>
      </tr>
      </tbody>
      </table>
    </div><br><br>
    <div class="container">
      <h3>Saldo Final</h3>
      <table class="table table-striped table-hover">
        <tbody>
          <tr>
            <td> <strong>Total Ingresos</strong> </td>
            <td> <strong><?php echo "$totalIngreso"; ?></strong> </td>
          </tr>
          <tr>
            <td> <strong> Total Egresos </strong> </td>
            <td> <strong><?php echo "$totalEgreso"; ?></strong> </td>
          </tr>
          <tr>
            <td> <strong>Saldo Final</strong> </td>
            <td> <strong><?php echo $totalIngreso - $totalEgreso; ?></strong> </td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
<script>
  window.print();
</script>
