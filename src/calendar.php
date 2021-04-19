<?php
session_start();
$varsession=$_SESSION['email'];
$rolsession=$_SESSION['rolUsuario'];
if($varsession==null || $varsession== ''){
  header('location:accesoRestringido.php');
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
    <script src='fullcalendar/lib/es.js'></script>
               
   
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
                    
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            
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
                                <div class="card-header">
                                    <h4 class="card-title">Eventos</h4>
                                    <hr>
                                </div>
                                <div class="card-body">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


  </div>
 </body>
</html>
