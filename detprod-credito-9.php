<?php 
include './fn/fn-credito.php';
$id = $_GET['id'];
$fn_credito = new Fn_credito();
$titulo = $fn_credito->fncredito_xget_credito($id);
$desc = $fn_credito->fncredito_xdescget_credito($id);
$min_plazo = 3;
$max_plazo = 12;
$min_tasa = 0;
$max_tasa = 24.99;
$min_valor = 300;
$max_valor = 1000;
$fondo_reserva = 3; /*porcentaje*/
$solca_aporte = 0.5; /*porcentaje*/
$tipoCredito = 'CREDIPUNTOS';
/*
300,00 a 1.000,00 dólares	3 meses	12 meses
*/
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
        <link rel="stylesheet" href="assets/css/custom.css">
        <!--=====  JS SCRIPT LINK =======-->
        <script src="assets/js/plugins/jquery-3-7-1.min.js"></script>
    </head>
    <body>

        <!--===== PRELOADER STARTS =======-->
        <div class="preloader">
            <img src="assets/img/logo/logo2.png">
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
        <div class="inner-pages-section-area" style="background-image: url(assets/img/banner-credito.jpg); background-position: center; background-repeat: no-repeat; background-size: contain;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 m-auto">
                    </div>
                    <div class="col-lg-9 m-auto">
                        <div class="inner-header text-center">
                            <h2 style="font-size: 65px;"><?php echo $titulo ?></h2>
                            <div class="space24"></div>
                            <a href="index.php">Inicio <i class="fa-solid fa-angle-right"></i> <span><?php echo $titulo ?></span></a>
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
<!--                    <div class="col-lg-4 hidden-md image_column">
                        <div class="slider_image margin_extra" style="position: absolute;
                             text-align: right;margin: -250px -158px -330px 0px !important;">
                            <img style="max-width: 45%;
                                 height: auto;" src="assets/img/all-images/about/cal-img.png" class="img-fluid" alt="slider image">
                        </div>
                    </div>-->
                </div>

            </div>
        </div>
        <!--===== HERO AREA ENDS =======-->

        <!--===== ABOUT AREA STARTS =======-->
        <div class="about5-section-area sp1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                                <div class="img1">
                                    <img src="assets/img/all-images/about/about-img7.png" alt="">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1100">
                                <div class="space60 d-lg-block d-none"></div>
                                <div class="img1">
                                    <img src="assets/img/all-images/about/about-img8.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-header heading5">
                            <h5 data-aos="fade-left" data-aos-duration="800">Crédito</h5>
                            <div class="space16"></div>
                            <h2 class="text-anime-style-3"><?php echo $titulo ?></h2>
                            <div class="space16"></div>
                            <p data-aos="fade-left" data-aos-duration="900"><?php echo $desc ?></p>
                            <div class="space32"></div>
                            <div class="btn-area1" data-aos="fade-left" data-aos-duration="1000">
                                <a href="#" class="vl-btn5"><span class="text">Conocer más</span><span class="arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="space48"></div>

                    </div>
                </div>
            </div>
        </div>
        <!--===== ABOUT AREA ENDS =======-->
         <!--===== SERVICE AREA STARTS =======-->
