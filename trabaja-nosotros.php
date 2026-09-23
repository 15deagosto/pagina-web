<?php
require './controler/conexion.php';
require './funciones/fn-index.php';
$fnindex = new Fn_index();
require_once './funciones/fn-utilidades.php';
$tituloPagina = 'Trabaja con Nosotros';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trabaja con Nosotros - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
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
                        Crece con Nosotros
                    </h2>
                    <div class="text-xs md:text-sm font-bold text-white/70 tracking-wide">
                        <a href="index.php" class="hover:text-white transition-colors">Inicio</a> 
                        <i class="fa-solid fa-angle-right text-[10px] mx-2 opacity-50"></i> 
                        <span class="text-[#ffd9d6] font-extrabold">Oportunidades Laborales</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== SECCIÓN DE VACANTES DISPONIBLES ===== -->
        <section class="py-16 md:py-24 max-w-5xl mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-2 flex items-center justify-center gap-2">
                    <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Talento Humano COAC <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span>
                </div>
                <h2 class="text-3xl md:text-4xl font-black text-neutral-800 tracking-tight mb-3">Vacantes disponibles</h2>
                <p class="text-neutral-500 text-sm max-w-2xl mx-auto leading-relaxed font-medium">Buscamos profesionales comprometidos, honestos y con vocación de servicio que deseen impulsar el desarrollo financiero de nuestra región. Revisa los perfiles activos y postula hoy mismo.</p>
            </div>

            <div class="space-y-6">
                <!-- TARJETA DE VACANTE PREMIUM: Rediseñada con relieve y contrastes unificados -->
                <a href="detalle-vacante.php" class="block bg-white border border-neutral-100 rounded-3xl shadow-soft hover:shadow-softhover hover:border-[#a31a16]/20 hover:-translate-y-1 transition-all duration-300 overflow-hidden md:flex" data-aos="fade-up">
                    
                    <!-- Contenedor de la Imagen de Fábrica Manteniendo su Estilo Original -->
                    <div class="md:w-72 flex-shrink-0 relative bg-neutral-50 border-r border-neutral-50/50">
                        <img src="assets/img/img-item-busca-empleo.jpg" class="w-full h-48 md:h-full object-cover" alt="Postulación COAC">
                        <div class="absolute inset-0 bg-gradient-to-t from-neutral-900/10 via-transparent to-transparent"></div>
                    </div>

                    <!-- Cuerpo Informativo Exclusivo de la Vacante -->
                    <div class="p-6 md:p-8 flex-1 flex flex-col justify-between">
                        <div>
                            <!-- Insignia unificada con el rojo de la cooperativa -->
                            <span class="inline-block bg-[#a31a16]/10 text-[#a31a16] border border-[#a31a16]/20 text-xs font-black px-3 py-1.5 rounded-xl mb-4 tracking-wide uppercase">
                                <i class="fa-solid fa-briefcase text-[10px] mr-1"></i> Asesor de crédito agencia Matriz
                            </span>
                            
                            <p class="text-neutral-600 text-xs md:text-sm leading-relaxed text-justify font-medium mb-4">
                                Verificar, analizar, evaluar y recomendar las solicitudes de crédito de acuerdo a las políticas internas de riesgo de la Cooperativa para el segmento microempresarial y comercial.
                            </p>
                        </div>

                        <!-- Metadatos de la Oferta y Botón de Acción -->
                        <div class="pt-4 border-t border-neutral-50 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                            <div class="flex flex-wrap gap-4 text-[11px] font-bold text-neutral-400 uppercase tracking-wider">
                                <span class="flex items-center gap-1.5"><i class="fa-regular fa-calendar-days text-[#a31a16] text-xs"></i> Postular hasta: 28 de septiembre</span>
                                <span class="flex items-center gap-1.5"><i class="fa-regular fa-clock text-[#a31a16] text-xs"></i> Jornada Permanente</span>
                            </div>
                            
                            <span class="bg-neutral-50 text-neutral-500 group-hover:bg-[#a31a16] group-hover:text-white px-4 py-2 rounded-xl text-xs font-black transition-all flex items-center gap-1.5 shadow-inner-sm self-end sm:self-auto">
                                Ver vacante <i class="fa-solid fa-chevron-right text-[10px] transition-transform group-hover:translate-x-0.5"></i>
                            </span>
                        </div>
                    </div>
                </a >

            </div>
        </section>

        <!--===== FOOTER AREA =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>

        <?php include "scripts-v2.php"; ?>
    </body>
</html>
