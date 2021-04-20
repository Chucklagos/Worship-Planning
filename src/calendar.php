<?php
session_start();
$varsession=$_SESSION['email'];
$rolsession=$_SESSION['rolUsuario'];
if($varsession==null || $varsession== ''){
  header('location:login.php');
  die();
}
if ($rolsession=='miembro') {
  header('location:accesoRestringido.php');
  die();
}

?>
<!DOCTYPE html>
<html>
 <head>
 <?php include('include/head.php'); ?>
  <title>Eventos</title>

<link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
<script src='fullcalendar/lib/jquery.min.js'></script>
<script src='fullcalendar/lib/moment.min.js'></script>
<script src='fullcalendar/fullcalendar.js'></script>

  <script>

  $(document).ready(function() {
   var calendar = $('#calendar').fullCalendar({

    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay,listMonth'
    },
    editable:true,
    eventLimit: true,
    events: 'load.php',
    selectable:true,
    selectHelper:true,
    dayMaxEvents: true,



    select:function(start, end, allDay)
    {
     var title = prompt("Ingrese un evento");

     if(title)
     {
      var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
      $.ajax({
       url:"insert.php",
       type:"POST",
       data:{title:title, start:start, end:end},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Evento agregado con exito");
       }
      })
     }
    },
    editable:true,
    eventResize:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function(){
       calendar.fullCalendar('refetchEvents');
       alert('Evento Actualizado con exito');
      }
     })
    },

    eventDrop:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function()
      {
       calendar.fullCalendar('refetchEvents');
       alert("Evento Actualizado con exito");
      }
     });
    },

    eventClick:function(event)
    {
     if(confirm("quieres eliminar este evento?"))
     {
      var id = event.id;
      $.ajax({
       url:"delete.php",
       type:"POST",
       data:{id:id},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Evento Eliminado");
       }
      })
     }
    },

   });
  });

  </script>

 </head>
 <body>
 <div class="wrapper">
        <?php include'include/panel.php'; ?>
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
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon"></span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="perfil.php"></a>
                                    <a class="dropdown-item" href="#"></a>
                                    <a class="dropdown-item" href="#"></a>
                                    <a class="dropdown-item" href="#"></a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#"></a>
                                </div>
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
            <!-- End Navbar -->

  <div id="calendar"></div>


  </div>
 </body>
</html>
