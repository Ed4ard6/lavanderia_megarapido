<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    # code...
    echo ' 
    <script>
    alert("Por favor debes iniciar sesion");
    window.location = "../login1.php";
    </script>
    ';

    session_destroy();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/menu.css">
    <!-- <link rel="stylesheet" href="../css/estilos.css"> -->
    <link rel="stylesheet" href="../css/pie_pagina.css">
    <link rel="stylesheet" href="cliente.css">
    <link rel="shortcut icon" href="../img/icono.png">
    <title>Lavandería Mega Rápido</title>
</head>

<body>

    <!-- Inicio de Codigo de Menu Cliente-->
    <nav class="menu">
        <label class="titulo">Lavanderia Mega Rapido</label>
        <ul>
            <li><a href="mi_cuenta_cli.php" class="activo">Mi Cuenta</a></li>
            <li><a href="Servicios_Cliente.php">Solicitar Servicio</a></li>
            <li><a href="lista_facturas_cli.php">Facturas</a></li>
            <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
        </ul>
    </nav>
    <!--Inicio de codigo de menu Cliente-->
    <div class="Contenedor_principal">
        <!-- Inicio Mi cuenta -->

        <!--Inicio  Bienvenido usuario-->
        <?php

        $_SESSION['documento'];
        $documento = $_SESSION['documento'];

        require '../conecta.php';

        $sql = "SELECT * FROM usuarios WHERE documento = '$documento'; ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row["nombres"];
                $last_name = $row["apellidos"];
                $email = $row["correo"];
                $celular = $row["num_celular"];
                $direccion = $row["direccion"];
                $usuario = $row["usuario"];
                $clave = $row["contraseña"];
            }
        } else {
            echo "Error en el if de asociacion linea 40 o en el comando sql linea 37";
        }
        ?>
        <!--Fin  Bienvenido usuario-->


        <div class="cuadro_datos">
            <div class="titulo_tus_datos">
                <h1>Tus datos</h1>
                <img src="../img/bienvenido.png" class="img_bienvenidos"><br><br><br>
            </div>
            <form action="update_cli.php" method="post">
                <label class="cuadro_datos_modificar_label">Documento: </label>
                <input class="inputs_modificar_tus_datos" readonly type="text" id="doc" name="doc" value="<?php echo $documento; ?>"><br><br>

                <label class="cuadro_datos_modificar_label">Nombres: </label>
                <input class="inputs_modificar_tus_datos" type="text" id="nombre" name="nombre" value="<?php echo $name; ?>"><br><br>

                <label class="cuadro_datos_modificar_label">Apellidos: </label>
                <input class="inputs_modificar_tus_datos" type="text" id="apellido" name="apellido" value="<?php echo $last_name; ?>"><br><br>

                <label class="cuadro_datos_modificar_label">Correo: </label>
                <input class="inputs_modificar_tus_datos" type="text" id="email" name="email" value="<?php echo $email; ?>"><br><br>

                <label class="cuadro_datos_modificar_label">Numero : </label>
                <input class="inputs_modificar_tus_datos" type="text" id="numero" name="numero" value="<?php echo $celular; ?>"><br><br>

                <label class="cuadro_datos_modificar_label">Direccion: </label>
                <input class="inputs_modificar_tus_datos" type="text" id="direccion" name="direccion" value="<?php echo $direccion; ?>"><br><br><br><br>

                <input class="boton_finalizar_datos" type="submit" id="" name="" value="Finalizar">
            </form>

            <form action="mi_cuenta_cli.php" method="post">
                <input class="boton_concelar_datos" type="submit" id="" name="" value="Cancelar">
            </form>
        </div>

        <!-- Fin mi cuenta -->

        <!-- Inicio boton whatsapp -->
        <a href="https://api.whatsapp.com/send?phone=573054272142&text=Hola!%20tengo%20una%20duda!" target="_blank"><img src="../img/whatsapp.webp" class="whatsapp"></a>
        <!-- Fin boton whatsapp -->

    </div>
    </div>
    <!--Inicio de pie de pagina-->
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="../img/icono.png" alt="Logo de SLee Dw">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>Lavanderia Mega Rapido</h2>
                <p>Estamos ubicados en la direccion tal numero tal y contamos con un horario de aatencion de lunes a sabado de 8 am a 8 pm.</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Lavanderia Mega Rapido</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    <!--Fin de pie de pagina-->

</body>

</html>