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
    //header("location:../login1.php");
    //die();
    $_SESSION['documento'];
    $documento = $_SESSION['documento'];
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
    <link rel="shortcut icon" href="../img/icono.png">
    <link rel="stylesheet" href="style.css">
    <title>Lavandería Mega Rápido</title>
</head>
<body>
    
    <!-- Inicio de Codigo de Menu Cliente-->
    <nav class="menu">
            <label class="titulo">Lavanderia Mega Rapido</label>
            <ul>
                <li><a href="mi_cuenta_admi.php">Mi Cuenta</a></li>
                <li><a href="usuarios/usuarios.php">Usuarios</a></li>
                <li><a href="CRUD_Fact/listafacturas.php">Factura</a></li>
                <li><a href="CRUD_Servi/modificar_servicio.php">Servicio</a></li>
                <li><a href="cerrar_sesion.php" >Cerrar Sesión</a></li>
            </ul>
        </nav>