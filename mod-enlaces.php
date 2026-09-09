<div class="max-w-7xl mx-auto grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
    <?php
    $enlaces = [
        ['icon' => 'icon-inversiones-01.png', 'titulo' => 'Inversiones', 'link' => 'detprod-inversion.php'],
        ['icon' => 'icon-ahorrro-02.png', 'titulo' => 'Ahorro programado', 'link' => 'servicios.php'],
        ['icon' => 'icon-servicios-02.png', 'titulo' => 'Servicios', 'link' => 'servicios.php'],
        ['icon' => 'icon-pagos-02.png', 'titulo' => 'Pagos', 'link' => 'servicios.php'],
    ];
    foreach ($enlaces as $idx => $e) {
        ?>
        <a href="<?php echo $e['link'] ?>" class="group flex items-center gap-4 bg-white border border-neutral-100 rounded-2xl p-5 shadow-soft hover:shadow-softhover hover:-translate-y-1 transition-all duration-300" data-aos="zoom-in" data-aos-delay="<?php echo $idx * 80 ?>">
            <div class="w-16 h-16 rounded-full bg-rojo-light flex items-center justify-center flex-shrink-0 group-hover:bg-rojo transition-colors">
                <img src="assets/img/<?php echo $e['icon'] ?>" class="w-9 h-9 group-hover:brightness-0 group-hover:invert transition-all" alt="">
            </div>
            <span class="font-bold text-neutral-800 text-lg"><?php echo $e['titulo'] ?></span>
        </a>
        <?php
    }
    ?>
</div>
