<?php  
     
$policia=$_GET["policiaid"];

include("conexion.php");
$conexion=conexion();
     
    $sql= "DELETE FROM policia WHERE policiaid='$policia'";

    $resultado=mysqli_query($conexion, $sql);

   header("Location: ../views/consignas.php");

mysqli_close($conexion);
    
 ?>