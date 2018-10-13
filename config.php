<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "root";
 $dbname = "temperatura";
 //Conexion con la base de datos
 $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 if (!$connection) {
      die("Conexion fallida :( " . mysqli_connect_error());
  }

 $connection->close();
?>
