<?php
require './controler/conexion.php';
include './fn/fn-credito.php';
require './funciones/fn-index.php';
require_once './funciones/fn-utilidades.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();

// CAPTURA DINÁMICA: Atrapamos el ID que viaja en la URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 14;
$deteducafinan = $fnindex->fnindex_reducacion_financiera_x($id);

// Saneamos de forma matemática la codificación para rescatar las tildes del título
$titulo_articulo = !empty($deteducafinan[0]['titulo_edfi']) ? arreglar_mojibake($deteducafinan[0]['titulo_edfi']) : 'Artículo Educativo';
$resumen_articulo = !empty($deteducafinan[0]['resumen_edfi']) ? arreglar_mojibake($deteducafinan[0]['resumen_edfi']) : '';
$imagen_articulo = !empty($deteducafinan[0]['imagen_edfi']) ? $deteducafinan[0]['imagen_edfi'] : 'blog-img21.png';
$fecha_articulo = !empty($deteducafinan[0]['fecha_edfi']) ? $deteducafinan[0]['fecha_edfi'] : 'Actualizado';
$contenido_articulo = !empty($deteducafinan[0]['descripcion_edfi']) ? arreglar_mojibake($deteducafinan[0]['descripcion_edfi']) : '';

$tituloPagina = $titulo_articulo;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $titulo_articulo; ?> - COAC 15 de Agosto</title>
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

        <!-- 1. LA FRANJA ROJA DE SIEMPRE: Gradiente Rojo Corporativo Unificado -->
        <div class="w-full bg-gradient-to-br from-[#7a1310] to-[#a31a16] h-[200px] md:h-[240px] flex items-center border-b border-[#7a1310]/20 shadow-inner">
            <div class="max-w-7xl mx-auto px-6 w-full text-center">
                <div data-aos="fade-up" data-aos-duration="800">
                    <h2 class="text-2xl md:text-4xl font-black text-white tracking-tight mb-3 drop-shadow-sm line-clamp-2 max-w-4xl mx-auto">
                        <?php echo $titulo_articulo; ?>
                    </h2>
                    <div class="text-xs md:text-sm font-bold text-white/70 tracking-wide">
                        <a href="index.php" class="hover:text-white transition-colors">Inicio</a> 
                        <i class="fa-solid fa-angle-right text-[10px] mx-2 opacity-50"></i> 
                        <a href="educacion-financiera.php" class="hover:text-white transition-colors">Educación Financiera</a>
                        <i class="fa-solid fa-angle-right text-[10px] mx-2 opacity-50"></i>
                        <span class="text-[#ffd9d6] font-extrabold">Lectura de Artículo</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== CUERPO DEL ARTÍCULO COMPARTIDO ===== -->
        <section class="py-16 md:py-24 max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                
                <!-- COLUMNA PRINCIPAL DE LECTURA (Ancho 8 de 12) -->
                <div class="lg:col-span-8 space-y-6" data-aos="fade-right">
                    <div class="bg-neutral-50 rounded-[32px] p-6 md:p-8 border border-neutral-100 shadow-soft">
                        <h3 class="text-xl md:text-2xl font-black text-neutral-800 tracking-tight mb-4"><?php echo $titulo_articulo; ?></h3>
                        <p class="text-neutral-500 text-xs md:text-sm leading-relaxed text-justify font-medium mb-6"><?php echo $resumen_articulo; ?></p>
                        
                        <!-- Caja de Imagen Adaptativa Fluida -->
                        <div class="w-full rounded-2xl overflow-hidden shadow-md border border-neutral-200/40 p-1 bg-white mb-6">
                            <img src="assets/img/<?php echo $imagen_articulo; ?>" alt="Taller" class="w-full h-auto rounded-xl object-contain bg-white mx-auto">
                        </div>

                        <!-- Metadatos e Iconos Vectoriales corregidos de FontAwesome -->
                        <div class="flex flex-wrap gap-5 text-[11px] font-bold text-neutral-400 uppercase tracking-wider mb-6 pb-4 border-b border-neutral-100">
                            <span class="flex items-center gap-1.5"><i class="fa-regular fa-user text-[#a31a16] text-xs"></i> Por: Administrador</span>
                            <span class="text-neutral-200">|</span>
                            <span class="flex items-center gap-1.5"><i class="fa-regular fa-calendar-days text-[#a31a16] text-xs"></i> Publicado: <?php echo $fecha_articulo; ?></span>
                            <span class="text-neutral-200">|</span>
                            <span class="flex items-center gap-1.5"><i class="fa-solid fa-graduation-cap text-[#a31a16] text-xs"></i> Taller Finanzas</span>
                        </div>

                        <!-- Bloque de contenido enriquecido saneado de tildes -->
                        <div class="text-neutral-600 text-xs md:text-sm leading-relaxed text-justify font-medium prose max-w-none [&_p]:mb-4 [&_strong]:text-neutral-800">
                            <?php echo $contenido_articulo; ?>
                        </div>
                    </div>
                    <!-- Bloque de Compartir e Interacción en Redes -->
                    <div class="flex flex-col sm:flex-row justify-between items-center bg-neutral-50 rounded-2xl p-4 border border-neutral-100 gap-4 text-xs font-black">
                        <div class="flex items-center gap-2 text-neutral-400 uppercase tracking-wider">
                            <i class="fa-solid fa-tags text-[#a31a16]"></i> Tags: <span class="text-neutral-600 bg-white px-2.5 py-1 rounded-lg border border-neutral-100">Finanzas</span> <span class="text-neutral-600 bg-white px-2.5 py-1 rounded-lg border border-neutral-100">Desarrollo</span>
                        </div>
                        <div class="flex items-center gap-3 text-neutral-500">
                            <span class="uppercase tracking-wider text-neutral-400">Compartir:</span>
                            <a href="#" class="w-7 h-7 rounded-lg bg-white border border-neutral-100 text-neutral-400 hover:bg-[#a31a16] hover:text-white flex items-center justify-center transition-all shadow-sm"><i class="fa-brands fa-facebook-f text-[10px]"></i></a>
                            <a href="#" class="w-7 h-7 rounded-lg bg-white border border-neutral-100 text-neutral-400 hover:bg-[#a31a16] hover:text-white flex items-center justify-center transition-all shadow-sm"><i class="fa-brands fa-instagram text-[10px]"></i></a>
                        </div>
                    </div>
                </div>

                <!-- COLUMNA LATERAL DERECHA (Ancho 4 de 12) -->
                <div class="lg:col-span-4 space-y-6" data-aos="fade-left" data-aos-delay="150">
                    
                    <!-- Widget: Autor -->
                    <div class="bg-neutral-50 rounded-[28px] p-6 border border-neutral-100 shadow-soft text-center">
                        <h4 class="text-sm font-black text-neutral-800 tracking-tight mb-4 uppercase tracking-wider pb-2 border-b border-neutral-100">Autor Corporativo</h4>
                        <div class="w-20 h-24 rounded-2xl overflow-hidden mx-auto border border-neutral-200/50 p-1 bg-white mb-3 shadow-inner-sm">
                            <img src="assets/img/all-images/blog/blog-img20.png" class="w-full h-full object-cover rounded-xl" alt="Autor">
                        </div>
                        <p class="text-xs font-black text-neutral-700 uppercase tracking-wide">Departamento de TI</p>
                        <p class="text-[11px] text-neutral-400 font-bold mt-0.5">COAC 15 de Agosto</p>
                    </div>

                    <!-- Widget: Síguenos -->
                    <div class="bg-neutral-50 rounded-[28px] p-6 border border-neutral-100 shadow-soft text-center">
                        <h4 class="text-sm font-black text-neutral-800 tracking-tight mb-4 uppercase tracking-wider pb-2 border-b border-neutral-100">Síguenos en Línea</h4>
                        <div class="flex justify-center gap-3">
                            <a href="#" class="w-9 h-9 rounded-xl bg-white border border-neutral-100 text-neutral-400 hover:bg-[#a31a16] hover:text-white flex items-center justify-center transition-all shadow-sm"><i class="fa-brands fa-facebook-f text-sm"></i></a>
                            <a href="#" class="w-9 h-9 rounded-xl bg-white border border-neutral-100 text-neutral-400 hover:bg-[#a31a16] hover:text-white flex items-center justify-center transition-all shadow-sm"><i class="fa-brands fa-instagram text-sm"></i></a>
                            <a href="#" class="w-9 h-9 rounded-xl bg-white border border-neutral-100 text-neutral-400 hover:bg-[#a31a16] hover:text-white flex items-center justify-center transition-all shadow-sm"><i class="fa-brands fa-youtube text-sm"></i></a>
                        </div>
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
