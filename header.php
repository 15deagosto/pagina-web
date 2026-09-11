<?php require_once './funciones/fn-utilidades.php'; ?>
<div class="bg-rojo text-white text-xs">
    <div class="max-w-7xl mx-auto px-6 py-2 flex justify-end items-center gap-6 flex-wrap">
        <a href="sucursales.php" class="flex items-center gap-1.5 hover:underline"><i class="fa-solid fa-location-dot"></i> Canales de Atención</a>
        <div class="flex gap-3 text-sm">
            <?php
            $redes = $fnindex->fnindex_rredes();
            while ($menuredes = $redes->fetch_assoc()) {
                ?>
                <a href="<?php echo $menuredes['url_redes'] ?>" target="_blank" class="hover:opacity-70"><i class="fa-brands <?php echo utf8_encode($menuredes['icono']) ?>"></i></a>
                <?php
            }
            ?>
        </div>
    </div>
</div>

<nav class="sticky top-0 z-50 glass-light shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between gap-6">
        <a href="index.php"><img src="assets/img/logo/logo2.png" alt="Cooperativa 15 de Agosto" class="h-11"></a>

        <ul class="hidden lg:flex items-center gap-8 text-sm font-semibold">
            <li><a href="index.php" class="hover:text-rojo transition-colors">Inicio</a></li>
            <li class="relative group">
                <a href="#" class="hover:text-rojo transition-colors flex items-center gap-1">Productos <i class="fa-solid fa-angle-down text-xs"></i></a>
                <div class="absolute left-1/2 -translate-x-1/2 top-full mt-2 bg-white shadow-soft rounded-2xl p-6 w-[640px] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all grid grid-cols-3 gap-6">
                    <div>
                        <h4 class="text-xs font-bold uppercase tracking-wide text-rojo mb-3">Créditos</h4>
                        <ul class="space-y-1">
                            <li><a href="microcredito.php?id=1" class="block px-2 py-1.5 rounded-lg hover:bg-rojo-light hover:text-rojo text-sm">Microcrédito</a></li>
                            <li><a href="consumo.php?id=1" class="block px-2 py-1.5 rounded-lg hover:bg-rojo-light hover:text-rojo text-sm">Consumo</a></li>
                            <?php
                            $mapaCredito = [
                                116 => 'detprod-credito-1.php', 115 => 'detprod-credito-3.php',
                                120 => 'detprod-credito-4.php', 118 => 'detprod-credito-7.php', 119 => 'detprod-credito-8.php',
                                114 => 'detprod-credito-9.php', 113 => 'detprod-credito-10.php',
                                51 => 'detprod-credito-micro.php',
                            ];
                            $detprod = $fnindex->fnindex_rproducto_xtipo(5);
                            while ($menudetprod = $detprod->fetch_assoc()) {
                                if (!isset($mapaCredito[$menudetprod['id_prod']])) {
                                    continue;
                                }
                                ?>
                                <li><a href="<?php echo $mapaCredito[$menudetprod['id_prod']] ?>?id=<?php echo $menudetprod['id_prod'] ?>" class="block px-2 py-1.5 rounded-lg hover:bg-rojo-light hover:text-rojo text-sm"><?php echo arreglar_mojibake(utf8_encode($menudetprod['nombre_prod'])) ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold uppercase tracking-wide text-rojo mb-3">Inversiones</h4>
                        <ul class="space-y-1">
                            <?php
                            $detprod = $fnindex->fnindex_rproducto_xtipo(2);
                            while ($menudetprod = $detprod->fetch_assoc()) {
                                ?>
                                <li><a href="detprod-inversion-vencimiento.php?id=<?php echo $menudetprod['id_prod'] ?>" class="block px-2 py-1.5 rounded-lg hover:bg-rojo-light hover:text-rojo text-sm"><?php echo arreglar_mojibake(utf8_encode($menudetprod['nombre_prod'])) ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold uppercase tracking-wide text-rojo mb-3">Ahorros</h4>
                        <ul class="space-y-1">
                            <?php
                            $detprod = $fnindex->fnindex_rproducto_xtipo(3);
                            while ($menudetprod = $detprod->fetch_assoc()) {
                                ?>
                                <li><a href="detprod-ahorro.php?id=<?php echo $menudetprod['id_prod'] ?>" class="block px-2 py-1.5 rounded-lg hover:bg-rojo-light hover:text-rojo text-sm"><?php echo arreglar_mojibake(utf8_encode($menudetprod['nombre_prod'])) ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </li>
            <li><a href="servicios.php" class="hover:text-rojo transition-colors">Servicios</a></li>
            <li class="relative group">
                <a href="nuestra-coop.php" class="hover:text-rojo transition-colors flex items-center gap-1">Conózcanos <i class="fa-solid fa-angle-down text-xs"></i></a>
                <ul class="absolute left-0 top-full mt-2 bg-white shadow-soft rounded-xl p-2 min-w-[220px] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                    <li><a href="nuestra-coop.php" class="block px-3 py-2 rounded-lg hover:bg-rojo-light hover:text-rojo text-sm font-medium">Misión y visión</a></li>
                    <li><a href="elecciones-2026.php" class="block px-3 py-2 rounded-lg hover:bg-rojo-light hover:text-rojo text-sm font-medium">Elecciones 2026</a></li>
                    <li><a href="transparencia.php" class="block px-3 py-2 rounded-lg hover:bg-rojo-light hover:text-rojo text-sm font-medium">Transparencia de la información</a></li>
                </ul>
            </li>
            <li><a href="educacion-financiera.php" class="hover:text-rojo transition-colors">Educación Financiera</a></li>
        </ul>

        <div class="flex items-center gap-3">
            <a href="login.php" class="hidden md:inline-flex bg-rojo text-white font-bold px-6 py-2.5 rounded-full hover:bg-rojo-dark hover:-translate-y-0.5 transition-all shadow-soft">15 de Agosto Virtual</a>
            <button class="lg:hidden text-rojo text-2xl" id="v2-burger" aria-label="Abrir menú"><i class="fa-solid fa-bars"></i></button>
        </div>
    </div>
</nav>

<div id="v2-overlay" class="fixed inset-0 bg-black/50 z-[99] hidden"></div>
<div id="v2-offcanvas" class="fixed top-0 right-0 h-full w-[85%] max-w-sm bg-white z-[100] shadow-2xl p-6 overflow-y-auto translate-x-full transition-transform duration-300">
    <div class="flex justify-between items-center mb-8">
        <img src="assets/img/logo/logo2.png" alt="" class="h-9">
        <button id="v2-cerrar" class="text-2xl text-neutral-500" aria-label="Cerrar menú"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <ul class="space-y-1 text-base font-semibold">
        <li><a href="index.php" class="block py-3 border-b border-neutral-100">Inicio</a></li>
        <li class="border-b border-neutral-100">
            <details>
                <summary class="cursor-pointer list-none flex items-center justify-between py-3">Productos <i class="fa-solid fa-chevron-down text-xs text-rojo"></i></summary>
                <ul class="pb-3 pl-3 space-y-1 text-sm font-normal">
                    <li><a href="microcredito.php?id=1" class="block py-2">Microcrédito</a></li>
                    <li><a href="consumo.php?id=1" class="block py-2">Consumo</a></li>
                    <?php
                    $detprodm = $fnindex->fnindex_rproducto_xtipo(2);
                    while ($menudetprodm = $detprodm->fetch_assoc()) {
                        ?>
                        <li><a href="detprod-inversion-vencimiento.php?id=<?php echo $menudetprodm['id_prod'] ?>" class="block py-2">Inversión: <?php echo arreglar_mojibake(utf8_encode($menudetprodm['nombre_prod'])) ?></a></li>
                        <?php
                    }
                    $detprodm = $fnindex->fnindex_rproducto_xtipo(3);
                    while ($menudetprodm = $detprodm->fetch_assoc()) {
                        ?>
                        <li><a href="detprod-ahorro.php?id=<?php echo $menudetprodm['id_prod'] ?>" class="block py-2">Ahorro: <?php echo arreglar_mojibake(utf8_encode($menudetprodm['nombre_prod'])) ?></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </details>
        </li>
        <li><a href="servicios.php" class="block py-3 border-b border-neutral-100">Servicios</a></li>
        <li><a href="nuestra-coop.php" class="block py-3 border-b border-neutral-100">Conózcanos</a></li>
        <li><a href="educacion-financiera.php" class="block py-3 border-b border-neutral-100">Educación Financiera</a></li>
        <li><a href="sucursales.php" class="block py-3 border-b border-neutral-100">Canales de Atención</a></li>
        <li><a href="login.php" class="block mt-4 text-center bg-rojo text-white font-bold py-3 rounded-full">15 de Agosto Virtual</a></li>
    </ul>
    <div class="flex gap-4 mt-8 text-xl text-rojo">
        <?php
        $redes2 = $fnindex->fnindex_rredes();
        while ($menuredes2 = $redes2->fetch_assoc()) {
            ?>
            <a href="<?php echo $menuredes2['url_redes'] ?>" target="_blank"><i class="fa-brands <?php echo utf8_encode($menuredes2['icono']) ?>"></i></a>
            <?php
        }
        ?>
    </div>
</div>

<script>
    (function () {
        var burger = document.getElementById('v2-burger');
        var overlay = document.getElementById('v2-overlay');
        var panel = document.getElementById('v2-offcanvas');
        var cerrar = document.getElementById('v2-cerrar');
        function abrir() { panel.classList.remove('translate-x-full'); overlay.classList.remove('hidden'); }
        function cerrarMenu() { panel.classList.add('translate-x-full'); overlay.classList.add('hidden'); }
        if (burger) burger.addEventListener('click', abrir);
        if (cerrar) cerrar.addEventListener('click', cerrarMenu);
        if (overlay) overlay.addEventListener('click', cerrarMenu);
    })();
</script>
