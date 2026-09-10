<?php
require './controler/conexion.php';
require './funciones/fn-index.php';
$fnindex = new Fn_index();
$tituloPagina = 'Quejas y Sugerencias';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quejas y Sugerencias - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
        <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">
        <?php include "head-v2.php"; ?>
    </head>
    <body class="v2 bg-white text-neutral-800">

        <?php include 'header.php'; ?>
        <?php include './partial-hero-interno.php'; ?>

        <section class="py-16 md:py-24 max-w-2xl mx-auto px-6">
            <div class="text-center mb-10" data-aos="fade-up">
                <div class="text-rojo font-bold uppercase text-xs tracking-widest mb-2">Te escuchamos</div>
                <h2 class="text-3xl font-extrabold mb-3">Escribe tu queja, reclamo o sugerencia</h2>
                <p class="text-neutral-500 text-sm">Cuéntanos qué pasó, con el mayor detalle posible, y un asesor te responderá a la brevedad.</p>
            </div>

            <form method="POST" id="formularioContacto" class="space-y-5 bg-white border border-neutral-100 rounded-3xl shadow-soft p-6 md:p-8" data-aos="fade-up">
                <input type="hidden" name="iopc" value="2">
                <div class="grid sm:grid-cols-2 gap-5">
                    <input type="text" name="nombre_queja" placeholder="Nombres*" required class="w-full border border-neutral-200 rounded-xl px-4 py-3 focus:outline-none focus:border-rojo transition-colors">
                    <input type="text" name="apellido_queja" placeholder="Apellidos*" required class="w-full border border-neutral-200 rounded-xl px-4 py-3 focus:outline-none focus:border-rojo transition-colors">
                </div>
                <div class="grid sm:grid-cols-2 gap-5">
                    <input type="email" name="email_queja" placeholder="Correo electrónico*" required class="w-full border border-neutral-200 rounded-xl px-4 py-3 focus:outline-none focus:border-rojo transition-colors">
                    <input type="tel" name="telefono_queja" placeholder="Teléfono*" required class="w-full border border-neutral-200 rounded-xl px-4 py-3 focus:outline-none focus:border-rojo transition-colors">
                </div>
                <select name="asunto_queja" required class="w-full border border-neutral-200 rounded-xl px-4 py-3 focus:outline-none focus:border-rojo transition-colors">
                    <option value="">Tipo de reclamo*</option>
                    <option value="Atención recibida">Atención recibida</option>
                    <option value="Crédito">Crédito</option>
                    <option value="Cuentas de ahorro">Cuentas de ahorro</option>
                    <option value="Certificado de depósito">Certificado de depósito</option>
                    <option value="Tarifas por servicios">Tarifas por servicios</option>
                    <option value="Cajero automático">Cajero automático</option>
                    <option value="Ley Orgánica de Protección de Datos">Ley Orgánica de Protección de Datos</option>
                    <option value="Otros">Otros</option>
                </select>
                <textarea name="observacion_queja" rows="5" placeholder="Cuéntanos qué ocurrió, con fecha y detalle*" required class="w-full border border-neutral-200 rounded-xl px-4 py-3 focus:outline-none focus:border-rojo transition-colors"></textarea>
                <p class="text-xs text-neutral-400 leading-relaxed">Al enviar este formulario, aceptas que la Cooperativa 15 de Agosto trate tus datos personales para gestionar tu reclamo, conforme a la Ley Orgánica de Protección de Datos Personales.</p>
                <div id="resultado"></div>
                <button onclick="enviarContacto()" type="button" class="w-full bg-rojo text-white font-bold py-3.5 rounded-full hover:bg-rojo-dark hover:-translate-y-0.5 transition-all shadow-soft">Enviar ahora</button>
            </form>
        </section>

        <?php include './footer.php' ?>
        <?php include "scripts-v2.php"; ?>
    </body>
</html>
