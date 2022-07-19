<?php

session_start();   
 
date_default_timezone_set ( 'America/Tegucigalpa' ) ;

$bomberoslugar = $_POST['bomberoslugar'];
$bomberosnumero=$_POST['bomberosnumero'];
$bomberostipounidad=$_POST['bomberostipounidad'];
$bomberosnumerounidad = $_POST['bomberosnumerounidad'];
$bomberosobservaciones = $_POST['bomberosobservaciones'];
$bomberosfk = $_POST['id_consigna'];

  
include("conexion.php");
  $conexion = conexion();

    $sql= "INSERT INTO bomberos(bomberosfk,bomberoslugar,bomberosnumero,bomberostipounidad,bomberosnumerounidad,bomberosobservaciones) VALUES ('$bomberosfk','$bomberoslugar','$bomberosnumero','$bomberostipounidad','$bomberosnumerounidad','$bomberosobservaciones')";
    $resultado=mysqli_query($conexion, $sql);

     mysqli_close($conexion);

    header("Location: ../views/nuevoad.php");
 
 ?>