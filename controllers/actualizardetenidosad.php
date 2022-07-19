  <?php
  
  $detenidosusuario=$_GET['detenidosusuario'];
  $detenidosgrupo= $_GET['detenidosgrupo'];
  $detenidosturno=$_GET['detenidosturno'];
  $detenidosfecha=$_GET['detenidosfecha'];
  $detenidoshora=$_GET['detenidoshora'];
  $detenidosticket= $_GET['detenidosticket'];
  $detenidostipologia=$_GET['detenidostipologia'];
  $detenidosdepartamento=$_GET['detenidosdepartamento'];
  $detenidosmunicipio=$_GET['detenidosmunicipio'];
  $detenidoscantidad=$_GET['detenidoscantidad'];
  $detenidosobservaciones=$_GET['detenidosobservaciones'];
  $id=$_GET['id'];

  include("conexion.php");
  $conexion = conexion();

  $consulta="UPDATE detenidos SET detenidosusuario='$detenidosusuario', detenidosgrupo='$detenidosgrupo', detenidosturno='$detenidosturno', detenidosfecha='$detenidosfecha', detenidoshora='$detenidoshora', detenidosticket='$detenidosticket', detenidostipologia='$detenidostipologia', detenidosdepartamento='$detenidosdepartamento', detenidosmunicipio='$detenidosmunicipio', detenidoscantidad='$detenidoscantidad', detenidosobservaciones='$detenidosobservaciones' WHERE detenidosid='$id'";

   $resultados=mysqli_query($conexion, $consulta);//con esta variable estamos llamando las dos variables la consulta y la conexion.

   if( $resultados==false){

    echo "Error en la consulta";

  }

  header("location:../views/detenidosad.php");

     mysqli_close($conexion);// De esta forma estamos cerrando la base de datos cundo terminanmos de trabajar.
     ?>

