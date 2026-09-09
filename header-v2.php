<div class="v2-topbar">
    <div class="v2-container">
        <a href="sucursales.php"><i class="fa-solid fa-location-dot"></i> Canales de Atención</a>
        <div class="v2-social">
            <?php
            $redes = $fnindex->fnindex_rredes();
            while ($menuredes = $redes->fetch_assoc()) {
                ?>
                <a href="<?php echo $menuredes['url_redes'] ?>" target="_blank"><i class="fa-brands <?php echo utf8_encode($menuredes['icono']) ?>"></i></a>
                <?php
            }
            ?>
        </div>
    </div>
</div>

<nav class="v2-nav">
    <div class="v2-container">
        <a href="index.php" class="v2-logo"><img src="assets/img/logo/logo2.png" alt="Cooperativa 15 de Agosto"></a>

        <ul class="v2-menu">
            <li><a href="index.php">Inicio</a></li>
            <li>
                <a href="#">Productos</a>
                <ul class="v2-submenu">
                    <li><a href="microcredito.php?id=1">Microcrédito</a></li>
                    <li><a href="consumo.php?id=1">Consumo</a></li>
                    <?php
                    $detprod = $fnindex->fnindex_rproducto_xtipo(2);
                    while ($menudetprod = $detprod->fetch_assoc()) {
                        ?>
                        <li><a href="detprod-inversion-vencimiento.php?id=<?php echo $menudetprod['id_prod'] ?>">Inversión: <?php echo utf8_encode($menudetprod['nombre_prod']) ?></a></li>
                        <?php
                    }
                    $detprod = $fnindex->fnindex_rproducto_xtipo(3);
                    while ($menudetprod = $detprod->fetch_assoc()) {
                        ?>
                        <li><a href="detprod-credito-1.php?id=<?php echo $menudetprod['id_prod'] ?>">Ahorro: <?php echo utf8_encode($menudetprod['nombre_prod']) ?></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </li>
            <li><a href="servicios.php">Servicios</a></li>
            <li>
                <a href="nuestra-coop.php">Conózcanos</a>
                <ul class="v2-submenu">
                    <li><a href="nuestra-coop.php">Misión y visión</a></li>
                    <li><a href="elecciones-2026.php">Elecciones 2026</a></li>
                    <li><a href="transparencia.php">Transparencia de la información</a></li>
                </ul>
            </li>
            <li><a href="educacion-financiera.php">Educación Financiera</a></li>
        </ul>

        <div class="v2-nav-actions">
            <a href="login.php" class="v2-btn v2-btn--primario">15 de Agosto Virtual</a>
            <button class="v2-burger" aria-label="Abrir menú"><i class="fa-solid fa-bars"></i></button>
        </div>
    </div>
</nav>

<div class="v2-offcanvas-overlay"></div>
<div class="v2-offcanvas">
    <div style="display:flex; justify-content:space-between; align-items:center;">
        <img src="assets/img/logo/logo2.png" alt="" style="height:36px;">
        <button class="v2-offcanvas-cerrar" aria-label="Cerrar menú"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li><a href="nuestra-coop.php">Conózcanos</a></li>
        <li><a href="educacion-financiera.php">Educación Financiera</a></li>
        <li><a href="sucursales.php">Canales de Atención</a></li>
        <li><a href="login.php">15 de Agosto Virtual</a></li>
    </ul>
    <div class="v2-social">
        <?php
        $redes2 = $fnindex->fnindex_rredes();
        while ($menuredes2 = $redes2->fetch_assoc()) {
            ?>
            <a href="<?php echo $menuredes2['url_redes'] ?>" target="_blank" style="color:#a31a16; margin-right:14px; font-size:20px;"><i class="fa-brands <?php echo utf8_encode($menuredes2['icono']) ?>"></i></a>
            <?php
        }
        ?>
    </div>
</div>
