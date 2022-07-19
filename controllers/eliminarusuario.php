<?php  
     
$ID=$_GET["userID"];

include("conexion.php");
$conexion=conexion();
     
    $sql= "DELETE FROM user WHERE userID='$ID'";

    $resultado=mysqli_query($conexion, $sql);

   header("Location: ../views/usuarios.php");

mysqli_close($conexion);
    
 ?>


  
