<?php
require './controler/conexion.php';
include './fn/fn-credito.php';
require './funciones/fn-index.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trabaja con nosotros - 15 de Agosto Cooperativa de Ahorro y Crédito</title>

        <!--=====FAB ICON=======-->
        <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">

        <?php include "head-v2.php"; ?>
    </head>
    <body class="v2">

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

        

        <!--===== HERO AREA STARTS =======-->
        <div class="inner-pages-section-area" style="background-image: url(assets/img/banner-trabaja.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="inner-header text-center">
                            <h2 style="font-size: 65px;">Trabaja con nosotros</h2>
                            <div class="space24"></div>
                            <a href="index.php">Inicio <i class="fa-solid fa-angle-right"></i> <span>Trabaja con nosotros</span></a>
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

        <!--===== BLOG AREA STARTS =======-->
        <div class="vl-blog-2-area sp2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 m-auto">
                        <div class="vl-blog-1-section-box heading2 text-center space-margin60">
                            <h5 class="vl-section-subtitle">Ver 25 Resultados </h5>
                            <div class="space16"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12" data-aos="zoom-in-up" data-aos-duration="800">
                        <div class="vl-blog-1-item" style="display: flex">
                            <div class="vl-blog-1-thumb image-anime">
                                <img src="assets/img/img-item-busca-empleo.jpg" alt="">
                            </div>
                            <div class="vl-blog-1-content">
                                <div class="vl-blog-meta">
                                    <ul>
                                        <li>
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                                                <g clip-path="url(#clip0_600_6756)">
                                                <path d="M5.61627 0C5.80006 0 5.97633 0.0811248 6.1063 0.225528C6.23626 0.369931 6.30927 0.565783 6.30927 0.77V2.2099H13.7511V0.7799C13.7511 0.575683 13.8241 0.379831 13.9541 0.235428C14.084 0.0910248 14.2603 0.0099 14.4441 0.0099C14.6279 0.0099 14.8042 0.0910248 14.9341 0.235428C15.0641 0.379831 15.1371 0.575683 15.1371 0.7799V2.2099H17.82C18.345 2.2099 18.8484 2.44153 19.2197 2.85388C19.591 3.26622 19.7997 3.82551 19.8 4.4088V19.8011C19.7997 20.3844 19.591 20.9437 19.2197 21.356C18.8484 21.7684 18.345 22 17.82 22H1.98C1.45504 22 0.951572 21.7684 0.580278 21.356C0.208985 20.9437 0.000262479 20.3844 0 19.8011L0 4.4088C0.000262479 3.82551 0.208985 3.26622 0.580278 2.85388C0.951572 2.44153 1.45504 2.2099 1.98 2.2099H4.92327V0.7689C4.92353 0.564874 4.99666 0.369304 5.12659 0.225139C5.25653 0.0809736 5.43265 -2.0819e-07 5.61627 0ZM1.386 8.5162V19.8011C1.386 19.8878 1.40136 19.9736 1.43122 20.0537C1.46107 20.1337 1.50482 20.2065 1.55998 20.2678C1.61514 20.3291 1.68062 20.3777 1.75269 20.4109C1.82475 20.444 1.90199 20.4611 1.98 20.4611H17.82C17.898 20.4611 17.9752 20.444 18.0473 20.4109C18.1194 20.3777 18.1849 20.3291 18.24 20.2678C18.2952 20.2065 18.3389 20.1337 18.3688 20.0537C18.3986 19.9736 18.414 19.8878 18.414 19.8011V8.5316L1.386 8.5162ZM6.60033 16.0809V17.9135H4.95V16.0809H6.60033ZM10.7247 16.0809V17.9135H9.07533V16.0809H10.7247ZM14.85 16.0809V17.9135H13.1997V16.0809H14.85ZM6.60033 11.7062V13.5388H4.95V11.7062H6.60033ZM10.7247 11.7062V13.5388H9.07533V11.7062H10.7247ZM14.85 11.7062V13.5388H13.1997V11.7062H14.85ZM4.92327 3.7488H1.98C1.90199 3.7488 1.82475 3.76587 1.75269 3.79904C1.68062 3.83221 1.61514 3.88082 1.55998 3.94211C1.50482 4.0034 1.46107 4.07615 1.43122 4.15623C1.40136 4.2363 1.386 4.32213 1.386 4.4088V6.9773L18.414 6.9927V4.4088C18.414 4.32213 18.3986 4.2363 18.3688 4.15623C18.3389 4.07615 18.2952 4.0034 18.24 3.94211C18.1849 3.88082 18.1194 3.83221 18.0473 3.79904C17.9752 3.76587 17.898 3.7488 17.82 3.7488H15.1371V4.7707C15.1371 4.97492 15.0641 5.17077 14.9341 5.31517C14.8042 5.45958 14.6279 5.5407 14.4441 5.5407C14.2603 5.5407 14.084 5.45958 13.9541 5.31517C13.8241 5.17077 13.7511 4.97492 13.7511 4.7707V3.7488H6.30927V4.7608C6.30927 4.96502 6.23626 5.16087 6.1063 5.30527C5.97633 5.44968 5.80006 5.5308 5.61627 5.5308C5.43247 5.5308 5.25621 5.44968 5.12624 5.30527C4.99628 5.16087 4.92327 4.96502 4.92327 4.7608V3.7488Z" fill="#061D19"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_600_6756">
                                                    <rect width="19.8" height="22" fill="white"/>
                                                </clipPath>
                                                </defs>
                                                </svg>Postular hasta: 28, Sep 2025 <span> | </span></a>
                                        </li>
                                        <li>
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M1 7.775V2.75C1 1.784 1.784 1 2.75 1H7.775C8.239 1 8.685 1.184 9.013 1.513L15.263 7.763C15.5909 8.09115 15.7751 8.53609 15.7751 9C15.7751 9.46391 15.5909 9.90885 15.263 10.237L10.237 15.263C9.90885 15.5909 9.46391 15.7751 9 15.7751C8.53609 15.7751 8.09115 15.5909 7.763 15.263L1.513 9.013C1.35035 8.85047 1.22133 8.65747 1.1333 8.44505C1.04528 8.23263 0.999983 8.00494 1 7.775ZM2.5 7.775C2.5 7.841 2.526 7.905 2.573 7.952L8.823 14.202C8.84622 14.2253 8.87381 14.2438 8.90418 14.2564C8.93456 14.269 8.96712 14.2754 9 14.2754C9.03288 14.2754 9.06544 14.269 9.09582 14.2564C9.12619 14.2438 9.15378 14.2253 9.177 14.202L14.202 9.177C14.2253 9.15378 14.2438 9.12619 14.2564 9.09582C14.269 9.06544 14.2754 9.03288 14.2754 9C14.2754 8.96712 14.269 8.93456 14.2564 8.90418C14.2438 8.87381 14.2253 8.84622 14.202 8.823L7.952 2.573C7.92874 2.5498 7.90114 2.53141 7.87077 2.51888C7.84039 2.50636 7.80785 2.49994 7.775 2.5H2.75C2.6837 2.5 2.62011 2.52634 2.57322 2.57322C2.52634 2.62011 2.5 2.6837 2.5 2.75V7.775ZM6 5C6.26522 5 6.51957 5.10536 6.70711 5.29289C6.89464 5.48043 7 5.73478 7 6C7 6.26522 6.89464 6.51957 6.70711 6.70711C6.51957 6.89464 6.26522 7 6 7C5.73478 7 5.48043 6.89464 5.29289 6.70711C5.10536 6.51957 5 6.26522 5 6C5 5.73478 5.10536 5.48043 5.29289 5.29289C5.48043 5.10536 5.73478 5 6 5Z" fill="#0C3A30"/>
                                                </svg> Permanente</a>
                                        </li>
                                    </ul>
                                </div>
                                <hr style="border: 1px #a31a16 dashed;">
                                <h4 class="vl-blog-1-title">
                                    <div style="background: #a31a16;padding: 5px 10px; width: fit-content;">
                                        <a href="detalle-vacante.php">Asesor de crédito agencia Matriz </a>
                                    </div>
                                </h4>
                                <div class="space16"></div>
                                <p>Verificar, analizar, evaluar y recomendar las solicitudes de crédito de acuerdo a las polí­ticas internas de la Cooperativa.</p>
                                <div class="space24"></div>
                                <div class="vl-blog-1-icon">
                                    <a href="detalle-vacante.php">Leer más <i class="fa-solid fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                    <div style="width: 100%; height: 200px;"></div>
                </div>
            </div>
        </div>
        <!--===== BLOG AREA ENDS =======-->

        <!--===== FOOTER AREA STARTS =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>
        <!--===== FOOTER AREA ENDS =======-->

        <?php include "scripts-v2.php"; ?>
</body>
</html>