<div class="container" style="max-width: 100%">
    <div class="row" style="padding-left: 15%; padding-right: 15%;">

        <div class="col-lg-4 col-md-6">
            <div class="space30 d-md-none d-block"></div>
            <div class="vl-footer-widget first-padding">
                <h3>Somos 15 de Agosto </h3>
                <div class="space4"></div>
                <div class="space4"></div>
                <ul style="margin-top: 20px;">
                    <li><a href="educacion-financiera.php">Educación Financiera</a></li>
                    <li><a href="nuestra-coop.php">Nuestra Cooperativa</a></li>
                    <li><a href="transparencia.php">Transparencia de la información</a></li>
                    <li><a href="politica-saras.php">Política SARAS</a></li>
                    <li><a href="trabaja-nosotros.php">Trabaja con nosotros</a></li>
                    <li><a href="reglamento.php">Reglamento de Buen Gobierno</a></li>
                    <li><a href="tratamiento-datos.php">Tratamiento de Datos</a></li>
                </ul>
            </div>
        </div> 
        <div class="col-lg-4 col-md-6">
            <div class="footer-logo1" style="justify-content: center;
                 display: grid;">
                <h3 style="color: #ffffff;margin-bottom:40px;">Siguenos en redes sociales</h3>
                <div class="space4"></div>
                <img style="filter: brightness(0) invert(1);height: 76px;
                     width: 264px; margin-left: 5%;" src="assets/img/logo/logo2.png" alt=""><br><br>
                <div class="space24"></div>
                <p style="text-align: center;">@cooperativa15deagosto</p>
                <div class="space24"></div>
                <ul style="justify-content: center;display: flex;">
                     <?php
                            $redes = $fnindex->fnindex_rredes();
                            while ($menuredes = $redes->fetch_assoc()) {
                                ?>
                    <li><a href="<?php echo $menuredes['url_redes'] ?>" target="_blank"><i class="fa-brands <?php echo $menuredes['icono'] ?>"></i></a></li>
                         <?php } ?>
<!--                    <li><a href="https://ec.linkedin.com/company/coac-15-de-agosto"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    <li><a href="https://www.instagram.com/coac15deagostopilacoto/"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/@coac15deagostopilacoto74" class="m-0"><i class="fa-brands fa-youtube"></i></a></li>-->
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="space30 d-md-none d-block"></div>
            <div class="vl-footer-widget">
                <h3>Centro de Ayuda</h3>
                <div class="space4"></div>
                <div class="space4"></div>
                <ul style="margin-top: 20px;">
                    <li><a href="calificanos.php">Ayúdame a mejorar</a></li>
                    <li><a href="calificanos.php">Ayuda</a></li>
                    <li><a href="quejas-sugerencias.php">Sugerencias</a></li>
                    <li><a href="quejas-sugerencias.php">Quejas y Reclamos</a></li>
                    <li><a href="ley-proteccion.php">Ley de protección de datos</a></li>
                    <!--                    <li><a href="cookies.php">Cookies</a></li>-->
                    <li><a href="preguntas-frecuentes.php">Preguntas Frecuentes</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div> 

        <!--        <div class="col-lg-3 col-md-6">
                    <div class="vl-footer-widget">
                        <div class="space30 d-lg-none d-block"></div>
                        <h3>Contact Us</h3>
                        <ul>
                            <li><a href="tel:+11234567890"><img src="assets/img/icons/phn1.svg" alt="">+1 123 456 7890</a></li>
                            <li><a href="#"><img src="assets/img/icons/location1.svg" alt="">421 Allen, Mexico 4233</a></li>
                            <li><a href="renevagency%40com.html"><img src="assets/img/icons/email1.svg" alt="">finazzeconsult@com</a></li>
                            <li><a href="#"><img src="assets/img/icons/global1.svg" alt="">finazzeconsult.com</a></li>
                        </ul>
                    </div>
                </div>-->
    </div>
    <div class="space60"></div>
    <div class="row" style="background: #fff;padding-right: 15%;  padding-left: 15%;padding-top: 2%; padding-bottom: 2%;">
        <!--Start single footer widget-->
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 wow bounceInUp animated" data-wow-duration="1500ms">
            <div class="single-footer-widget marbtm50">
                <div class="our-company-info">
                    <div class="footer-widget-contact-info">
                        <ul>
                            <li>
                                <h2 style="font-weight: 800; font-size: 1.5rem;">
                                    Comunícate con nosotros

                            </li>
                            <li style="display: flex;">
                                <div>
                                    <img style="width: 50px;margin-right: 10px;" src="assets/img/icon_telefono.png">  
                                </div>
                                <div>
                                    <h3>Línea de Emergencia</h3>
                                    <h4 style="font-weight: 800;">1800 - 244285</h4> 
                                </div>

                            </li>
                        </ul>
                    </div>
                    <!--                                        <div class="copyright-text">
                                                                <p>
                                                                    Copyright &copy; 2022 <a href="index-2.html">Finbank.</a> Licensed by the<br>
                                                                    Central Bank of United States.
                                                                </p>
                                                            </div>-->
                </div>
            </div>
        </div>
        <!--End single footer widget-->

        <!--Start single footer widget-->
        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 wow bounceInUp animated" data-wow-duration="1500ms">

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="justify-content: center;display: flex;">
                        <a href="https://www.seps.gob.ec/" target="_blank"> 
                            <img src="assets/img/logo_superintendencia.png">
                        </a> 
                    </div>
                    <!--End Single Swiper Slide-->
                    <!--Start Single Swiper Slide-->
                    <div class="swiper-slide" style="justify-content: center;display: flex;">
                        <a href="https://www.cosede.gob.ec/" target="_blank"> 
                            <img src="assets/img/cosede-1.png">
                        </a> 
                    </div>
                    <!--Start Single Swiper Slide-->
                    <!--Start Single Swiper Slide-->
                    <div class="swiper-slide" style="justify-content: center;display: flex;">
                        <a href="https://www.uafe.gob.ec/" target="_blank"> 
                            <img src="assets/img/logo-UAFE.jpg">
                        </a> 
                    </div>
                    <!--Start Single Swiper Slide-->
                    <!--Start Single Swiper Slide-->
                    <div class="swiper-slide" style="justify-content: center;display: flex;">
                        <a href="https://www.finanzaspopulares.gob.ec/" target="_blank"> 
                            <img src="assets/img/logo-conafis.webp">
                        </a> 
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!--End single footer widget-->
    </div>
    <div class="row">
        <div class="col-lg-12" style="padding: 0px;">
            <div class="vl-copyright-area" style="padding-right: 15%;padding-left: 15%;">
                <p>© 2025 Derechos Reservados Cooperativa de Ahorro y Crédito 15 de Agosto</p>
                <ul>
                    <li><a href="politica-seguridad.php"> Política de Privacidad  <span> | </span></a></li>
                    <li><a href="terminos-condiciones.php"> Términos y Condiciones </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>