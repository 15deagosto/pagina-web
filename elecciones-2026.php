<?php
require './controler/conexion.php';
require '../funciones/fn-index.php';
$con = new Conecciones();
$fnindex = new Fn_index();
//$slider = $fncredito->fnindex_rslider();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Elecciones 2026 - 15 de Agosto Cooperativa de Ahorro y Crédito</title>

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
        <link rel="stylesheet" href="assets/css/custom.css">
        <!--=====  JS SCRIPT LINK =======-->
        <script src="assets/js/plugins/jquery-3-7-1.min.js"></script>
    </head>
    <body>

        <!--===== PRELOADER STARTS =======-->
        <div class="preloader">
            <div class="loader"></div>
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
                            <a href="index-2.html"><img src="assets/img/logo/logo1.png" alt=""></a>
                        </div>
                        <div class="vl-offcanvas-close">
                            <button class="vl-offcanvas-close-toggle"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                    </div>

                    <div class="vl-offcanvas-menu d-lg-none mb-40">
                        <nav></nav>
                    </div>

                    <div class="space20"></div>
                    <div class="vl-offcanvas-info">
                        <h3 class="vl-offcanvas-sm-title">Contact Us</h3>
                        <div class="space20"></div>
                        <span><a href="#"> <i class="fa-regular fa-envelope"></i> +57 9954 6476</a></span>
                        <span><a href="#"><i class="fa-solid fa-phone"></i> hello@exdos.com</a></span>
                        <span><a href="#"><i class="fa-solid fa-location-dot"></i> Bhemeara,Kushtia</a></span>
                    </div>
                    <div class="space20"></div>
                    <div class="vl-offcanvas-social">
                        <h3 class="vl-offcanvas-sm-title">Follow Us</h3>
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
        <div class="inner-pages-section-area" style="background-image: url(assets/img/all-images/bg/bg-header-002.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="inner-header text-center">
                            <h2 style="font-size: 65px;">Elecciones 2026</h2>
                            <div class="space24"></div>
                            <a href="index.php">Inicio <i class="fa-solid fa-angle-right"></i> <span>Elecciones 2026</span></a>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <!--===============spacing==============-->
                        <div class="pd_top_80"></div>
                        <!--===============spacing==============-->

                        <!--===============spacing==============-->
                        <div class="pd_bottom_80"></div>
                        <!--===============spacing==============-->
                    </div>
                    <div class="col-lg-4 hidden-md image_column">
                        <div class="slider_image margin_extra" style="position: absolute;
                             text-align: right;margin: -250px -158px -330px 0px !important;">
                            <img style="max-width: 45%;
                                 height: auto;" src="assets/img/all-images/about/cal-img.png" class="img-fluid" alt="slider image">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--===== HERO AREA ENDS =======-->

        <!--===== ABOUT AREA STARTS =======-->
        <div class="aboutinner2-section-area sp1" style="background: #c0c0c04d;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-images-area">
