<?php
$slider = $fncredito->fnindex_rslider();
while ($menuslider = $slider->fetch_assoc()) {
    if ($menuslider['url_slider'] != '') {
        ?>
        <a href="<?php echo $menuslider['url_slider'] ?>" target="_blank"> 
            <div class="hero5-section-area " style="background-image: url(assets/img/<?php echo $menuslider['img_slider'] ?>); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <!--    <img src="assets/img/all-images/bg/bg6.png" alt="" class="bg6">-->
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 img-slider" style="height: 450px;">
                        </div>
                        <div class="col-lg-1"></div>

                    </div>
                </div>
            </div>
        </a> 
        <?php
    } else {
        ?>
        <div class="hero5-section-area " style="background-image: url(assets/img/<?php echo $menuslider['img_slider'] ?>); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <!--    <img src="assets/img/all-images/bg/bg6.png" alt="" class="bg6">-->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 img-slider" style="height: 450px;">
                    </div>
                    <div class="col-lg-1"></div>

                </div>
            </div>
        </div>
    <?php }} ?>
