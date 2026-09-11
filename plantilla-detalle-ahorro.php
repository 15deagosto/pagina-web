<?php
/*
 * Plantilla compartida para el detalle de cada cuenta de ahorro.
 * El archivo que la incluye ya debe tener $id, $titulo y $desc
 * (via Fn_ahorro) y $fnindex disponible.
 */
require_once './funciones/fn-utilidades.php';
$titulo = arreglar_mojibake($titulo);
$desc = arreglar_mojibake(is_array($desc) ? '' : $desc);
$tituloPagina = $titulo;
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
        <?php include './partial-hero-interno.php'; ?>

        <!-- ===== DESCRIPCIÓN ===== -->
        <section class="py-16 max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div class="grid grid-cols-2 gap-4" data-aos="fade-right">
                <img src="assets/img/img-producto-ahorro-01.jpg" class="rounded-2xl shadow-soft mt-8" alt="">
                <img src="assets/img/img-producto-ahorro-02.jpg" class="rounded-2xl shadow-soft" alt="">
            </div>
            <div data-aos="fade-left">
                <div class="text-rojo font-bold uppercase text-xs tracking-widest mb-2">Ahorro</div>
                <h2 class="text-3xl font-extrabold mb-4"><?php echo $titulo ?></h2>
                <p class="text-neutral-500 leading-relaxed mb-6"><?php echo $desc ?></p>
                <a href="login.php" class="bg-rojo text-white font-bold px-7 py-3 rounded-full hover:bg-rojo-dark transition-all inline-flex items-center gap-2">Abrir esta cuenta <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </section>

        <!-- ===== CARACTERÍSTICAS ===== -->
        <section class="bg-rojo-light/40 py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-12" data-aos="fade-up">
                    <div class="text-rojo font-bold uppercase text-xs tracking-widest mb-2">Ahorro</div>
                    <h2 class="text-3xl md:text-4xl font-extrabold">Características</h2>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php
                    $caracteristicas = [
                        ['icon' => 'service7.svg', 'titulo' => 'Tu dinero, siempre seguro', 'texto' => 'Maneja pagos y cobros con total respaldo.'],
                        ['icon' => 'service8.svg', 'titulo' => 'Todo en un solo lugar', 'texto' => 'Servicios, salarios y bonos sin complicaciones.'],
                        ['icon' => 'service9.svg', 'titulo' => 'Finanzas a tu alcance', 'texto' => 'Operaciones rápidas y seguras todos los días.'],
                        ['icon' => 'service10.svg', 'titulo' => 'Gana más con tu cuenta', 'texto' => 'Hasta 5% de interés por tu dinero.'],
                        ['icon' => 'service11.svg', 'titulo' => 'Pagos y cobros fáciles', 'texto' => 'Hazlo desde tu tarjeta o la app.'],
                        ['icon' => 'service12.svg', 'titulo' => 'Soluciones para tu día a día', 'texto' => 'Pagos, bonos y beneficios sociales en minutos.'],
                    ];
                    foreach ($caracteristicas as $idx => $c) {
                        ?>
                        <div class="bg-white rounded-3xl p-8 shadow-soft hover:shadow-softhover hover:-translate-y-1 transition-all" data-aos="zoom-in" data-aos-delay="<?php echo $idx * 80 ?>">
                            <div class="w-14 h-14 rounded-2xl bg-rojo flex items-center justify-center mb-5">
                                <img src="assets/img/icons/<?php echo $c['icon'] ?>" class="w-6 h-6 brightness-0 invert" alt="">
                            </div>
                            <h3 class="font-bold text-lg mb-2"><?php echo $c['titulo'] ?></h3>
                            <p class="text-neutral-500 text-sm leading-relaxed"><?php echo $c['texto'] ?></p>
                        </div>
                        <?php
                    }
                    ?>
                </div>
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
