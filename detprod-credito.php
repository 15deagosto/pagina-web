<?php 
require_once './controler/conexion.php';
require_once './funciones/fn-index.php';
$fnindex = new Fn_index();
require_once './funciones/fn-utilidades.php';
$id = $_GET['id'];
$detproducto = $fnindex->fnindex_rproducto_xtextoses($id);
$titulo = !empty($detproducto[0]['nombre_prod']) ? arreglar_mojibake(utf8_encode($detproducto[0]['nombre_prod'])) : 'Crédito';
$desc = !empty($detproducto[0]['descripcion_prod']) ? arreglar_mojibake(utf8_encode($detproducto[0]['descripcion_prod'])) : '';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio - 15 de Agosto Cooperativa de Ahorro y Crédito</title>

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
<div class="service3-section-area sp2" style="background-image: url(assets/img/all-images/bg/bg3.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="heading3 text-center space-margin60">
          <h5>crédito</h5>
          <div class="space16"></div>
          <h2 class="text-anime-style-3">Características crédito</h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
        <div class="service3-single-boxarea">
          <div class="icons">
            <img src="assets/img/icons/service7.svg" alt="">
          </div>
          <div class="space24"></div>
          <div class="content">
            <a href="#">Característica  #1</a>
            <div class="space16"></div>
            <p>Debt Restructuring Services designed to help businesses manage their debt more effectively, providing relief.</p>
            <div class="space24"></div>
          </div>
          <img class="img-bg-service" src="assets/img/all-images/bg/dot-bg.png">
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="900">
        <div class="service3-single-boxarea">
          <div class="icons">
            <img src="assets/img/icons/service8.svg" alt="">
          </div>
          <div class="space24"></div>
          <div class="content">
            <a href="service-single.html">Característica  #2</a>
            <div class="space16"></div>
            <p>Financial Strategy & Advisory service is designed help businesses  all sizes make informed, strategic decisions.</p>
            <div class="space24"></div>
          </div>
          <img class="img-bg-service" src="assets/img/all-images/bg/dot-bg.png">
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1000">
        <div class="service3-single-boxarea">
          <div class="icons">
            <img src="assets/img/icons/service9.svg" alt="">
          </div>
          <div class="space24"></div>
          <div class="content">
            <a href="service-single.html">Característica  #3</a>
            <div class="space16"></div>
            <p>We stay updated the latest tax laws & policies helping you navigate complex tax landscapes our personalized.</p>
            <div class="space24"></div>
          </div>
          <img class="img-bg-service" src="assets/img/all-images/bg/dot-bg.png">
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1100">
        <div class="service3-single-boxarea">
          <div class="icons">
            <img src="assets/img/icons/service10.svg" alt="">
          </div>
          <div class="space24"></div>
          <div class="content">
            <a href="service-single.html">Característica  #4</a>
            <div class="space16"></div>
            <p>Managing is key preserving business’s financial stability Risk Management  & Mitigation service help you identify.</p>
            <div class="space24"></div>
          </div>
          <img class="img-bg-service" src="assets/img/all-images/bg/dot-bg.png">
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1200">
        <div class="service3-single-boxarea">
          <div class="icons">
            <img src="assets/img/icons/service11.svg" alt="">
          </div>
          <div class="space24"></div>
          <div class="content">
            <a href="service-single.html">Característica  #5</a>
            <div class="space16"></div>
            <p>Business Growth Planning service is tailored companies sustainable, scalable growth analyze current.</p>
            <div class="space24"></div>
          </div>
          <img class="img-bg-service" src="assets/img/all-images/bg/dot-bg.png">
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1300">
        <div class="service3-single-boxarea">
          <div class="icons">
            <img src="assets/img/icons/service12.svg" alt="">
          </div>
          <div class="space24"></div>
          <div class="content">
            <a href="service-single.html">Característica  #6</a>
            <div class="space16"></div>
            <p>Maintaining a healthy cash is critical  business success. Cash Optimization service provides in-depth analysis.</p>
            <div class="space24"></div>
          </div>
          <img class="img-bg-service" src="assets/img/all-images/bg/dot-bg.png">
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== SERVICE AREA ENDS =======-->
<!--===== ABOUT AREA STARTS =======-->
<div class="about3-section-area sp1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="about-images-area">
          <img src="assets/img/elements/elements18.png" alt="" class="elements18">
          <div class="img1 text-end reveal">
            <img src="assets/img/all-images/about/about-img4.png" alt="">
          </div>
          <div class="img2 reveal">
            <img src="assets/img/all-images/about/about-img5.png" alt="">
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="heading3">
          <div class="space16"></div>
          <h2 class="text-anime-style-3">Requisitos</h2>
          <div class="space16"></div>
          <p data-aos="fade-left" data-aos-duration="900">We believe that every business deserves a strong financial foundation. With decades of experience in the industry, our team is dedicated to providing personalized, strategic financial solutions that help our clients thrive.</p>
          <div class="space16"></div>
          <ul data-aos="fade-left" data-aos-duration="1000">
            <li><img src="assets/img/icons/arrow1.svg" alt=""> Solicitud de crédito</li>
            <li><img src="assets/img/icons/arrow1.svg" alt=""> Documentos de identidad</li>
            <li><img src="assets/img/icons/arrow1.svg" alt=""> Justificativo de ingreso</li>
          </ul>
          <div class="space32"></div>
          <div class="btn-area1" data-aos="fade-left" data-aos-duration="1100">
            <a href="service.html" class="vl-btn3">Request A Service</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== ABOUT AREA ENDS =======-->
        <!--===== SERVICE AREA STARTS =======-->
