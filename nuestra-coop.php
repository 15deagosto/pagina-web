<?php
require './controler/conexion.php';
include './fn/fn-credito.php';
require './funciones/fn-index.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();
$textnosotros = $fnindex->fnindex_rtextosxtipo(5);
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
        <div class="inner-pages-section-area" style="background-image: url(assets/img/all-images/bg/bg-header-002.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="inner-header text-center">
                            <h2 style="font-size: 65px;">Nuestra Cooperativa</h2>
                            <div class="space24"></div>
                            <a href="index.php">Inicio <i class="fa-solid fa-angle-right"></i> <span>Nuestra Cooperativa</span></a>
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
                                <img src="assets/img/<?php echo $textnosotros[0]['img_texto']; ?>" alt="">
                            </div>
                            <!--                            <div class="img2">
                                                            <img src="assets/img/all-images/about/about-img5.png" alt="">
                                                        </div>-->
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="heading1">
                            <div class="space16"></div>
                            <?php echo $textnosotros[0]['texto_texto']; ?>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-6">
                                    <div class="counter-boxarea">
                                        <h3><span class="counter">1,023 </span>+</h3>
                                        <div class="space20"></div>
                                        <p>Socios activos</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-6">
                                    <div class="counter-boxarea">
                                        <h3><span class="counter">10</span>+</h3>
                                        <div class="space20"></div>
                                        <p>Años</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-6">
                                    <div class="counter-boxarea">
                                        <h3><span class="counter">4500</span>+</h3>
                                        <div class="space20"></div>
                                        <p>Créditos concedidos</p>
                                    </div>
                                </div>
                            </div>
                            <div class="space32"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===== ABOUT AREA ENDS =======-->

        <!--===== MISSION-VISSION AREA STARTS =======-->
        <div class="others-vission-area sp1">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="mission-vission-area">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                        <span class="icon"><img src="assets/img/icons/mission-icon1.svg" alt=""></span>
                                        <span class="text">Vision</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                        <span class="icon"><img src="assets/img/icons/mission-icon2.svg" alt=""></span>
                                        <span class="text">Mision</span>
                                    </button>
                                </li>

                            </ul>
                            <div class="space48"></div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="heading1">
                                                <h2>Vision</h2>
                                                <div class="space16"></div>
                                                <p><?php echo $textnosotros[0]['car2_texto']; ?></p>
                                                <div class="space16"></div>

                                                <div class="space32"></div>
<!--                                                <div class="btn-area1">
                                                    <a href="" class="vl-btn1">Ver más</a>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="img1">
                                                <img src="assets/img/all-images/others/mission-img1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="heading1">
                                                <h2>Mision</h2>
                                                <div class="space16"></div>
                                                <p><?php echo $textnosotros[0]['car1_texto']; ?></p>
                                                <div class="space16"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="img1">
                                                <img src="assets/img/all-images/others/mission-img1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--===== MISSION-VISSION AREA ENDS =======-->

        <!--===== WORK AREA STARTS =======-->
        <div class="work5-section-area sp2" style="background: #c0c0c04d;">
            <div class="container">
                <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="heading3 text-center space-margin60">
          <div class="space16"></div>
          <div style="display: flex;
                         padding-bottom: 15px !important;">
                        <div style="height: 47px; width: 3px; background-color: #ba0001;margin-right: 15px;"><p></p></div> <h2 class="text-anime-style-3">Nuestros Valores</h2><br><br>
                    </div>
        </div>
      </div>
    </div>
                <div class="row">
                    <div class="col-lgg-6 m-auto">
                        <div class="heading5 text-center space-margin60">
                            <div class="space16"></div>
                           
                        </div>
                        <div class="space20"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                        <div class="work-single-boxarea">
                            <div class="icons">
                                <img src="assets/img/all-images/circle-white.png" alt="" class="elements14">
                                <div class="icon">
                                    <img src="assets/img/icons/work-icon4.svg" alt="">
                                </div>
                            </div>
                            <div class="space48"></div>
                            <div class="conten-area">
                                <a href="#">Lealtad laboral</a>
                                <div class="space16"></div>
                                <p>Valoramos la fidelidad, el respeto y el compromiso con nuestra cooperativa.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="900">
                        <div class="work-single-boxarea">
                            <div class="icons">
                                <img src="assets/img/all-images/circle-white.png" alt="" class="elements14">
                                <div class="icon">
                                    <img src="assets/img/icons/work-icon5.svg" alt="">
                                </div>
                            </div>
                            <div class="space48"></div>
                            <div class="conten-area">
                                <a href="#">Humildad</a>
                                <div class="space16"></div>
                                <p>Reconocemos nuestros errores y estamos abiertos a correguilos y mejorar continuamente.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1000">
                        <div class="work-single-boxarea">
                            <div class="icons">
                                <img src="assets/img/all-images/circle-white.png" alt="" class="elements14">
                                <div class="icon">
                                    <img src="assets/img/icons/work-icon6.svg" alt="">
                                </div>
                            </div>
                            <div class="space48"></div>
                            <div class="conten-area">
                                <a href="#">Honestidad</a>
                                <div class="space16"></div>
                                <p>Actuamos con transparencia y veracidad, asegurando que nuestras acciones no perjudiquen los objetivos de la institución.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                        <div class="work-single-boxarea">
                            <div class="icons">
                                <img src="assets/img/all-images/circle-white.png" alt="" class="elements14">
                                <div class="icon">
                                    <img src="assets/img/icons/work-icon4.svg" alt="">
                                </div>
                            </div>
                            <div class="space48"></div>
                            <div class="conten-area">
                                <a href="#">Responsabilidad</a>
                                <div class="space16"></div>
                                <p>Cumplimos con nuestras funciones y asumimos las consecuencias de nuestras deciones y acciones. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="900">
                        <div class="work-single-boxarea">
                            <div class="icons">
                                <img src="assets/img/all-images/circle-white.png" alt="" class="elements14">
                                <div class="icon">
                                    <img src="assets/img/icons/work-icon5.svg" alt="">
                                </div>
                            </div>
                            <div class="space48"></div>
                            <div class="conten-area">
                                <a href="#">Compromiso</a>
                                <div class="space16"></div>
                                <p>Nos enfocamos en los objetivos de la institución, con un firme compromiso hacia su crecimiento.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1000">
                        <div class="work-single-boxarea">
                            <div class="icons">
                                <img src="assets/img/all-images/circle-white.png" alt="" class="elements14">
                                <div class="icon">
                                    <img src="assets/img/icons/work-icon6.svg" alt="">
                                </div>
                            </div>
                            <div class="space48"></div>
                            <div class="conten-area">
                                <a href="#">Trabajo en equipo</a>
                                <div class="space16"></div>
                                <p>Fomentamos la colaboración para alcanzar metas trascendentales y contribuir al éxito colectivo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 150px;"></div>
        </div>
        <!--===== WORK AREA ENDS =======-->

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