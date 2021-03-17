<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('include/head.php'); ?>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar" data-image="">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        Worship Planning
                    </a>
                </div>
            </div>
        </div>
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
                                    <h4 class="card-title">Datos Personales</h4>
                                </div>
                                <div class="card-body">
                                    <form id="enviarForm" action="validarRegistro.php" method="post">
                                      <div class="row">
                                        <div class="col-md-3 pr-1">
                                              <div class="form-group">
                                                  <label>Identidad</label>
                                                  <input type="text" class="form-control" id="identidad" name="identidad" placeholder="Identidad sin guiones" minlength="13" maxlength="13" required>
                                              </div>
                                          </div>
                                          <div class="col-md-3 pr-1">
                                              <div class="form-group">
                                                  <label>Correo Electronico</label>
                                                  <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@mail.com" required>
                                              </div>
                                          </div>
                                              <div class="form-group col-md-3 pl-1">
                                                  <label>Contraseña</label>
                                                  <input type="password" class="form-control" id="contrasena" name="contrasena" minlength="8" required>
                                              </div>
                                      </div>
                                      <div class="row">
                                            <div class="form-group col-md-3 pr-1">
                                                <label>Primer Nombre</label>
                                                <input type="text" class="form-control" id="pnombre" name="pnombre" required>
                                            </div>
                                            <div class="form-group col-md-3 pl-1">
                                                <label>Segundo Nombre</label>
                                                <input type="text" class="form-control" id="snombre" name="snombre">
                                            </div>
                                            <div class="form-group col-md-3 pl-1">
                                                <label>Primer Apellido</label>
                                                <input type="text" class="form-control" id="papellido" name="papellido" required>
                                            </div>
                                            <div class="form-group col-md-3 pl-1">
                                                <label>Segundo Apellido</label>
                                                <input type="text" class="form-control" id="sapellido" name="sapellido">
                                            </div>
                                      </div>
                                      <div class="row">
                                            <div class="form-group col-md-4 pr-1">
                                              <label>Telefono</label>
                                              <input type="tel" class="form-control" id="telefono" name="telefono" required>
                                            </div>
                                            <div class="form-group col-md-4 px-1">
                                              <label>Fecha de Nacimiento</label>
                                              <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required>
                                            </div>
                                            <div class="form-group col-md-4 pr-1">
                                              <label>Estado Civil</label>
                                              <select class="form-control" id="estadoCivil" name="estadoCivil">
                                                <option value="soltero">Soltero(a)</option>
                                                <option value="casado">Casado(a)</option>
                                                <option value="divorciado">Divorciado(a)</option>
                                                <option value="viudo">Viudo(a)</option>
                                              </select>
                                            </div>
                                      </div>
                                        <!-- BOTONES DE  GUARDAR  -->
                                      <div class="row">
                                            <div class="form-group col-md-20 pr-1">
                                                <button id="reg" type="submit" name="registrarse" class="btn btn-info btn-fill pull-right">Registrarse</button>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-20 pr-1">
                                                <button  type="reset" class="btn btn-info btn-fill pull-right">Limpiar</button>
                                                <div class="clearfix"></div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="memberModalLabel">Modal</h4>
      </div>
      <div class="modal-body">
        <b>Soy el modal</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$('#enviarForm').submit(function (ef) {
  $.ajax({
    type:$('#enviarForm').attr('method'), 
    url: $('#enviarForm').attr('action'),
    data: $('#enviarForm').serialize(),
    success:  
    Swal.fire(
    '¡Usuario Registrado con Exito!',
    '¡Bienvenido a Worship Planning!',
    'success'
    )
    

    
  });
    ef.preventDefault();
});
$('#enviarForm').reset(); 

</script>
   

</body>
<?php include('include/foot.php'); ?>
</html>
