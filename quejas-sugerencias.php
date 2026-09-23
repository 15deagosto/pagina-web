<?php
require './controler/conexion.php';
require './funciones/fn-index.php';
require_once './funciones/fn-utilidades.php';
$con = new Conecciones();
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

        <!--===== PRELOADER =======-->
        <div class="preloader">
            <img src="assets/img/logo/logo2.png">
            <div class="loader"></div>
        </div>

        <!--===== PROGRESS =======-->
        <div class="paginacontainer">
            <div class="progress-wrap">
                <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
                </svg>
            </div>
        </div>

        <header class="homepage2-body">
            <?php include 'header.php'; ?>
        </header>

        <!-- ===== HERO AREA UNIFICADA: Gradiente Rojo Corporativo ===== -->
        <div class="w-full bg-gradient-to-br from-[#7a1310] to-[#a31a16] h-[220px] md:h-[260px] flex items-center border-b border-[#7a1310]/20 shadow-inner">
            <div class="max-w-7xl mx-auto px-6 w-full text-center">
                <div data-aos="fade-up" data-aos-duration="800">
                    <h2 class="text-3xl md:text-5xl font-black text-white tracking-tight mb-3 drop-shadow-sm">
                        Atención al Socio
                    </h2>
                    <div class="text-xs md:text-sm font-bold text-white/70 tracking-wide">
                        <a href="index.php" class="hover:text-white transition-colors">Inicio</a> 
                        <i class="fa-solid fa-angle-right text-[10px] mx-2 opacity-50"></i> 
                        <span class="text-[#ffd9d6] font-extrabold">Quejas y Sugerencias</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== SECCIÓN CENTRAL DEL FORMULARIO SARAS ===== -->
        <section class="py-16 md:py-24 max-w-2xl mx-auto px-6">
            <div class="text-center mb-10" data-aos="fade-up">
                <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-2 flex items-center justify-center gap-2">
                    <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Formulario Oficial de Reclamos <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span>
                </div>
                <h2 class="text-3xl font-black text-neutral-800 tracking-tight mb-3">Escribe tu queja, reclamo o sugerencia</h2>
                <p class="text-neutral-500 text-sm leading-relaxed font-medium">Cuéntanos qué pasó, con el mayor detalle posible. Tu requerimiento será canalizado por nuestro departamento de contraloría interna y un asesor te responderá a la brevedad.</p>
            </div>

            <!-- Formulario Premium Estilizado amarrado a tu Core AJAX -->
            <form method="POST" id="formularioContacto" class="space-y-5 bg-gradient-to-br from-white to-neutral-50 border border-neutral-100 rounded-3xl shadow-soft p-6 md:p-8" data-aos="fade-up">
                <input type="hidden" name="iopc" value="2">
                
                <div class="grid sm:grid-cols-2 gap-5">
                    <div class="flex flex-col gap-1.5">
                        <label class="font-extrabold text-neutral-700 text-xs uppercase tracking-wider">Nombres*</label>
                        <input type="text" name="nombre_que_sug" placeholder="Nombres" required class="w-full bg-white border border-neutral-200 focus:border-[#a31a16]/40 rounded-xl px-4 py-3.5 text-neutral-800 font-semibold outline-none transition-all text-sm shadow-inner-sm">
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <label class="font-extrabold text-neutral-700 text-xs uppercase tracking-wider">Apellidos*</label>
                        <input type="text" name="apellido_que_sug" placeholder="Apellidos" required class="w-full bg-white border border-neutral-200 focus:border-[#a31a16]/40 rounded-xl px-4 py-3.5 text-neutral-800 font-semibold outline-none transition-all text-sm shadow-inner-sm">
                    </div>
                </div>
                
                <div class="grid sm:grid-cols-2 gap-5">
                    <div class="flex flex-col gap-1.5">
                        <label class="font-extrabold text-neutral-700 text-xs uppercase tracking-wider">Correo Electrónico*</label>
                        <input type="email" name="email_que_sug" placeholder="ejemplo@correo.com" required class="w-full bg-white border border-neutral-200 focus:border-[#a31a16]/40 rounded-xl px-4 py-3.5 text-neutral-800 font-semibold outline-none transition-all text-sm shadow-inner-sm">
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <label class="font-extrabold text-neutral-700 text-xs uppercase tracking-wider">Teléfono / Celular*</label>
                        <input type="tel" name="telefono_que_sug" placeholder="Ej: 0998765432" required class="w-full bg-white border border-neutral-200 focus:border-[#a31a16]/40 rounded-xl px-4 py-3.5 text-neutral-800 font-semibold outline-none transition-all text-sm shadow-inner-sm">
                    </div>
                </div>
                <!-- Selector Normativo de Tipos de Reclamo (SARAS) -->
                <div class="flex flex-col gap-1.5">
                    <label class="font-extrabold text-neutral-700 text-xs uppercase tracking-wider">Tipo de requerimiento / reclamo*</label>
                    <select name="asunto_queja" required class="w-full bg-white border border-neutral-200 focus:border-[#a31a16]/40 rounded-xl px-4 py-3.5 text-neutral-800 font-semibold outline-none transition-all text-sm cursor-pointer shadow-inner-sm">
                        <option value="">Seleccione una categoría oficial</option>
                        <option value="Atención recibida">Atención recibida en ventanilla / asesoría</option>
                        <option value="Crédito">Servicios o trámites de Crédito</option>
                        <option value="Cuentas de ahorro">Cuentas de Ahorro a la vista</option>
                        <option value="Certificado de depósito">Certificados de Depósito / Inversiones</option>
                        <option value="Tarifas por servicios">Tarifas o cargos por servicios</option>
                        <option value="Cajero automático">Uso de Cajero Automático</option>
                        <option value="Ley Orgánica de Protección de Datos">Ley Orgánica de Protección de Datos Personales</option>
                        <option value="Otros">Otros requerimientos particulares</option>
                    </select>
                </div>

                <!-- Campo de Entrada: Observaciones detalladas -->
                <div class="flex flex-col gap-1.5">
                    <label class="font-extrabold text-neutral-700 text-xs uppercase tracking-wider">Detalle del acontecimiento / sugerencia*</label>
                    <textarea name="observacion_queja" rows="5" placeholder="Cuéntanos con la mayor precisión posible qué ocurrió, incluyendo fechas, nombres o agencias..." required class="w-full bg-white border border-neutral-200 focus:border-[#a31a16]/40 rounded-xl px-4 py-3.5 text-neutral-800 font-semibold outline-none transition-all text-sm resize-none shadow-inner-sm"></textarea>
                </div>

                <!-- Cláusula obligatoria legal de la LOPDP -->
                <div class="bg-neutral-100/60 p-4 rounded-xl border border-neutral-200/50 flex gap-3 items-start">
                    <i class="fa-solid fa-shield-halved text-[#a31a16] text-sm shrink-0 mt-0.5"></i>
                    <p class="text-[11px] text-neutral-500 leading-relaxed font-medium">Al enviar este formulario institucional, usted acepta explícitamente que la Cooperativa de Ahorro y Crédito 15 de Agosto trate sus datos personales de forma confidencial para gestionar y responder a su reclamo, conforme a la normativa vigente en la <strong>Ley Orgánica de Protección de Datos Personales (LOPDP)</strong>.</p>
                </div>

                <!-- Contenedor del resultado AJAX de tu Core original -->
                <div id="resultado" class="empty:hidden my-1"></div>

                <!-- Botón de Envío Premium con Bordes Suavizados -->
                <div class="pt-2">
                    <button onclick="enviarContacto()" type="button" class="w-full bg-[#a31a16] hover:bg-[#7a1310] text-white font-extrabold py-4 rounded-xl shadow-lg hover:shadow-[#a31a16]/20 hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center gap-2 tracking-wide uppercase text-sm">
                        <i class="fa-solid fa-paper-plane text-xs opacity-90"></i> Enviar requerimiento
                    </button>
                </div>
            </form>
        </section>

        <!--===== FOOTER AREA =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>

        <?php include "scripts-v2.php"; ?>
    </body>
</html>
