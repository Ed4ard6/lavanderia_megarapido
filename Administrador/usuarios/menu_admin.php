<?php
session_start();
include('../../conecta.php');

if (!isset($_SESSION['admin'])) {
    # code...
    echo ' 
    <script>
    alert("Por favor debes iniciar sesion");
    window.location = "../../login1.php";
    </script>
    ';

    session_destroy();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/estilo_fac.css">
    <link rel="stylesheet" href="../../css/pie_pagina.css">
    <link rel="shortcut icon" href="../../img/icono.png">
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/estilo_fac.css">
    <link rel="stylesheet" href="../../css/pie_pagina.css">
    <link rel="shortcut icon" href="../../img/icono.png">
    <title>Lavandería Mega Rápido</title>
</head>

<body>

    <!-- Inicio de Codigo de Menu Cliente-->
    <nav class="menu">
        <label class="titulo">Lavanderia Mega Rapido</label>
        <ul>
            <li><a href="../mi_cuenta_admi.php">Mi Cuenta</a></li>
            <li><a href="usuarios.php">Usuarios</a></li>
            <li><a href="../CRUD_Fact/listafacturas.php">Factura</a></li>
            <li><a href="../CRUD_Servi/modificar_servicio.php">Servicio</a></li>
            <li><a href="../cerrar_sesion.php">Cerrar Sesión</a></li>
        </ul>
    </nav>