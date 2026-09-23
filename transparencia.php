<?php
require './controler/conexion.php';
require './funciones/fn-index.php';
require_once './funciones/fn-utilidades.php';
$con = new Conecciones();
$fnindex = new Fn_index();
$tituloPagina = 'Transparencia';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transparencia - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
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
                        Transparencia de la Información
                    </h2>
                    <div class="text-xs md:text-sm font-bold text-white/70 tracking-wide">
                        <a href="index.php" class="hover:text-white transition-colors">Inicio</a> 
                        <i class="fa-solid fa-angle-right text-[10px] mx-2 opacity-50"></i> 
                        <span class="text-[#ffd9d6] font-extrabold">Transparencia</span>
                    </div>
                </div>
            </div>
        </div>

                <!-- ===== NARRATIVA DE TRANSPARENCIA CON IMAGEN CORPORATIVA REINTEGRADA v5.0 ===== -->
        <section class="py-16 md:py-24 bg-neutral-50/50 border-b border-neutral-100">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- 📸 IMAGEN INSTITUCIONAL REINTEGRADA (Lado Izquierdo - Ancho 6 de 12 columnas) -->
                <div class="lg:col-span-6 relative" data-aos="fade-right" data-aos-duration="900">
                    <div class="absolute -inset-4 bg-gradient-to-tr from-[#a31a16]/10 to-transparent rounded-[40px] blur-xl opacity-60 pointer-events-none"></div>
                    <div class="relative rounded-[32px] overflow-hidden shadow-xl border border-neutral-100 p-2 bg-white">
                        <img src="assets/img/empresa-003.png" alt="Instalaciones COAC 15 de Agosto" class="w-full h-[640px] md:h-[800px] rounded-[24px] object-cover hover:scale-[1.01] transition-transform duration-500">
                    </div>
                </div>

                <!-- TEXTOS DE BIENVENIDA (Lado Derecho - Ancho 6 de 12 columnas) -->
                <div class="lg:col-span-6" data-aos="fade-left" data-aos-duration="900" data-aos-delay="150">
                    <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-3 flex items-center gap-2">
                        <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Pilares Fundamentales COAC
                    </div>
                    <h2 class="text-2xl md:text-3xl font-black text-neutral-800 tracking-tight mb-6">Confianza Construida con Hechos Claros</h2>
                    <div class="text-neutral-600 text-sm leading-relaxed space-y-4 font-medium text-justify">
                        <p>La transparencia es uno de los pilares fundamentales de nuestra cooperativa. En la Cooperativa de Ahorro y Crédito 15 de Agosto, creemos que la confianza se construye con hechos claros, decisiones responsables y comunicación abierta con todos nuestros socios.</p>
                        <p>Ser transparentes significa informar con honestidad sobre el estado de nuestra cooperativa, cómo se gestionan los recursos y cuáles son los resultados de nuestras acciones. Cada estado financiero, cada proyecto y cada decisión que tomamos está pensado para que todos los socios puedan conocer y entender cómo avanzamos juntos.</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- ===== SECCIÓN DE DOCUMENTOS AUDITADOS ===== -->
        <section class="py-16 md:py-24 max-w-7xl mx-auto px-6 space-y-20">
            
            <!-- 📊 CATEGORÍA A: INDICADORES -->
            <div data-aos="fade-up">
                <div class="flex items-center gap-3 mb-8">
                    <div class="h-10 w-1 bg-[#a31a16] rounded-full"></div>
                    <h3 class="text-2xl font-black text-neutral-800 tracking-tight">Indicadores de Gestión</h3>
                </div>

                <!-- Grid en 2 Columnas para los PDFs de la Base de Datos -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <?php
                    $listdocumento = $fnindex->fnindex_rdocumentos_tipo(2);
                    while ($menudocumento = $listdocumento->fetch_assoc()) {
                    ?>
                        <a href="documentos/<?php echo $menudocumento['url_doc'] ?>" target="_blank" class="group flex items-center justify-between p-4 bg-neutral-50 border border-neutral-100 rounded-2xl shadow-sm hover:border-[#a31a16]/20 hover:bg-white hover:-translate-y-0.5 transition-all duration-300">
                            <div class="flex items-center gap-3.5 min-w-0">
                                <div class="w-10 h-10 rounded-xl bg-red-600/5 text-red-600 flex items-center justify-center shrink-0 border border-red-600/10 group-hover:bg-[#a31a16] group-hover:text-white transition-colors shadow-inner-sm">
                                    <i class="fa-solid fa-file-pdf text-sm"></i>
                                </div>
                                <div class="flex flex-col min-w-0">
                                    <span class="text-xs font-black text-neutral-700 leading-snug group-hover:text-[#a31a16] transition-colors truncate pr-2"><?php echo arreglar_mojibake($menudocumento['titulo_doc']) ?></span>
                                    <span class="text-[10px] text-neutral-400 font-bold mt-0.5"><i class="fa-regular fa-calendar text-[9px] mr-1"></i> Actualizado: <?php echo $menudocumento['fecha_doc'] ?></span>
                                </div>
                            </div>
                            <div class="w-7 h-7 rounded-lg bg-white text-neutral-400 border border-neutral-100 flex items-center justify-center group-hover:bg-[#a31a16]/5 group-hover:text-[#a31a16] transition-all shadow-sm">
                                <i class="fa-solid fa-download text-[10px]"></i>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>

            <!-- 🏛️ CATEGORÍA B: GOBERNANZA -->
            <div data-aos="fade-up">
                <div class="flex items-center gap-3 mb-8">
                    <div class="h-10 w-1 bg-[#a31a16] rounded-full"></div>
                    <h3 class="text-2xl font-black text-neutral-800 tracking-tight">Estructura de Gobernanza</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <?php
                    $listdocumento = $fnindex->fnindex_rdocumentos_tipo(3);
                    while ($menudocumento = $listdocumento->fetch_assoc()) {
                    ?>
                        <a href="documentos/<?php echo $menudocumento['url_doc'] ?>" target="_blank" class="group flex items-center justify-between p-4 bg-neutral-50 border border-neutral-100 rounded-2xl shadow-sm hover:border-[#a31a16]/20 hover:bg-white hover:-translate-y-0.5 transition-all duration-300">
                            <div class="flex items-center gap-3.5 min-w-0">
                                <div class="w-10 h-10 rounded-xl bg-red-600/5 text-red-600 flex items-center justify-center shrink-0 border border-red-600/10 group-hover:bg-[#a31a16] group-hover:text-white transition-colors shadow-inner-sm">
                                    <i class="fa-solid fa-file-pdf text-sm"></i>
                                </div>
                                <div class="flex flex-col min-w-0">
                                    <span class="text-xs font-black text-neutral-700 leading-snug group-hover:text-[#a31a16] transition-colors truncate pr-2"><?php echo arreglar_mojibake($menudocumento['titulo_doc']) ?></span>
                                    <span class="text-[10px] text-neutral-400 font-bold mt-0.5"><i class="fa-regular fa-calendar text-[9px] mr-1"></i> Actualizado: <?php echo $menudocumento['fecha_doc'] ?></span>
                                </div>
                            </div>
                            <div class="w-7 h-7 rounded-lg bg-white text-neutral-400 border border-neutral-100 flex items-center justify-center group-hover:bg-[#a31a16]/5 group-hover:text-[#a31a16] transition-all shadow-sm">
                                <i class="fa-solid fa-download text-[10px]"></i>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <!-- 📈 CATEGORÍA C: INFORMACIÓN FINANCIERA -->
            <div data-aos="fade-up">
                <div class="flex items-center gap-3 mb-8">
                    <div class="h-10 w-1 bg-[#a31a16] rounded-full"></div>
                    <h3 class="text-2xl font-black text-neutral-800 tracking-tight">Información Financiera Auditada</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <?php
                    $listdocumento = $fnindex->fnindex_rdocumentos_tipo(4);
                    while ($menudocumento = $listdocumento->fetch_assoc()) {
                    ?>
                        <a href="documentos/<?php echo $menudocumento['url_doc'] ?>" target="_blank" class="group flex items-center justify-between p-4 bg-neutral-50 border border-neutral-100 rounded-2xl shadow-sm hover:border-[#a31a16]/20 hover:bg-white hover:-translate-y-0.5 transition-all duration-300">
                            <div class="flex items-center gap-3.5 min-w-0">
                                <div class="w-10 h-10 rounded-xl bg-red-600/5 text-red-600 flex items-center justify-center shrink-0 border border-red-600/10 group-hover:bg-[#a31a16] group-hover:text-white transition-colors shadow-inner-sm">
                                    <i class="fa-solid fa-file-pdf text-sm"></i>
                                </div>
                                <div class="flex flex-col min-w-0">
                                    <span class="text-xs font-black text-neutral-700 leading-snug group-hover:text-[#a31a16] transition-colors truncate pr-2"><?php echo arreglar_mojibake($menudocumento['titulo_doc']) ?></span>
                                    <span class="text-[10px] text-neutral-400 font-bold mt-0.5"><i class="fa-regular fa-calendar text-[9px] mr-1"></i> Actualizado: <?php echo $menudocumento['fecha_doc'] ?></span>
                                </div>
                            </div>
                            <div class="w-7 h-7 rounded-lg bg-white text-neutral-400 border border-neutral-100 flex items-center justify-center group-hover:bg-[#a31a16]/5 group-hover:text-[#a31a16] transition-all shadow-sm">
                                <i class="fa-solid fa-download text-[10px]"></i>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- ===== FIN SECCIÓN DOCUMENTOS AUDITADOS ===== -->

        <!--===== FOOTER AREA =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>

        <?php include "scripts-v2.php"; ?>
    </body>
</html>
