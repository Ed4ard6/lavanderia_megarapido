<?php
include('../conecta.php');

$documento = $_POST['doc'];
$nombres = $_POST['nombre'];
$apellidos = $_POST['apellido'];
$correo = $_POST['email'];
$num_celular = $_POST['numero'];
$direccion = $_POST['direccion'];

$sql="UPDATE usuarios SET  nombres='$nombres',apellidos='$apellidos', 
correo = '$correo', num_celular = '$num_celular', direccion = '$direccion'  WHERE documento = $documento";
$query=mysqli_query($conn,$sql);

    if($query){
        ?>
        <script>
        window.location = "mi_cuenta_cli.php";
        </script>
        <?php
    }

?>