<?php 

include("conexion.php");
  $conexion = conexion();
 
$ACT= $_GET['consignaid'];

$consulta = "SELECT * FROM consigna,policia,bomberos,ambulancia WHERE consignaid= '$ACT' and consignaid=policiafk and consignaid=bomberosfk and consignaid=ambulanciafk order by consignaid"; 

     $resultado = mysqli_query($conexion, $consulta);
     $array = mysqli_fetch_array($resultado);

 ?>