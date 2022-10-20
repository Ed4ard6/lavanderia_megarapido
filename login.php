<?php
if ($_POST) {
    # code...
    require 'conecta.php';
$usuario = $_POST['usuario'];
$contraseña = $_POST['password'];
$tipo_usuario = $_POST['tipo_de_usuario'];

$sql = "SELECT usuario, contraseña, documento, tipo_usuario FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña' AND tipo_usuario = '$tipo_usuario'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

        if ($usuario == $row["usuario"] AND $contraseña == $row["contraseña"] AND $tipo_usuario == "C" ) {
            # code...
            session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['contraseña'] = $contraseña;
            $_SESSION['documento'] = $row['documento'];
            
            header("Location: Cliente/mi_cuenta_cli.php");   
        }elseif ($usuario == $row["usuario"] AND $contraseña == $row["contraseña"] AND $tipo_usuario == "A" ) {
          # code...
          session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['contraseña'] = $contraseña;
            $_SESSION['documento'] = $row['documento'];
            
            header("Location: Administrador/mi_cuenta_admi.php"); 
        }
    }
  } else {
    echo ' 
    <script>
    alert("Verifique que los datos esten corecctos");
    window.location = "login1.php";
    </script>
    ';
  }
  mysqli_close($conn);

}
?>

