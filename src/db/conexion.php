<?php
//session_start();

// Conexión en la nube
/*$conexion = mysqli_connect(
  'vkh7buea61avxg07.cbetxkdyhwsb.us-east-1.rds.amazonaws.com',
  'drb6g4wswu2bfhgw',
  'h9dhysdg8hz6yygr',
  'asx4muqaxno0bdu3'
);*/

//Conexión de manera local
$conexion = mysqli_connect(
  'localhost',
  'iglesia',
  'iglesia',
  'church'
);

if ($conexion) {
 // echo('Si hay conexion con la base de datos');
}
//or die(mysqli_erro($mysqli));
?>
