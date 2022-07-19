<?php  
     
$detenidos=$_GET["detenidosid"];

include("conexion.php");
$conexion=conexion();
     
    $sql= "DELETE FROM detenidos WHERE detenidosid='$detenidos'";

    $resultado=mysqli_query($conexion, $sql);

   header("Location: ../views/detenidosad.php");

mysqli_close($conexion);
    
 ?>


  
