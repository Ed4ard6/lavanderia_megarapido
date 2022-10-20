<?php
$servername = "localhost";
$username = "root";
$password = "27602343";
$db = "lavanderia_megarapido_3";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error)  {
  die("Connection failed: " . $conn->connect_error);
}
?>


