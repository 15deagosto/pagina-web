<?php
require './controler/conexion.php';
include './fn/fn-credito.php';
require './funciones/fn-index.php';
require_once './funciones/fn-utilidades.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();
$educafinan = $fnindex->fnindex_reducacion_financiera_alles();
$tituloPagina = 'Educación Financiera';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Educación Financiera - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
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

        <!-- ===== 🖼️ HERO AREA UNIFICADA: Gradiente Rojo Corporativo v4.0 ===== -->
        <div class="w-full bg-gradient-to-br from-[#7a1310] to-[#a31a16] h-[220px] md:h-[260px] flex items-center border-b border-[#7a1310]/20 shadow-inner">
            <div class="max-w-7xl mx-auto px-6 w-full text-center">
                <div data-aos="fade-up" data-aos-duration="800">
                    <h2 class="text-3xl md:text-5xl font-black text-white tracking-tight mb-3 drop-shadow-sm">
                        Educación Financiera
                    </h2>
                    <div class="text-xs md:text-sm font-bold text-white/70 tracking-wide">
                        <a href="index.php" class="hover:text-white transition-colors">Inicio</a> 
                        <i class="fa-solid fa-angle-right text-[10px] mx-2 opacity-50"></i> 
                        <span class="text-[#ffd9d6] font-extrabold">Educación Financiera</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== CATALOGO DE ARTÍCULOS Y TALLERES EDUCA ===== -->
        <section class="py-16 md:py-24 max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php while ($menueducafinan = $educafinan->fetch_assoc()) { ?>
                    
                    <!-- REJILLA INDIVIDUAL DE ARTÍCULO -->
                    <div class="group bg-white border border-neutral-100 rounded-3xl overflow-hidden shadow-soft hover:shadow-softhover hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between" data-aos="fade-up">
                        <div>
                            <!-- Caja de Imagen Mantenida del Sistema -->
                            <div class="w-full h-[220px] md:h-[260px] overflow-hidden bg-neutral-100 relative">
                                <img src="assets/img/<?php echo $menueducafinan['imagen_edfi'] ?>" alt="Taller" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                                <div class="absolute inset-0 bg-gradient-to-t from-neutral-900/20 via-transparent to-transparent"></div>
                            </div>

                            <!-- Bloque Informativo Interno -->
                            <div class="p-6 md:p-8">
                                <!-- Metadatos vectoriales limpios -->
                                <div class="flex items-center gap-4 text-[11px] font-bold text-neutral-400 uppercase tracking-wider mb-4 pb-3 border-b border-neutral-50">
                                    <span class="flex items-center gap-1.5"><i class="fa-regular fa-calendar-days text-[#a31a16] text-xs"></i> <?php echo $menueducafinan['fecha_edfi'] ?></span>
                                    <span class="text-neutral-200">|</span>
                                    <span class="flex items-center gap-1.5"><i class="fa-regular fa-user text-[#a31a16] text-xs"></i> Administrador</span>
                                </div>

                                <h3 class="text-lg md:text-xl font-black text-neutral-800 leading-tight mb-3 group-hover:text-[#a31a16] transition-colors tracking-tight">
                                    <a href="detalle-educacion.php?id=<?php echo $menueducafinan['id_edfi'] ?>">
                                        <?php echo arreglar_mojibake($menueducafinan['titulo_edfi']) ?>
                                    </a>
                                </h3>
                                
                                <p class="text-neutral-500 text-xs md:text-sm leading-relaxed text-justify line-clamp-3 font-medium">
                                    <?php echo arreglar_mojibake($menueducafinan['resumen_edfi']) ?>
                                </p>
                            </div>
                        </div>
                        <!-- Barra de Acción de la Tarjeta -->
                        <div class="px-6 md:px-8 pb-6 md:pb-8 pt-2 flex items-center justify-between border-t border-neutral-50/60 bg-neutral-50/[0.02]">
                            <span class="text-[10px] font-black text-neutral-400 uppercase tracking-widest">Programa EDUCA</span>
                            <a href="detalle-educacion.php?id=<?php echo $menueducafinan['id_edfi'] ?>" class="bg-neutral-50 hover:bg-[#a31a16] text-neutral-500 hover:text-white px-4 py-2 rounded-xl text-xs font-bold transition-all flex items-center gap-1.5 shadow-sm">
                                Leer artículo <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </section>

        <!--===== FOOTER AREA =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>

        <?php include "scripts-v2.php"; ?>
    </body>
</html>
