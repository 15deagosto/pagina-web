<?php
session_start();
require './controler/conexion.php';
require './funciones/fn-index.php';
require_once './funciones/fn-utilidades.php';
$fnindex = new Fn_index();
$tituloPagina = 'Canales de Atención';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Canales de Atención - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
        <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">
        <?php include "head-v2.php"; ?>
    </head>
    <body class="v2 bg-white text-neutral-800">

        <?php include 'header.php'; ?>
        <?php include './partial-hero-interno.php'; ?>

        <section class="py-16 md:py-24 max-w-5xl mx-auto px-6">
            <div class="text-center mb-12" data-aos="fade-up">
                <div class="text-rojo font-bold uppercase text-xs tracking-widest mb-2">Nuestras agencias</div>
                <h2 class="text-3xl md:text-4xl font-extrabold">Encuéntranos cerca de ti</h2>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <?php
                $detagencia = $fnindex->fnindex_ragencia();
                $i = 0;
                while ($menuagencia = $detagencia->fetch_assoc()) {
                    $i++;
                    $lat = $menuagencia['x_nosotros'];
                    $lng = $menuagencia['y_nosotros'];
                    ?>
                    <div class="bg-white border border-neutral-100 rounded-3xl p-6 shadow-soft" data-aos="fade-up" data-aos-delay="<?php echo $i * 60 ?>">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-rojo flex items-center justify-center flex-shrink-0">
                                <img src="assets/img/icon-sucursal.png" class="w-6 h-6 brightness-0 invert" alt="">
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-1"><?php echo arreglar_mojibake($menuagencia['nombre_nosotros']) ?></h3>
                                <p class="text-neutral-500 text-sm mb-2"><?php echo arreglar_mojibake($menuagencia['direccion_nosotros']) ?></p>
                                <a href="tel:<?php echo preg_replace('/\s+/', '', $menuagencia['tele1_nosotros']) ?>" class="text-rojo font-semibold text-sm flex items-center gap-2 mb-3"><i class="fa-solid fa-phone"></i> <?php echo $menuagencia['tele1_nosotros'] ?></a>
                                <?php if (!empty($lat) && !empty($lng)) { ?>
                                    <a href="https://www.google.com/maps?q=<?php echo $lat ?>,<?php echo $lng ?>" target="_blank" class="inline-flex items-center gap-2 text-sm font-semibold bg-rojo-light text-rojo px-4 py-2 rounded-full hover:bg-rojo hover:text-white transition-colors">
                                        <i class="fa-solid fa-location-dot"></i> Ver en el mapa
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                if ($i === 0) {
                    echo '<p class="text-neutral-500 col-span-2 text-center">No hay agencias registradas por el momento.</p>';
                }
                ?>
            </div>
        </section>

        <?php include './footer.php' ?>
        <?php include "scripts-v2.php"; ?>
    </body>
</html>
