<?php
require './controler/conexion.php';
require './funciones/fn-index.php';
$fnindex = new Fn_index();
$tituloPagina = 'Trabaja con Nosotros';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trabaja con nosotros - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
        <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">
        <?php include "head-v2.php"; ?>
    </head>
    <body class="v2 bg-white text-neutral-800">

        <?php include 'header.php'; ?>
        <?php include './partial-hero-interno.php'; ?>

        <section class="py-16 md:py-24 max-w-5xl mx-auto px-6">
            <div class="text-center mb-12" data-aos="fade-up">
                <div class="text-rojo font-bold uppercase text-xs tracking-widest mb-2">Únete al equipo</div>
                <h2 class="text-3xl md:text-4xl font-extrabold">Vacantes disponibles</h2>
            </div>

            <a href="detalle-vacante.php" class="block bg-white border border-neutral-100 rounded-3xl shadow-soft hover:shadow-softhover hover:-translate-y-1 transition-all overflow-hidden md:flex" data-aos="fade-up">
                <div class="md:w-64 flex-shrink-0">
                    <img src="assets/img/img-item-busca-empleo.jpg" class="w-full h-48 md:h-full object-cover" alt="">
                </div>
                <div class="p-6 flex-1">
                    <div class="flex flex-wrap gap-4 text-xs text-neutral-400 mb-3">
                        <span><i class="fa-regular fa-calendar"></i> Postular hasta: 28 de septiembre</span>
                        <span><i class="fa-regular fa-clock"></i> Permanente</span>
                    </div>
                    <span class="inline-block bg-rojo text-white text-sm font-bold px-3 py-1 rounded-lg mb-3">Asesor de crédito agencia Matriz</span>
                    <p class="text-neutral-500 text-sm mb-4">Verificar, analizar, evaluar y recomendar las solicitudes de crédito de acuerdo a las políticas internas de la Cooperativa.</p>
                    <span class="text-rojo font-bold text-sm inline-flex items-center gap-2">Leer más <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </a>
        </section>

        <?php include './footer.php' ?>
        <?php include "scripts-v2.php"; ?>
    </body>
</html>
