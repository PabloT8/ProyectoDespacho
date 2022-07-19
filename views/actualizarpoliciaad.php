<?php 
session_start();

if(!isset($_SESSION["username"]))
{
    header("location:../registro/login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Policia</title>
 
	<meta charset="utf-8">
	 <link rel="stylesheet" href="css/bootstrap.min.css">
   	<link rel="icon"  href="../img/logo91.png">


</head>
<body>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <center>
    <img src="../img/logo.png" />
    </center>

    <br>   

	<?php



    $policia= $_GET['policiaid'];

    include("../controllers/conexion.php");
    $conexion=conexion();
  
    $consulta= " SELECT * FROM policia,consigna WHERE policiaid='$policia' and consignaid=policiafk";//no trabajamos con loa craracteres comodin.

  // echo "$consulta <br><br>";//esto nos imprime la instruccion sql

    $resultados=mysqli_query($conexion, $consulta);//con esta variable estamos llamando las dos variables la consulta y la conexion.
      ?>
   
    <section  id="main-site">
    <div  class="container py-4">
        <div style="background-color: yellowgreen" class="col-6 offset-3 shadow py-3">

    <?php
   
 
    while ($fila=mysqli_fetch_array($resultados)) {///estamos creando un arrays para que nos lea todos los datos de bbdd.
     

       echo "<table align='center'  class=><tr><td>"; 

       echo "<form action='../controllers/actualizarpoliciaad.php' method='get' align='center'> ";

      
		echo "<h3>Actualizar Policia</h3><br>";
       
       echo" <input style='width:120px;' type='number_format(number)' class='consignaid'  name='id' readonly = 'readonly' hidden='true' value='" . $fila['consignaid'] . "'>";

       echo" <input style='width:120px;' type='number_format(number)' class='policiaid'  name='policiaid' readonly = 'readonly' hidden='true' value='" . $fila['policiaid'] . "'>";

        echo "<label for='nombre'  class='policiaudep'>UDEP</label><br>";
        echo "<input style='width:440px;' name='policiaudep' value='" . $fila['policiaudep'] . "'>
          <br><br>";

          echo "<label for='nombre'  class='policiaoficial'>Policia Oficial</label><br>";
        echo "<input style='width:440px;' name='policiaoficial' value='" . $fila['policiaoficial'] . "'>
          <br><br>";

          echo "<label for='nombre'  class='policiatelefono'>Telefono</label><br>";
        echo "<input style='width:440px;' name='policiatelefono' value='" . $fila['policiatelefono'] . "'>
          <br><br>";

          echo "<label for='nombre'  class='policiadespachador'>Despachador</label><br>";
        echo "<input style='width:440px;' name='policiadespachador' value='" . $fila['policiadespachador'] . "'>
          <br><br>";

           echo "<label for='nombre'  class='estadoobservacion'>Observacion</label><br>";
       echo"<input style='width:440px;' type='text' name='policiaobservaciones' value='" . $fila['policiaobservaciones'] . "'><br><br>";
       
      echo "<input class='btn btn-primary' type='submit' class='ACT' name='enviando' value='Actualizar'> <br><br>";


      echo "</form>";
  
    }

    mysqli_close($conexion);// De esta forma estamos cerrando la base de datos cundo terminanmos de trabajar.
  
   ?>

    
</div>
</div>
</section>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>