<div class="service3-section-area sp2" style="background-image: url(assets/img/all-images/bg/bg3.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="heading3 text-center space-margin60">
          <h5>crédito</h5>
          <div class="space16"></div>
          <h2 class="text-anime-style-3">Características crédito</h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
        <div class="service3-single-boxarea">
          <div class="icons">
            <img src="assets/img/icons/service7.svg" alt="">
          </div>
          <div class="space24"></div>
          <div class="content">
            <a href="#">Característica  #1</a>
            <div class="space16"></div>
            <p>Debt Restructuring Services designed to help businesses manage their debt more effectively, providing relief.</p>
            <div class="space24"></div>
          </div>
          <img class="img-bg-service" src="assets/img/all-images/bg/dot-bg.png">
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="900">
        <div class="service3-single-boxarea">
          <div class="icons">
            <img src="assets/img/icons/service8.svg" alt="">
          </div>
          <div class="space24"></div>
          <div class="content">
            <a href="service-single.html">Característica  #2</a>
            <div class="space16"></div>
            <p>Financial Strategy & Advisory service is designed help businesses  all sizes make informed, strategic decisions.</p>
            <div class="space24"></div>
          </div>
          <img class="img-bg-service" src="assets/img/all-images/bg/dot-bg.png">
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1000">
        <div class="service3-single-boxarea">
          <div class="icons">
            <img src="assets/img/icons/service9.svg" alt="">
          </div>
          <div class="space24"></div>
          <div class="content">
            <a href="service-single.html">Característica  #3</a>
            <div class="space16"></div>
            <p>We stay updated the latest tax laws & policies helping you navigate complex tax landscapes our personalized.</p>
            <div class="space24"></div>
          </div>
          <img class="img-bg-service" src="assets/img/all-images/bg/dot-bg.png">
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1100">
        <div class="service3-single-boxarea">
          <div class="icons">
            <img src="assets/img/icons/service10.svg" alt="">
          </div>
          <div class="space24"></div>
          <div class="content">
            <a href="service-single.html">Característica  #4</a>
            <div class="space16"></div>
            <p>Managing is key preserving business’s financial stability Risk Management  & Mitigation service help you identify.</p>
            <div class="space24"></div>
          </div>
          <img class="img-bg-service" src="assets/img/all-images/bg/dot-bg.png">
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1200">
        <div class="service3-single-boxarea">
          <div class="icons">
            <img src="assets/img/icons/service11.svg" alt="">
          </div>
          <div class="space24"></div>
          <div class="content">
            <a href="service-single.html">Característica  #5</a>
            <div class="space16"></div>
            <p>Business Growth Planning service is tailored companies sustainable, scalable growth analyze current.</p>
            <div class="space24"></div>
          </div>
          <img class="img-bg-service" src="assets/img/all-images/bg/dot-bg.png">
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1300">
        <div class="service3-single-boxarea">
          <div class="icons">
            <img src="assets/img/icons/service12.svg" alt="">
          </div>
          <div class="space24"></div>
          <div class="content">
            <a href="service-single.html">Característica  #6</a>
            <div class="space16"></div>
            <p>Maintaining a healthy cash is critical  business success. Cash Optimization service provides in-depth analysis.</p>
            <div class="space24"></div>
          </div>
          <img class="img-bg-service" src="assets/img/all-images/bg/dot-bg.png">
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== SERVICE AREA ENDS =======-->
        <!--===== ABOUT AREA STARTS =======-->
<div class="about4-section-area sp1">
    <?php include './mod-simulador.php' ?>
</div>
<!--===== ABOUT AREA ENDS =======-->
        <!--===== FOOTER AREA STARTS =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>
        <!--===== FOOTER AREA ENDS =======-->

        <?php include "scripts-v2.php"; ?>
</body>
</html>