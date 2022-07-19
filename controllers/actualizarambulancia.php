  <?php
  
  $ambulancialugar=$_GET['ambulancialugar'];
  $ambulanciamando= $_GET['ambulanciamando'];
  $ambulancianumero=$_GET['ambulancianumero'];
  $ambulanciaid=$_GET['ambulanciaid'];
  $id=$_GET['id'];

  include("conexion.php");
  $conexion = conexion();

  $consulta="UPDATE ambulancia SET ambulancialugar='$ambulancialugar', ambulanciamando='$ambulanciamando', ambulancianumero='$ambulancianumero' WHERE ambulanciaid='$ambulanciaid' and ambulanciafk='$id'";

   $resultados=mysqli_query($conexion, $consulta);//con esta variable estamos llamando las dos variables la consulta y la conexion.

   if( $resultados==false){

    echo "Error en la consulta";

  }
  
  header("location:../views/consignas.php");

     mysqli_close($conexion);// De esta forma estamos cerrando la base de datos cundo terminanmos de trabajar.
     ?>

