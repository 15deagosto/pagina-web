<?php 
include './fn/fn-ahorro.php';
$id = $_GET['id'];
$fn_ahorro = new Fn_ahorro();
$titulo = $fn_ahorro->fnahorro_xget_ahorro($id);
$desc = $fn_ahorro->fnahorro_xdescget_ahorro($id);
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
        <div class="inner-pages-section-area" style="background-image: url(assets/img/banner-ahorros.jpg); background-position: center; background-repeat: no-repeat; background-size: contain;">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-10 m-auto">
                        <div class="inner-header text-center">
                            <h2 style="font-size: 65px;"><?php echo $titulo ?></h2>
                            <div class="space24"></div>
                            <a href="index.php">Inicio <i class="fa-solid fa-angle-right"></i> <span><?php echo $titulo ?></span></a>
                        </div>
                    </div>
                    <div class="col-lg-2 m-auto">
                       
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
                                    <img src="assets/img/img-producto-ahorro-01.jpg" alt="">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1100">
                                <div class="space60 d-lg-block d-none"></div>
                                <div class="img1">
                                    <img src="assets/img/img-producto-ahorro-02.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-header heading5">
                            <h5 data-aos="fade-left" data-aos-duration="800">Ahorro</h5>
                            <div class="space16"></div>
                            <h2 class="text-anime-style-3"><?php echo $titulo ?></h2>
                            <div class="space16"></div>
                            <p data-aos="fade-left" data-aos-duration="900">We offer tailored advice services designed to navigate the complexities of finance with confidence. Our mission is simple: to be your trusted partner in achieving sustainable growth and financial success.</p>
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
<div class="service3-section-area sp2" style="background-image: url(assets/img/all-images/bg/bg3.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
  <?php include './mod-caracteristicas-ahorro.php' ?>
</div>
<!--===== SERVICE AREA ENDS =======-->
        <!--===== ABOUT AREA STARTS =======-->
<div class="about4-section-area sp1">
    <?php include './mod-simulador-ahorro.php' ?>
</div>
<!--===== ABOUT AREA ENDS =======-->
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