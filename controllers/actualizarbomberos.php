  <?php
  
  $bomberoslugar=$_GET['bomberoslugar'];
  $bomberosnumero= $_GET['bomberosnumero'];
  $bomberostipounidad=$_GET['bomberostipounidad'];
  $bomberosnumerounidad=$_GET['bomberosnumerounidad'];
  $bomberosobservaciones= $_GET['bomberosobservaciones'];
  $bomberosid= $_GET['bomberosid'];
  $id=$_GET['id'];

  include("conexion.php");
  $conexion = conexion();

  $consulta="UPDATE bomberos SET bomberoslugar='$bomberoslugar', bomberosnumero='$bomberosnumero', bomberostipounidad='$bomberostipounidad', bomberosnumerounidad='$bomberosnumerounidad', bomberosobservaciones='$bomberosobservaciones' WHERE bomberosid='$bomberosid' and bomberosfk='$id'";

   $resultados=mysqli_query($conexion, $consulta);//con esta variable estamos llamando las dos variables la consulta y la conexion.

   if( $resultados==false){

    echo "Error en la consulta";

  }
  
  header("location:../views/consignas.php");

     mysqli_close($conexion);// De esta forma estamos cerrando la base de datos cundo terminanmos de trabajar.
     ?>

