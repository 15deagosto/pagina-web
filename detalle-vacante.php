<?php
require './controler/conexion.php';
require './funciones/fn-index.php';
require_once './controler/config.php';
require_once './funciones/fn-utilidades.php';
$fnindex = new Fn_index();

$con = new Conecciones();
$mysqlidato = $con->crearConexion();
$idVacante = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$resVacante = $mysqlidato->query("SELECT * FROM vacante WHERE id_vacante = $idVacante AND estado_vacante = 1 LIMIT 1");
$vacante = $resVacante ? $resVacante->fetch_assoc() : null;

if (!$vacante) {
    header('Location: trabaja-nosotros.php');
    exit();
}

$mesesEs = [1 => 'enero', 2 => 'febrero', 3 => 'marzo', 4 => 'abril', 5 => 'mayo', 6 => 'junio', 7 => 'julio', 8 => 'agosto', 9 => 'septiembre', 10 => 'octubre', 11 => 'noviembre', 12 => 'diciembre'];
function fechaVacanteEs($fecha, $mesesEs) {
    $t = strtotime($fecha);
    return $t ? (date('j', $t) . ' de ' . $mesesEs[(int) date('n', $t)] . ' de ' . date('Y', $t)) : '';
}
$imgVacante = (!empty($vacante['img_vacante']) && file_exists(__DIR__ . '/miperfil/images/' . $vacante['img_vacante']))
    ? 'miperfil/images/' . $vacante['img_vacante']
    : 'assets/img/img-item-busca-empleo.jpg';

