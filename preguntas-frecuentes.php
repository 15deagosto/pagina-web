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

        <?php include 'header.php'; ?>
        <?php include './partial-hero-interno.php'; ?>

        <section class="py-16 md:py-24 max-w-3xl mx-auto px-6">
            <div class="space-y-4">
                <?php
                $listfaq = $fnindex->fnindex_rpreguntas_frecuentes_all();
                $i = 0;
                while ($menufaq = $listfaq->fetch_assoc()) {
                    $i++;
                    ?>
                    <details class="group bg-white border border-neutral-100 rounded-2xl shadow-soft overflow-hidden" data-aos="fade-up" data-aos-delay="<?php echo min($i, 5) * 60 ?>" <?php echo $i === 1 ? 'open' : '' ?>>
                        <summary class="cursor-pointer list-none flex items-center justify-between gap-4 px-6 py-5 font-bold">
                            <?php echo arreglar_mojibake(utf8_encode($menufaq['preg_prefrec'])) ?>
                            <i class="fa-solid fa-chevron-down text-rojo transition-transform group-open:rotate-180 flex-shrink-0"></i>
                        </summary>
                        <div class="px-6 pb-5 text-neutral-500 leading-relaxed">
                            <?php echo arreglar_mojibake(utf8_encode($menufaq['resp_prefrec'])) ?>
                        </div>
                    </details>
                    <?php
                }
                if ($i === 0) {
                    echo '<p class="text-neutral-500 text-center">Todavía no hay preguntas frecuentes publicadas.</p>';
                }
                ?>
            </div>
        </section>

        <?php include './footer.php' ?>
        <?php include "scripts-v2.php"; ?>
    </body>
</html>
