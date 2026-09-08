<?php
$textnosotros = $fnindex->fnindex_rtextosxtipo(5);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="about-heading heading2">
                <div class="text-center">
                    <div style="display: flex;
                         padding-bottom: 15px !important;">
                        <div style="height: 47px; width: 3px; background-color: #ba0001;margin-right: 15px;"><p></p></div><h2 class="text-anime-style-3">Nosotros</h2><br><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="about-heading heading2">
                <br>
<!--                <div>
                    <h2 style="font-family: 'sinami-demo'; color: #717171;">! Una Familia para todos ¡</h2> 
                </div>-->
                <br>
                <div class="images-area">
                    <div class="img1  image-anime reveal">
                        <img src="assets/img/img-servicios-05.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="about-heading heading2">
                <div class="space16"></div>
                <div class="space32"></div>
                <div data-aos="fade-left" data-aos-duration="1000" style="border-bottom: 4px solid #a31a16">
                    <div class="about-boxarea">
                        <div class="icons">
                            <img src="assets/img/icons/about2.svg" style="filter: brightness(0) invert(1);" alt="">
                        </div>
                        <div class="text">
                            <a href="#" style="font-size: 24px;color:#000;">Misión</a>
                            <div class="space16"></div>
                            <p style="font-size: 18px;"><?php echo ($textnosotros[0]['car1_texto']); ?></p>
                        </div>
                    </div>
                </div>
                <div class="space16"></div>
                <div class="space30"></div>
                <div data-aos="fade-left" data-aos-duration="1100" style="border-bottom: 4px solid #a31a16">
                    <div class="about-boxarea">
                        <div class="icons">
                            <img src="assets/img/icons/about1.svg" style="filter: brightness(0) invert(1);" alt="">
                        </div>
                        <div class="text">
                            <a href="#" style="font-size: 24px;color:#000;">Visión</a>
                            <div class="space16"></div>
                            <p style="font-size: 18px;"><?php echo $textnosotros[0]['car2_texto']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>