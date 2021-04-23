<?php
session_start();
include 'db/conexion.php';
session_destroy();
header('location:login.php');
?>