$tituloPagina = arreglar_mojibake($vacante['nombre_vacante']);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo htmlspecialchars($tituloPagina) ?> - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
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

        <!-- ===== HERO AREA UNIFICADA: Gradiente Rojo Corporativo ===== -->
        <div class="w-full bg-gradient-to-br from-[#7a1310] to-[#a31a16] h-[200px] md:h-[240px] flex items-center border-b border-[#7a1310]/20 shadow-inner">
            <div class="max-w-7xl mx-auto px-6 w-full text-center">
                <div data-aos="fade-up" data-aos-duration="800">
                    <h2 class="text-2xl md:text-4xl font-black text-white tracking-tight mb-3 drop-shadow-sm"><?php echo htmlspecialchars($tituloPagina) ?></h2>
                    <div class="text-xs md:text-sm font-bold text-white/70 tracking-wide">
                        <a href="index.php" class="hover:text-white transition-colors">Inicio</a>
                        <i class="fa-solid fa-angle-right text-[10px] mx-2 opacity-50"></i>
                        <a href="trabaja-nosotros.php" class="hover:text-white transition-colors">Trabaja con Nosotros</a>
                        <i class="fa-solid fa-angle-right text-[10px] mx-2 opacity-50"></i>
                        <span class="text-[#ffd9d6] font-extrabold">Detalle de Vacante</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== DETALLE DE VACANTE ===== -->
        <section class="py-16 md:py-20 max-w-5xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                <!-- COLUMNA PRINCIPAL -->
                <div class="lg:col-span-2" data-aos="fade-up">
                    <img src="<?php echo $imgVacante ?>" alt="<?php echo htmlspecialchars($tituloPagina) ?>" class="w-full h-56 object-cover rounded-3xl mb-8 shadow-soft">

                    <?php
                    $funcionVacante = trim(arreglar_mojibake($vacante['funcion_vacante']));
                    if ($funcionVacante !== '' && $funcionVacante !== '<br>' && $funcionVacante !== '-') { ?>
                        <div class="mb-8">
                            <div class="inline-block bg-[#a31a16] px-4 py-1.5 rounded-lg mb-4">
                                <h3 class="text-white font-black text-sm uppercase tracking-wide">Funciones</h3>
                            </div>
                            <div class="prose prose-sm max-w-none text-neutral-600 leading-relaxed"><?php echo $funcionVacante ?></div>
                        </div>
                    <?php } ?>

                    <?php
                    $requisitosVacante = trim(arreglar_mojibake($vacante['requisitos_vacante']));
                    if ($requisitosVacante !== '' && $requisitosVacante !== '<br>' && $requisitosVacante !== 'ALL') { ?>
                        <div class="mb-8">
                            <div class="inline-block bg-[#a31a16] px-4 py-1.5 rounded-lg mb-4">
                                <h3 class="text-white font-black text-sm uppercase tracking-wide">Requisitos</h3>
                            </div>
                            <div class="prose prose-sm max-w-none text-neutral-600 leading-relaxed"><?php echo $requisitosVacante ?></div>
                        </div>
                    <?php } ?>

                    <?php
                    $descVacante = trim(arreglar_mojibake($vacante['desc_vacante']));
                    if ($descVacante !== '' && $descVacante !== '<br>') { ?>
                        <div class="mb-8">
                            <div class="inline-block bg-[#a31a16] px-4 py-1.5 rounded-lg mb-4">
                                <h3 class="text-white font-black text-sm uppercase tracking-wide">Descripción</h3>
                            </div>
                            <div class="prose prose-sm max-w-none text-neutral-600 leading-relaxed"><?php echo $descVacante ?></div>
                        </div>
                    <?php } ?>

                    <div class="bg-[#7a1310] rounded-2xl p-6 text-center mt-10">
                        <p class="text-white font-semibold text-sm leading-relaxed">
                            Si cumples con el perfil, envía tu hoja de vida en formato PDF a
                            <a href="mailto:<?php echo EMAILTALENTO ?>" class="underline font-black"><?php echo EMAILTALENTO ?></a>
                        </p>
                    </div>
                </div>

                <!-- COLUMNA LATERAL: FICHA DE LA VACANTE -->
                <div class="lg:col-span-1" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-neutral-50 border border-neutral-100 rounded-3xl p-6 sticky top-24">
                        <h4 class="font-black text-neutral-800 text-sm uppercase tracking-wide mb-5">Ficha de la vacante</h4>
                        <ul class="space-y-4 text-xs">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-building text-[#a31a16] mt-0.5"></i>
                                <div><span class="block text-neutral-400 font-bold uppercase tracking-wide text-[10px]">Área</span><?php echo htmlspecialchars(arreglar_mojibake($vacante['area_vacante'])) ?></div>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-location-dot text-[#a31a16] mt-0.5"></i>
                                <div><span class="block text-neutral-400 font-bold uppercase tracking-wide text-[10px]">Lugar</span><?php echo htmlspecialchars(arreglar_mojibake($vacante['lugar_vacante'])) ?></div>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-briefcase text-[#a31a16] mt-0.5"></i>
                                <div><span class="block text-neutral-400 font-bold uppercase tracking-wide text-[10px]">Tipo de contrato</span><?php echo htmlspecialchars(arreglar_mojibake($vacante['tipo_vacante'])) ?></div>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-laptop-house text-[#a31a16] mt-0.5"></i>
                                <div><span class="block text-neutral-400 font-bold uppercase tracking-wide text-[10px]">Modalidad</span><?php echo htmlspecialchars(arreglar_mojibake($vacante['presencia_vacante'])) ?></div>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-graduation-cap text-[#a31a16] mt-0.5"></i>
                                <div><span class="block text-neutral-400 font-bold uppercase tracking-wide text-[10px]">Nivel requerido</span><?php echo htmlspecialchars(arreglar_mojibake($vacante['niveleduca_vacante'])) ?></div>
                            </li>
                            <li class="flex items-start gap-3 pt-3 border-t border-neutral-200">
                                <i class="fa-regular fa-calendar-days text-[#a31a16] mt-0.5"></i>
                                <div><span class="block text-neutral-400 font-bold uppercase tracking-wide text-[10px]">Postular hasta</span><?php echo fechaVacanteEs($vacante['fechaout_vacante'], $mesesEs) ?></div>
                            </li>
                        </ul>
                        <a href="mailto:<?php echo EMAILTALENTO ?>" class="mt-6 w-full inline-flex items-center justify-center gap-2 bg-[#a31a16] hover:bg-[#7a1310] text-white font-extrabold py-3.5 rounded-xl text-xs tracking-wider uppercase transition-all">
                            <i class="fa-solid fa-paper-plane text-[11px]"></i> Postular ahora
                        </a>
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
