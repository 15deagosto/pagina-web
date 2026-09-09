<?php
require './controler/conexion.php';
include './fn/fn-credito.php';
require './funciones/fn-index.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();
$id = $_GET['id'];
$deteducafinan = $fnindex->fnindex_reducacion_financiera_x($id);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> <?php echo utf8_encode($deteducafinan[0]['titulo_edfi']) ?> - 15 de Agosto Cooperativa de Ahorro y Crédito</title>

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
                            <h2 style="font-size: 65px;"><?php echo utf8_encode($deteducafinan[0]['titulo_edfi']) ?></h2>
                            <div class="space24"></div>
                            <a href="index.php">Inicio <i class="fa-solid fa-angle-right"></i> <span><?php echo utf8_encode($deteducafinan[0]['titulo_edfi']) ?></span></a>
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
<div class="blog-details-siderbars-area sp8">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-main-detailsarea rightpadding">
                    <h3><?php echo utf8_encode($deteducafinan[0]['titulo_edfi']) ?></h3>
                    <div class="space16"></div>
                    <p><?php echo utf8_encode($deteducafinan[0]['resumen_edfi']) ?></p>
                    <div class="space32"></div>
                    <div class="img1">
                        <img src="assets/img/<?php echo utf8_encode($deteducafinan[0]['imagen_edfi']) ?>" alt="">
                    </div>
                    <div class="space32"></div>
                    <ul class="list-author">
                        <li><a href="#"><img src="assets/img/all-images/blog/blog-img21.png" alt="">  Administrador<span> | </span></a></li>
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M5.83333 9.16699H7.5V10.8337H5.83333V9.16699ZM17.5 5.00032V16.667C17.5 17.5837 16.75 18.3337 15.8333 18.3337H4.16667C3.72464 18.3337 3.30072 18.1581 2.98816 17.8455C2.67559 17.5329 2.5 17.109 2.5 16.667L2.50833 5.00032C2.50833 4.08366 3.24167 3.33366 4.16667 3.33366H5V1.66699H6.66667V3.33366H13.3333V1.66699H15V3.33366H15.8333C16.75 3.33366 17.5 4.08366 17.5 5.00032ZM4.16667 6.66699H15.8333V5.00032H4.16667V6.66699ZM15.8333 16.667V8.33366H4.16667V16.667H15.8333ZM12.5 10.8337H14.1667V9.16699H12.5V10.8337ZM9.16667 10.8337H10.8333V9.16699H9.16667V10.8337Z" fill="#333535"/>
                          </svg>  <?php echo utf8_encode($deteducafinan[0]['fecha_edfi']) ?><span> | </span></a></li>
                          <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M17.841 9.65008L10.341 2.15008C10.0285 1.84015 9.60614 1.6664 9.16602 1.66675H3.33268C2.89066 1.66675 2.46673 1.84234 2.15417 2.1549C1.84161 2.46746 1.66602 2.89139 1.66602 3.33342V9.16675C1.66584 9.38668 1.7092 9.60446 1.79358 9.80756C1.87796 10.0106 2.00171 10.195 2.15768 10.3501L9.65768 17.8501C9.97017 18.16 10.3926 18.3338 10.8327 18.3334C11.274 18.3316 11.6966 18.1547 12.0077 17.8417L17.841 12.0084C18.154 11.6973 18.3308 11.2747 18.3327 10.8334C18.3329 10.6135 18.2895 10.3957 18.2051 10.1926C18.1207 9.98952 17.997 9.80513 17.841 9.65008ZM10.8327 16.6667L3.33268 9.16675V3.33342H9.16602L16.666 10.8334M5.41602 4.16675C5.66324 4.16675 5.90492 4.24006 6.11048 4.37741C6.31604 4.51476 6.47626 4.70999 6.57087 4.93839C6.66547 5.1668 6.69023 5.41813 6.642 5.66061C6.59377 5.90309 6.47472 6.12582 6.2999 6.30063C6.12508 6.47545 5.90236 6.5945 5.65988 6.64273C5.4174 6.69096 5.16607 6.66621 4.93766 6.5716C4.70925 6.47699 4.51403 6.31677 4.37668 6.11121C4.23933 5.90565 4.16602 5.66398 4.16602 5.41675C4.16602 5.08523 4.29771 4.76729 4.53213 4.53287C4.76655 4.29844 5.0845 4.16675 5.41602 4.16675Z" fill="#333535"/>
                          </svg> Finanzas <span> | </span></a></li>
                        
                    </ul>
                    <div class="space32"></div>
                    <?php echo utf8_encode($deteducafinan[0]['descripcion_edfi']) ?>
                    <div class="tags-social">
                        <div class="tags">
                            <ul>
                                <li>Tags:</li>
                                <li><a href="#">Finanzas</a></li>
                                <li><a href="#">Desarrollo</a></li>
                                <li><a href="#" class="m-0">Creativo</a></li>
                            </ul>
                        </div>
                        <div class="social">
                            <ul>
                                <li>Compartir:</li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#" class="m-0"><i class="fa-brands fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="space32"></div>
                    
                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog-side-widget">
                    <div class="author-area">
                        <h3>Autor</h3>
                        <div class="space24"></div>
                        <ul>
                            <li><a href="#"><img src="assets/img/all-images/blog/blog-img20.png" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="space30"></div>
                    <div class="social-area">
                        <h3>Síguenos en</h3>
                        <div class="space24"></div>
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="height: 150px;"></div>


<!--===== BLOG AREA ENDS =======-->

        <!--===== FOOTER AREA STARTS =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>
        <!--===== FOOTER AREA ENDS =======-->

        <?php include "scripts-v2.php"; ?>
</body>
</html>