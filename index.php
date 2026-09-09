<?php
require './controler/conexion.php';
require './fn/fn-credito.php';
require './funciones/fn-index.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();
$slider = $fncredito->fnindex_rslider();
$slides = [];
if ($slider) {
    while ($fila = $slider->fetch_assoc()) {
        $slides[] = $fila;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio - 15 de Agosto Cooperativa de Ahorro y Crédito</title>

        <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css">

        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: { sans: ['Plus Jakarta Sans', 'sans-serif'] },
                        colors: {
                            rojo: { DEFAULT: '#a31a16', dark: '#7a1310', light: '#fdf1f0' },
                        },
                        boxShadow: {
                            soft: '0 10px 30px -12px rgba(38,34,32,0.18)',
                            softhover: '0 20px 45px -15px rgba(163,26,22,0.35)',
                        },
                    }
                }
            }
        </script>

        <link rel="stylesheet" href="assets/css/site-v2.css">
        <style>
            body { font-family: 'Plus Jakarta Sans', sans-serif; }
            .glass { background: rgba(255,255,255,0.08); backdrop-filter: blur(14px); border: 1px solid rgba(255,255,255,0.15); }
            .glass-light { background: rgba(255,255,255,0.6); backdrop-filter: blur(14px); border: 1px solid rgba(255,255,255,0.6); }
            .text-gradient { background: linear-gradient(90deg,#fff, #ffd9d6); -webkit-background-clip: text; background-clip: text; color: transparent; }
            .blob { position: absolute; border-radius: 9999px; filter: blur(60px); opacity: .5; pointer-events: none; }
            .hero-slide { opacity: 0; transition: opacity 1s ease; }
            .hero-slide.activa { opacity: 1; }
            .hero-dot { width: 8px; height: 8px; border-radius: 9999px; background: rgba(255,255,255,.4); transition: all .3s ease; cursor: pointer; }
            .hero-dot.activo { width: 26px; background: #fff; }
        </style>
    </head>
    <body class="v2 bg-white text-neutral-800">

        <?php include 'header-v2.php'; ?>

        <!-- ===== HERO: carrusel real + glassmorphism ===== -->
        <section class="relative overflow-hidden bg-gradient-to-br from-rojo via-rojo to-rojo-dark text-white">
            <div class="blob w-72 h-72 bg-white/20 -top-10 -right-10"></div>
            <div class="blob w-96 h-96 bg-rojo-dark/40 bottom-0 left-1/3"></div>

            <div class="relative max-w-7xl mx-auto px-6 py-16 md:py-24 grid md:grid-cols-2 gap-10 items-center">
                <div data-aos="fade-up" data-aos-duration="700">
                    <span class="inline-flex items-center gap-2 glass px-4 py-1.5 rounded-full text-xs font-semibold tracking-wide uppercase mb-6">
                        <i class="fa-solid fa-shield-halved"></i> Regulados por la SEPS -- Segmento 2
                    </span>
                    <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6">
                        Tu cooperativa de <span class="text-gradient">confianza</span>, cerca de ti
                    </h1>
                    <p class="text-lg text-white/90 max-w-md mb-8">Ahorra, invierte y accede a crédito con el respaldo de una cooperativa pensada para acompañarte en cada meta.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="login.php" class="bg-white text-rojo font-bold px-7 py-3.5 rounded-full shadow-softhover hover:-translate-y-1 hover:shadow-xl transition-all">15 de Agosto Virtual</a>
                        <a href="simulador-credito.php" class="glass font-bold px-7 py-3.5 rounded-full hover:bg-white/20 transition-all">Simular un crédito</a>
                    </div>
                </div>

                <div class="relative" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="150">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl aspect-[4/3] bg-white/10">
                        <?php foreach ($slides as $i => $slide) { ?>
                            <div class="hero-slide absolute inset-0 <?php echo $i === 0 ? 'activa' : ''; ?>" data-slide="<?php echo $i ?>">
                                <?php
                                $url = trim($slide['url_slider'] ?? '');
                                $esLinkValido = strlen($url) > 4;
                                if ($esLinkValido) { ?><a href="<?php echo htmlspecialchars($url) ?>" target="_blank"><?php } ?>
                                <img src="assets/img/<?php echo htmlspecialchars($slide['img_slider']) ?>" alt="Cooperativa 15 de Agosto" class="w-full h-full object-cover">
                                <?php if ($esLinkValido) { ?></a><?php } ?>
                            </div>
                        <?php } ?>
                        <?php if (empty($slides)) { ?>
                            <img src="assets/img/logo/logo2.png" alt="Cooperativa 15 de Agosto" class="w-full h-full object-contain bg-white p-10">
                        <?php } ?>
                    </div>
                    <?php if (count($slides) > 1) { ?>
                        <div id="hero-dots" class="flex justify-center gap-2 mt-5">
                            <?php foreach ($slides as $i => $slide) { ?>
                                <span class="hero-dot <?php echo $i === 0 ? 'activo' : ''; ?>" data-dot="<?php echo $i ?>"></span>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <!-- ===== ACCESOS RÁPIDOS ===== -->
        <section class="max-w-7xl mx-auto px-6 py-16">
            <?php include './mod-enlaces.php' ?>
        </section>

        <!-- ===== NOSOTROS ===== -->
        <section class="bg-rojo-light/40 py-16 md:py-24">
            <?php include './mod-about-us.php' ?>
        </section>

        <!-- ===== SERVICIOS ===== -->
        <section class="py-16 md:py-24">
            <?php include './mod-servicios-v2.php' ?>
        </section>

        <!-- ===== SIMULADOR ===== -->
        <section class="bg-rojo-light/40 py-16 md:py-24">
            <?php include './mod-simulador.php' ?>
        </section>

        <!-- ===== NOTICIAS ===== -->
        <section class="py-16 md:py-24">
            <?php include './mod-noticia.php' ?>
        </section>

        <!-- ===== RESPALDO REGULATORIO ===== -->
        <section class="bg-rojo-light/40 py-16">
            <div class="max-w-7xl mx-auto px-6" data-aos="fade-up">
                <div class="text-rojo font-bold uppercase text-xs tracking-widest mb-2 flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-rojo inline-block"></span> Tu dinero, protegido
                </div>
                <h2 class="text-3xl font-extrabold mb-6">Respaldo y transparencia</h2>
                <div class="flex gap-10 flex-wrap items-center">
                    <img src="assets/img/Uafes_1.webp" class="max-h-20" alt="UAFE">
                    <img src="assets/img/norma_cosede.webp" class="max-h-20" alt="COSEDE">
                </div>
            </div>
        </section>

        <!-- ===== DESCARGA APP ===== -->
        <section class="bg-gradient-to-br from-rojo-dark to-rojo text-white py-16">
            <div class="max-w-7xl mx-auto px-6 flex flex-wrap justify-between items-center gap-8" data-aos="fade-up">
                <div>
                    <h2 class="text-3xl font-extrabold mb-3">Descarga nuestra App</h2>
                    <p class="text-white/90 max-w-md">Explora un universo de oportunidades digitales, cuando quieras y desde donde quieras.</p>
                </div>
                <div class="flex gap-5">
                    <a href="#"><img src="assets/img/google-play.png" class="h-12" alt="Google Play"></a>
                    <a href="#"><img src="assets/img/app-store.png" class="h-12" alt="App Store"></a>
                </div>
            </div>
        </section>

        <a href="javascript:void(0)" onclick="whatsapo()" class="fixed bottom-6 right-6 z-50 w-14 h-14 rounded-full bg-[#25D366] text-white flex items-center justify-center text-2xl shadow-xl hover:scale-110 transition-transform" aria-label="WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>

        <?php include './footer-v2.php' ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
        <script src="assets/js/site-v2.js"></script>
        <script src="assets/js/js-index.js"></script>
        <script>
            AOS.init({ once: true, offset: 60 });

            (function () {
                var slides = document.querySelectorAll('.hero-slide');
                var dots = document.querySelectorAll('.hero-dot');
                if (slides.length < 2) return;
                var actual = 0;
                function mostrar(i) {
                    slides.forEach(function (s) { s.classList.remove('activa'); });
                    dots.forEach(function (d) { d.classList.remove('activo'); });
                    slides[i].classList.add('activa');
                    if (dots[i]) dots[i].classList.add('activo');
                    actual = i;
                }
                dots.forEach(function (d) {
                    d.addEventListener('click', function () { mostrar(parseInt(d.dataset.dot)); });
                });
                setInterval(function () { mostrar((actual + 1) % slides.length); }, 5000);
            })();
        </script>
    </body>
</html>
