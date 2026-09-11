<?php
require_once './controler/conexion.php';
require_once './funciones/fn-index.php';
$fnindex = new Fn_index();
$tituloPagina = 'Servicios';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Servicios - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
        <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">
        <?php include "head-v2.php"; ?>
    </head>
    <body class="v2 bg-white text-neutral-800">

        <?php include 'header.php'; ?>
        <?php include './partial-hero-interno.php'; ?>

        <section class="py-16 md:py-24 max-w-2xl mx-auto px-6 text-center">
            <p class="text-neutral-500">Consulta el detalle de nuestros servicios en <a href="servicios.php" class="text-rojo font-semibold">servicios.php</a>.</p>
        </section>

        <?php include './footer.php' ?>
        <?php include "scripts-v2.php"; ?>
    </body>
</html>
