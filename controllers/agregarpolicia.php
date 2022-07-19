<?php

session_start();   
 
date_default_timezone_set ( 'America/Tegucigalpa' ) ;

$policiaudep = $_POST['policiaudep'];
$policiaoficial=$_POST['policiaoficial'];
$policiatelefono=$_POST['policiatelefono'];
$policiadespachador = $_POST['policiadespachador'];
$policiaobservaciones = $_POST['policiaobservaciones'];
$policiafk = $_POST['id_consigna'];

  
include("conexion.php");
  $conexion = conexion();

    $sql= "INSERT INTO policia(policiafk,policiaudep,policiaoficial,policiatelefono,policiadespachador,policiaobservaciones) VALUES ('$policiafk','$policiaudep','$policiaoficial','$policiatelefono','$policiadespachador','$policiaobservaciones')";
    $resultado=mysqli_query($conexion, $sql);

     mysqli_close($conexion);

    header("Location: ../views/nuevo.php");
 
 ?>