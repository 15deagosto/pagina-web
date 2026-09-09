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
        <title>Quejas y Sugerencias - 15 de Agosto Cooperativa de Ahorro y Crédito</title>

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
        <div class="inner-pages-section-area" style="background-image: url(assets/img/baner-quejas.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="inner-header text-center">
                            <h2 style="font-size: 65px;">Quejas y sugerencias</h2>
                            <div class="space24"></div>
                            <a href="index.php">Inicio <i class="fa-solid fa-angle-right"></i> <span>Quejas y sugerencias</span></a>
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
        <!--===== CONTACT AREA STARTS =======-->
        <div class="contact-inner-area sp2">
            <div class="container">
                <div class="row">

                    <form method="POST" id="formularioContacto">
                        <div class="col-lg-12">
                            <div class="contact-header-area heading1">
                                <div class="space16"></div>
                                <h2>Escribe tu queja, reclamo o sugerencia</h2>
                                <div class="space16"></div>
                                <p>Antes de llenar el formulario por favor lee detenidamente las instrucciones <a href="">en este enlace.</a> </p>
                                <div class="row" style="margin-top: 20px">
                                    <div class="col-lg-6">
                                        <div class="input-area">
                                            <label class="mb-2"> Identificación de la Oficina donde recibió el servicio</label>
                                            <select type="text" name="nombre_queja" placeholder="Nombres*">
                                                <option> -- Seleccione la oficina --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-area">
                                            <label class="mb-2"> Identificación del usuario que presenta el reclamo</label><br>
                                            <label class=""> <input type="radio" name="nombre_queja" placeholder="Nombres*">Natural</label>
                                            <label class=""> <input type="radio" name="nombre_queja" placeholder="Nombres*">Jurídica</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="mb-2">Dirección *</label>
                                        <div class="input-area">
                                            <textarea type="text" name="apellido_queja" placeholder=" Ingrese la dirección "></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="mb-2">Referencia de domicilio *</label>
                                        <div class="input-area">
                                            <input type="text" name="email_queja" placeholder="Ingrese la referencia del domicilio">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="mb-2">Ciudad *</label>
                                        <div class="input-area">
                                            <input type="text" name="telefono_queja" placeholder="Ingrese la ciudad">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="mb-2">Provincia *</label>
                                        <div class="input-area">
                                            <select type="text" name="asunto_queja" placeholder="Asunto*">
                                                <option> -- Seleccione una opción</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="mb-2">Cantón *</label>
                                        <div class="input-area">
                                            <select type="text" name="asunto_queja" placeholder="Asunto*">
                                                <option> -- Seleccione una opción</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <label class="mb-2">Parroquia, barrio o comunidad*</label>
                                        <div class="input-area">
                                            <textarea name="observacion_queja" placeholder="Ingrese su parroquia, barrio o comunidad"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="mb-2">Identificación del reclamo, consulta o queja </label>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="mb-2">Producto Servicio* </label>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="mb-2"><input type="radio" style="margin-right: 5px;"> Atención recibida </label>
                                        <label class="mb-2"><input type="radio" style="margin-right: 5px;"> Crédito </label>
                                        <label class="mb-2"><input type="radio" style="margin-right: 5px;"> Central de riesgo </label>
                                        <label class="mb-2"><input type="radio" style="margin-right: 5px;"> Cuentas de ahorros </label>
                                        <label class="mb-2"><input type="radio" style="margin-right: 5px;"> Certificado de depósito </label>
                                        <label class="mb-2"><input type="radio" style="margin-right: 5px;"> Tarifas por servicios </label>
                                        <label class="mb-2"><input type="radio" style="margin-right: 5px;"> Cajero automático </label>
                                        <label class="mb-2"><input type="radio" style="margin-right: 5px;"> Recaudaciones </label>
                                        <label class="mb-2"><input type="radio" style="margin-right: 5px;"> Ley Orgánica de Protección de datos </label>
                                        <label class="mb-2"><input type="radio" style="margin-right: 5px;"> Otros </label>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="mb-2">Detalle de su reclamo expuesto de forma clara y concisa, así como la fecha en que ocurrieron los hechos* </label>
                                        <div class="input-area">
                                            <textarea name="observacion_queja" placeholder="Ingrese su parroquia, barrio o comunidad"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="mb-2">Petición en concreto que dirige a la cooperativa*  </label>
                                        <div class="input-area">
                                            <textarea name="observacion_queja" placeholder="Ingrese su parroquia, barrio o comunidad"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="mb-2">Documentos que se adjuntan (Extensiones habilitadas: png, pdf, jpg, jpeg. Tamaño máximo: 400kb): </label>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="mb-2">Cédula de ciudadanía / Pasaporte  </label>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="file" name="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="mb-2">Comprobante objeto del reclamo</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="file" name="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="mb-2">Documentos Adicionales </label>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="file" name="">
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-lg-12">
                                            <p class="mt-4" style="text-align: justify">La Cooperativa tratará los datos personales del reclamante para: a) verificar la identificación del reclamante, b) recolectar información adicional para el análisis del reclamo, c) contactar al titular de los datos para comunicar respuesta, d) para análisis y mejora continua en la gestión de reclamos, e) compartir los datos personales al ente de control cuando sea requerido. El tratamiento de los datos se realizará de acuerdo con lo establecido en la Ley Orgánica de Protección de Datos Personales, su Reglamento y demás normativa aplicable, así como lo determinado en la vinculación del titular de los datos como socio de la Cooperativa y en la Política General de Protección de Datos Personales que puede encontrar en la página web: www.jardinazuayo.fin.ec. Los datos tratados serán conservados de acuerdo con las finalidades para los cuales fueron proporcionados por el titular de los datos o de acuerdo con lo establecido en las diferentes bases legitimadoras, mismas que el reclamante declara conocer. He leído y autorizo a la Cooperativa de Ahorro y Crédito 15 de Agosto a realizar el tratamiento de mis datos personales conforme lo establecido en el presente apartado. </p>
                                        </div>
                                       
                                    </div>
                                    <div id="resultado"></div>
                                    <div class="col-lg-12">
                                        <div class="space16"></div>
                                        <div class="input-area">
                                            <button onclick="enviarContacto()" type="button" class="vl-btn1">Enviar ahora</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="space60"></div>

            </div>
        </div>
        <!--===== CONTACT AREA ENDS =======-->

        <!--===== CTA AREA STARTS =======-->
        <!--===== CTA AREA STARTS =======-->
        <div class="cta1-section-area sp4" style="background-image: url(assets/img/all-images/bg/fondo-006.png);
             background-position: center;
             background-repeat: no-repeat;
             background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="cta-header">
                            <h2 class="text-anime-style-3">Realiza pagos sin efectivo entre socios de nuestra institución </h2>
                            <div class="space32"></div>
                            <div class="btn-area1" data-aos="fade-left" data-aos-duration="1000">
                                <a href="#" class="vl-btn1">Ir a Servicios</a>
                                <a href="#" class="vl-btn1 btn2">Descargar app</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="img1">
                <img src="assets/img/all-images/cta/cta-img1.png" alt="">
            </div>
        </div>
        <!--===== CTA AREA ENDS =======-->
        <!--===== CTA AREA ENDS =======-->

        <!--===== FOOTER AREA STARTS =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>
        <!--===== FOOTER AREA ENDS =======-->

        <?php include "scripts-v2.php"; ?>
</body>
</html>