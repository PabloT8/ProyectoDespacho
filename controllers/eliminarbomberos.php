<?php  
     
$bomberos=$_GET["bomberosid"];

include("conexion.php");
$conexion=conexion();
     
    $sql= "DELETE FROM bomberos WHERE bomberosid='$bomberos'";

    $resultado=mysqli_query($conexion, $sql);

   header("Location: ../views/consignas.php");

mysqli_close($conexion);
    
 ?>