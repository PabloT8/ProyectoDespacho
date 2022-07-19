<?php 

		function conexion(){
			$host_conexion="localhost"; // conexion con el servidor
			$user_conexion="root"; // nombre del usuario mysql
			$pass_conexion=""; //contrasena mysql
			$data_base_conexion="despachodv_db"; // nombre de la base de datos

			$conexion=mysqli_connect($host_conexion,$user_conexion,$pass_conexion,$data_base_conexion); // variable que realiza la conexion con los datos anteriores

			return $conexion; // al ser una funcion retorna la variable de la conexion
		}

 ?>