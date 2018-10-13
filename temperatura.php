<?php
 $password= "viann";
 require("config.php");
 if ($_GET['pass'] == $password)
 {
	 // Leer los valores que llegan por GET
	 $Temperatura = mysqli_real_escape_string($con, $_GET['Temperatura']);
	 $Humedad = mysqli_real_escape_string($con, $_GET['Humedad']);
	 // insertar los valores en la tabla
	 $query = "INSERT INTO Valores(Temperatura, Humedad) VALUES('$Temperatura','$Humedad')";
	 // Ejecutar la instrucción
	 mysqli_query($con, $query);
	 mysqli_close($con);
	 echo "Sensado de Temperatura y Humedad<br />";
	 echo "<br />Temperatura = $Temperatura ºC<br />";
	 echo "<br />Humedad = $Humedad %<br />";
 }
 else{
	  echo "Acceso bloqueado. Necesita la contraseña para acceder :)"; 
 }
?>