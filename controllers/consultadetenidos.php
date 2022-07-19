
<?php 

include("conexion.php");
  $conexion = conexion();


$consulta = "SELECT * FROM detenidos order by detenidosid desc"; 

     $resultado = mysqli_query($conexion, $consulta);
     $array = mysqli_fetch_array($resultado);

 ?>