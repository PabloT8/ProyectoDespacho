<?php

session_start();   
 
date_default_timezone_set ( 'America/Tegucigalpa' ) ;

$ambulancialugar = $_POST['ambulancialugar'];
$ambulanciamando=$_POST['ambulanciamando'];
$ambulancianumero=$_POST['ambulancianumero'];
$ambulanciafk = $_POST['id_consigna'];
  
include("conexion.php");
  $conexion = conexion();

    $sql= "INSERT INTO ambulancia(ambulanciafk,ambulancialugar,ambulanciamando,ambulancianumero) VALUES ('$ambulanciafk','$ambulancialugar','$ambulanciamando','$ambulancianumero')";
    $resultado=mysqli_query($conexion, $sql);

     mysqli_close($conexion);

    header("Location: ../views/nuevoad.php");
 
 ?>