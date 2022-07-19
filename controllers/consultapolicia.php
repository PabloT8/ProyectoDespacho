
<?php 

  $conexion = conexion();


$id_consigna = $_SESSION['id_consigna'];
$consulta = "SELECT * FROM consigna,policia where consignaid=policiafk and consignaid='$id_consigna'";

     $resultado1 = mysqli_query($conexion, $consulta);
     $array = mysqli_fetch_array($resultado1);

 ?>