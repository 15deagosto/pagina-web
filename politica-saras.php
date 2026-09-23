<?php
require './controler/conexion.php';
include './fn/fn-credito.php';
require './funciones/fn-index.php';
require_once './funciones/fn-utilidades.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();
$tituloPagina = 'Política SARAS';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Política SARAS - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
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
                        Política SARAS
                    </h2>
                    <div class="text-xs md:text-sm font-bold text-white/70 tracking-wide">
                        <a href="index.php" class="hover:text-white transition-colors">Inicio</a> 
                        <i class="fa-solid fa-angle-right text-[10px] mx-2 opacity-50"></i> 
                        <span class="text-[#ffd9d6] font-extrabold">Responsabilidad Ambiental y Social</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- =====2. NARRATIVA SARAS: Manteniendo tus imágenes y fondos de fábrica originales ===== -->
        <section class="py-16 md:py-24 bg-center bg-cover bg-no-repeat border-b border-neutral-100" style="background-image: url(assets/img/all-images/bg/hero-bg1.png);">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Textos Editoriales Regulados -->
                <div class="lg:col-span-7" data-aos="fade-right">
                    <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-3 flex items-center gap-2">
                        <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Administración de Riesgos
                    </div>
                    <h2 class="text-3xl md:text-4xl font-black text-neutral-800 tracking-tight leading-tight mb-6">
                        Riesgos Ambientales y <span class="text-[#a31a16]">Sociales</span>
                    </h2>
                    <p class="text-neutral-600 text-sm md:text-base leading-relaxed text-justify font-medium">
                        Constituye un conjunto de políticas, procedimientos, herramientas y capacidades internas para una fácil y oportuna identificación, evaluación y administración de los riesgos ambientales y sociales generados por sus socios o clientes en el desarrollo de sus actividades económicas.
                    </p>
                </div>

                <!-- IMAGEN CORPORATIVA DE FÁBRICA MANTENIDA -->
                <div class="lg:col-span-5 relative flex justify-center" data-aos="fade-left">
                    <div class="absolute -inset-4 bg-gradient-to-tr from-[#a31a16]/10 to-transparent rounded-[40px] blur-xl opacity-50 pointer-events-none"></div>
                    <div class="relative max-w-[80%] lg:max-w-full overflow-hidden transition-all duration-300">
                        <img src="assets/img/all-images/hero/hero-img1.png" alt="SARAS COAC" class="w-full h-auto object-contain hover:scale-[1.02] transition-transform duration-500">
                    </div>
                </div>

            </div>
        </section>
        <!-- =====3. BLOQUE DE DESCARGA REGULATORIO INTERACTIVO ===== -->
        <section class="py-16 md:py-24 max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Tarjeta FinTech para la Descarga Directa (Lado Izquierdo) -->
                <div class="lg:col-span-5" data-aos="fade-right">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="h-8 w-1 bg-[#a31a16] rounded-full"></div>
                        <h2 class="text-xl font-black text-neutral-800 tracking-tight">Manual Normativo SARAS</h2>
                    </div>
                    <p class="text-neutral-500 text-xs md:text-sm leading-relaxed mb-6 font-medium text-justify">
                        Ponemos a disposición de nuestros socios, entidades gubernamentales y público en general el documento oficializado que norma la mitigación del impacto ecológico en las líneas de financiamiento comercial.
                    </p>

                    <!-- TARJETA INDIVIDUAL DE DESCARGA PREMIUM -->
                    <a href="assets/Riesgos_Ambientales_Sociales_EPS.pdf" target="_blank" class="group flex items-center justify-between p-5 bg-neutral-50 border border-neutral-100 rounded-2xl shadow-sm hover:border-[#a31a16]/20 hover:bg-white hover:-translate-y-0.5 transition-all duration-300 w-full">
                        <div class="flex items-center gap-4 min-w-0">
                            <div class="w-12 h-12 rounded-xl bg-red-600/5 text-red-600 flex items-center justify-center shrink-0 border border-red-600/10 group-hover:bg-[#a31a16] group-hover:text-white transition-colors shadow-inner-sm">
                                <i class="fa-solid fa-file-pdf text-base"></i>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <span class="text-xs font-black text-neutral-700 leading-snug group-hover:text-[#a31a16] transition-colors truncate pr-2">Riesgos Ambientales y Sociales</span>
                                <span class="text-[10px] text-neutral-400 font-bold mt-0.5"><i class="fa-regular fa-file-lines mr-1"></i> Formato PDF Oficial SEPS</span>
                            </div>
                        </div>
                        <div class="w-8 h-8 rounded-lg bg-white text-neutral-400 border border-neutral-100 flex items-center justify-center group-hover:bg-[#a31a16]/5 group-hover:text-[#a31a16] transition-all shadow-sm">
                            <i class="fa-solid fa-download text-xs"></i>
                        </div>
                    </a>
                </div>

                <!-- Visor Técnico Adaptativo y Proporcional (Lado Derecho - Se expande óptimo en Desktop) -->
                <div class="lg:col-span-7 w-full hidden md:block" data-aos="fade-left">
                    <div class="relative rounded-[32px] overflow-hidden shadow-md border border-neutral-100 p-2 bg-neutral-50/50">
                        <!-- Visor responsivo de alta densidad de píxeles amarrado a tu PDF real -->
                        <embed src="assets/Riesgos_Ambientales_Sociales_EPS.pdf" type="application/pdf" class="w-full h-[540px] rounded-[24px]" />
                    </div>
                </div>

            </div>
        </section>

        <!--===== FOOTER AREA =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>

        <?php include "scripts-v2.php"; ?>
    </body>
</html>
