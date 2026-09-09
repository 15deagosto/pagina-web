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
                            <h2 style="font-size: 65px;">Ayúdanos a mejorar</h2>
                            <div class="space24"></div>
                            <a href="index.php">Inicio <i class="fa-solid fa-angle-right"></i> <span>Ayúdanos a mejorar</span></a>
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
        <!--===== CONTACT AREA STARTS =======-->
        <div class="contact-inner-area sp2">
            <div class="container">
                <div class="row">
                    <form id="formEvaluacion">
                        <div class="col-lg-12">
                            <label class="mb-2" style="font-size: 1.1rem;">En nuestra Cooperativa de Ahorro y Crédito trabajamos diariamente para brindarle un servicio seguro, transparente y de calidad. Su opinión es fundamental para continuar fortaleciendo nuestros procesos y mejorar la experiencia de atención en cada una de nuestras sucursales.</label> 
                           <label class="mb-2" style="font-size: 1.1rem;">Le invitamos a dedicar unos minutos para evaluar el servicio recibido. La información proporcionada será tratada con confidencialidad y utilizada exclusivamente con fines de mejora continua.</label> 
                        </div>
                        <div class="col-lg-12" style="margin-top: 20px;">
                            <label class="mb-2" style="font-size: 1.1rem; font-weight: 600">Sucursal visitada:</label>
                            <select required>
                                <option value="">Seleccione una sucursal</option>
                               <?php
                            $detagencia = $fnindex->fnindex_ragencia();
                            while ($menuagencia = $detagencia->fetch_assoc()) {
                                ?>
                                <option value="<?php echo $menuagencia['id_nosotros'] ?>"><?php echo $menuagencia['nombre_nosotros'] ?></option>
                                 <?php } ?>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <label class="mb-2" style="font-size: 1.1rem;font-weight: 600">¿Cómo califica la atención recibida?</label>
                            <div class="rating">
                                <input type="radio" name="rating" value="5" id="5"><label for="5">★</label>
                                <input type="radio" name="rating" value="4" id="4"><label for="4">★</label>
                                <input type="radio" name="rating" value="3" id="3"><label for="3">★</label>
                                <input type="radio" name="rating" value="2" id="2"><label for="2">★</label>
                                <input type="radio" name="rating" value="1" id="1"><label for="1">★</label>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-20" style="margin-top: 40px;">
                            <label class="mb-2" style="font-size: 1.1rem;font-weight: 600">Comentario adicional:</label>
                            <textarea class="form-control" rows="4" placeholder="Escriba su comentario (opcional)"></textarea>
                        </div>
                        <div class="col-lg-12" style="margin-top: 40px;">
                            <a onclick="enviarContacto()" type="button" class="vl-btn1">Enviar Evaluación</a>
                        </div>





                        <div class="success" id="mensaje"></div>

                    </form>

                </div>
                <div class="space60"></div>

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