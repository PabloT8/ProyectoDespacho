
<?php 

include("conexion.php");
  $conexion = conexion();


$id_consigna = $_SESSION['id_consigna'];
$consulta = "SELECT * FROM consigna where consignaid='$id_consigna'"; 

     $resultado = mysqli_query($conexion, $consulta);
     $array = mysqli_fetch_array($resultado);

 ?>