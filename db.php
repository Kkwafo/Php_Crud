<?php 
 //ver como sacar el uso de la base de datos. Para integrar el archor de USE.
$servername = "localhost";
$username = "root";
$password = "root";
$databasename = "php_todoList";

//inicio session para usar $_SESSION para pasar variables de manera global en el script.
session_start();
$conn = new mysqli($servername, $username, $password, $databasename);



?> 

