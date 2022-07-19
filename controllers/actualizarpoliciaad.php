  <?php
  
  $policiaudep=$_GET['policiaudep'];
  $policiaoficial= $_GET['policiaoficial'];
  $policiatelefono=$_GET['policiatelefono'];
  $policiadespachador=$_GET['policiadespachador'];
  $policiaobservaciones= $_GET['policiaobservaciones'];
  $policiaid= $_GET['policiaid'];
  $id=$_GET['id'];

  include("conexion.php");
  $conexion = conexion();

  $consulta="UPDATE policia SET policiaudep='$policiaudep', policiaoficial='$policiaoficial', policiatelefono='$policiatelefono', policiadespachador='$policiadespachador', policiaobservaciones='$policiaobservaciones' WHERE policiafk='$id' and policiaid='$policiaid'";

   $resultados=mysqli_query($conexion, $consulta);//con esta variable estamos llamando las dos variables la consulta y la conexion.

   if( $resultados==false){

    echo "Error en la consulta";

  }
  
  header("location:../views/consignasad.php");

     mysqli_close($conexion);// De esta forma estamos cerrando la base de datos cundo terminanmos de trabajar.
     ?>

