<?php
require './controler/conexion.php';
require './funciones/fn-index.php';
require_once './funciones/fn-utilidades.php';
$con = new Conecciones();
$fnindex = new Fn_index();
$tituloPagina = 'Elecciones 2026';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Elecciones 2026 - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
        <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">
        <?php include "head-v2.php"; ?>
    </head>
    <body class="v2 bg-white text-neutral-800">

        <!--===== PRELOADER =======-->
        <div class="preloader">
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

        <!-- =====HERO AREA UNIFICADA: Gradiente Rojo Corporativo v4.0===== -->
        <div class="w-full bg-gradient-to-br from-[#7a1310] to-[#a31a16] h-[220px] md:h-[260px] flex items-center border-b border-[#7a1310]/20 shadow-inner">
            <div class="max-w-7xl mx-auto px-6 w-full text-center">
                <div data-aos="fade-up" data-aos-duration="800">
                    <!-- Título Máster Blanco Impecable -->
                    <h2 class="text-3xl md:text-5xl font-black text-white tracking-tight mb-3 drop-shadow-sm">
                        Elecciones 2026
                    </h2>
                    <!-- Migas de Pan (Breadcrumbs) en Blanco y Rosa Suave -->
                    <div class="text-xs md:text-sm font-bold text-white/70 tracking-wide">
                        <a href="index.php" class="hover:text-white transition-colors">Inicio</a> 
                        <i class="fa-solid fa-angle-right text-[10px] mx-2 opacity-50"></i> 
                        <span class="text-[#ffd9d6] font-extrabold">Elecciones 2026</span>
                    </div>
                </div>
            </div>
        </div>


        <!--===== NARRATIVA DEMOCRÁTICA INSTITUCIONAL ===== -->
        <section class="py-16 md:py-24 bg-neutral-50/50 border-b border-neutral-100">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-6" data-aos="fade-right">
                    <div class="absolute -inset-4 bg-gradient-to-tr from-[#a31a16]/10 to-transparent rounded-[40px] blur-xl opacity-60 pointer-events-none"></div>
                    <div class="relative rounded-[32px] overflow-hidden shadow-xl border border-neutral-100 p-2 bg-white">
                        <img src="assets/img/empresa-003.png" alt="COAC 15 de Agosto" class="w-full h-auto rounded-[24px] object-cover">
                    </div>
                </div>

                <div class="lg:col-span-6" data-aos="fade-left">
                    <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-3 flex items-center gap-2">
                        <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Participación Ciudadana COAC
                    </div>
                    <h2 class="text-3xl font-black text-neutral-800 tracking-tight mb-4">Gobernanza y Transparencia</h2>
                    <p class="text-neutral-500 text-sm md:text-base leading-relaxed text-justify font-medium">
                        La Cooperativa de Ahorro y Crédito 15 de Agosto existe gracias a la participación activa de sus socios. Nuestro propósito no es solo ofrecer servicios financieros; es impulsar el bienestar de nuestra comunidad, fortalecer la confianza y construir oportunidades para todos. Por eso, elegir a quienes nos representarán significa elegir quién liderará con transparencia, quién cuidará de nuestros recursos y quién continuará construyendo nuestro desarrollo colectivo.  
                    </p>
                </div>
            </div>
        </section>
        <!-- ===== CATALOGO DE DOCUMENTOS DE TRANSPARENCIA ELECCIONES v3.0 ===== -->
        <section class="py-16 md:py-24 max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                
                <!-- REJILLA DE TARJETAS DE DESCARGA (Lado Izquierdo - Ancho 7 de 12) -->
                <div class="lg:col-span-7" data-aos="fade-right">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="h-10 w-1 bg-[#a31a16] rounded-full"></div>
                        <h2 class="text-2xl font-black text-neutral-800 tracking-tight">Documentos y Reglamento Oficial</h2>
                    </div>

                    <!-- Grid Dinámico en 2 Columnas de PDFs corporativos -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        
                        <?php
                        // Array limpio con la lista oficial de tus 12 PDFs y Recinto de la base de datos
                        $documentos = [
                            ['url' => 'doc/LISTA_GANADORA_0.pdf', 'titulo' => 'Resultados Elecciones 2026', 'is_modal' => false],
                            ['url' => 'doc/LISTA_CALIFICADA_COAC15AG.pdf', 'titulo' => 'Listas Calificadas', 'is_modal' => false],
                            ['url' => 'doc/REGLAMENTO-DE-ELECCIONES-1.pdf', 'titulo' => 'Reglamento de Elecciones', 'is_modal' => false],
                            ['url' => 'doc/CONVOCATORIA.pdf', 'titulo' => 'Convocatoria 2026', 'is_modal' => false],
                            ['url' => 'doc/SOLICITUD_DE_INSCRIPCION_DE_LISTA.pdf', 'titulo' => 'Formato Inscripción de Lista', 'is_modal' => false],
                            ['url' => 'doc/5_FICHA_INSCRIPCION.pdf', 'titulo' => 'Ficha Registro Candidatos', 'is_modal' => false],
                            ['url' => 'doc/3_DECLARACION_JURADA_CANDIDATOS.pdf', 'titulo' => 'Declaración Jurada Candidatos', 'is_modal' => false],
                            ['url' => 'doc/5_INSTRUCTIVO_COAC15AG.pdf', 'titulo' => 'Instructivo de Elecciones', 'is_modal' => false],
                            ['url' => 'doc/LISTA_CALIFICADA_COAC15AG (1).pdf', 'titulo' => 'Listas Calificadas Final', 'is_modal' => false],
                            ['url' => '#', 'titulo' => 'Recintos Electorales', 'is_modal' => true],
                            ['url' => 'doc/CALENDARIO.pdf', 'titulo' => 'Calendarios Oficiales', 'is_modal' => false],
                            ['url' => 'doc/PROCLAMACION_LISTA1.pdf', 'titulo' => 'Proclamación Electos', 'is_modal' => false],
                        ];

                        foreach ($documentos as $idx => $doc) {
                            $onClick = $doc['is_modal'] ? 'onclick="abrirRecinto()"' : '';
                            $target = $doc['is_modal'] ? '' : 'target="_blank"';
                            $href = $doc['is_modal'] ? 'javascript:void(0)' : $doc['url'];
                        ?>
                            <!-- TARJETA INDIVIDUAL DE DOCUMENTO -->
                            <a href="<?php echo $href; ?>" <?php echo $target; ?> <?php echo $onClick; ?> class="group flex items-center justify-between p-4 bg-neutral-50 border border-neutral-100/80 rounded-2xl shadow-sm hover:border-[#a31a16]/20 hover:bg-white hover:-translate-y-0.5 transition-all duration-300">
                                <div class="flex items-center gap-3.5 min-w-0">
                                    <div class="w-10 h-10 rounded-xl bg-red-600/5 text-red-600 flex items-center justify-center shrink-0 border border-red-600/10 group-hover:bg-[#a31a16] group-hover:text-white transition-colors">
                                        <i class="fa-solid fa-file-pdf text-sm"></i>
                                    </div>
                                    <span class="text-xs font-black text-neutral-700 leading-snug group-hover:text-[#a31a16] transition-colors truncate pr-2"><?php echo $doc['titulo']; ?></span>
                                </div>
                                <div class="w-7 h-7 rounded-lg bg-white text-neutral-400 border border-neutral-100 flex items-center justify-center group-hover:bg-[#a31a16]/5 group-hover:text-[#a31a16] transition-all">
                                    <i class="fa-solid fa-download text-[10px]"></i>
                                </div>
                            </a>
                        <?php } ?>

                    </div>
                </div>
                <!-- PANEL FOTOGRÁFICO DE RESPALDO (Lado Derecho - Ancho 5 de 12) -->
                <div class="lg:col-span-5" data-aos="fade-left">
                    <div class="relative rounded-[32px] overflow-hidden shadow-xl border border-neutral-100 p-2 bg-neutral-50/50">
                        <img src="assets/img/persona_coop_001.png" alt="Elecciones COAC" class="w-full h-auto rounded-[24px] object-cover hover:scale-[1.01] transition-transform duration-500">
                    </div>
                </div>

            </div>
        </section>

        <!-- ===== MODAL PRESTIGIO: RECINTOS ELECTORALES (EFECTO CRISTAL) ===== -->
        <div id="modalRecinto" class="fixed inset-0 z-50 hidden bg-black/60 backdrop-blur-sm transition-opacity duration-300 flex items-center justify-center p-4">
            <div class="relative bg-white rounded-[32px] max-w-2xl w-full p-6 shadow-2xl border border-neutral-100 transform scale-95 transition-transform duration-300 max-h-[90vh] overflow-y-auto">
                
                <!-- Encabezado del Modal -->
                <div class="flex justify-between items-center mb-4 pb-3 border-b border-neutral-100">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-[#a31a16]/10 text-[#a31a16] flex items-center justify-center text-sm shadow-inner"><i class="fa-solid fa-map-location-dot"></i></div>
                        <h3 class="text-base font-black text-neutral-800 tracking-tight">Recintos Electorales Autorizados</h3>
                    </div>
                    <button onclick="cerrarRecinto()" class="w-8 h-8 rounded-full bg-neutral-50 text-neutral-400 hover:bg-[#a31a16]/5 hover:text-[#a31a16] flex items-center justify-center transition-all" aria-label="Cerrar">
                        <i class="fa-solid fa-xmark text-base"></i>
                    </button>
                </div>

                <!-- Imagen del Recinto Electoral -->
                <div class="rounded-2xl overflow-hidden border border-neutral-100 shadow-inner bg-neutral-50 p-1">
                    <img src="assets/img/recintos-electorales.jpeg" class="w-full h-auto rounded-xl object-contain mx-auto" alt="Mapa Recintos">
                </div>
            </div>
        </div>

        <script>
        // Funciones nativas ultra ligeras para el despliegue del Modal
        function abrirRecinto() {
            const modal = document.getElementById("modalRecinto");
            modal.classList.remove("hidden");
            document.body.classList.add("overflow-hidden"); // Evita el scroll de fondo
        }

        function cerrarRecinto() {
            const modal = document.getElementById("modalRecinto");
            modal.classList.add("hidden");
            document.body.classList.remove("overflow-hidden");
        }

        // Cerrar modal si el socio hace clic afuera de la caja blanca
        window.onclick = function(event) {
            const modal = document.getElementById("modalRecinto");
            if (event.target == modal) {
                cerrarRecinto();
            }
        }
        </script>

        <!--===== FOOTER AREA =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>

        <?php include "scripts-v2.php"; ?>
    </body>
</html>
