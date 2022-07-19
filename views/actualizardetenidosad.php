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
	<title>Actualizar</title>
 
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

    $detenido= $_GET['detenidosid'];

    include("../controllers/conexion.php");
    $conexion=conexion();
  
    $consulta= " SELECT * FROM detenidos where detenidosid='$detenido'";//no trabajamos con loa craracteres comodin.

  // echo "$consulta <br><br>";//esto nos imprime la instruccion sql

    $resultados=mysqli_query($conexion, $consulta);//con esta variable estamos llamando las dos variables la consulta y la conexion.
      ?>
   
    <section  id="main-site">
    <div  class="container py-4">
        <div style="background-color: skyblue;" class="col-6 offset-3 shadow py-3">

    <?php
   

    while ($fila=mysqli_fetch_array($resultados)) {///estamos creando un arrays para que nos lea todos los datos de bbdd.
     

       echo "<table align='center'  class=><tr><td>"; 

       echo "<form action='../controllers/actualizardetenidosad.php' method='get' align='center'> ";

      
		echo "<h3>Actualizar</h3><br>";

       echo" <input hidden='true' style='width:250px;' type='number_format(number)' class='detenidoid'  name='id' readonly = 'readonly' value='" . $fila['detenidosid'] . "'>";


       echo"<input hidden='true' style='width:250px;' type='text' name='detenidosusuario' value='" . $fila['detenidosusuario'] . "'>";

         echo "<label for='nombre'  class='detenidosgrupo'>Grupo</label><br>";
       echo"<input style='width:250px;' type='text' name='detenidosgrupo' value='" . $fila['detenidosgrupo'] . "'><br><br>";

       echo "<label for='nombre'  class='detenidosturno'>Turno</label><br>";
       echo"<input style='width:250px;' type='text' name='detenidosturno' value='" . $fila['detenidosturno'] . "'><br><br>";

       echo "<label for='nombre'  class='detenidosfecha'>Fecha</label><br>";
       echo"<input style='width:250px;' type='date' name='detenidosfecha' value='" . $fila['detenidosfecha'] . "'><br><br>";


           echo "<label for='nombre'  class='detenidoshora'>Hora</label><br>";
       echo"<input style='width:250px;' type='time' name='detenidoshora' value='" . $fila['detenidoshora'] . "'><br><br>";

       echo "<label for='nombre'  class='detenidosticket'>Ticket</label><br>";
       echo"<input style='width:250px;' type='text' name='detenidosticket' value='" . $fila['detenidosticket'] . "'><br><br>";


       echo "<label for='nombre'  class='detenidostipologia'>Tipologia</label><br>";
        echo "<select style='width:250px;' name='detenidostipologia'>
          <option value='" . $fila['detenidostipologia'] . "'> " . $fila['detenidostipologia'] . " </option>
    <option value='Accidentes de transito'>Accidentes de Tránsito</option>
    <option value='Asistencia'>Asistencia</option>
    <option value='Casos de Alcaldía'>Casos de Alcaldía</option>
    <option value='Delitos comunes'>Delitos comunes</option>
    <option value='Delitos contra la Mujer u Hombre'>Delitos contra la Mujer u Hombre</option>
    <option value='Delitos contra la Niñez y Adolescencia'>Delitos contra la Niñez y Adolescencia</option>
    <option value='Delitos contra la Propiedad'>Delitos contra la Propiedad</option>
    <option value='Delitos Contra la Vida'>Delitos Contra la Vida</option>
    <option value='Otras Causas de Muerte'>Otras Causas de Muerte</option>
    <option value='Desastres Naturales'>Desastres Naturales</option>
    <option value='Emergencias Médicas'>Emergencias Médicas</option>
    <option value='Incendio'>Incendio</option>
    <option value='Investigacion'>Investigación</option>
    <option value='Trafico'>Tráfico</option>
    <option value='Reportes Recibidos'>Reportes Recibidos</option>
    </select><br><br>";

        echo "<label for='nombre'  class='detenidosdepartamento'>Departamento</label><br>";
        echo"<input style='width:250px;' type='text' name='detenidosdepartamento' value='" . $fila['detenidosdepartamento'] . "'><br><br>"; 

    echo "<label for='nombre'  class='detenidosmunicipio'>Municipio</label><br>";
        echo"<input style='width:250px;' type='text' name='detenidosmunicipio' value='" . $fila['detenidosmunicipio'] . "'><br><br>";       

    echo "<label for='nombre'  class='detenidoscantidad'>Cantidad</label><br>";
       echo"<input style='width:250px;' type='int' name='detenidoscantidad' value='" . $fila['detenidoscantidad'] . "'><br><br>";

    echo "<label for='nombre'  class='detenidosobservaciones'>Observaciones</label><br>";
       echo"<input style='width:250px;' type='text' name='detenidosobservaciones' value='" . $fila['detenidosobservaciones'] . "'><br><br>";   
       
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