<?php
session_start();
if (!isset($_SESSION['admin'])) {
    # code...
    echo ' 
       <script>
       alert("Por favor debes iniciar sesion");
       window.location = "../../login1.php";
       </script>
       ';

    session_destroy();
    //header("location:../login1.php");
    //die();
}
include('../conecta.php');


$id_fact = $_POST['id_factura'];
$servicio = $_POST['servicio'];
$cantidad = $_POST['cantidad'];

$sql = "INSERT INTO det_factura(cantidad, id_factura_det, id_servicios_det) VALUES ($cantidad, $id_fact, $servicio)";

if (mysqli_query($conn, $sql)) {
    echo '
        <script>
        //alert("Detalle registrado exitosamente");
        window:location = "detalles_factura.php";
        </script>';
} else {
    echo "Error al insertar datos:  " . mysqli_error($conn);
}

mysqli_close($conn);
