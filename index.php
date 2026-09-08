<?php
require './controler/conexion.php';
require './fn/fn-credito.php';
require './funciones/fn-index.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();
//$listcredito = $fncredito->fncredito_xget_listcredito();
$slider = $fncredito->fnindex_rslider();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio - 15 de Agosto Cooperativa de Ahorro y Crédito</title>

        <!--=====FAB ICON=======-->
        <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">

        <!--===== CSS LINK =======-->
        <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/plugins/aos.css">
        <link rel="stylesheet" href="assets/css/plugins/fontawesome.css">
        <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/plugins/owlcarousel.min.css">
        <link rel="stylesheet" href="assets/css/plugins/sidebar.css">
        <link rel="stylesheet" href="assets/css/plugins/slick-slider.css">
        <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
        <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <!--=====  JS SCRIPT LINK =======-->
        <script src="assets/js/plugins/jquery-3-7-1.min.js"></script>
    </head>
    <body>

        <!--===== PRELOADER STARTS =======-->
        <div class="preloader">
            <img src="assets/img/logo/logo2.png">
            <div class="loader">
            </div>
        </div>
        <!--===== PRELOADER ENDS =======-->

        <!--===== PROGRESS STARTS=======-->
        <div class="paginacontainer">
            <div class="progress-wrap">
                <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
                </svg>
            </div>
        </div>
        <!--===== PROGRESS ENDS=======-->

        <!--=====HEADER START=======-->
        <header class="homepage2-body">
            <?php include 'header.php'; ?>
        </header>
        <!--=====HEADER END =======-->

        <!--===== MOBILE HEADER STARTS =======-->
        <div class="homepage2-body">
            <div class="vl-offcanvas">
                <div class="vl-offcanvas-wrapper">
                    <div class="vl-offcanvas-header d-flex justify-content-between align-items-center mb-90">
                        <div class="vl-offcanvas-logo">
                            <a href="index.php"><img src="assets/img/logo/logo2.png" alt=""></a>
                        </div>
                        <div class="vl-offcanvas-close">
                            <button class="vl-offcanvas-close-toggle"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                    </div>

                    <div class="vl-offcanvas-menu d-lg-none mb-40">
                        <nav></nav>
                    </div>

                    <!--                    <div class="space20"></div>
                                        <div class="vl-offcanvas-info">
                                            <h3 class="vl-offcanvas-sm-title">Contact Us</h3>
                                            <div class="space20"></div>
                                            <span><a href="#"> <i class="fa-regular fa-envelope"></i> +57 9954 6476</a></span>
                                            <span><a href="#"><i class="fa-solid fa-phone"></i> hello@exdos.com</a></span>
                                            <span><a href="#"><i class="fa-solid fa-location-dot"></i> Bhemeara,Kushtia</a></span>
                                        </div>-->
                    <div class="space20"></div>
                    <div class="vl-offcanvas-social">
                        <h3 class="vl-offcanvas-sm-title">Síguenos en</h3>
                        <div class="space20"></div>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>

                </div>
            </div>
            <div class="vl-offcanvas-overlay"></div>
        </div>
        <!--===== MOBILE HEADER STARTS =======-->

        <!--===== HERO AREA STARTS =======-->
        <div class="hero5-slider-section">
            <?php include './mod-slider.php' ?>
        </div>

        <div class="testimonial-arrows">
            <div class="testimonial-prev-arrow">
                <button><i class="fa-solid fa-angle-left"></i></button>
            </div>
            <div class="testimonial-next-arrow">
                <button><i class="fa-solid fa-angle-right"></i></button>
            </div>
        </div>
        <!--===== HERO AREA ENDS =======-->

        <!--===== BRAND AREA STARTS =======-->
        <div class="brand1-section-area sp2" style="background: #c0c0c0;">
            <?php include './mod-enlaces.php' ?>
        </div>
        <!--===== BRAND AREA ENDS =======-->
        <!--===== ABOUT AREA STARTS =======-->
        <div class="about2-section-area sp1">
            <?php include './mod-about-us.php' ?>
        </div>
        <!--===== ABOUT AREA ENDS =======-->

        <!--===== SERVICE AREA STARTS =======-->
        <div class="service3-section-area sp2" style="background-image: url(assets/img/all-images/bg/bg3.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <?php include './mod-servicios.php' ?>
        </div>
        <!--===== SERVICE AREA ENDS =======-->

        <!--===== ABOUT AREA STARTS =======-->
        <div class="about4-section-area sp1">
            <?php include './mod-simulador.php' ?>
        </div>
        <!--===== ABOUT AREA ENDS =======-->


        <!--===== TESTIMONIAL AREA STARTS =======-->
        <div class="testimonial4-section-area sp1" style="background-image: url(assets/img/all-images/bg/fondo-empresa-004.png);background-size: contain;background: #f2f2f2;">
            <?php include './mod-testimonio.php' ?>
        </div>
        <!--===== TESTIMONIAL AREA ENDS =======-->




        <!--===== BLOG AREA STARTS =======-->
        <div class="vl-blog-3-area sp2">
            <?php include './mod-noticia.php' ?>
        </div>
        <!--===== BLOG AREA ENDS =======-->

        <!--===== BLOG AREA STARTS =======-->
        <div class="vl-blog-3-area sp2">
            <?php include './mod-cosede.php' ?>
        </div>
        <!--===== BLOG AREA ENDS =======-->

        <!--===== CTA AREA STARTS =======-->
        <div class="cta4-section-area sp4" style="background-image: url(assets/img/all-images/bg/fondo-006.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="cta-header">
                            <div class="space20"></div>
                            <h2 class="text-anime-style-3">Descarga nuestra App</h2><br><br>
                            <h5 style="text-transform: none;font-size: 24px;
                                line-height: 30px;"> Explora un universo innovador de oportunidades digitales ilimitadas. </h5>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="cta-author-area">
                                    <div class="icons">
                                        <img style="width: 60%;" src="assets/img/google-play.png" alt="">
                                    </div>
                                    <div class="text">
                      <!--                <p>Llámanos 24/7</p>-->
                                        <a href="#" style="font-size: 24px;">Google Play</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="cta-author-area">
                                    <div class="icons">
                                        <img src="assets/img/app-store.png"  style="width: 60%;" alt="">
                                    </div>
                                    <div class="text">
                      <!--                <p>Llámanos 24/7</p>-->
                                        <a href="#" style="font-size: 24px;">App Store</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===== CTA AREA ENDS =======-->
        <!--        <button onclick="abrirModal()">Abrir Modal</button>-->
        <!-- Modal -->
        <div id="modalSimulador" class="modal">
            <div class="modal-content">
                <span class="cerrar" onclick="cerrarModal()">&times;</span>
                <h1 style="font-weight: 800; text-align: center !important">Simulador de Crédito</h1>
