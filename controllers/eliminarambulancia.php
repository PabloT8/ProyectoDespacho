<?php  
     
$ambulancia=$_GET["ambulanciaid"];

include("conexion.php");
$conexion=conexion();
     
    $sql= "DELETE FROM ambulancia WHERE ambulanciaid='$ambulancia'";

    $resultado=mysqli_query($conexion, $sql);

   header("Location: ../views/consignas.php");

mysqli_close($conexion);
    
 ?>


  
