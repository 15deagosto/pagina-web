<?php
require_once './controler/conexion.php';
require_once './funciones/fn-index.php';
$fnindex = new Fn_index();
$tituloPagina = 'Cookies';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cookies - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
        <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">
        <?php include "head-v2.php"; ?>
    </head>
    <body class="v2 bg-white text-neutral-800">

        <?php include 'header.php'; ?>
        <?php include './partial-hero-interno.php'; ?>

        <section class="py-16 md:py-24 max-w-2xl mx-auto px-6 text-center">
            <div class="w-14 h-14 rounded-2xl bg-rojo-light flex items-center justify-center mx-auto mb-5">
                <i class="fa-solid fa-cookie-bite text-rojo text-xl"></i>
            </div>
            <p class="text-neutral-500">Estamos actualizando el contenido de nuestra política de cookies. Si tienes alguna duda mientras tanto, contáctanos en <a href="contacto.php" class="text-rojo font-semibold">contacto.php</a>.</p>
        </section>

        <?php include './footer.php' ?>
        <?php include "scripts-v2.php"; ?>
    </body>
</html>
