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
                        keyfrmaes:{
                            shimmer:{
                                '100%':{ transform: 'translatex(100%)'},
                            }
                        }
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

        <?php include 'header.php'; ?>

        <!-- ===== HERO ===== -->
        <section class="relative overflow-hidden bg-gradient-to-br from-[#7a1310] via-[#a31a16] to-[#4a0b09] text-white py-12 md:py-20 lg:py-28">
            <!-- Círculos de Luz Ambientales (Glow Blobs Avanzados) -->
            <div class="absolute w-[500px] h-[500px] rounded-full bg-white/10 -top-40 -right-20 blur-[120px] pointer-events-none animate-pulse" style="animation-duration: 8s;"></div>
            <div class="absolute w-[600px] h-[600px] rounded-full bg-black/30 -bottom-40 -left-20 blur-[140px] pointer-events-none"></div>
            
            <!-- Malla sutil de fondo para textura moderna -->
            <div class="absolute inset-0 opacity-5 bg-[linear-gradient(to_right,#808080_1px,transparent_1px),linear-gradient(to_bottom,#808080_1px,transparent_1px)] bg-[size:24px_24px] pointer-events-none"></div>

            <div class="relative max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- TEXTO PRINCIPAL (Lado Izquierdo) -->
                <div class="lg:col-span-7 text-left" data-aos="fade-right" data-aos-duration="900">
                    <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 px-4 py-2 rounded-full text-xs font-semibold tracking-wide uppercase mb-6 shadow-sm">
                        <i class="fa-solid fa-shield-halved text-[#ffd9d6]"></i> Garantía y Seguridad • Regulados por la SEPS
                    </span>
                    
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-black tracking-tight leading-[1.1] mb-6">
                        El impulso digital para tus <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-[#ffb3af] to-[#ffd9d6]">finanzas</span>
                    </h1>
                    
                    <p class="text-base md:text-lg text-white/80 max-w-2xl mb-10 leading-relaxed">
                        Ahorra con tasas competitivas, invierte seguro con el respaldo de la COAC y accede a microcréditos diseñados para hacer crecer tu negocio hoy mismo.
                    </p>
                    
                    <!-- Botones Premium con Efectos Activos -->
                    <div class="flex flex-wrap gap-4">
                        <a href="login.php" class="group relative bg-white text-[#a31a16] font-extrabold px-8 py-4 rounded-xl shadow-lg hover:shadow-white/20 hover:-translate-y-0.5 transition-all duration-300 overflow-hidden">
                            <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-transparent via-white/40 to-transparent -translateX-full group-hover:animate-[shimmer_1.5s_infinite]"></span>
                            15 de Agosto Virtual <i class="fa-solid fa-arrow-right ml-2 text-xs group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="simulador-credito.php" class="bg-white/10 backdrop-blur-md border border-white/20 font-bold px-8 py-4 rounded-xl hover:bg-white/20 hover:-translate-y-0.5 transition-all duration-300">
                            <i class="fa-solid fa-calculator mr-2 opacity-80"></i> Simular Crédito
                        </a>
                    </div>

                    <!-- MINI GRID DE ESTADÍSTICAS BANCARIAS (Prueba Social) -->
                    <div class="grid grid-cols-3 gap-4 mt-12 pt-8 border-t border-white/10">
                        <div>
                            <p class="text-2xl md:text-3xl font-black text-white">+1500</p>
                            <p class="text-xs text-white/60 uppercase tracking-wider mt-1">Socios Activos</p>
                        </div>
                        <div>
                            <p class="text-2xl md:text-3xl font-black text-white">10+</p>
                            <p class="text-xs text-white/60 uppercase tracking-wider mt-1">Años en mercado</p>
                        </div>
                        <div>
                            <p class="text-2xl md:text-3xl font-black text-white">5000+</p>
                            <p class="text-xs text-white/60 uppercase tracking-wider mt-1">Créditos concedidos</p>
                        </div>
                    </div>
                </div>

                <!-- SLIDER / IMAGEN (Lado Derecho) -->
                <div class="lg:col-span-5 relative" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
                    <!-- Marco Estilizado Tipo Flotante (Efecto Tarjeta de Crédito Premium) -->
                    <div class="absolute -inset-1 bg-gradient-to-r from-white/20 to-transparent rounded-[32px] blur-md opacity-70"></div>
                    
                    <div class="relative rounded-[28px] overflow-hidden shadow-2xl h-64 sm:h-72 md:h-80 lg:h-[420px] w-full bg-white border border-white/20 p-2 transition-all duration-300">
                        <div class="relative w-full h-full rounded-[20px] overflow-hidden bg-white">
                            <?php foreach ($slides as $i => $slide) { ?>
                                <div class="hero-slide absolute inset-0 flex items-center justify-center <?php echo $i === 0 ? 'activa' : ''; ?>" data-slide="<?php echo $i ?>">
                                    <?php
                                    $url = trim($slide['url_slider'] ?? '');
                                    $esLinkValido = strlen($url) > 4;
                                    if ($esLinkValido) { ?><a href="<?php echo htmlspecialchars($url) ?>" target="_blank"><?php } ?>
                                    <img src="assets/img/<?php echo htmlspecialchars($slide['img_slider']) ?>" alt="Cooperativa 15 de Agosto" class="w-full h-full object-contain mx-auto">
                                    <?php if ($esLinkValido) { ?></a><?php } ?>
                                </div>
                            <?php } ?>
                            <?php if (empty($slides)) { ?>
                                <img src="assets/img/logo/logo2.png" alt="Cooperativa 15 de Agosto" class="w-full h-full object-contain p-8 mx-auto">
                            <?php } ?>
                        </div>
                    </div>

                    <!-- Indicadores del Slider Flotantes -->
                    <?php if (count($slides) > 1) { ?>
                        <div id="hero-dots" class="absolute bottom-6 left-1/2 -translate-x-1/2 flex justify-center gap-2 bg-black/30 backdrop-blur-md px-3 py-2 rounded-full border border-white/10 z-20">
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
        <section class="bg-rojo-light/40 py-12 md:py-16">
            <div class="max-w-7xl mx-auto px-6" data-aos="fade-up">
                <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-2 flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Tu dinero protegido
                </div>
                <h2 class="text-3xl md:text-4xl font-black text-neutral-800 tracking-tight mb-8">Respaldo y transparencia</h2>
                
                <!-- Contenedor Maestro Azul Premium (Remplaza la imagen fija pesada por código fluido) -->
                <div class="relative rounded-[32px] overflow-hidden shadow-xl bg-gradient-to-br from-[#1e3a8a] to-[#0d1b2a] text-white p-8 md:p-12 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center border border-white/5">
                    <div class="absolute inset-0 opacity-5 bg-[linear-gradient(to_right,#808080_1px,transparent_1px),linear-gradient(to_bottom,#808080_1px,transparent_1px)] bg-[size:20px_24px] pointer-events-none"></div>
                    
                    <!-- Bloque COSEDE Seguro (Lado Izquierdo - Ancho 7 de 12) -->
                    <div class="lg:col-span-7 flex flex-col gap-4 text-center md:text-left border-b lg:border-b-0 lg:border-r border-white/10 pb-6 lg:pb-0 lg:pr-8">
                        <div class="flex items-center justify-center md:justify-start gap-4">
                            <div class="w-11 h-11 rounded-xl bg-white/10 backdrop-blur-md border border-white/10 flex items-center justify-center text-white shadow-md">
                                <i class="fa-solid fa-vault text-lg"></i>
                            </div>
                            <h3 class="text-lg md:text-xl font-black tracking-tight uppercase leading-tight">Tus depósitos están <br><span class="text-[#ffd9d6]">protegidos</span></h3>
                        </div>
                        <p class="text-xs text-white/70 leading-relaxed max-w-md mx-auto md:mx-0">
                            Conoce la cobertura del Seguro de Depósitos de tu entidad financiera ingresando directamente al portal oficial de la Corporación del Seguro de Depósitos.
                        </p>
                        <a href="https://www.cosede.gob.ec/" target="_blank" class="inline-flex items-center justify-center gap-2 bg-amber-500 hover:bg-amber-400 text-neutral-900 font-extrabold text-xs px-5 py-2.5 rounded-xl shadow-md transition-all self-center md:self-start tracking-wider uppercase">
                            www.cosede.gob.ec <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                        </a>
                    </div>

                    <!-- Bloque Plataforma EDÚCATE (Lado Derecho - Ancho 5 de 12) -->
                    <div class="lg:col-span-5 flex flex-col gap-4 text-center md:text-left items-center md:items-start pl-0 lg:pl-4">
                        <div>
                            <p class="text-[10px] font-black uppercase tracking-widest text-white/50 mb-1">Plataforma Virtual</p>
                            <h3 class="text-2xl font-black tracking-tight text-white">EDÚCATE</h3>
                            <p class="text-xs italic text-[#ffd9d6]/80 font-medium">Entorno Virtual de Aprendizaje</p>
                        </div>
                        <p class="text-xs text-white/70 leading-relaxed">
                            Accede a nuestros módulos interactivos de educación financiera y fortalece tus conocimientos sobre ahorro y presupuestos de forma ágil.
                        </p>
                        <a href="educacion-financiera.php" class="bg-white/10 backdrop-blur-md border border-white/20 hover:bg-white/20 text-white text-xs font-bold px-4 py-2.5 rounded-xl transition-all flex items-center gap-2">
                            <i class="fa-solid fa-graduation-cap"></i> Ingresar al Entorno
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== DESCARGA APP ===== -->
        <section class="bg-gradient-to-br from-[#7a1310] to-[#a31a16] text-white py-12 md:py-16 border-t border-white/5">
            <div class="max-w-7xl mx-auto px-6 flex flex-col lg:flex-row justify-between items-center gap-8" data-aos="fade-up">
                <div class="text-center lg:text-left flex flex-col gap-1">
                    <h2 class="text-2xl md:text-3xl font-black tracking-tight flex items-center justify-center lg:justify-start gap-2">
                        <i class="fa-solid fa-mobile-screen-button text-xl animate-pulse"></i> Descarga nuestra App
                    </h2>
                    <p class="text-xs text-white/80 max-w-md leading-relaxed">
                        Explora un universo de oportunidades digitales, realiza consultas de saldos y simulaciones cuando quieras y desde donde quieras de forma segura.
                    </p>
                </div>
                
                <!-- Botones Oficiales maquetados nativamente en cajas oscuras  -->
                <div class="flex flex-wrap items-center justify-center gap-4 shrink-0">
                    <!-- Botón Google Play -->
                    <a href="#" class="group flex items-center gap-3 bg-black/30 backdrop-blur-md border border-white/10 px-4 py-2 rounded-xl hover:bg-black/50 hover:border-white/20 transition-all duration-300 w-36 h-12">
                        <i class="fa-brands fa-google-play text-xl text-white group-hover:scale-105 transition-transform"></i>
                        <div class="flex flex-col text-left leading-none">
                            <span class="text-[9px] text-white/50 font-bold uppercase tracking-wider">Disponible en</span>
                            <span class="text-xs font-black text-white mt-0.5">Google Play</span>
                        </div>
                    </a>
                    <!-- Botón App Store -->
                    <a href="#" class="group flex items-center gap-3 bg-black/30 backdrop-blur-md border border-white/10 px-4 py-2 rounded-xl hover:bg-black/50 hover:border-white/20 transition-all duration-300 w-36 h-12">
                        <i class="fa-brands fa-apple text-xl text-white group-hover:scale-105 transition-transform"></i>
                        <div class="flex flex-col text-left leading-none">
                            <span class="text-[9px] text-white/50 font-bold uppercase tracking-wider">Consíguelo en el</span>
                            <span class="text-xs font-black text-white mt-0.5">App Store</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <a href="javascript:void(0)" onclick="whatsapo()" class="fixed bottom-6 right-6 z-50 w-14 h-14 rounded-full bg-[#25D366] 
        text-white flex items-center justify-center text-2xl shadow-xl hover:scale-110 animate-bounce transition-transform" style="animation-duration: 3s;" aria-label="WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>

        <?php include './footer.php' ?>

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
