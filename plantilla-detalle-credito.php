<?php
/*
 * Plantilla compartida para el detalle de cada línea de crédito.
 * El archivo que la incluye debe definir antes:
 *   $titulo, $desc, $tipoCredito, $bannerImg,
 *   $montoTexto, $perfilTexto, $plazoTexto,
 *   $segmentoLabel (opcional, por defecto "Segmento"), $segmentoTexto
 * Requiere que $fnindex, header.php y footer.php ya estén disponibles.
 */
require_once './funciones/fn-utilidades.php';
if (!isset($segmentoLabel)) {
    $segmentoLabel = 'Segmento';
}
$titulo = arreglar_mojibake($titulo);
$desc = arreglar_mojibake($desc);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $titulo ?> - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
        <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">
        <?php include "head-v2.php"; ?>
    </head>
    <body class="v2 bg-white text-neutral-800">

        <?php include 'header.php'; ?>

        <!-- ===== HERO ===== -->
        <section class="page-hero text-white">
            <div class="max-w-7xl mx-auto px-6 py-16 text-center" data-aos="fade-up">
                <span class="inline-block glass px-4 py-1 rounded-full text-xs font-bold uppercase tracking-wide mb-4"><?php echo htmlspecialchars($tipoCredito) ?></span>
                <h1 class="text-3xl md:text-5xl font-extrabold mb-3"><?php echo $titulo ?></h1>
                <p class="text-white/80"><a href="index.php" class="hover:underline">Inicio</a> <i class="fa-solid fa-angle-right text-xs mx-1"></i> <?php echo $titulo ?></p>
            </div>
        </section>

        <!-- ===== DESCRIPCIÓN ===== -->
        <section class="py-16 max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div class="grid grid-cols-2 gap-4" data-aos="fade-right">
                <img src="assets/img/img-producto-ahorro-01.jpg" class="rounded-2xl shadow-soft mt-8" alt="">
                <img src="assets/img/img-producto-ahorro-02.jpg" class="rounded-2xl shadow-soft" alt="">
            </div>
            <div data-aos="fade-left">
                <div class="text-rojo font-bold uppercase text-xs tracking-widest mb-2">Crédito</div>
                <h2 class="text-3xl font-extrabold mb-4"><?php echo $titulo ?></h2>
                <p class="text-neutral-500 leading-relaxed mb-6"><?php echo $desc ?></p>
                <a href="simulador-credito.php" class="bg-rojo text-white font-bold px-7 py-3 rounded-full hover:bg-rojo-dark transition-all inline-flex items-center gap-2">Simular este crédito <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </section>

        <!-- ===== CONDICIONES ===== -->
        <section class="bg-rojo-light/40 py-16">
            <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-8">
                <?php
                $condiciones = [
                    ['icon' => 'icon-monto-01.png', 'label' => 'Monto', 'texto' => $montoTexto],
                    ['icon' => 'icon-time.svg', 'label' => 'Plazo', 'texto' => $plazoTexto],
                    ['icon' => 'icon-segmento.png', 'label' => 'Perfil', 'texto' => $perfilTexto],
                    ['icon' => 'icon-perfil.png', 'label' => $segmentoLabel, 'texto' => $segmentoTexto],
                ];
                foreach ($condiciones as $c) {
                    ?>
                    <div class="flex gap-5 bg-white rounded-2xl p-6 shadow-soft" data-aos="fade-up">
                        <div class="w-14 h-14 rounded-2xl bg-rojo flex items-center justify-center flex-shrink-0">
                            <img src="assets/img/<?php echo $c['icon'] ?>" class="w-6 h-6 brightness-0 invert" alt="">
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-1"><?php echo $c['label'] ?></h3>
                            <p class="text-neutral-500 text-sm leading-relaxed"><?php echo $c['texto'] ?></p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </section>

        <!-- ===== REQUISITOS ===== -->
        <section class="py-16 max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-12 items-center">
            <div data-aos="fade-right">
                <img src="assets/img/all-images/about/about-img5.png" class="rounded-2xl" alt="">
            </div>
            <div class="md:col-span-2" data-aos="fade-left">
                <h2 class="text-3xl font-extrabold mb-6">Requisitos</h2>
                <ul class="grid sm:grid-cols-2 gap-3">
                    <?php
                    $requisitos = [
                        'Solicitud de crédito', 'Documentos de identidad', 'Justificativo de ingreso',
                        'Servicio básico', 'Croquis y fotografías', 'Perfil socioeconómico',
                        'Mantener al menos el mínimo requerido de certificados de aportación',
                        'Tener cuenta de Ahorros vista actualizada.',
                    ];
                    foreach ($requisitos as $r) {
                        ?>
                        <li class="flex items-start gap-3 text-neutral-600"><i class="fa-solid fa-circle-check text-rojo mt-1"></i> <span><?php echo $r ?></span></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </section>

        <!-- ===== SIMULADOR ===== -->
        <section class="bg-rojo-light/40 py-16 md:py-24">
            <?php include './mod-simulador.php' ?>
        </section>

        <?php include './footer.php' ?>
        <?php include "scripts-v2.php"; ?>
    </body>
</html>
