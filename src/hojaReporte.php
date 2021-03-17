<?php
  include 'db/conexion.php';
  session_start();

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
        while($row = mysqli_fetch_assoc($result_tasks)) { ?>
      <td><?php echo $row['fecha']; ?></td>
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
        while($row = mysqli_fetch_assoc($result_tasks)) { ?>
      <td><?php echo $row['fecha']; ?></td>
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
