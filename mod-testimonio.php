<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="heading3 text-center space-margin60">
                <div style="display: flex;
                     padding-bottom: 15px !important;">
                    <div style="height: 47px; width: 3px; background-color: #ba0001;margin-right: 15px;"><p></p></div><h2 style="color: #000  !important;" class="text-anime-style-3">Testimonios</h2><br><br>
                </div>

                <div class="space16"></div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="testimonial4-main-slider owl-carousel">
                <?php
                $testimonio = $fnindex->fnindex_rtestimonios();
                while ($menutestimonio = $testimonio->fetch_assoc()) {
                    ?>
                    <div class="testimonial-box-area" style="border: 1px solid silver;">
                        <div class="img1">
                            <img src="assets/img/all-images/testimonial/img-testimonio.png" alt="">
                        </div>
                        <p><?php echo utf8_encode($menutestimonio['resumen_testimonio']) ?></p>
                        <div class="space24"></div>
                        <div class="content-area">
                            <div class="text">
                                <a href="#"><?php echo utf8_encode($menutestimonio['nom_testimonio']) ?></a>
                                <div class="space8"></div>
                                <p><?php echo $menutestimonio['lugar_testimonio'] ?></p>
                            </div>
                            <img src="assets/img/icons/quoto1.svg" alt="">
                        </div>
                    </div>
                <?php } ?>
                
            </div>
        </div>
    </div>
</div>