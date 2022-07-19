<?php 

include("conexion.php");
  $conexion = conexion();

$consulta = "SELECT * FROM consigna order by consignaid DESC"; 

     $resultado = mysqli_query($conexion, $consulta);
     $array = mysqli_fetch_array($resultado);

 ?>

  