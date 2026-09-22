<?php
require './controler/conexion.php';
include './fn/fn-credito.php';
require './funciones/fn-index.php';
require_once './funciones/fn-utilidades.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();
$textnosotros = $fnindex->fnindex_rtextosxtipo(5);
$tituloPagina = 'Nuestra Cooperativa';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nuestra Cooperativa - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
        <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">
        <?php include "head-v2.php"; ?>
    </head>
    <body class="v2 bg-white text-neutral-800">

        <?php include 'header.php'; ?>
        <?php include './partial-hero-interno.php'; ?>

        <!-- ===== QUIÉNES SOMOS + CIFRAS PREMIUM v3.0 ===== -->
        <section class="py-16 md:py-24 max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- CONTENEDOR DE IMAGEN CORPORATIVA CON ZOOM -->
            <div class="lg:col-span-5 relative" data-aos="fade-right" data-aos-duration="900">
                <div class="absolute -inset-4 bg-gradient-to-tr from-[#a31a16]/10 to-transparent rounded-[40px] blur-xl opacity-70 pointer-events-none"></div>
                <div class="relative rounded-[32px] overflow-hidden shadow-2xl bg-white border border-neutral-100 group">
                    <div class="relative rounded-[32px] overflow-hidden h-[360px] md:h-[440px]">
                        <img src="assets/img/<?php echo $textnosotros[0]['img_texto']; ?>" alt="Cooperativa 15 de Agosto" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent pointer-events-none"></div>
                    </div>
                </div>
            </div>
            
            <!-- TEXTO DE BIENVENIDA E INDICADORES DE CONFIANZA -->
            <div class="lg:col-span-7" data-aos="fade-left" data-aos-duration="900" data-aos-delay="150">
                <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-3 flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Quiénes somos
                </div>
                
                <div class="text-neutral-600 text-sm md:text-base leading-relaxed mb-10 [&_p]:mb-4 font-medium">
                    <?php echo arreglar_mojibake($textnosotros[0]['texto_texto']); ?>
                </div>

                <!-- METRICAS DE CONFIANZA ESTILIZADAS EN CAPSULAS GLASS -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="text-center bg-gradient-to-br from-white to-neutral-50 border border-neutral-100 shadow-soft rounded-2xl py-6 hover:border-[#a31a16]/20 hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-3xl font-black text-[#a31a16] tracking-tight">1.023+</h3>
                        <p class="text-[11px] font-black text-neutral-400 uppercase tracking-wider mt-1.5">Socios activos</p>
                    </div>
                    <div class="text-center bg-gradient-to-br from-white to-neutral-50 border border-neutral-100 shadow-soft rounded-2xl py-6 hover:border-[#a31a16]/20 hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-3xl font-black text-[#a31a16] tracking-tight">10+</h3>
                        <p class="text-[11px] font-black text-neutral-400 uppercase tracking-wider mt-1.5">Años de Solidez</p>
                    </div>
                    <div class="text-center bg-gradient-to-br from-white to-neutral-50 border border-neutral-100 shadow-soft rounded-2xl py-6 hover:border-[#a31a16]/20 hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-3xl font-black text-[#a31a16] tracking-tight">4.500+</h3>
                        <p class="text-[11px] font-black text-neutral-400 uppercase tracking-wider mt-1.5">Créditos entregados</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== MISIÓN Y VISIÓN ASIMÉTRICA v3.0 ===== -->
        <section class="bg-gradient-to-br from-white via-[#a31a16]/5 to-white py-16 md:py-24 border-y border-neutral-50">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- TARJETA DE MISIÓN -->
                <div class="group bg-white rounded-3xl p-8 shadow-soft border border-neutral-100 hover:border-[#a31a16]/20 hover:-translate-y-1 hover:shadow-softhover transition-all duration-300 flex flex-col h-full justify-between" data-aos="fade-up">
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-[#a31a16]/5 flex items-center justify-center mb-6 group-hover:bg-[#a31a16] transition-colors duration-300 shadow-inner">
                            <img src="assets/img/icons/mission-icon2.svg" class="w-6 h-6 text-[#a31a16] filter group-hover:brightness-0 group-hover:invert transition-all" alt="Misión">
                        </div>
                        <h2 class="text-2xl font-black text-neutral-800 mb-4 tracking-tight">Misión</h2>
                        <p class="text-sm text-neutral-500 leading-relaxed font-medium"><?php echo arreglar_mojibake($textnosotros[0]['car1_texto']); ?></p>
                    </div>
                </div>
                <!-- TARJETA DE VISIÓN -->
                <div class="group bg-white rounded-3xl p-8 shadow-soft border border-neutral-100 hover:border-[#a31a16]/20 hover:-translate-y-1 hover:shadow-softhover transition-all duration-300 flex flex-col h-full justify-between" data-aos="fade-up" data-aos-delay="150">
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-[#a31a16]/5 flex items-center justify-center mb-6 group-hover:bg-[#a31a16] transition-colors duration-300 shadow-inner">
                            <img src="assets/img/icons/mission-icon1.svg" class="w-6 h-6 text-[#a31a16] filter group-hover:brightness-0 group-hover:invert transition-all" alt="Visión">
                        </div>
                        <h2 class="text-2xl font-black text-neutral-800 mb-4 tracking-tight">Visión</h2>
                        <p class="text-sm text-neutral-500 leading-relaxed font-medium"><?php echo arreglar_mojibake($textnosotros[0]['car2_texto']); ?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== VALORES INSTITUCIONALES EDITORIALES v3.0 ===== -->
        <section class="py-16 md:py-24 max-w-7xl mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-3 flex items-center justify-center gap-2">
                    <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Lo que nos define <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span>
                </div>
                <h2 class="text-3xl md:text-4xl font-black text-neutral-800 tracking-tight">Nuestros Valores</h2>
            </div>

            <!-- Grid de Valores con Efectos de Iluminación Interna -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $valores = [
                    ['icon' => 'work-icon4.svg', 'titulo' => 'Lealtad laboral', 'texto' => 'Valoramos la fidelidad, el respeto y el compromiso inquebrantable con nuestra institución.'],
                    ['icon' => 'work-icon5.svg', 'titulo' => 'Humildad', 'texto' => 'Reconocemos áreas de oportunidad y estamos abiertos a corregir y mejorar continuamente.'],
                    ['icon' => 'work-icon6.svg', 'titulo' => 'Honestidad', 'texto' => 'Actuamos con absoluta transparencia y veracidad en salvaguarda de los fondos del socio.'],
                    ['icon' => 'work-icon4.svg', 'titulo' => 'Responsabilidad', 'texto' => 'Cumplimos con rigor nuestras funciones asumiendo las consecuencias de cada acción.'],
                    ['icon' => 'work-icon5.svg', 'titulo' => 'Compromiso', 'texto' => 'Nos enfocamos de forma íntegra en los objetivos institucionales impulsando su solidez.'],
                    ['icon' => 'work-icon6.svg', 'titulo' => 'Trabajo en equipo', 'texto' => 'Fomentamos la sinergia colectiva para alcanzar metas trascendentales que beneficien a la COAC.'],
                ];
                foreach ($valores as $idx => $v) {
                    ?>
                    <div class="group relative bg-white border border-neutral-100 rounded-3xl p-8 shadow-soft hover:border-[#a31a16]/20 hover:-translate-y-2 hover:shadow-softhover transition-all duration-300 flex flex-col justify-between h-64" data-aos="zoom-in" data-aos-delay="<?php echo $idx * 60 ?>">
                        <!-- Capa de luz de fondo -->
                        <div class="absolute inset-0 bg-gradient-to-br from-[#a31a16]/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-3xl pointer-events-none"></div>
                        
                        <div class="relative z-10">
                            <div class="w-12 h-12 rounded-xl bg-neutral-50 flex items-center justify-center mb-5 group-hover:bg-[#a31a16] transition-all duration-300 border border-neutral-100 group-hover:border-[#a31a16]/20 shadow-sm shrink-0">
                            <img src="assets/img/icons/<?php echo $v['icon'] ?>" 
                                 class="w-6 h-6 transform group-hover:scale-110 group-hover:!brightness-200 group-hover:!invert transition-all duration-300" 
                                 style="filter: brightness(0) saturate(100%) invert(18%) sepia(51%) saturate(5427%) hue-rotate(349deg) brightness(88%) contrast(96%); min-height: 24px; max-height: 24px;" 
                                 alt="">
                            </div>
                            <h3 class="text-base font-black text-neutral-800 mb-2 group-hover:text-[#a31a16] transition-colors tracking-tight"><?php echo $v['titulo'] ?></h3>
                            <p class="text-neutral-500 text-xs leading-relaxed font-medium"><?php echo $v['texto'] ?></p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </section>

        <?php include './footer.php' ?>
        <?php include "scripts-v2.php"; ?>
    </body>
</html>

