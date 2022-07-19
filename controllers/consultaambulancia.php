
<?php 

  $conexion = conexion();

$id_consigna = $_SESSION['id_consigna'];
$consulta = "SELECT * FROM consigna,ambulancia where consignaid=ambulanciafk and consignaid='$id_consigna'"; 

     $resultado3 = mysqli_query($conexion, $consulta);
     $array = mysqli_fetch_array($resultado3);

 ?>