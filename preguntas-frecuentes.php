<?php
require './controler/conexion.php';
include './fn/fn-credito.php';
require './funciones/fn-index.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();
require_once './funciones/fn-utilidades.php';
$tituloPagina = 'Preguntas Frecuentes';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Preguntas Frecuentes - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
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

        <!-- 🟥 1. LA FRANJA ROJA DE SIEMPRE: Gradiente Rojo Corporativo con Texto Blanco -->
        <div class="w-full bg-gradient-to-br from-[#7a1310] to-[#a31a16] h-[200px] md:h-[240px] flex items-center border-b border-[#7a1310]/20 shadow-inner">
            <div class="max-w-7xl mx-auto px-6 w-full text-center">
                <div data-aos="fade-up" data-aos-duration="800">
                    <h2 class="text-3xl md:text-5xl font-black text-white tracking-tight mb-3 drop-shadow-sm">
                        Centro de Soporte
                    </h2>
                    <div class="text-xs md:text-sm font-bold text-white/70 tracking-wide">
                        <a href="index.php" class="hover:text-white transition-colors">Inicio</a> 
                        <i class="fa-solid fa-angle-right text-[10px] mx-2 opacity-50"></i> 
                        <span class="text-[#ffd9d6] font-extrabold">Preguntas Frecuentes</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== SECCIÓN DE CONSULTAS ACORDEÓN ===== -->
        <section class="py-16 md:py-24 max-w-3xl mx-auto px-6">
            <div class="text-center mb-12" data-aos="fade-up">
                <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-2 flex items-center justify-center gap-2">
                    <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Despeja tus dudas <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span>
                </div>
                <h2 class="text-3xl font-black text-neutral-800 tracking-tight mb-3">Resolución de Dudas Frecuentes</h2>
                <p class="text-neutral-500 text-sm leading-relaxed font-medium">Encuentra respuestas rápidas sobre nuestras cuentas de ahorro, créditos institucionales, canales electrónicos y requisitos generales para socios.</p>
            </div>

            <div class="space-y-4">
                <?php
                $listfaq = $fnindex->fnindex_rpreguntas_frecuentes_all();
                $i = 0;
                while ($menufaq = $listfaq->fetch_assoc()) {
                    $i++;
                    ?>
                    <!-- 🟢 ACORDEÓN MEJORADO: Al abrirse, el borde cambia a un tono rojo vino sutil de forma premium -->
                    <details class="group bg-white border border-neutral-100 rounded-2xl shadow-soft overflow-hidden transition-all duration-300 group-open:border-[#a31a16]/30" data-aos="fade-up" data-aos-delay="<?php echo min($i, 5) * 60 ?>" <?php echo $i === 1 ? 'open' : '' ?>>
                        <summary class="cursor-pointer list-none flex items-center justify-between gap-4 px-6 py-5 font-bold text-neutral-800 hover:text-[#a31a16] transition-colors select-none">
                            <span class="text-sm md:text-base tracking-tight leading-snug"><?php echo arreglar_mojibake($menufaq['preg_prefrec']) ?></span>
                            <!-- Icono rotativo de FontAwesome unificado -->
                            <div class="w-7 h-7 rounded-full bg-neutral-50 flex items-center justify-center text-neutral-400 group-hover:bg-[#a31a16]/5 group-hover:text-[#a31a16] transition-all group-open:rotate-180 shrink-0">
                                <i class="fa-solid fa-chevron-down text-[10px]"></i>
                            </div>
                        </summary>
                        <div class="px-6 pb-5 text-neutral-500 text-xs md:text-sm leading-relaxed text-justify font-medium border-t border-neutral-50/50 pt-4 animate-[fadeIn_0.2s_ease-out]">
                            <?php echo arreglar_mojibake($menufaq['resp_prefrec']) ?>
                        </div>
                    </details>
                    <?php
                }
                if ($i === 0) {
                    echo '<div class="bg-neutral-50 rounded-2xl p-8 border border-neutral-100 text-center"><p class="text-neutral-400 font-bold text-sm">Todavía no hay preguntas frecuentes publicadas.</p></div>';
                }
                ?>
            </div>
        </section>

        <!--===== FOOTER AREA =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>

        <?php include "scripts-v2.php"; ?>
    </body>
</html>
