<?php
require './controler/conexion.php';
require './funciones/fn-index.php';
require_once './controler/config.php';
$fnindex = new Fn_index();
require_once './funciones/fn-utilidades.php';
$tituloPagina = 'Trabaja con Nosotros';

$conVacantes = new Conecciones();
$mysqlVacantes = $conVacantes->crearConexion();
$resVacantes = $mysqlVacantes->query("SELECT * FROM vacante WHERE estado_vacante = 1 ORDER BY fechain_vacante DESC");
$vacantes = $resVacantes ? $resVacantes->fetch_all(MYSQLI_ASSOC) : [];

$mesesEs = [1 => 'enero', 2 => 'febrero', 3 => 'marzo', 4 => 'abril', 5 => 'mayo', 6 => 'junio', 7 => 'julio', 8 => 'agosto', 9 => 'septiembre', 10 => 'octubre', 11 => 'noviembre', 12 => 'diciembre'];
function fechaVacanteEs($fecha, $mesesEs) {
    $t = strtotime($fecha);
    return $t ? (date('j', $t) . ' de ' . $mesesEs[(int) date('n', $t)]) : '';
}
function imagenVacante($img) {
    if (!empty($img) && file_exists(__DIR__ . '/miperfil/images/' . $img)) {
        return 'miperfil/images/' . $img;
    }
    return 'assets/img/img-item-busca-empleo.jpg';
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trabaja con Nosotros - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
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

        <!-- 1. LA FRANJA ROJA DE SIEMPRE: Gradiente Rojo Corporativo con Texto Blanco -->
        <div class="w-full bg-gradient-to-br from-[#7a1310] to-[#a31a16] h-[200px] md:h-[240px] flex items-center border-b border-[#7a1310]/20 shadow-inner">
            <div class="max-w-7xl mx-auto px-6 w-full text-center">
                <div data-aos="fade-up" data-aos-duration="800">
                    <h2 class="text-3xl md:text-5xl font-black text-white tracking-tight mb-3 drop-shadow-sm">
                        Crece con Nosotros
                    </h2>
                    <div class="text-xs md:text-sm font-bold text-white/70 tracking-wide">
                        <a href="index.php" class="hover:text-white transition-colors">Inicio</a> 
                        <i class="fa-solid fa-angle-right text-[10px] mx-2 opacity-50"></i> 
                        <span class="text-[#ffd9d6] font-extrabold">Oportunidades Laborales</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== SECCIÓN DE VACANTES DISPONIBLES ===== -->
        <section class="py-16 md:py-24 max-w-5xl mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-2 flex items-center justify-center gap-2">
                    <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Talento Humano COAC <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span>
                </div>
                <h2 class="text-3xl md:text-4xl font-black text-neutral-800 tracking-tight mb-3">Vacantes disponibles</h2>
                <p class="text-neutral-500 text-sm max-w-2xl mx-auto leading-relaxed font-medium">Buscamos profesionales comprometidos, honestos y con vocación de servicio que deseen impulsar el desarrollo financiero de nuestra región. Revisa los perfiles activos y postula hoy mismo.</p>
            </div>

            <?php if (empty($vacantes)) { ?>
                <div class="bg-neutral-50 border border-neutral-100 rounded-3xl p-10 md:p-14 text-center" data-aos="fade-up">
                    <div class="w-16 h-16 rounded-2xl bg-[#a31a16]/5 border border-[#a31a16]/10 flex items-center justify-center mx-auto mb-5 text-[#a31a16]">
                        <i class="fa-solid fa-briefcase text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-black text-neutral-800 mb-2">No hay vacantes disponibles por el momento</h3>
                    <p class="text-neutral-500 text-sm max-w-xl mx-auto leading-relaxed font-medium mb-6">Cuando abramos un nuevo proceso de selección lo publicaremos aquí. Si quieres, puedes dejarnos tu hoja de vida para futuras oportunidades.</p>
                    <a href="mailto:<?php echo EMAILTALENTO ?>" class="inline-flex items-center gap-2 bg-[#a31a16] hover:bg-[#7a1310] text-white font-extrabold px-6 py-3 rounded-xl text-xs tracking-wider uppercase transition-all">
                        <i class="fa-solid fa-paper-plane text-[11px]"></i> Enviar hoja de vida
                    </a>
                </div>
            <?php } else { ?>
            <div class="space-y-6">
                <?php foreach ($vacantes as $vacante) { ?>
                <!-- TARJETA DE VACANTE PREMIUM: Rediseñada con relieve y contrastes unificados -->
                <a href="detalle-vacante.php?id=<?php echo $vacante['id_vacante'] ?>" class="block bg-white border border-neutral-100 rounded-3xl shadow-soft hover:shadow-softhover hover:border-[#a31a16]/20 hover:-translate-y-1 transition-all duration-300 overflow-hidden md:flex group" data-aos="fade-up">

                    <!-- Contenedor de la Imagen de Fábrica Manteniendo su Estilo Original -->
                    <div class="md:w-72 flex-shrink-0 relative bg-neutral-50 border-r border-neutral-50/50">
                        <img src="<?php echo imagenVacante($vacante['img_vacante']) ?>" class="w-full h-48 md:h-full object-cover" alt="<?php echo htmlspecialchars(arreglar_mojibake($vacante['nombre_vacante'])) ?>">
                        <div class="absolute inset-0 bg-gradient-to-t from-neutral-900/10 via-transparent to-transparent"></div>
                    </div>

                    <!-- Cuerpo Informativo Exclusivo de la Vacante -->
                    <div class="p-6 md:p-8 flex-1 flex flex-col justify-between">
                        <div>
                            <!-- Insignia unificada con el rojo de la cooperativa -->
                            <span class="inline-block bg-[#a31a16]/10 text-[#a31a16] border border-[#a31a16]/20 text-xs font-black px-3 py-1.5 rounded-xl mb-4 tracking-wide uppercase">
                                <i class="fa-solid fa-briefcase text-[10px] mr-1"></i> <?php echo htmlspecialchars(arreglar_mojibake($vacante['nombre_vacante'])) ?>
                            </span>

                            <p class="text-neutral-600 text-xs md:text-sm leading-relaxed text-justify font-medium mb-4">
                                <?php echo mb_strimwidth(trim(strip_tags(arreglar_mojibake($vacante['desc_vacante']))), 0, 220, '...') ?: 'Conoce los detalles completos de esta vacante y postula hoy mismo.' ?>
                            </p>
                        </div>

                        <!-- Metadatos de la Oferta y Botón de Acción -->
                        <div class="pt-4 border-t border-neutral-50 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                            <div class="flex flex-wrap gap-4 text-[11px] font-bold text-neutral-400 uppercase tracking-wider">
                                <span class="flex items-center gap-1.5"><i class="fa-regular fa-calendar-days text-[#a31a16] text-xs"></i> Postular hasta: <?php echo fechaVacanteEs($vacante['fechaout_vacante'], $mesesEs) ?></span>
                                <span class="flex items-center gap-1.5"><i class="fa-regular fa-clock text-[#a31a16] text-xs"></i> <?php echo htmlspecialchars(arreglar_mojibake($vacante['presencia_vacante'])) ?></span>
                            </div>

                            <span class="bg-neutral-50 text-neutral-500 group-hover:bg-[#a31a16] group-hover:text-white px-4 py-2 rounded-xl text-xs font-black transition-all flex items-center gap-1.5 shadow-inner-sm self-end sm:self-auto">
                                Ver vacante <i class="fa-solid fa-chevron-right text-[10px] transition-transform group-hover:translate-x-0.5"></i>
                            </span>
                        </div>
                    </div>
                </a>
                <?php } ?>
            </div>
            <?php } ?>
        </section>

        <!--===== FOOTER AREA =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>

        <?php include "scripts-v2.php"; ?>
    </body>
</html>
