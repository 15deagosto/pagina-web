<div id="vl-header-sticky" class="vl-header-area vl-transparent-header" style="background: #fff;">
    <div class="container fix-header" style="max-width: 100%;">
        <div class="row" style="background: #a31a16;padding-right: 15%;padding-left: 15%;">
            <div class="col-lg-12" style="margin-top: 10px;">
                <div class="header-top-area">
                    <div class="header-list-area">
                        <ul class="info">
<!--                            <li><a href="#"><img src="assets/img/icons/mail2.svg" alt="">Demo@gmail.com</a><span> | </span></li>-->
                            <li><a href="sucursales.php"><img src="assets/img/icons/location2.svg" alt="">Canales de Atención</a><span> | </span></li>
                            <li><a href="#"><img src="assets/img/icons/phone2.svg" alt="">CallCenter: +921 5222 6132</a></li>
                        </ul>

                        <ul class="social">
                            <?php
                            $redes = $fnindex->fnindex_rredes();
                            while ($menuredes = $redes->fetch_assoc()) {
                                ?>
                            <li><a href="<?php echo $menuredes['url_redes'] ?>" target="_blank"><i class="fa-brands <?php echo utf8_encode($menuredes['icono']) ?>"></i></a></li>
                            <?php } ?>
<!--                            <li><a href="https://ec.linkedin.com/company/coac-15-de-agosto"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.instagram.com/coac15deagostopilacoto/"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/@coac15deagosto30" class="m-0"><i class="fa-brands fa-youtube"></i></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="space10 d-lg-block d-none"></div>
            </div>
        </div>
        <div class="row align-items-center row-bg" style="padding-right: 10%;padding-left: 10%;">
            <div class="col-lg-2 col-md-6 col-6">
                <div class="vl-logo">
                    <a href="index.php"><img src="assets/img/logo/logo2.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div class="vl-main-menu text-center">
                    <nav class="vl-mobile-menu-active">
                        <ul>
                            <!--                            <li class="has-dropdown">
                                                            <a href="#">Home <span><i class="fa-solid fa-angle-down d-lg-inline d-none"></i></span></a>
                                                            <div class="vl-mega-menu">
                                                                <div class="vl-home-menu">                    
                                                                    <div class="row gx-3 row-cols-1 row-cols-md-1 row-cols-lg-5">
                                                                        <div class="col">
                                                                            <div class="vl-home-thumb">
                                                                                <div class="img1">
                                                                                    <img src="assets/img/all-images/demo/demo-img1.png" alt="">
                                                                                </div>
                                                                                <a href="index-2.html">Finazze  - Homepage 01</a>
                                                                                <div class="btn-area1">
                                                                                    <a href="index-2.html" class="vl-btn1">View Demo <i class="fa-solid fa-angle-right"></i></a>
                            
                                                                                </div>
                                                                                <div class="space20 d-lg-none d-block"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="vl-home-thumb">
                                                                                <div class="img1">
                                                                                    <img src="assets/img/all-images/demo/demo-img2.png" alt="">
                                                                                </div>
                                                                                <a href="index2.html">Finazze  - Homepage 02</a>
                                                                                <div class="btn-area1">
                                                                                    <a href="index2.html" class="vl-btn1">View Demo <i class="fa-solid fa-angle-right"></i></a>
                            
                                                                                </div>
                                                                                <div class="space20 d-lg-none d-block"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col ">
                                                                            <div class="vl-home-thumb">
                                                                                <div class="img1">
                                                                                    <img src="assets/img/all-images/demo/demo-img3.png" alt="">
                                                                                </div>
                                                                                <a href="index3.html">Finazze  - Homepage 03</a>
                                                                                <div class="btn-area1">
                                                                                    <a href="index3.html" class="vl-btn1">View Demo <i class="fa-solid fa-angle-right"></i></a>
                            
                                                                                </div>
                                                                                <div class="space20 d-lg-none d-block"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col ">
                                                                            <div class="vl-home-thumb">
                                                                                <div class="img1">
                                                                                    <img src="assets/img/all-images/demo/demo-img4.png" alt="">
                                                                                </div>
                                                                                <a href="index4.html">Finazze  - Homepage 04</a>
                                                                                <div class="btn-area1">
                                                                                    <a href="index4.html" class="vl-btn1">View Demo <i class="fa-solid fa-angle-right"></i></a>
                            
                                                                                </div>
                                                                                <div class="space20 d-lg-none d-block"></div>
                                                                            </div>
                                                                        </div>
                            
                                                                        <div class="col ">
                                                                            <div class="vl-home-thumb">
                                                                                <div class="img1">
                                                                                    <img src="assets/img/all-images/demo/demo-img5.png" alt="">
                                                                                </div>
                                                                                <a href="index5.html">Finazze  - Homepage 05</a>
                                                                                <div class="btn-area1">
                                                                                    <a href="index5.html" class="vl-btn1">View Demo <i class="fa-solid fa-angle-right"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>-->
                            <li><a href="index.php">Inicio <span><i class="fa-solid d-lg-inline d-none"></i></span></a>
                                <!--                                <ul class="sub-menu">
                                                                    <li><a href="detalle-servicio.php">Servicio 1</a></li>
                                                                    <li><a href="detalle-servicio.php">Servicio 2</a></li>
                                                                    <li><a href="detalle-servicio.php">Servicio 3</a></li>
                                                                    <li><a href="#" class="span-arrow">Blog Details <span><i class="fa-solid fa-angle-right d-lg-block d-none"></i></span></a>
                                                                        <ul class="sub-menu menu1">
                                                                            <li><a href="blog-left.html">Blog Left</a></li>
                                                                            <li><a href="blog-right.html">Blog Right</a></li>
                                                                            <li><a href="blog-single.html">Blog Single</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>-->
                            </li>
                            <li class="has-dropdown">
                                <a href="#">Productos 
                                    <span><i class="fa-solid fa-angle-down d-lg-inline d-none"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="#">Créditos <span><i class="fa-solid fa-angle-down d-lg-inline d-none"></i></span></a>
                                        <ul class="sub-menu">
                                             <li><a href="microcredito.php?id=1">Microcrédito</a></li>
                                             <li><a href="consumo.php?id=1">Consumo</a></li>
                                            <?php /*$detprod = $fnindex->fnindex_rproducto_xtipo(1); 
                                          while ($menudetprod = $detprod->fetch_assoc()) { ?>
                                            <li><a href="detprod-credito-micro.php?id=<?php echo  $menudetprod['id_prod']?>"><?php echo  utf8_encode($menudetprod['nombre_prod'])?></a></li>
                                              <?php }*/ ?>
                                        </ul>
                                    </li>
                                    <li><a href="#">Inversiones <span><i class="fa-solid fa-angle-down d-lg-inline d-none"></i></span></a>
                                        <ul class="sub-menu">
                                             <?php $detprod = $fnindex->fnindex_rproducto_xtipo(2); 
                                          while ($menudetprod = $detprod->fetch_assoc()) { ?>
                                            <li><a href="detprod-inversion-vencimiento.php?id=<?php echo  $menudetprod['id_prod']?>"><?php echo  utf8_encode($menudetprod['nombre_prod'])?></a></li>
                                             <?php } ?>
                                        </ul>
                                    </li>
                                    <li><a href="detprod-credito-1.php?id=1">Ahorros <span><i class="fa-solid fa-angle-down d-lg-inline d-none"></i></span></a>
                                        <ul class="sub-menu menu1">
                                            <?php $detprod = $fnindex->fnindex_rproducto_xtipo(3); 
                                          while ($menudetprod = $detprod->fetch_assoc()) { ?>
                                            <li><a href="detprod-credito-1.php?id=<?php echo  $menudetprod['id_prod']?>"><?php echo  utf8_encode($menudetprod['nombre_prod']) ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="servicios.php">Servicios </a>
                            </li>
                            <li><a href="detprod-inversion.php">Conózcanos 
                                    <span><i class="fa-solid fa-angle-down d-lg-inline d-none"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="nuestra-coop.php">Misión</a></li>
                                    <li><a href="nuestra-coop.php">Visión</a></li>
                                    <li><a href="nuestra-coop.php">Nuestra historia</a></li>
                                    <li><a href="elecciones-2026.php">Elecciones 2026</a></li>
                                    <li><a href="transparencia.php">Transparencia de la información</a></li>
                                </ul>
                            </li>
                            <li><a href="educacion-financiera.php">Educación Financiera</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div class="vl-hero-btn d-none d-lg-block text-end">
                    <a href="#" class="menu-btn2">15 de Agosto Virtual<i class="fa-solid fa-angle-right"></i></a>
                    <!--                                <ul class="sub-menu">
                                                        <li><a href="detprod-credito.php">Personas</a></li>
                                                        <li><a href="detprod-credito.php">Empresas</a></li>
                                                    </ul>-->

                </div>
                <div class="vl-header-action-item d-block d-lg-none">
                    <button type="button" class="vl-offcanvas-toggle">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>