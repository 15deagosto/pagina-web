<?php
session_start();
require './controler/conexion.php';
require './funciones/fn-index.php';
$fnindex = new Fn_index();
$tipo_pagina = 1;
$pagnamemanual = 'AGENCIAS';
$id = $_GET['id'];
$sitio = 23; //AGENCIAS
$tipo = 1; // TIPO BANNER
$imagenes = $fnindex->fnindex_rimagenes_xtipesitio($sitio, $tipo);
$detagenciamatriz = $fnindex->fnindex_rnosotros_id(64);
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
        <div class="inner-pages-section-area" style="background-image: url(assets/img/banner-agencias.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="inner-header text-center">
                            <h2 style="font-size: 65px;">Sucursales</h2>
                            <div class="space24"></div>
                            <a href="index.php">Inicio <i class="fa-solid fa-angle-right"></i> <span>Sucursales</span></a>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <!--===============spacing==============-->
                        <div class="pd_top_100"></div>
                        <!--===============spacing==============-->

                        <!--===============spacing==============-->
                        <div class="pd_bottom_100"></div>
                        <!--===============spacing==============-->
                    </div>

                </div>

            </div>
        </div>
        <!--===== HERO AREA ENDS =======-->

        <!--===== CONTACT AREA STARTS =======-->
        <div class="contact2-section-area sp1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-heading heading3">
                            <div class="space16"></div>
                            <h2 class="text-anime-style-3">Agencias</h2>
                            <div class="space12"></div>
                            <?php
                            $detagencia = $fnindex->fnindex_ragencia();
                            while ($menuagencia = $detagencia->fetch_assoc()) {
                                ?>
                                <div data-aos="fade-left" data-aos-duration="1000" style="cursor: pointer;" onclick="jsindex_009(9,<?php echo $menuagencia['id_nosotros'] ?>,<?php echo $menuagencia['x_nosotros'] ?>,<?php echo $menuagencia['y_nosotros'] ?>,'<?php echo ($menuagencia['nombre_nosotros']) ?>','<?php echo ($menuagencia['direccion_nosotros']) ?>')" >
                                    <div class="contact-author-boxarea">
                                        <div class="icons">
                                            <img src="assets/img/icon-sucursal.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6><?php echo $menuagencia['nombre_nosotros'] ?></h6>
                                            <div class="space16"></div>
                                            <a href="javascript:void(0)"><?php echo $menuagencia['direccion_nosotros'] ?></a><br><br>
                                            <a href="javascript:void(0)" style="font-size: x-large;"><i class="fas fa-phone" style="color: #a31a16;" ></i> <?php echo $menuagencia['tele1_nosotros'] ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>

                    <div class="col-lg-1"></div>
                    <div class="col-lg-6" data-aos="zoom-in-up" data-aos-duration="1000">
                        <div class="contact-main-boxarea">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===== CONTACT AREA ENDS =======-->

        <!--===== FOOTER AREA STARTS =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>
        <!--===== FOOTER AREA ENDS =======-->

        <?php include "scripts-v2.php"; ?>
</body>
</html>