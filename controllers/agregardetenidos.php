<?php
  
 
 session_start();

    $detenidosusuario=$_POST['detenidosusuario'];
    $detenidoshora=$_POST['detenidoshora'];
    $detenidosfecha=$_POST['detenidosfecha'];
    $detenidosgrupo=$_POST['detenidosgrupo'];
    $detenidosturno=$_POST['detenidosturno'];
    $detenidosticket=$_POST['detenidosticket'];
    $detenidostipologia=$_POST['detenidostipologia'];
    $detenidosdepartamento=$_POST['detenidosdepartamento'];
    $detenidosmunicipio=$_POST['detenidosmunicipio'];
    $detenidoscantidad=$_POST['detenidoscantidad'];
    $detenidosobservaciones=$_POST['detenidosobservaciones'];

   include("conexion.php");;
   $conexion=conexion();
   mysqli_set_charset($conexion,"utf8");


    $sql= "INSERT INTO detenidos (detenidosusuario, detenidoshora, detenidosfecha,  detenidosgrupo,  detenidosturno, detenidosticket, detenidostipologia, detenidosdepartamento, detenidosmunicipio, detenidoscantidad, detenidosobservaciones) VALUES ('$detenidosusuario','$detenidoshora', '$detenidosfecha', '$detenidosgrupo', '$detenidosturno', '$detenidosticket', '$detenidostipologia', '$detenidosdepartamento', '$detenidosmunicipio', '$detenidoscantidad', '$detenidosobservaciones')";
      $resultado=mysqli_query($conexion, $sql);
     
      $_SESSION['id_despacho'] = mysqli_insert_id($conexion);

     mysqli_close($conexion);

    if ($resultado==false) {
       echo "Error en la consulta";
     }

      header("Location: ../views/detenidos.php");

 ?>