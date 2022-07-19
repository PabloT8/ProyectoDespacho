  <?php
  require ('../registro/helper.php');
// error variable.
$error = array();

  $username=$_GET['username'];
  $password= $_GET['password'];
  $usertype=$_GET['usertype'];
  $id=$_GET['id'];
  $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

  include("conexion.php");
  $conexion = conexion();

if(empty($error)){
    // register a new user
   $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
   $consulta="UPDATE user SET username='$username', password='$hashed_pass', usertype='$usertype' WHERE userID='$id'";

   $resultados=mysqli_query($conexion, $consulta);//con esta variable estamos llamando las dos variables la consulta y la conexion.
}
   if( $resultados==false){

    echo "Error en la consulta";

  } 

  header("location:../views/usuarios.php");

     mysqli_close($conexion);// De esta forma estamos cerrando la base de datos cundo terminanmos de trabajar.
     ?>

