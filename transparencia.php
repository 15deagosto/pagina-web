<?php
require './controler/conexion.php';
include './fn/fn-credito.php';
require './funciones/fn-index.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();
//$listcredito = $fncredito->fncredito_xget_listcredito();
//$slider = $fncredito->fnindex_rslider();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transparencia - 15 de Agosto Cooperativa de Ahorro y Crédito</title>

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
        <div class="inner-pages-section-area" style="background-image: url(assets/img/banner-transparencia.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="inner-header text-center">
                            <h2 style="font-size: 65px;">Transparencia</h2>
                            <div class="space24"></div>
                            <a href="index.php">Inicio <i class="fa-solid fa-angle-right"></i> <span>Transparencia</span></a>
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
        <div class="aboutinner2-section-area sp1" style="background: #c0c0c04d;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="heading1">
                            <div class="space16"></div>
                            <p data-aos="fade-left" data-aos-duration="900" style="text-align: justify;">
                                La transparencia es uno de los pilares fundamentales de nuestra cooperativa. En la Cooperativa de Ahorro y Crédito 15 de Agosto, creemos que la confianza se construye con hechos claros, decisiones responsables y comunicación abierta con todos nuestros socios.
                            </p>
                            <div class="space16"></div>
<p data-aos="fade-left" data-aos-duration="900" style="text-align: justify;">
                               Ser transparentes significa informar con honestidad sobre el estado de nuestra cooperativa, cómo se gestionan los recursos y cuáles son los resultados de nuestras acciones. Cada estado financiero, cada proyecto y cada decisión que tomamos está pensado para que todos los socios puedan conocer y entender cómo avanzamos juntos.
                            </p>
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
                        <div style="height: 47px; width: 3px; background-color: #ba0001;margin-right: 15px;"><p></p></div><h2 class="vl-section-title text-anime-style-3">Indicadores</h2><br><br>
                    </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                            $listdocumento = $fnindex->fnindex_rdocumentos_tipo(2);
                            while ($menudocumento = $listdocumento->fetch_assoc()) {
                                ?>
                    <div class="col-lg-6 col-md-12" data-aos="zoom-in-up" data-aos-duration="900">
                        <div class="vl-blog-1-item">
                            <div class="vl-blog-1-content">
                                <div class="vl-blog-meta">
                                    <ul>
                                        <li>
                                            <a href="documentos/<?php echo ($menudocumento['url_doc']) ?>" 
                                               target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                                                <g clip-path="url(#clip0_600_6756)">
                                                <path d="M5.61627 0C5.80006 0 5.97633 0.0811248 6.1063 0.225528C6.23626 0.369931 6.30927 0.565783 6.30927 0.77V2.2099H13.7511V0.7799C13.7511 0.575683 13.8241 0.379831 13.9541 0.235428C14.084 0.0910248 14.2603 0.0099 14.4441 0.0099C14.6279 0.0099 14.8042 0.0910248 14.9341 0.235428C15.0641 0.379831 15.1371 0.575683 15.1371 0.7799V2.2099H17.82C18.345 2.2099 18.8484 2.44153 19.2197 2.85388C19.591 3.26622 19.7997 3.82551 19.8 4.4088V19.8011C19.7997 20.3844 19.591 20.9437 19.2197 21.356C18.8484 21.7684 18.345 22 17.82 22H1.98C1.45504 22 0.951572 21.7684 0.580278 21.356C0.208985 20.9437 0.000262479 20.3844 0 19.8011L0 4.4088C0.000262479 3.82551 0.208985 3.26622 0.580278 2.85388C0.951572 2.44153 1.45504 2.2099 1.98 2.2099H4.92327V0.7689C4.92353 0.564874 4.99666 0.369304 5.12659 0.225139C5.25653 0.0809736 5.43265 -2.0819e-07 5.61627 0ZM1.386 8.5162V19.8011C1.386 19.8878 1.40136 19.9736 1.43122 20.0537C1.46107 20.1337 1.50482 20.2065 1.55998 20.2678C1.61514 20.3291 1.68062 20.3777 1.75269 20.4109C1.82475 20.444 1.90199 20.4611 1.98 20.4611H17.82C17.898 20.4611 17.9752 20.444 18.0473 20.4109C18.1194 20.3777 18.1849 20.3291 18.24 20.2678C18.2952 20.2065 18.3389 20.1337 18.3688 20.0537C18.3986 19.9736 18.414 19.8878 18.414 19.8011V8.5316L1.386 8.5162ZM6.60033 16.0809V17.9135H4.95V16.0809H6.60033ZM10.7247 16.0809V17.9135H9.07533V16.0809H10.7247ZM14.85 16.0809V17.9135H13.1997V16.0809H14.85ZM6.60033 11.7062V13.5388H4.95V11.7062H6.60033ZM10.7247 11.7062V13.5388H9.07533V11.7062H10.7247ZM14.85 11.7062V13.5388H13.1997V11.7062H14.85ZM4.92327 3.7488H1.98C1.90199 3.7488 1.82475 3.76587 1.75269 3.79904C1.68062 3.83221 1.61514 3.88082 1.55998 3.94211C1.50482 4.0034 1.46107 4.07615 1.43122 4.15623C1.40136 4.2363 1.386 4.32213 1.386 4.4088V6.9773L18.414 6.9927V4.4088C18.414 4.32213 18.3986 4.2363 18.3688 4.15623C18.3389 4.07615 18.2952 4.0034 18.24 3.94211C18.1849 3.88082 18.1194 3.83221 18.0473 3.79904C17.9752 3.76587 17.898 3.7488 17.82 3.7488H15.1371V4.7707C15.1371 4.97492 15.0641 5.17077 14.9341 5.31517C14.8042 5.45958 14.6279 5.5407 14.4441 5.5407C14.2603 5.5407 14.084 5.45958 13.9541 5.31517C13.8241 5.17077 13.7511 4.97492 13.7511 4.7707V3.7488H6.30927V4.7608C6.30927 4.96502 6.23626 5.16087 6.1063 5.30527C5.97633 5.44968 5.80006 5.5308 5.61627 5.5308C5.43247 5.5308 5.25621 5.44968 5.12624 5.30527C4.99628 5.16087 4.92327 4.96502 4.92327 4.7608V3.7488Z" fill="#061D19"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_600_6756">
                                                    <rect width="19.8" height="22" fill="white"/>
                                                </clipPath>
                                                </defs>
                                                </svg>Actualizado <?php echo ($menudocumento['fecha_doc']) ?> <span> | </span></a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="space24"></div>
                                <h4 class="vl-blog-1-title"><a href="documentos/<?php echo ($menudocumento['url_doc']) ?>"> <?php echo ($menudocumento['titulo_doc']) ?></a></h4>
                            </div>
                        
                        </div>
                    </div>
                      <?php } ?>
            
                    
                </div>
            </div>
        </div>
        <!--===== BLOG AREA ENDS =======-->
        
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
                        </div><h2 class="vl-section-title text-anime-style-3">Gobernanza</h2><br><br>
                    </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
        <?php
                            $listdocumento = $fnindex->fnindex_rdocumentos_tipo(3);
                            while ($menudocumento = $listdocumento->fetch_assoc()) {
                                ?>
                    <div class="col-lg-6 col-md-12" data-aos="zoom-in-up" data-aos-duration="900">
                        <div class="vl-blog-1-item">
                            <div class="vl-blog-1-content">
                                <div class="vl-blog-meta">
                                    <ul>
                                        <li>
                                            <a href="documentos/<?php echo ($menudocumento['url_doc']) ?>" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                                                <g clip-path="url(#clip0_600_6756)">
                                                <path d="M5.61627 0C5.80006 0 5.97633 0.0811248 6.1063 0.225528C6.23626 0.369931 6.30927 0.565783 6.30927 0.77V2.2099H13.7511V0.7799C13.7511 0.575683 13.8241 0.379831 13.9541 0.235428C14.084 0.0910248 14.2603 0.0099 14.4441 0.0099C14.6279 0.0099 14.8042 0.0910248 14.9341 0.235428C15.0641 0.379831 15.1371 0.575683 15.1371 0.7799V2.2099H17.82C18.345 2.2099 18.8484 2.44153 19.2197 2.85388C19.591 3.26622 19.7997 3.82551 19.8 4.4088V19.8011C19.7997 20.3844 19.591 20.9437 19.2197 21.356C18.8484 21.7684 18.345 22 17.82 22H1.98C1.45504 22 0.951572 21.7684 0.580278 21.356C0.208985 20.9437 0.000262479 20.3844 0 19.8011L0 4.4088C0.000262479 3.82551 0.208985 3.26622 0.580278 2.85388C0.951572 2.44153 1.45504 2.2099 1.98 2.2099H4.92327V0.7689C4.92353 0.564874 4.99666 0.369304 5.12659 0.225139C5.25653 0.0809736 5.43265 -2.0819e-07 5.61627 0ZM1.386 8.5162V19.8011C1.386 19.8878 1.40136 19.9736 1.43122 20.0537C1.46107 20.1337 1.50482 20.2065 1.55998 20.2678C1.61514 20.3291 1.68062 20.3777 1.75269 20.4109C1.82475 20.444 1.90199 20.4611 1.98 20.4611H17.82C17.898 20.4611 17.9752 20.444 18.0473 20.4109C18.1194 20.3777 18.1849 20.3291 18.24 20.2678C18.2952 20.2065 18.3389 20.1337 18.3688 20.0537C18.3986 19.9736 18.414 19.8878 18.414 19.8011V8.5316L1.386 8.5162ZM6.60033 16.0809V17.9135H4.95V16.0809H6.60033ZM10.7247 16.0809V17.9135H9.07533V16.0809H10.7247ZM14.85 16.0809V17.9135H13.1997V16.0809H14.85ZM6.60033 11.7062V13.5388H4.95V11.7062H6.60033ZM10.7247 11.7062V13.5388H9.07533V11.7062H10.7247ZM14.85 11.7062V13.5388H13.1997V11.7062H14.85ZM4.92327 3.7488H1.98C1.90199 3.7488 1.82475 3.76587 1.75269 3.79904C1.68062 3.83221 1.61514 3.88082 1.55998 3.94211C1.50482 4.0034 1.46107 4.07615 1.43122 4.15623C1.40136 4.2363 1.386 4.32213 1.386 4.4088V6.9773L18.414 6.9927V4.4088C18.414 4.32213 18.3986 4.2363 18.3688 4.15623C18.3389 4.07615 18.2952 4.0034 18.24 3.94211C18.1849 3.88082 18.1194 3.83221 18.0473 3.79904C17.9752 3.76587 17.898 3.7488 17.82 3.7488H15.1371V4.7707C15.1371 4.97492 15.0641 5.17077 14.9341 5.31517C14.8042 5.45958 14.6279 5.5407 14.4441 5.5407C14.2603 5.5407 14.084 5.45958 13.9541 5.31517C13.8241 5.17077 13.7511 4.97492 13.7511 4.7707V3.7488H6.30927V4.7608C6.30927 4.96502 6.23626 5.16087 6.1063 5.30527C5.97633 5.44968 5.80006 5.5308 5.61627 5.5308C5.43247 5.5308 5.25621 5.44968 5.12624 5.30527C4.99628 5.16087 4.92327 4.96502 4.92327 4.7608V3.7488Z" fill="#061D19"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_600_6756">
                                                    <rect width="19.8" height="22" fill="white"/>
                                                </clipPath>
                                                </defs>
                                                </svg>Actualizado <?php echo ($menudocumento['fecha_doc']) ?> <span> | </span></a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="space24"></div>
                                <h4 class="vl-blog-1-title"><a href="documentos/<?php echo ($menudocumento['url_doc']) ?>"> <?php echo ($menudocumento['titulo_doc']) ?></a></h4>
                            </div>
                        
                        </div>
                    </div>
                      <?php } ?> 
                </div>
            </div>
        </div>
        <!--===== BLOG AREA ENDS =======-->
        
        
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
                        </div><h2 class="vl-section-title text-anime-style-3">Información Financiera</h2><br><br>
                    </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
        <?php
                            $listdocumento = $fnindex->fnindex_rdocumentos_tipo(4);
                            while ($menudocumento = $listdocumento->fetch_assoc()) {
                                ?>
                    <div class="col-lg-6 col-md-12" data-aos="zoom-in-up" data-aos-duration="900">
                        <div class="vl-blog-1-item">
                            <div class="vl-blog-1-content">
                                <div class="vl-blog-meta">
                                    <ul>
                                        <li>
                                            <a href="documentos/<?php echo ($menudocumento['url_doc']) ?>" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                                                <g clip-path="url(#clip0_600_6756)">
                                                <path d="M5.61627 0C5.80006 0 5.97633 0.0811248 6.1063 0.225528C6.23626 0.369931 6.30927 0.565783 6.30927 0.77V2.2099H13.7511V0.7799C13.7511 0.575683 13.8241 0.379831 13.9541 0.235428C14.084 0.0910248 14.2603 0.0099 14.4441 0.0099C14.6279 0.0099 14.8042 0.0910248 14.9341 0.235428C15.0641 0.379831 15.1371 0.575683 15.1371 0.7799V2.2099H17.82C18.345 2.2099 18.8484 2.44153 19.2197 2.85388C19.591 3.26622 19.7997 3.82551 19.8 4.4088V19.8011C19.7997 20.3844 19.591 20.9437 19.2197 21.356C18.8484 21.7684 18.345 22 17.82 22H1.98C1.45504 22 0.951572 21.7684 0.580278 21.356C0.208985 20.9437 0.000262479 20.3844 0 19.8011L0 4.4088C0.000262479 3.82551 0.208985 3.26622 0.580278 2.85388C0.951572 2.44153 1.45504 2.2099 1.98 2.2099H4.92327V0.7689C4.92353 0.564874 4.99666 0.369304 5.12659 0.225139C5.25653 0.0809736 5.43265 -2.0819e-07 5.61627 0ZM1.386 8.5162V19.8011C1.386 19.8878 1.40136 19.9736 1.43122 20.0537C1.46107 20.1337 1.50482 20.2065 1.55998 20.2678C1.61514 20.3291 1.68062 20.3777 1.75269 20.4109C1.82475 20.444 1.90199 20.4611 1.98 20.4611H17.82C17.898 20.4611 17.9752 20.444 18.0473 20.4109C18.1194 20.3777 18.1849 20.3291 18.24 20.2678C18.2952 20.2065 18.3389 20.1337 18.3688 20.0537C18.3986 19.9736 18.414 19.8878 18.414 19.8011V8.5316L1.386 8.5162ZM6.60033 16.0809V17.9135H4.95V16.0809H6.60033ZM10.7247 16.0809V17.9135H9.07533V16.0809H10.7247ZM14.85 16.0809V17.9135H13.1997V16.0809H14.85ZM6.60033 11.7062V13.5388H4.95V11.7062H6.60033ZM10.7247 11.7062V13.5388H9.07533V11.7062H10.7247ZM14.85 11.7062V13.5388H13.1997V11.7062H14.85ZM4.92327 3.7488H1.98C1.90199 3.7488 1.82475 3.76587 1.75269 3.79904C1.68062 3.83221 1.61514 3.88082 1.55998 3.94211C1.50482 4.0034 1.46107 4.07615 1.43122 4.15623C1.40136 4.2363 1.386 4.32213 1.386 4.4088V6.9773L18.414 6.9927V4.4088C18.414 4.32213 18.3986 4.2363 18.3688 4.15623C18.3389 4.07615 18.2952 4.0034 18.24 3.94211C18.1849 3.88082 18.1194 3.83221 18.0473 3.79904C17.9752 3.76587 17.898 3.7488 17.82 3.7488H15.1371V4.7707C15.1371 4.97492 15.0641 5.17077 14.9341 5.31517C14.8042 5.45958 14.6279 5.5407 14.4441 5.5407C14.2603 5.5407 14.084 5.45958 13.9541 5.31517C13.8241 5.17077 13.7511 4.97492 13.7511 4.7707V3.7488H6.30927V4.7608C6.30927 4.96502 6.23626 5.16087 6.1063 5.30527C5.97633 5.44968 5.80006 5.5308 5.61627 5.5308C5.43247 5.5308 5.25621 5.44968 5.12624 5.30527C4.99628 5.16087 4.92327 4.96502 4.92327 4.7608V3.7488Z" fill="#061D19"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_600_6756">
                                                    <rect width="19.8" height="22" fill="white"/>
                                                </clipPath>
                                                </defs>
                                                </svg>Actualizado <?php echo ($menudocumento['fecha_doc']) ?> <span> | </span></a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="space24"></div>
                                <h4 class="vl-blog-1-title"><a href="documentos/<?php echo ($menudocumento['url_doc']) ?>"> <?php echo ($menudocumento['titulo_doc']) ?></a></h4>
                            </div>
                        
                        </div>
                    </div>
                      <?php } ?> 
                </div>
            </div>
        </div>
        <!--===== BLOG AREA ENDS =======-->

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