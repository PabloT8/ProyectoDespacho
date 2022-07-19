<?php  
session_start();
include("conexion.php");
 $conexion=conexion();


date_default_timezone_set ( 'America/Tegucigalpa' ) ;
$consignagrupo=$_POST['consignagrupo'];
$consignaturno=$_POST['consignaturno'];
$consignafecha=$_POST['consignafecha'];
$consignausuario=$_POST['consignausuario'];


    mysqli_set_charset($conexion,"utf8");

     $sql= "INSERT INTO consigna ( consignagrupo, consignaturno,  consignafecha, consignausuario) VALUES ('$consignagrupo' ,'$consignaturno', '$consignafecha', '$consignausuario')"; 

    $resultado=mysqli_query($conexion, $sql);

    $_SESSION['id_consigna'] = mysqli_insert_id($conexion);
  
   // $resultadoID=mysqli_query($conexion,$sql2);

     mysqli_close($conexion);

      header("Location: ../views/nuevoad.php");

 ?>