<?php
require './controler/conexion.php';
include './fn/fn-credito.php';
require './funciones/fn-index.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();
$fn_credito = new Fn_credito();
$educafinan = $fnindex->fnindex_reducacion_financiera_alles();
$listcredito = $fnindex->fnindex_rproducto_xtipo(5);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Microcréditos - 15 de Agosto Cooperativa de Ahorro y Crédito</title>

        <!--=====FAB ICON=======-->
        <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">

        <?php include "head-v2.php"; ?>
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
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
                            <h2 style="font-size: 65px;">Microcréditos</h2>
                            <div class="space24"></div>
                            <a href="index.php">Inicio <i class="fa-solid fa-angle-right"></i> <span>Microcréditos</span></a>
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
        <div class="vl-blog-1-area sp2" style="margin-top:80px;">
            <div class="container">
                <div class="row">
                    <div class="carousel" data-flickity='{ "wrapAround": true, "groupCells": 2}'>
                          <?php
                while ($menucredito = $listcredito->fetch_assoc()) {
                    ?>
                        <div class="carousel-cell">
                                <div class="vl-blog-1-item">
                                    <div class="vl-blog-1-thumb image-anime">
                                        <img src="assets/img/img-item-educacion-02.jpg" alt="">
                                    </div>
                                    <div class="vl-blog-1-content">
                                        <div class="vl-blog-meta" style="justify-content: center;display: flex;">
                                            <ul style="display: grid;text-align: center;">
                                                <li>
                                                    <a href="#"><img style="width:70px;" src="assets/img/icon-money.png">  </a>
                                                </li>
                                                <li style="margin-top: 20px;">
                                                    <h4 class="vl-blog-1-title"><a style="color: #a31a16; font-weight: bold; font-size: 1.7rem;" href="detprod-credito-micro.php?id=<?php echo ($menucredito['id_prod']) ?>" style="color: #a31a16;"><?php echo utf8_encode($menucredito['nombre_prod']) ?></a></h4>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="space24"></div>

                                        <div class="space16"></div>
                                        <p style="text-align: justify;"><?php echo utf8_encode($menucredito['descripcion_prod']) ?></p>
                                        <div class="space24"></div>
                                    </div>
                                </div>
                            <br><br><br><br>
                        </div>
                           <?php } ?>
                        
                    </div>



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

        <!-- Modal -->
        <div id="modalSimulador" class="modal">
            <div class="modal-content">
                <span class="cerrar" onclick="cerrarModal()">&times;</span>
                <h1 style="font-weight: 800; text-align: center !important">Simulador de Crédito</h1>
<!--                <p style="text-align: center !important">Aquí puedes colocar tu formulario o resultado del simulador.</p>-->
                <div id="resultado"></div> 
            </div>
        </div>
        <!--===== FOOTER AREA STARTS =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>
        <!--===== FOOTER AREA ENDS =======-->

        <?php include "scripts-v2.php"; ?>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>
</html>