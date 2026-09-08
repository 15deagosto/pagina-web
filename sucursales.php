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
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="">
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

        <!--=====  JS SCRIPT LINK =======-->
        <style>
            #map {
                height: 65vh;
            }
            /* Estilo plateado para el mapa (afecta al fondo y capas) */
            .leaflet-tile {
                filter: grayscale(100%) brightness(1.2) contrast(1.1);
            }
        </style>
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

        <!--===== JS SCRIPT LINK =======-->
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
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
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
        <script>
            const cities = L.layerGroup();
<?php
$indice = 1;
?>
            // Crear un mapa centrado en una ubicación específica
            var map = L.map('map').setView([<?php echo $detagenciamatriz[0]['x_nosotros'] ?>, <?php echo $detagenciamatriz[0]['y_nosotros'] ?>], 13);
            // Añadir una capa de mapa base de OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
            // Agregar un marcador en una ubicación específica
            var marker = L.marker([<?php echo $detagenciamatriz[0]['x_nosotros'] ?>, <?php echo $detagenciamatriz[0]['y_nosotros'] ?>]).addTo(map);
            marker.bindPopup("<b><?php echo $detagenciamatriz[0]['nombre_nosotros'] ?></b><br><?php echo $detagenciamatriz[0]['direccion_nosotros'] ?>").openPopup();
                function jsindex_009(dato0, dato1, dato2, dato3, dato4, dato5) {
                    var lat = dato2; // Latitud deseada (Ej: Nueva York)
                    var lng = dato3; // Longitud deseada (Ej: Nueva York)
                    map.flyTo([lat, lng], 13, {
                        animate: true,
                        duration: 2 // Duración en segundos
                    });
                    L.marker([lat, lng]).addTo(map).bindPopup('<b>'+dato4+'</b><br>'+dato5).openPopup();
                    $.post("consulta/cn-index.php", {dato_0: dato0, dato_1: dato1}, function (data) {
                        $("#i_dirnosotros").html(data);
                    });
                }
        </script>
    </body>
</html>