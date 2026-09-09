<?php
/*
 * Plantilla compartida para el detalle de cada modalidad de inversión (DPF).
 * El archivo que la incluye debe definir antes:
 *   $tituloInversion, $descInversion, $montoTexto, $plazoTexto, $tasaTexto
 */
require_once './funciones/fn-utilidades.php';
$tituloPagina = $tituloInversion;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $tituloInversion ?> - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
        <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">
        <?php include "head-v2.php"; ?>
    </head>
    <body class="v2 bg-white text-neutral-800">

        <?php include 'header.php'; ?>
        <?php include './partial-hero-interno.php'; ?>

        <!-- ===== DESCRIPCIÓN ===== -->
        <section class="py-16 max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div class="v2-media-frame v2-media-frame--tall shadow-soft" data-aos="fade-right">
                <img src="assets/img/img-simuladores.jpg" alt="<?php echo $tituloInversion ?>">
            </div>
            <div data-aos="fade-left">
                <div class="text-rojo font-bold uppercase text-xs tracking-widest mb-2">Inversión</div>
                <h2 class="text-3xl font-extrabold mb-4"><?php echo $tituloInversion ?></h2>
                <p class="text-neutral-500 leading-relaxed mb-6"><?php echo $descInversion ?></p>
                <a href="login.php" class="bg-rojo text-white font-bold px-7 py-3 rounded-full hover:bg-rojo-dark transition-all inline-flex items-center gap-2">Invertir ahora <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </section>

        <!-- ===== CONDICIONES ===== -->
        <section class="bg-rojo-light/40 py-16">
            <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">
                <?php
                $condiciones = [
                    ['icon' => 'icon-monto-01.png', 'label' => 'Monto', 'texto' => $montoTexto],
                    ['icon' => 'icon-time.svg', 'label' => 'Plazo', 'texto' => $plazoTexto],
                    ['icon' => 'icon-tasa.png', 'label' => 'Tasa de interés', 'texto' => $tasaTexto],
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

        <!-- ===== SIMULADOR ===== -->
        <section class="py-16 md:py-24">
            <?php include './mod-simulador.php' ?>
        </section>

        <?php include './footer.php' ?>
        <?php include "scripts-v2.php"; ?>
    </body>
</html>
