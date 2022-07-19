
<?php 

  $conexion = conexion();


$id_consigna = $_SESSION['id_consigna'];
$consulta = "SELECT * FROM consigna,bomberos where consignaid=bomberosfk and consignaid='$id_consigna'";

     $resultado2 = mysqli_query($conexion, $consulta);
     $array = mysqli_fetch_array($resultado2);

 ?>