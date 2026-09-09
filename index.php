<?php
require './controler/conexion.php';
require './fn/fn-credito.php';
require './funciones/fn-index.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();
$slider = $fncredito->fnindex_rslider();
$primerSlide = $slider ? $slider->fetch_assoc() : null;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio - 15 de Agosto Cooperativa de Ahorro y Crédito</title>

        <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">

        <!-- Solo lo esencial: sistema visual propio + iconos. Sin Bootstrap/AOS/GSAP/Swiper/owlcarousel/etc. -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="assets/css/site-v2.css">
    </head>
    <body class="v2">

        <?php include 'header-v2.php'; ?>

        <!-- ===== HERO ===== -->
        <section class="v2-hero">
            <div class="v2-container">
                <div>
                    <h1>Tu cooperativa de confianza, cerca de ti</h1>
                    <p>Ahorra, invierte y accede a crédito con el respaldo de una cooperativa regulada por la SEPS, pensada para acompañarte en cada meta.</p>
                    <div class="v2-hero-acciones">
                        <a href="login.php" class="v2-btn v2-btn--primario">15 de Agosto Virtual</a>
                        <a href="simulador-credito.php" class="v2-btn v2-btn--fantasma">Simular un crédito</a>
                    </div>
                </div>
                <div class="v2-hero-img">
                    <?php if ($primerSlide && !empty($primerSlide['img_slider'])) { ?>
                        <img src="assets/img/<?php echo $primerSlide['img_slider'] ?>" alt="Cooperativa 15 de Agosto">
                    <?php } else { ?>
                        <img src="assets/img/logo/logo2.png" alt="Cooperativa 15 de Agosto">
                    <?php } ?>
                </div>
            </div>
        </section>

        <!-- ===== ACCESOS RÁPIDOS ===== -->
        <section class="v2-section">
            <div class="v2-container">
                <?php include './mod-enlaces.php' ?>
            </div>
        </section>

        <!-- ===== NOSOTROS ===== -->
        <section class="v2-section v2-section--suave">
            <?php include './mod-about-us.php' ?>
        </section>

        <!-- ===== SERVICIOS ===== -->
        <section class="v2-section">
            <?php include './mod-servicios-v2.php' ?>
        </section>

        <!-- ===== SIMULADOR ===== -->
        <section class="v2-section v2-section--suave">
            <?php include './mod-simulador.php' ?>
        </section>

        <!-- ===== NOTICIAS ===== -->
        <section class="v2-section">
            <?php include './mod-noticia.php' ?>
        </section>

        <!-- ===== RESPALDO REGULATORIO ===== -->
        <section class="v2-section v2-section--suave">
            <div class="v2-container">
                <div class="v2-kicker">Tu dinero, protegido</div>
                <h2 class="v2-titulo">Respaldo y transparencia</h2>
                <div style="display:flex; gap:40px; flex-wrap:wrap; align-items:center; margin-top:20px;">
                    <img src="assets/img/Uafes_1.webp" style="max-height:90px;" alt="UAFE">
                    <img src="assets/img/norma_cosede.webp" style="max-height:90px;" alt="COSEDE">
                </div>
            </div>
        </section>

        <!-- ===== DESCARGA APP ===== -->
        <section class="v2-section" style="background: linear-gradient(135deg, var(--rojo-oscuro), var(--rojo)); color:#fff;">
            <div class="v2-container" style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:24px;">
                <div>
                    <h2 class="v2-titulo" style="color:#fff;">Descarga nuestra App</h2>
                    <p style="opacity:.9; max-width:480px;">Explora un universo de oportunidades digitales, cuando quieras y desde donde quieras.</p>
                </div>
                <div style="display:flex; gap:20px;">
                    <a href="#"><img src="assets/img/google-play.png" style="height:50px;" alt="Google Play"></a>
                    <a href="#"><img src="assets/img/app-store.png" style="height:50px;" alt="App Store"></a>
                </div>
            </div>
        </section>

        <a href="javascript:void(0)" onclick="whatsapo()" class="v2-whatsapp" aria-label="WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>

        <?php include './footer-v2.php' ?>

        <script src="assets/js/site-v2.js"></script>
        <script src="assets/js/js-index.js"></script>
    </body>
</html>
