<?php
require './controler/conexion.php';
include './fn/fn-credito.php';
require './funciones/fn-index.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();
//$slider = $fncredito->fnindex_rslider();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Preguntas Frecuentes - 15 de Agosto Cooperativa de Ahorro y Crédito</title>

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
        <div class="inner-pages-section-area" style="background-image: url(assets/img/banner-preguntas.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="inner-header text-center">
                            <h2 style="font-size: 65px; color: white;">Preguntas Frecuentes</h2>
                            <div class="space24"></div>
                            <a href="index.php" style=" color: white;">Inicio <i class="fa-solid fa-angle-right"  style=" color: white;"></i> <span  style=" color: white;">Preguntas Frecuentes</span></a>
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
        <!--===== FAQ AREA STARTS =======-->
        <div class="faq-inner-section-area sp1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="faq-widget-area text-center">
                            <ul class="nav nav-pills text-center" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Todas</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Seguridad</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Inversiones</button>
                                </li>
                            </ul>
                            <div class="space48"></div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                    <div class="faq-section-area">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="accordian-area">
                                                    <div class="accordion" id="accordionExample">
                                                        <?php
                                                        $i = 0;
                                                        $listfaq = $fnindex->fnindex_rpreguntas_frecuentes_all();
                                                        while ($menufaq = $listfaq->fetch_assoc()) {
                                                            
                                                            $i++;
                                                            $show = '';
                                                           //$collapse = 'collapse';
                                                            $expand = 'false';
                                                            if($i == 1){
                                                                $show = 'show';
                                                                //$collapse = '';
                                                                $expand = 'true';
                                                            }
                                                            ?>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button <?php echo $collapse ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i ?>" aria-expanded="<?php echo $expand ?>" aria-controls="collapse<?php echo $i ?>">
                                                                        <?php echo utf8_encode($menufaq['preg_prefrec']) ?>
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse<?php echo $i ?>" class="accordion-collapse collapse <?php echo $show ?>" data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <p><?php echo utf8_encode($menufaq['resp_prefrec']) ?></p>                                                   
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                           
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>

<!--                                            <div class="col-lg-6">
                                                <div class="accordian-area">
                                                    <div class="accordion" id="accordionExample2">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                                                    Pregunta frecuente #6 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space20"></div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                                    Pregunta frecuente #7 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space20"></div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                                    Pregunta frecuente #8 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space20"></div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                                    Pregunta frecuente #9 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space20"></div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                                    Pregunta frecuente #10 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                    <div class="faq-section-area">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="accordian-area">
                                                    <div class="accordion" id="accordionExample3">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                                                                    Pregunta frecuente #11 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseEleven" class="accordion-collapse collapse show" data-bs-parent="#accordionExample3">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space20"></div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                                                    Pregunta frecuente #12 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space20"></div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                                                    Pregunta frecuente #13 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space20"></div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                                                    Pregunta frecuente #14 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space20"></div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                                                    Pregunta frecuente #15 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFifteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="accordian-area">
                                                    <div class="accordion" id="accordionExample4">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtysix" aria-expanded="true" aria-controls="collapseThirtysix">
                                                                    Pregunta frecuente #10 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThirtysix" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space20"></div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtyseven" aria-expanded="false" aria-controls="collapseThirtyseven">
                                                                    Pregunta frecuente #10 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThirtyseven" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space20"></div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtyeight" aria-expanded="false" aria-controls="collapseThirtyeight">
                                                                    Pregunta frecuente #11 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThirtyeight" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space20"></div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtynine" aria-expanded="false" aria-controls="collapseThirtynine">
                                                                    Pregunta frecuente #12 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThirtynine" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space20"></div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourty" aria-expanded="false" aria-controls="collapseFourty">
                                                                    Pregunta frecuente #13 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFourty" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                                    <div class="faq-section-area">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="accordian-area">
                                                    <div class="accordion" id="accordionExample5">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                                                                    Pregunta frecuente #14 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseSixteen" class="accordion-collapse collapse show" data-bs-parent="#accordionExample5">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space20"></div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                                                    Pregunta frecuente #10 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseSeventeen" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space20"></div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEightteen" aria-expanded="false" aria-controls="collapseEightteen">
                                                                    Pregunta frecuente #11 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseEightteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space20"></div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                                                                    Pregunta frecuente #12 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseNineteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space20"></div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                                                    Pregunta frecuente #13 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTwenty" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="accordian-area">
                                                    <div class="accordion" id="accordionExample6">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtyone" aria-expanded="true" aria-controls="collapseFourtyone">
                                                                    Pregunta frecuente #14 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFourtyone" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space20"></div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtytwo" aria-expanded="false" aria-controls="collapseFourtytwo">
                                                                    What industries do you specialize in?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFourtytwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space20"></div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtythree" aria-expanded="false" aria-controls="collapseFourtythree">
                                                                    Pregunta frecuente #15 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFourtythree" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space20"></div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtyfour" aria-expanded="false" aria-controls="collapseFourtyfour">
                                                                    Pregunta frecuente #16 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFourtyfour" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space20"></div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtyfive" aria-expanded="false" aria-controls="collapseFourtyfive">
                                                                    Pregunta frecuente #17 ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFourtyfive" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
                                                                <div class="accordion-body">
                                                                    <p>We serve clients across various including technology, manufacturing, healthcare, retail, and more our financial strategies are customized.</p> 
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===== FAQ AREA ENDS =======-->

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