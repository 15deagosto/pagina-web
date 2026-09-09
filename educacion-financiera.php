<?php
require './controler/conexion.php';
include './fn/fn-credito.php';
require './funciones/fn-index.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();
$educafinan = $fnindex->fnindex_reducacion_financiera_alles();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Educación Financiera - 15 de Agosto Cooperativa de Ahorro y Crédito</title>

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
        <div class="inner-pages-section-area" style="background-image: url(assets/img/all-images/bg/bg-header-002.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="inner-header text-center">
                            <h2 style="font-size: 65px;">Educación Financiera</h2>
                            <div class="space24"></div>
                            <a href="index.php">Inicio <i class="fa-solid fa-angle-right"></i> <span>Educación Financiera</span></a>
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

        <!--===== BLOG AREA STARTS =======-->
        <div class="vl-blog-1-area sp2">
            <div class="container">
                <div class="row">
                      <?php
                while ($menueducafinan = $educafinan->fetch_assoc()) {
                    ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="vl-blog-1-item">
                                <div class="vl-blog-1-thumb image-anime">
                                    <img src="assets/img/<?php echo ($menueducafinan['imagen_edfi']) ?>" alt="">
                                </div>
                                <div class="vl-blog-1-content">
                                    <div class="vl-blog-meta">
                                        <ul>
                                            <li>
                                                <a href="#"><svg style="stroke: #a31a16;" xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                                                    <g clip-path="url(#clip0_600_6756)">
                                                    <path d="M5.61627 0C5.80006 0 5.97633 0.0811248 6.1063 0.225528C6.23626 0.369931 6.30927 0.565783 6.30927 0.77V2.2099H13.7511V0.7799C13.7511 0.575683 13.8241 0.379831 13.9541 0.235428C14.084 0.0910248 14.2603 0.0099 14.4441 0.0099C14.6279 0.0099 14.8042 0.0910248 14.9341 0.235428C15.0641 0.379831 15.1371 0.575683 15.1371 0.7799V2.2099H17.82C18.345 2.2099 18.8484 2.44153 19.2197 2.85388C19.591 3.26622 19.7997 3.82551 19.8 4.4088V19.8011C19.7997 20.3844 19.591 20.9437 19.2197 21.356C18.8484 21.7684 18.345 22 17.82 22H1.98C1.45504 22 0.951572 21.7684 0.580278 21.356C0.208985 20.9437 0.000262479 20.3844 0 19.8011L0 4.4088C0.000262479 3.82551 0.208985 3.26622 0.580278 2.85388C0.951572 2.44153 1.45504 2.2099 1.98 2.2099H4.92327V0.7689C4.92353 0.564874 4.99666 0.369304 5.12659 0.225139C5.25653 0.0809736 5.43265 -2.0819e-07 5.61627 0ZM1.386 8.5162V19.8011C1.386 19.8878 1.40136 19.9736 1.43122 20.0537C1.46107 20.1337 1.50482 20.2065 1.55998 20.2678C1.61514 20.3291 1.68062 20.3777 1.75269 20.4109C1.82475 20.444 1.90199 20.4611 1.98 20.4611H17.82C17.898 20.4611 17.9752 20.444 18.0473 20.4109C18.1194 20.3777 18.1849 20.3291 18.24 20.2678C18.2952 20.2065 18.3389 20.1337 18.3688 20.0537C18.3986 19.9736 18.414 19.8878 18.414 19.8011V8.5316L1.386 8.5162ZM6.60033 16.0809V17.9135H4.95V16.0809H6.60033ZM10.7247 16.0809V17.9135H9.07533V16.0809H10.7247ZM14.85 16.0809V17.9135H13.1997V16.0809H14.85ZM6.60033 11.7062V13.5388H4.95V11.7062H6.60033ZM10.7247 11.7062V13.5388H9.07533V11.7062H10.7247ZM14.85 11.7062V13.5388H13.1997V11.7062H14.85ZM4.92327 3.7488H1.98C1.90199 3.7488 1.82475 3.76587 1.75269 3.79904C1.68062 3.83221 1.61514 3.88082 1.55998 3.94211C1.50482 4.0034 1.46107 4.07615 1.43122 4.15623C1.40136 4.2363 1.386 4.32213 1.386 4.4088V6.9773L18.414 6.9927V4.4088C18.414 4.32213 18.3986 4.2363 18.3688 4.15623C18.3389 4.07615 18.2952 4.0034 18.24 3.94211C18.1849 3.88082 18.1194 3.83221 18.0473 3.79904C17.9752 3.76587 17.898 3.7488 17.82 3.7488H15.1371V4.7707C15.1371 4.97492 15.0641 5.17077 14.9341 5.31517C14.8042 5.45958 14.6279 5.5407 14.4441 5.5407C14.2603 5.5407 14.084 5.45958 13.9541 5.31517C13.8241 5.17077 13.7511 4.97492 13.7511 4.7707V3.7488H6.30927V4.7608C6.30927 4.96502 6.23626 5.16087 6.1063 5.30527C5.97633 5.44968 5.80006 5.5308 5.61627 5.5308C5.43247 5.5308 5.25621 5.44968 5.12624 5.30527C4.99628 5.16087 4.92327 4.96502 4.92327 4.7608V3.7488Z" fill="#061D19"/>
                                                    </g>
                                                    <defs>
                                                    <clipPath id="clip0_600_6756">
                                                        <rect width="19.8" height="22" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg> <?php echo ($menueducafinan['fecha_edfi']) ?> <span> | </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><svg style="stroke: #a31a16;" xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                                    <path d="M4.9668 17.5C4.9668 14.2783 7.57847 11.6667 10.8001 11.6667C14.0218 11.6667 16.6335 14.2783 16.6335 17.5M14.1335 5.83333C14.1335 7.67428 12.641 9.16667 10.8001 9.16667C8.95918 9.16667 7.4668 7.67428 7.4668 5.83333C7.4668 3.99238 8.95918 2.5 10.8001 2.5C12.641 2.5 14.1335 3.99238 14.1335 5.83333Z" stroke="#061D19" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg> Por Administrador</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="space24"></div>
                                    <h4 class="vl-blog-1-title"><a href="detalle-educacion.php?id=<?php echo ($menueducafinan['id_edfi']) ?>" style="color: #a31a16;"><?php echo utf8_encode($menueducafinan['titulo_edfi']) ?></a></h4>
                                    <div class="space16"></div>
                                    <p><?php echo utf8_encode($menueducafinan['resumen_edfi']) ?></p>
                                    <div class="space24"></div>
                                    <div class="vl-blog-1-icon">
                                        <img class="img-bg-service" src="assets/img/all-images/bg/dot-bg.png">
                                        <a href="detalle-educacion.php?id=<?php echo ($menueducafinan['id_edfi']) ?>">Leer más <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <?php } ?>
                     
                  

<!--                    <div class="col-lg-12">
                        <div class="space18"></div>
                        <div class="pagination-area">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <i class="fa-solid fa-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">12</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <div style="height: 150px;">

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