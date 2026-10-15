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

                <!-- ===== CUERPO DE LA POLÍTICA DE COOKIES REGULADA LOPDP ===== -->
        <section class="py-16 md:py-20 max-w-3xl mx-auto px-6 text-left">
            <div class="w-14 h-14 rounded-2xl bg-red-50 flex items-center justify-center mx-auto mb-6 shadow-sm text-[#a31a16]">
                <i class="fa-solid fa-cookie-bite text-xl"></i>
            </div>
            
            <h2 class="text-2xl md:text-3xl font-black text-center text-neutral-800 tracking-tight mb-8">
                Política de Privacidad y Cookies
            </h2>
            
            <p class="text-neutral-600 text-sm leading-relaxed mb-6">
                En cumplimiento con la <strong>Ley Orgánica de Protección de Datos Personales (LOPDP) de la República del Ecuador</strong>, la Cooperativa de Ahorro y Crédito 15 de Agosto deforma transparente le informa al socio que esta plataforma web utiliza cookies técnicas e institucionales para los siguientes fines estrictos:
            </p>

            <ul class="list-disc pl-6 text-neutral-600 text-sm flex flex-col gap-3 mb-8">
                <li><strong>Seguridad de Transacciones:</strong> Cookies obligatorias que validan el cifrado de datos de tu sesión perimetral para evitar fraudes en el acceso a 15 de Agosto Virtual.</li>
                <li><strong>Optimización de Rendimiento:</strong> Almacenamiento local ligero que agiliza la velocidad de carga de tus simuladores de crédito, tablas de interés y portafolio de productos financieros.</li>
                <li><strong>Canales de Soporte:</strong> Cookies de enlace técnico necesarias para permitir la operatividad de nuestro Asesor Virtual interactivo de WhatsApp sin rastrear tu información personal.</li>
            </ul>

            <div class="bg-slate-50 border border-neutral-100 rounded-2xl p-4 text-center mt-6">
                <p class="text-xs text-neutral-500 leading-relaxed">
                    Usted puede revocar el consentimiento o limpiar las cookies guardadas en cualquier momento desde la configuración de privacidad de su navegador web. Si tiene dudas sobre el tratamiento de sus datos personales, contáctenos de forma directa en <a href="contacto.php" class="text-[#a31a16] font-bold no-underline hover:underline">contacto.php</a>.
                </p>
            </div>
        </section>


        <?php include './footer.php' ?>
        <?php include "scripts-v2.php"; ?>
    </body>
</html>
