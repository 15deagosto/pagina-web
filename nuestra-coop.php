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

        <!-- ===== QUIÉNES SOMOS + CIFRAS ===== -->
        <section class="py-16 md:py-24 max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div class="v2-media-frame v2-media-frame--tall shadow-soft" data-aos="fade-right">
                <img src="assets/img/<?php echo $textnosotros[0]['img_texto']; ?>" alt="Cooperativa 15 de Agosto">
            </div>
            <div data-aos="fade-left">
                <div class="text-rojo font-bold uppercase text-xs tracking-widest mb-2 flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-rojo inline-block"></span> Quiénes somos
                </div>
                <div class="text-neutral-600 leading-relaxed mb-8 [&_p]:mb-4"><?php echo arreglar_mojibake($textnosotros[0]['texto_texto']); ?></div>

                <div class="grid grid-cols-3 gap-4">
                    <div class="text-center bg-rojo-light/50 rounded-2xl py-5">
                        <h3 class="text-2xl md:text-3xl font-extrabold text-rojo">1.023+</h3>
                        <p class="text-xs text-neutral-500 mt-1">Socios activos</p>
                    </div>
                    <div class="text-center bg-rojo-light/50 rounded-2xl py-5">
                        <h3 class="text-2xl md:text-3xl font-extrabold text-rojo">10+</h3>
                        <p class="text-xs text-neutral-500 mt-1">Años</p>
                    </div>
                    <div class="text-center bg-rojo-light/50 rounded-2xl py-5">
                        <h3 class="text-2xl md:text-3xl font-extrabold text-rojo">4.500+</h3>
                        <p class="text-xs text-neutral-500 mt-1">Créditos concedidos</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== MISIÓN Y VISIÓN ===== -->
        <section class="bg-rojo-light/40 py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-3xl p-8 shadow-soft" data-aos="fade-up">
                    <div class="w-14 h-14 rounded-2xl bg-rojo flex items-center justify-center mb-5">
                        <img src="assets/img/icons/mission-icon2.svg" class="w-6 h-6 brightness-0 invert" alt="">
                    </div>
                    <h2 class="text-2xl font-extrabold mb-3">Misión</h2>
                    <p class="text-neutral-600 leading-relaxed"><?php echo arreglar_mojibake($textnosotros[0]['car1_texto']); ?></p>
                </div>
                <div class="bg-white rounded-3xl p-8 shadow-soft" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 rounded-2xl bg-rojo flex items-center justify-center mb-5">
                        <img src="assets/img/icons/mission-icon1.svg" class="w-6 h-6 brightness-0 invert" alt="">
                    </div>
                    <h2 class="text-2xl font-extrabold mb-3">Visión</h2>
                    <p class="text-neutral-600 leading-relaxed"><?php echo arreglar_mojibake($textnosotros[0]['car2_texto']); ?></p>
                </div>
            </div>
        </section>

        <!-- ===== NUESTROS VALORES ===== -->
        <section class="py-16 md:py-24 max-w-7xl mx-auto px-6">
            <div class="text-center mb-12" data-aos="fade-up">
                <div class="text-rojo font-bold uppercase text-xs tracking-widest mb-2 flex items-center justify-center gap-2">
                    <span class="w-6 h-0.5 bg-rojo inline-block"></span> Lo que nos define <span class="w-6 h-0.5 bg-rojo inline-block"></span>
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold">Nuestros Valores</h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $valores = [
                    ['icon' => 'work-icon4.svg', 'titulo' => 'Lealtad laboral', 'texto' => 'Valoramos la fidelidad, el respeto y el compromiso con nuestra cooperativa.'],
                    ['icon' => 'work-icon5.svg', 'titulo' => 'Humildad', 'texto' => 'Reconocemos nuestros errores y estamos abiertos a corregirlos y mejorar continuamente.'],
                    ['icon' => 'work-icon6.svg', 'titulo' => 'Honestidad', 'texto' => 'Actuamos con transparencia y veracidad, asegurando que nuestras acciones no perjudiquen los objetivos de la institución.'],
                    ['icon' => 'work-icon4.svg', 'titulo' => 'Responsabilidad', 'texto' => 'Cumplimos con nuestras funciones y asumimos las consecuencias de nuestras decisiones y acciones.'],
                    ['icon' => 'work-icon5.svg', 'titulo' => 'Compromiso', 'texto' => 'Nos enfocamos en los objetivos de la institución, con un firme compromiso hacia su crecimiento.'],
                    ['icon' => 'work-icon6.svg', 'titulo' => 'Trabajo en equipo', 'texto' => 'Fomentamos la colaboración para alcanzar metas trascendentales y contribuir al éxito colectivo.'],
                ];
                foreach ($valores as $idx => $v) {
                    ?>
                    <div class="bg-white border border-neutral-100 rounded-3xl p-8 shadow-soft hover:shadow-softhover hover:-translate-y-1 transition-all" data-aos="zoom-in" data-aos-delay="<?php echo $idx * 80 ?>">
                        <div class="w-14 h-14 rounded-2xl bg-rojo-light flex items-center justify-center mb-5">
                            <img src="assets/img/icons/<?php echo $v['icon'] ?>" class="w-7 h-7" alt="">
                        </div>
                        <h3 class="text-lg font-bold mb-2"><?php echo $v['titulo'] ?></h3>
                        <p class="text-neutral-500 text-sm leading-relaxed"><?php echo $v['texto'] ?></p>
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
