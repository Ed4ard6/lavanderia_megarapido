<?php
$servername = "localhost";
$username = "root";
$password = "27602343";
$db = "lavanderia_megarapido_2";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error)  {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Conexion satisfactoria <br><hr>";
?>


<!-- EXTENSION mysqli  pdo 
mYSQLi solo funciona con bases de datos mysqli
pdo funciona en 12 sbd diferentes
ambos estan orientado a objetos mysqli ofrece una api de porcedimientos
-->