<!--                            <img style="width: 80px;" src="assets/img/elements/estadistica-nosotros.png" alt="" class="elements18">-->
                            <div class="img1 reveal">
                                <img src="assets/img/empresa-003.png" alt="">
                            </div>
                            <!--                            <div class="img2">
                                                            <img src="assets/img/all-images/about/about-img5.png" alt="">
                                                        </div>-->
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="heading1">
                            <div class="space16"></div>
                            <p data-aos="fade-left" data-aos-duration="900" style="text-align: justify;">
                                La Cooperativa de Ahorro y Crédito de Agosto de 15 de Agosto existe gracias a la participación activa de sus socios. Nuestro propósito no es solo ofrecer servicios financieros; es impulsar el bienestar de nuestra comunidad, fortalecer la confianza y construir oportunidades para todos. Por eso, elegir a quienes nos representarán significa elegir quién liderará con transparencia, quién cuidará de nuestros recursos y quién continuará construyendo nuestro desarrollo colectivo.  
                            </p>
                            <div class="space16"></div>

                            <div class="space32"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===== ABOUT AREA ENDS =======-->

        <!--===== BLOG AREA STARTS =======-->
        <div class="vl-blog-5-area sp2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="vl-blog-1-section-box heading5 space-margin60">
                            <div class="space16"></div>
                            <div style="display: flex;
                                 padding-bottom: 15px !important;">
                                <div style="height: 47px; width: 3px; background-color: #ba0001;margin-right: 15px;"><p></p>
                                </div><h2 class="vl-section-title text-anime-style-3">Documentos y Reglamento </h2><br><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12" data-aos="zoom-in-up" data-aos-duration="900">
                        <div class="vl-blog-1-item">
                            <div class="vl-blog-1-content" style="padding: 20px;">
                                <h4 class="vl-blog-1-title"><a href="doc/LISTA_GANADORA_0.pdf" target="_blank"> Resultados Elecciones 2026</a></h4>
                            </div>
                        </div>
                        <div class="vl-blog-1-item">
                            <div class="vl-blog-1-content" style="padding: 20px;">
                                <h4 class="vl-blog-1-title"><a href="doc/LISTA_CALIFICADA_COAC15AG.pdf" target="_blank">Lista Calificadas</a></h4>
                            </div>
                        </div>
                        <div class="vl-blog-1-item">
                            <div class="vl-blog-1-content" style="padding: 20px;">
                                <h4 class="vl-blog-1-title"><a target="_blank" href="doc/REGLAMENTO-DE-ELECCIONES-1.pdf">Reglamentos de Elecciones</a></h4>
                            </div>
                        </div>
                        <div class="vl-blog-1-item">
                            <div class="vl-blog-1-content" style="padding: 20px;">
                                <h4 class="vl-blog-1-title"><a target="_blank" href="doc/CONVOCATORIA.pdf">Convocatoria 2026</a></h4>
                            </div>
                        </div>
                        <div class="vl-blog-1-item">
                            <div class="vl-blog-1-content" style="padding: 20px;">
                                <h4 class="vl-blog-1-title"><a target="_blank" href="doc/SOLICITUD_DE_INSCRIPCION_DE_LISTA.pdf">Formato de Inscripción de Listas </a></h4>
                            </div>
                        </div>
                        <div class="vl-blog-1-item">
                            <div class="vl-blog-1-content" style="padding: 20px;">
                                <h4 class="vl-blog-1-title"><a target="_blank" href="doc/5_FICHA_INSCRIPCION.pdf">Ficha de Registro de Candidatos </a></h4>
                            </div>
                        </div>
                        <div class="vl-blog-1-item">
                            <div class="vl-blog-1-content" style="padding: 20px;">
                                <h4 class="vl-blog-1-title"><a target="_blank" href="doc/3_DECLARACION_JURADA_CANDIDATOS.pdf">Formato de Declaración Jurada de Candidatos</a></h4>
                            </div>
                        </div>
                        <div class="vl-blog-1-item">
                            <div class="vl-blog-1-content" style="padding: 20px;">
                                <h4 class="vl-blog-1-title"><a target="_blank" href="doc/5_INSTRUCTIVO_COAC15AG.pdf">Instructivo de Elecciones</a></h4>
                            </div>
                        </div>
                        <div class="vl-blog-1-item">
                            <div class="vl-blog-1-content" style="padding: 20px;">
                                <h4 class="vl-blog-1-title"><a href="doc/LISTA_CALIFICADA_COAC15AG (1).pdf" target="_blank">Listas Calificadas Final</a></h4>
                            </div>
                        </div>
                        <div class="vl-blog-1-item">
                            <div class="vl-blog-1-content" style="padding: 20px;">
                                <h4 class="vl-blog-1-title">
                                    <a onclick="abrirRecinto()" style="cursor: pointer;" target="_blank">Recintos Electorales</a>
                                </h4>
                            </div>
                        </div>
                        <div class="vl-blog-1-item">
                            <div class="vl-blog-1-content" style="padding: 20px;">
                                <h4 class="vl-blog-1-title"><a target="_blank" href="doc/CALENDARIO.pdf">Calendarios</a></h4>
                            </div>
                        </div>
                        <div class="vl-blog-1-item">
                            <div class="vl-blog-1-content" style="padding: 20px;">
                                <h4 class="vl-blog-1-title"><a target="_blank" href="doc/PROCLAMACION_LISTA1.pdf">Proclamación de Representantes Electos</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12" data-aos="zoom-in-up" data-aos-duration="900">
                        <img src="assets/img/persona_coop_001.png">
                    </div>

                </div>
            </div>
        </div>
        <!--===== BLOG AREA ENDS =======-->
        <div id="modalRecinto" class="modal">
            <div class="modal-content">
                <span class="cerrar" onclick="cerrarRecinto()">&times;</span>
                <!--<h1 style="font-weight: 800; text-align: center !important">Simulador de Crédito</h1>-->
<!--                <p style="text-align: center !important">Aquí puedes colocar tu formulario o resultado del simulador.</p>-->
                <img src="assets/img/recintos-electorales.jpeg">
            </div>
        </div>
        <script>
        function abrirRecinto() {
    document.getElementById("modalRecinto").style.display = "block";
    calcularcredito();
}

function cerrarRecinto() {
    document.getElementById("modalRecinto").style.display = "none";
}
        </script>
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
    </body>
</html>