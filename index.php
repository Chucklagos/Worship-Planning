<?php
error_reporting(0);
if(isset($_POST['Submit'])){
  $url = "https://www.google.com/recaptcha/api/siteverify";
  $privateKey = "6LfFbX0aAAAAAMWOPUiEHP4gUxKEsLyHiUfOEtaq";
  $response = file_get_contents($url."?secret=".$privateKey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
  $data = json_decode($response);
  if (isset($data->success) AND $data->success==true) {
            $error = "";
            $successMsg = "";
            if ($_POST) {
              if ($_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
                  $error .= "su correo no es valido,intente de nuevo!<br>";
              }
              if (!$_POST['name']) {
                $error .= "Debe ingresar su nombre!<br>";
              }
              if (!$_POST['email']) {
                  $error .= "Debe ingresar su correo!<br>";
              }
              if (!$_POST['Asunto']) {
                  $error .= "Debe llenar el asunto!<br>";
              }
              if (!$_POST['message']) {
                  $error .= "debe llenar el mensaje que quiere enviar !<br>";
              }
              if ($error != "") {
                  $error = '<div class="alert alert-danger" role="alert"><strong>hubo un error intente de nuevo!</strong><br>' . $error . '</div>';
              }else {
                $name = $_POST['name'];
                $email =$_POST['email'];
                $message =$_POST['message'];

                $emailTo = 'hectorrivera2395@gmail.com';
                $subject = $_POST['Asunto'];
                $body = "Nombre: $name.\n".
                        "Correo: $email.\n".
                        " Asunto: $subject.\n".
                        " Mensaje: $message.\n";
                $headers = "From: ".$_POST['email'];
                if (mail($emailTo, $subject, $body, $headers)) {
                    $successMsg = '<div class="alert alert-success" role="alert">Correo enviado con exito!</div>';
                } else {
                    $error = '<div class="alert alert-danger" role="alert">hubo problemas en el envio intente de nuevo!</div>';
                }
            }
          }
        } else {
            $captchaFail = '<div class="alert alert-danger" role="alert"><strong>Debes indicar que no eres un robot!</strong><br>reCaptcha Verification Failed, Please Try Again.</div>';
        }
    }
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Worship Planning</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link type="image/png" href="assets/img/logo-favicon.png" rel="icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <!--CAPTCHA-->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
      
        <h1 class="text-light"><a href="index.php"> 
          <img src="assets/img/logo-login.png" class="img-fluid animated" alt="" width="40" height="1000">
        <span>Worship Planning</span></a></h1>

      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Inicio</a></li>
          <li><a href="src/registrarse.php" target="_blank" >Registrarse</a></li>
          <li><a href="src/login.php" target="_blank">Iniciar Sesión</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1><span>Bienvenidos</span></h1>
            <h2>Worship Planner es la herramienta aliada para Pastores la cual facilita la organización 
              y planificacion en la Iglesia.</h2>
            <div class="text-center text-lg-left">
              <a href="src/registrarse.php" class="btn-get-started scrollto">Registrarse</a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/imagen1.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Caracteristicas  ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">

          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Características</h3>
            <p>
              Es una herramientas fácil de usar y sus funcionalidades son intuitiva, agiliza el
              trabajo de organización, tesoreria,discipulado planificación y programación de
              su próximo servicio, evento, etc.

            </p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class='bx bx-church'></i></i></div>
              <h4 class="title"><a href="">Información valiosa</a></h4>
              <p class="description">
                Con nuestro software para iglesias podrá conocer
                aún más el estado actual de cada miembro y grupo de su congregación.
              </p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class='bx bx-calendar-event'></i></div>
              <h4 class="title"><a href="">Organizacion de Eventos</a></h4>
              <p class="description">
                Nuestro organizador de eventos le permitirá llevar una agenda donde podra apartar
                las fechas donde se llevaran a cabo las diferentes conferencias, charlas, etc.
              </p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class='bx bx-money'></i></i></div>
              <h4 class="title"><a href="">Tesoreria</a></h4>
              <p class="description">
                Podra llevar un control de los diferentes ingresos y egresos de su Iglesia.
              </p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Caracteristicas-->


    <!-- ======= Modulos ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Módulos</h2>
          <p>Módulos Disponibles</p>
        </div>

        <div class="row" data-aos="fade-left">
          <div class="col-lg-4 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class='bx bxs-user' style="color: #1EE8DE;" ></i>
              <h3><a href="">Usuario</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <i class='bx bxs-dollar-circle' style="color: #FFD72B;"></i>
              <h3><a href="">Tesorería</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bxs-receipt" style="color: #271CED;"></i>
              <h3><a href="">Inventario</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <i class="bx bxs-id-card" style="color: #B500D1;"></i>
              <h3><a href="">Membresía</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
              <i class="bx bx-calendar" style="color: #e80368;"></i>
              <h3><a href="">Eventos</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <i class="bx bx-folder" style="color: #29cc61;"></i>
              <h3><a href="">Documentos</a></h3>
            </div>
          </div>
          
          
        </div>

      </div>
    </section><!-- End Modulos -->


    <!-- ======= Contacto ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contacto</h2>
          <p>Contáctenos</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="email">
                <i class='bx bx-envelope' style="color:#271CED;"></i>
                <h4>Correo Electonico:</h4>
                <p>info@worshipplanner.com</p>
              </div>

              <div class="phone">
                <i class='bx bx-phone-call' style="color:#271CED;"></i>
                <h4>Telefono:</h4>
                <p>+504 9999-9999</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form action="<?= $_SERVER['PHP_SELF']?>" method="post" role="form" class="p-2">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control"  placeholder="Nombre" >
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email"  placeholder="Correo Electrónico"  >
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="Asunto" placeholder="Asunto" >
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="4" placeholder="Mensaje" ></textarea>
                <div class="validate"></div>
              </div>


              <div class="g-recaptcha" data-sitekey="6LfFbX0aAAAAAAw02oZQLIK5Ug6oCsh3OTJ8X8MH"></div><hr>


              <div class="text-center"><button type="submit" class="btn btn-outline-primary" name='Submit'>Enviar Mensaje</button></div>
              </div>
              <div  id="error"><?php echo $successMsg ?><?php echo $error ?><?php echo $captchaFail ?></div>

            </form>

          </div>

        </div>

      </div>
    </section><!-- End contacto -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Enlaces útiles</h4>
            <ul>
              <li><i class='bx bx-check'></i> <a href="index.php">Inicio</a></li>
              <li><i class='bx bx-check'></i> <a href="src/registrarse.php">Registrarse</a></li>
              <li><i class='bx bx-check'></i> <a href="src/login.php">Iniciar Sesión</a></li>
              <li><i class='bx bx-check'></i> <a href="#contact">Contacto</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-links">
            <center><img src="assets/img/logo-login.png" class="img-fluid animated" alt="" width="280" height="280"></center>
          </div>
        </div>
        
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Worship Planning</span></strong>.
      </div>
      <div class="credits">
        Designed by <a href="index.php">Worship Planning</a>
      </div>
    </div>

  </footer><!-- End Footer -->




  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>

  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <script src="assets/js/main.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>

</html>
