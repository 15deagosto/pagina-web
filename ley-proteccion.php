<?php
require './controler/conexion.php';
include './fn/fn-credito.php';
require './funciones/fn-index.php';
require_once './funciones/fn-utilidades.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();
$tituloPagina = 'Protección de Datos';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Protección de Datos Personales - COAC 15 de Agosto</title>
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

        <!-- 1. LA FRANJA ROJA DE SIEMPRE: Gradiente Rojo Corporativo con Texto Blanco -->
        <div class="w-full bg-gradient-to-br from-[#7a1310] to-[#a31a16] h-[200px] md:h-[240px] flex items-center border-b border-[#7a1310]/20 shadow-inner">
            <div class="max-w-7xl mx-auto px-6 w-full text-center">
                <div data-aos="fade-up" data-aos-duration="800">
                    <h2 class="text-3xl md:text-5xl font-black text-white tracking-tight mb-3 drop-shadow-sm">
                        Ley de Protección de Datos
                    </h2>
                    <div class="text-xs md:text-sm font-bold text-white/70 tracking-wide">
                        <a href="index.php" class="hover:text-white transition-colors">Inicio</a> 
                        <i class="fa-solid fa-angle-right text-[10px] mx-2 opacity-50"></i> 
                        <span class="text-[#ffd9d6] font-extrabold">Protección de Datos</span>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="w-full bg-white overflow-hidden pt-10" data-aos="fade-up" data-aos-delay="100">
            <div class="max-w-7xl mx-auto px-6">
                
                <img src="assets/img/banner-transparencia.jpg" alt="Seguridad de Datos COAC" class="w-full h-auto max-h-[360px] md:max-h-[420px] object-contain mx-auto rounded-3xl shadow-sm">
            </div>
        </div>
        <!-- ===== 3. NARRATIVA DE REGULACIÓN DE DATOS ===== -->
        <section class="py-12 max-w-4xl mx-auto px-6 text-center" data-aos="fade-up" data-aos-delay="150">
            <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-3 flex items-center justify-center gap-2">
                <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Cumplimiento Normativo LOPDP <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span>
            </div>
            <h2 class="text-2xl md:text-3xl font-black text-neutral-800 tracking-tight mb-6">Seguridad, Privacidad y Confianza Absoluta</h2>
            <div class="text-neutral-600 text-sm md:text-base leading-relaxed space-y-4 font-medium text-justify md:text-center">
                <p>En la Cooperativa de Ahorro y Crédito 15 de Agosto, la seguridad y el tratamiento responsable de tu información confidencial es nuestro compromiso mayor. Con la entrada en vigencia de la Ley Orgánica de Protección de Datos Personales (LOPDP) en el Ecuador, hemos implementado estrictos protocolos técnicos y organizativos para salvaguardar tu identidad.</p>
                <p>Garantizamos el ejercicio pleno de tus derechos de acceso, rectificación, eliminación y oposición sobre los datos recopilados en nuestros canales transaccionales. Ponemos a tu disposición nuestras políticas oficiales aprobadas por la administración para que conozcas a detalle cómo protegemos tu entorno digital.</p>
            </div>
        </section>

        <!-- ===== 4. CATALOGO DE DOCUMENTOS DE PROTECCIÓN DE DATOS ===== -->
        <section class="pb-16 md:pb-24 max-w-7xl mx-auto px-6" data-aos="fade-up" data-aos-delay="200">
            <div class="flex items-center gap-3 mb-6">
                <div class="h-8 w-1 bg-[#a31a16] rounded-full"></div>
                <h2 class="text-xl font-black text-neutral-800 tracking-tight">Políticas y Resoluciones Oficiales</h2>
            </div>

            <!-- Grid en 2 Columnas fluidas a lo ancho de la pantalla -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                
                <!-- TARJETA 1: POLÍTICA GENERAL -->
                <a href="doc/POLITICA_PROTECCION_DATOS_COAC15AG.pdf" target="_blank" class="group flex items-center justify-between p-4 bg-neutral-50 border border-neutral-100/80 rounded-2xl shadow-sm hover:border-[#a31a16]/20 hover:bg-white hover:-translate-y-0.5 transition-all duration-300">
                    <div class="flex items-center gap-3.5 min-w-0">
                        <div class="w-10 h-10 rounded-xl bg-red-600/5 text-red-600 flex items-center justify-center shrink-0 border border-red-600/10 group-hover:bg-[#a31a16] group-hover:text-white transition-colors shadow-inner-sm">
                            <i class="fa-solid fa-file-pdf text-sm"></i>
                        </div>
                        <div class="flex flex-col min-w-0">
                            <span class="text-xs font-black text-neutral-700 leading-snug group-hover:text-[#a31a16] transition-colors truncate pr-2">Política General LOPDP</span>
                            <span class="text-[10px] text-neutral-400 font-bold mt-0.5"><i class="fa-regular fa-calendar text-[9px] mr-1"></i> Actualizado: 8 Agosto 2025</span>
                        </div>
                    </div>
                    <div class="w-7 h-7 rounded-lg bg-white text-neutral-400 border border-neutral-100 flex items-center justify-center group-hover:bg-[#a31a16]/5 group-hover:text-[#a31a16] transition-all shadow-sm">
                        <i class="fa-solid fa-download text-[10px]"></i>
                    </div>
                </a>

                <!-- TARJETA 2: POLÍTICA DEL SITIO WEB -->
                <a href="doc/POLITICA_PRIVACIDAD_WEB_COAC15AG.pdf" target="_blank" class="group flex items-center justify-between p-4 bg-neutral-50 border border-neutral-100 rounded-2xl shadow-sm hover:border-[#a31a16]/20 hover:bg-white hover:-translate-y-0.5 transition-all duration-300">
                    <div class="flex items-center gap-3.5 min-w-0">
                        <div class="w-10 h-10 rounded-xl bg-red-600/5 text-red-600 flex items-center justify-center shrink-0 border border-red-600/10 group-hover:bg-[#a31a16] group-hover:text-white transition-colors shadow-inner-sm">
                            <i class="fa-solid fa-file-pdf text-sm"></i>
                        </div>
                        <div class="flex flex-col min-w-0">
                            <span class="text-xs font-black text-neutral-700 leading-snug group-hover:text-[#a31a16] transition-colors truncate pr-2">Política de Privacidad Web</span>
                            <span class="text-[10px] text-neutral-400 font-bold mt-0.5"><i class="fa-regular fa-calendar text-[9px] mr-1"></i> Actualizado: 8 Agosto 2025</span>
                        </div>
                    </div>
                    <div class="w-7 h-7 rounded-lg bg-white text-neutral-400 border border-neutral-100 flex items-center justify-center group-hover:bg-[#a31a16]/5 group-hover:text-[#a31a16] transition-all shadow-sm">
                        <i class="fa-solid fa-download text-[10px]"></i>
                    </div>
                </a>

            </div>
        </section>

        <!--===== FOOTER AREA =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>

        <?php include "scripts-v2.php"; ?>
    </body>
</html>
