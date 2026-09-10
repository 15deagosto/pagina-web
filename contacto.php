<?php
require './controler/conexion.php';
require './funciones/fn-index.php';
$con = new Conecciones();
$fnindex = new Fn_index();
$tituloPagina = 'Contacto';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contacto - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
        <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">
        <?php include "head-v2.php"; ?>
    </head>
    <body class="v2 bg-white text-neutral-800">

        <?php include 'header.php'; ?>
        <?php include './partial-hero-interno.php'; ?>

        <section class="py-16 md:py-24 max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-5 gap-12">
                <div class="lg:col-span-3" data-aos="fade-right">
                    <div class="text-rojo font-bold uppercase text-xs tracking-widest mb-2">Contacto</div>
                    <h2 class="text-3xl font-extrabold mb-4">Tu éxito comienza con una conversación</h2>
                    <p class="text-neutral-500 mb-8">Creemos que los socios informados toman mejores decisiones financieras. Escríbenos y te responderemos a la brevedad.</p>

                    <form method="POST" id="formularioContacto" class="space-y-5">
                        <input type="hidden" name="iopc" value="1">
                        <div class="grid sm:grid-cols-2 gap-5">
                            <input type="text" name="nombre_contacto" placeholder="Nombres*" required class="w-full border border-neutral-200 rounded-xl px-4 py-3 focus:outline-none focus:border-rojo transition-colors">
                            <input type="text" name="apellido_contacto" placeholder="Apellidos*" required class="w-full border border-neutral-200 rounded-xl px-4 py-3 focus:outline-none focus:border-rojo transition-colors">
                        </div>
                        <div class="grid sm:grid-cols-2 gap-5">
                            <input type="email" name="email_contacto" placeholder="Correo electrónico*" required class="w-full border border-neutral-200 rounded-xl px-4 py-3 focus:outline-none focus:border-rojo transition-colors">
                            <input type="tel" name="telefono_contacto" placeholder="Teléfono*" required class="w-full border border-neutral-200 rounded-xl px-4 py-3 focus:outline-none focus:border-rojo transition-colors">
                        </div>
                        <input type="text" name="texto_contacto" placeholder="Asunto*" required class="w-full border border-neutral-200 rounded-xl px-4 py-3 focus:outline-none focus:border-rojo transition-colors">
                        <textarea name="observacion_contacto" rows="4" placeholder="¿Cómo podemos ayudarte?*" required class="w-full border border-neutral-200 rounded-xl px-4 py-3 focus:outline-none focus:border-rojo transition-colors"></textarea>
                        <div id="resultado"></div>
                        <button onclick="enviarContacto()" type="button" class="w-full sm:w-auto bg-rojo text-white font-bold px-8 py-3.5 rounded-full hover:bg-rojo-dark hover:-translate-y-0.5 transition-all shadow-soft">Enviar ahora</button>
                    </form>
                </div>

                <div class="lg:col-span-2 space-y-5" data-aos="fade-left">
                    <div class="bg-rojo-light/40 rounded-3xl p-6 flex gap-5 items-start">
                        <div class="w-12 h-12 rounded-2xl bg-rojo flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-phone text-white"></i></div>
                        <div>
                            <span class="text-xs text-neutral-500">24/7 Servicio</span>
                            <h4 class="font-bold mb-1">Llámanos</h4>
                            <a href="tel:1800244285" class="text-rojo font-semibold text-sm block">1800 - 244285</a>
                        </div>
                    </div>
                    <div class="bg-rojo-light/40 rounded-3xl p-6 flex gap-5 items-start">
                        <div class="w-12 h-12 rounded-2xl bg-rojo flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-envelope text-white"></i></div>
                        <div>
                            <span class="text-xs text-neutral-500">Escríbenos</span>
                            <h4 class="font-bold mb-1">Correo electrónico</h4>
                            <a href="mailto:info@coop15deagosto.fin.ec" class="text-rojo font-semibold text-sm block">info@coop15deagosto.fin.ec</a>
                        </div>
                    </div>
                    <div class="bg-rojo-light/40 rounded-3xl p-6 flex gap-5 items-start">
                        <div class="w-12 h-12 rounded-2xl bg-rojo flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-location-dot text-white"></i></div>
                        <div>
                            <span class="text-xs text-neutral-500">Dirección</span>
                            <h4 class="font-bold mb-1">Nuestras agencias</h4>
                            <a href="sucursales.php" class="text-rojo font-semibold text-sm block">Ver todas las agencias</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include './footer.php' ?>
        <?php include "scripts-v2.php"; ?>
    </body>
</html>