<!--                <p style="text-align: center !important">Aquí puedes colocar tu formulario o resultado del simulador.</p>-->
                <div id="resultado"></div> 
            </div>
        </div>
        <a href="javascript:void(0)" type="button" class="whats-btn" onclick="whatsapo()">
            <i class="fab fa-3x fa-whatsapp"></i>
            <!--593984185566-->
        </a>

        
        <!--===== FOOTER AREA STARTS =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>
        <!--===== FOOTER AREA ENDS =======-->

        <!--===== JS SCRIPT LINK =======-->
        <script src="assets/js/plugins/bootstrap.min.js"></script>
        <script src="assets/js/plugins/fontawesome.js"></script>
        <script src="assets/js/plugins/aos.js"></script>
        <script src="assets/js/plugins/counter.js"></script>
        <script src="assets/js/plugins/gsap.min.js"></script>
        <script src="assets/js/plugins/ScrollTrigger.min.js"></script>
        <script src="assets/js/plugins/Splitetext.js"></script>
        <script src="assets/js/plugins/SmoothScroll.js"></script>
        <script src="assets/js/plugins/sidebar.js"></script>
        <script src="assets/js/plugins/magnific-popup.js"></script>
        <script src="assets/js/plugins/mobilemenu.js"></script>
        <script src="assets/js/plugins/owlcarousel.min.js"></script>
        <script src="assets/js/plugins/nice-select.js"></script>
        <script src="assets/js/plugins/waypoints.js"></script>
        <script src="assets/js/plugins/slick-slider.js"></script>
        <script src="assets/js/plugins/circle-progress.js"></script>
        <script src="assets/js/plugins/swiper.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js-index.js"></script>
    </body>
</html>