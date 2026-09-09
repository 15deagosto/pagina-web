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
        <div class="inner-pages-section-area" style="background-image: url(assets/img/all-images/bg/bg-header-002.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="inner-header text-center">
                            <h2 style="font-size: 65px;">Política SARAS</h2>
                            <div class="space24"></div>
                            <a href="index.php">Inicio <i class="fa-solid fa-angle-right"></i> <span>Política SARAS</span></a>
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
<!--===== HERO AREA STARTS =======-->
<div class="hero1-section-area" style="background-image: url(assets/img/all-images/bg/hero-bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="heading-area">
          <h5 data-aos="fade-left" data-aos-duration="800">Política de Administración de</h5>
          <div class="space20"></div>
          <h1 class="text-anime-style-3">Riesgos Ambientales y Sociales</h1>
          <div class="space20"></div>
          <p data-aos="fade-left" data-aos-duration="1000">Constituye un conjunto de políticas, procedimientos, herramientas y capacidades internas para una fácil y oportuna identificación, evaluación y administración de los riesgos ambientales y sociales generados por sus socios o clientes.</p>
          <div class="space32"></div>
          <div class="btn-area1">
            <a href="" class="vl-btn1">Conocer más</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="zoon-in" data-aos-duration="1000">
        <div class="hero-images-area">
          <div class="img1">
            <img src="assets/img/all-images/hero/hero-img1.png" alt="">
          </div>
        </div>
      </div>
        
        <div class="col-lg-12" data-aos="zoon-in" data-aos-duration="1000">
        <embed src="ruta/del/archivo.pdf" type="application/pdf" width="100%" height="600px" />
      </div>
    </div>
  </div>
</div>
<!--===== HERO AREA ENDS =======-->
<div class="hero1-section-area" style="">
  <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-12" data-aos="zoon-in" data-aos-duration="1000">
            <embed src="assets/Riesgos_Ambientales_Sociales_EPS.pdf" type="application/pdf" width="100%" height="800px" />
      </div>
    </div>
  </div>
    <div style="height: 150px;"></div>
</div>
        <!--===== FOOTER AREA STARTS =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>
        <!--===== FOOTER AREA ENDS =======-->

        <?php include "scripts-v2.php"; ?>
</body>
</html>