<div class="about2-section-area sp2" style="background-image: url(assets/img/all-images/bg/bg3.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
<!--                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="heading3 text-center space-margin60">
                            <h5>crédito</h5>
                            <div class="space16"></div>
                            <h2 class="text-anime-style-3">Características crédito</h2>
                        </div>
                    </div>
                </div>-->

                <div class="row">


                    <div class="col-lg-6">
                        <div class="about-heading heading2">
                            <div class="space16"></div>
                            <div data-aos="fade-left" data-aos-duration="1000" style="border-bottom: 4px solid #a31a16">
                                <div class="about-boxarea">
                                    <div class="icons">
                                        <img src="assets/img/icon-monto-01.png" style="filter: brightness(0) invert(1);max-width: 65% !important;" alt="">
                                    </div>
                                    <div class="text">
                                        <a href="#" style="font-size: 24px;color:#000;">Monto</a>
                                        <div class="space16"></div>
                                        <p style="font-size: 18px;">hasta 
                                            <span style="font-size: 25px;font-weight: 800; color: #a31a16;"> 1.000,00 </span>dólares</p>
                                    </div>
                                </div>
                            </div>
                            <div class="space16"></div>
                            <div class="space30"></div>
                            <div data-aos="fade-left" data-aos-duration="1000" style="border-bottom: 4px solid #a31a16">
                                <div class="about-boxarea">
                                    <div class="icons">
                                        <img src="assets/img/icon-segmento.png" style="filter: brightness(0) invert(1);max-width: 65% !important;" alt="">
                                    </div>
                                    <div class="text">
                                        <a href="#" style="font-size: 24px;color:#000;">Perfil</a>
                                        <div class="space16"></div>
                                        <p style="font-size: 18px;">Ser mayor de 18 años y no mayor a 65 años incluido la vida del crédito.<br><br> </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-heading heading2">
                            <div class="space16"></div>
                            <div data-aos="fade-left" data-aos-duration="1100" style="border-bottom: 4px solid #a31a16">
                                <div class="about-boxarea">
                                    <div class="icons">
                                        <img src="assets/img/icon-time.svg" style="filter: brightness(0) invert(1);max-width: 65% !important;" alt="">
                                    </div>
                                    <div class="text">
                                        <a href="#" style="font-size: 24px;color:#000;">Plazo</a>
                                        <div class="space16"></div>
                                        <p style="font-size: 18px;">máximo hasta <span style="font-size: 25px;font-weight: 800; color: #a31a16;">12 </span>meses                            </p>
                                    </div>
                                </div>
                            </div>
                            <div class="space16"></div>
                            <div class="space30"></div>
                            <div data-aos="fade-left" data-aos-duration="1100" style="border-bottom: 4px solid #a31a16">
                                <div class="about-boxarea">
                                    <div class="icons">
                                        <img src="assets/img/icon-perfil.png" style="filter: brightness(0) invert(1);max-width: 65% !important" alt="">
                                    </div>
                                    <div class="text">
                                        <a href="#" style="font-size: 24px;color:#000;">Segmento</a>
                                        <div class="space16"></div>
                                        <p style="font-size: 18px;">Personas naturales  busquen mejorar su score crediticio. ( Monto que quedará ignorado)                                   </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space30"></div>

                </div>
            </div>
        </div>
<!--===== SERVICE AREA ENDS =======-->
<!--===== ABOUT AREA STARTS =======-->
<div class="about3-section-area sp1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="about-images-area">
                           
                            <div class="img1 text-end reveal">
                                <img src="assets/img/all-images/about/about-img5.png" alt="">
                            </div>
                           
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="heading3">
                            <div class="space16"></div>
                            <h2 class="text-anime-style-3">Requisitos</h2>
                            <div class="space16"></div>
                            <div class="space16"></div>
                            <ul data-aos="fade-left" data-aos-duration="1000">
                                <li><img src="assets/img/icons/arrow1.svg" alt=""> Solicitud de crédito</li>
                                <li><img src="assets/img/icons/arrow1.svg" alt=""> Documentos de identidad</li>
                                <li><img src="assets/img/icons/arrow1.svg" alt=""> Resumen Financiero</li>
                                <li><img src="assets/img/icons/arrow1.svg" alt=""> Croquis y fotografías</li>
                                <li><img src="assets/img/icons/arrow1.svg" alt=""> Perfil socioeconómico</li>
                                <li><img src="assets/img/icons/arrow1.svg" alt=""> Mantener al menos el mínimo requerido de certificados de aportación</li>
                                <li><img src="assets/img/icons/arrow1.svg" alt=""> Tener cuenta de Ahorros vista actualizada.</li>
                            </ul>
                            <div class="space32"></div>
                            <!--          <div class="btn-area1" data-aos="fade-left" data-aos-duration="1100">
                                        <a href="service.html" class="vl-btn3">Request A Service</a>
                                      </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--===== ABOUT AREA ENDS =======-->
        <!--===== SERVICE AREA STARTS =======-->
        <div class="service3-section-area sp2" style="background-image: url(assets/img/all-images/bg/bg3.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <?php include './mod-caracteristicas-credito.php' ?>
        </div>
        <!--===== ABOUT AREA STARTS =======-->
<div class="about4-section-area sp1">
    <?php include './mod-simulador-credito.php' ?>
</div>
<!--===== ABOUT AREA ENDS =======-->
<!-- Modal -->
        <div id="modalSimulador" class="modal">
            <div class="modal-content">
                <span class="cerrar" onclick="cerrarModal()">&times;</span>
                <h1 style="font-weight: 800; text-align: center !important">Simulador de Crédito</h1>
<!--                <p style="text-align: center !important">Aquí puedes colocar tu formulario o resultado del simulador.</p>-->
                <div id="resultado"></div> 
            </div>
        </div>
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
        <script src="assets/js/js-index.js"></script>
    </body>
</html>