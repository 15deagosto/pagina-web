<?php require_once './funciones/fn-utilidades.php'; ?>

<!-- TOP BAR: Línea Superior Institucional -->
<div class="bg-[#a31a16] text-white text-xs border-b border-white/5 relative z-50">
    <div class="max-w-7xl mx-auto px-6 py-2.5 flex justify-end items-center gap-6 flex-wrap font-medium">
        <a href="sucursales.php" class="flex items-center gap-2 hover:text-[#ffd9d6] transition-colors">
            <i class="fa-solid fa-location-dot text-[11px] opacity-90"></i> Canales de Atención
        </a>
        <div class="hidden sm:block w-px bg-white/10 h-3"></div>
        <div class="flex gap-4 text-xs items-center">
            <?php
            $redes = $fnindex->fnindex_rredes();
            while ($menuredes = $redes->fetch_assoc()) {
                ?>
                <a href="<?php echo $menuredes['url_redes'] ?>" target="_blank" class="hover:text-[#ffd9d6] hover:scale-110 transition-all">
                    <i class="fa-brands <?php echo utf8_encode($menuredes['icono']) ?>"></i>
                </a>
                <?php
            }
            ?>
        </div>
    </div>
</div>

<!--  NAV MAIN: Barra de Navegación de Alta Gama (Efecto Cristal Esmerilado) -->
<nav class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-neutral-100 shadow-sm transition-all duration-300">
    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between gap-6">
        
        <!-- Logotipo Institucional Responsivo -->
        <a href="index.php" class="flex items-center shrink-0 group">
            <img src="assets/img/logo/logo2.png" alt="Cooperativa 15 de Agosto" class="h-11 object-contain transition-transform duration-300 group-hover:scale-[1.01]">
        </a>

        <!-- MENÚ CENTRAL DESKTOP: Enlaces con Animación de Línea de Fondo -->
        <ul class="hidden lg:flex items-center gap-7 text-sm font-bold text-neutral-600">
            <li>
                <a href="index.php" class="hover:text-[#a31a16] transition-colors relative py-2 group">
                    Inicio
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#a31a16] transition-all duration-300 group-hover:w-full"></span>
                </a>
            </li>
            
            <!-- MEGA MENU DESPLEGABLE: PRODUCTOS -->
            <li class="relative group">
                <a href="#" class="hover:text-[#a31a16] transition-colors flex items-center gap-1.5 py-2">
                    Productos <i class="fa-solid fa-angle-down text-[10px] opacity-70 group-hover:rotate-180 transition-transform duration-300"></i>
                </a>
                
                <!-- Panel del Mega Menú con Efecto de Tarjeta Premium -->
                <div class="absolute left-1/2 -translate-x-1/2 top-full mt-2 bg-white shadow-soft rounded-2xl p-6 w-[660px] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform scale-95 group-hover:scale-100 border border-neutral-50 grid grid-cols-3 gap-6 z-50">
                    
                    <!-- CATEGORÍA 1: CRÉDITOS -->
                    <div class="flex flex-col">
                        <h4 class="text-[11px] font-black uppercase tracking-widest text-[#a31a16] mb-3 pb-1 border-b border-neutral-50">Créditos</h4>
                        <ul class="space-y-0.5 flex-1">
                            <li><a href="microcredito.php?id=1" class="block px-2 py-1.5 rounded-lg hover:bg-[#a31a16]/5 hover:text-[#a31a16] text-xs font-semibold transition-all">Microcrédito</a></li>
                            <li><a href="consumo.php?id=1" class="block px-2 py-1.5 rounded-lg hover:bg-[#a31a16]/5 hover:text-[#a31a16] text-xs font-semibold transition-all">Consumo</a></li>
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
                                <li><a href="<?php echo $mapaCredito[$menudetprod['id_prod']] ?>?id=<?php echo $menudetprod['id_prod'] ?>" class="block px-2 py-1.5 rounded-lg hover:bg-[#a31a16]/5 hover:text-[#a31a16] text-xs font-semibold transition-all"><?php echo arreglar_mojibake(utf8_encode($menudetprod['nombre_prod'])) ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <!-- CATEGORÍA 2: INVERSIONES -->
                    <div class="flex flex-col">
                        <h4 class="text-[11px] font-black tracking-widest text-[#a31a16] uppercase mb-3 pb-1 border-b border-neutral-50">Inversiones</h4>
                        <ul class="space-y-0.5 flex-1">
                            <?php
                            $detprod = $fnindex->fnindex_rproducto_xtipo(2);
                            while ($menudetprod = $detprod->fetch_assoc()) {
                                ?>
                                <li><a href="detprod-inversion-vencimiento.php?id=<?php echo $menudetprod['id_prod'] ?>" class="block px-2 py-1.5 rounded-lg hover:bg-[#a31a16]/5 hover:text-[#a31a16] text-xs font-semibold transition-all"><?php echo arreglar_mojibake(utf8_encode($menudetprod['nombre_prod'])) ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>

                    <!-- CATEGORÍA 3: AHORROS -->
                    <div class="flex flex-col">
                        <h4 class="text-[11px] font-black tracking-widest text-[#a31a16] uppercase mb-3 pb-1 border-b border-neutral-50">Ahorros</h4>
                        <ul class="space-y-0.5 flex-1">
                            <?php
                            $detprod = $fnindex->fnindex_rproducto_xtipo(3);
                            while ($menudetprod = $detprod->fetch_assoc()) {
                                ?>
                                <li><a href="detprod-ahorro.php?id=<?php echo $menudetprod['id_prod'] ?>" class="block px-2 py-1.5 rounded-lg hover:bg-[#a31a16]/5 hover:text-[#a31a16] text-xs font-semibold transition-all"><?php echo arreglar_mojibake(utf8_encode($menudetprod['nombre_prod'])) ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </li>

            <li>
                <a href="servicios.php" class="hover:text-[#a31a16] transition-colors relative py-2 group">
                    Servicios
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#a31a16] transition-all duration-300 group-hover:w-full"></span>
                </a>
            </li>

            <!-- DROPDOWN: CONÓZCANOS -->
            <li class="relative group">
                <a href="nuestra-coop.php" class="hover:text-[#a31a16] transition-colors flex items-center gap-1.5 py-2">
                    Conózcanos <i class="fa-solid fa-angle-down text-[10px] opacity-70 group-hover:rotate-180 transition-transform duration-300"></i>
                </a>
                <ul class="absolute left-0 top-full mt-2 bg-white shadow-soft rounded-2xl p-2 min-w-[230px] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform scale-95 group-hover:scale-100 border border-neutral-50 z-50 flex flex-col gap-0.5">
                    <li><a href="nuestra-coop.php" class="block px-3 py-2 rounded-xl hover:bg-[#a31a16]/5 hover:text-[#a31a16] text-xs font-semibold transition-all">Misión y visión</a></li>
                    <li><a href="elecciones-2026.php" class="block px-3 py-2 rounded-xl hover:bg-[#a31a16]/5 hover:text-[#a31a16] text-xs font-semibold transition-all">Elecciones 2026</a></li>
                    <li><a href="transparencia.php" class="block px-3 py-2 rounded-xl hover:bg-[#a31a16]/5 hover:text-[#a31a16] text-xs font-semibold transition-all">Transparencia de la información</a></li>
                </ul>
            </li>

            <li>
                <a href="educacion-financiera.php" class="hover:text-[#a31a16] transition-colors relative py-2 group">
                    Educación Financiera
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#a31a16] transition-all duration-300 group-hover:w-full"></span>
                </a>
            </li>
        </ul>

        <!-- BOTÓN ACCIÓN DE BANCA VIRTUAL PREMIUM -->
        <div class="flex items-center gap-3 shrink-0">
            <a href="login.php" class="hidden md:inline-flex bg-gradient-to-r from-[#a31a16] to-[#7a1310] hover:from-[#7a1310] hover:to-[#4a0b09] text-white font-extrabold px-6 py-3 rounded-xl hover:-translate-y-0.5 transition-all shadow-md hover:shadow-[#a31a16]/10 text-xs tracking-wider uppercase">
                <i class="fa-solid fa-sack-dollar mr-2 text-sm opacity-90"></i> 15 de Agosto Virtual
            </a>
            <!-- Botón Hamburguesa Móvil -->
            <button class="lg:hidden text-[#a31a16] hover:text-[#7a1310] text-2xl p-1.5 rounded-xl hover:bg-neutral-50 transition-colors" id="v2-burger" aria-label="Abrir menú">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>
        </div>
    </div>
</nav>

<div id="v2-overlay" class="fixed inset-0 bg-black/60 z-40 hidden backdrop-blur-sm transition-opacity duration-300"></div>
<div id="v2-offcanvas" class="fixed top-0 right-0 h-full w-[85%] max-w-sm bg-white z-50 shadow-2xl p-6 overflow-y-auto translate-x-full transition-transform duration-300 ease-out flex flex-col justify-between">
    <div>
        <div class="flex justify-between items-center mb-8 pb-4 border-b border-neutral-100">
            <img src="assets/img/logo/logo2.png" alt="" class="h-9 object-contain">
            <button id="v2-cerrar" class="w-8 h-8 rounded-full bg-neutral-50 text-neutral-500 hover:text-[#a31a16] hover:bg-[#a31a16]/5 flex items-center justify-center transition-all" aria-label="Cerrar menú">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>
        </div>
        
        <ul class="space-y-1 text-sm font-bold text-neutral-700">
            <li><a href="index.php" class="block py-3 px-2 rounded-xl hover:bg-[#a31a16]/5 hover:text-[#a31a16] transition-all">Inicio</a></li>
            <li class="border-b border-neutral-50">
                <details class="group/mobile">
                    <summary class="cursor-pointer list-none flex items-center justify-between py-3 px-2 rounded-xl hover:bg-[#a31a16]/5 hover:text-[#a31a16] transition-all">
                        Productos <i class="fa-solid fa-chevron-down text-xs text-[#a31a16] group-open/mobile:rotate-180 transition-transform"></i>
                    </summary>
                    <ul class="pb-2 pl-4 pt-1 space-y-0.5 text-xs text-neutral-500 font-semibold border-l border-neutral-100 ml-3">
                        <li><a href="microcredito.php?id=1" class="block py-2 px-2 rounded-lg hover:text-[#a31a16] transition-colors">Microcrédito</a></li>
                        <li><a href="consumo.php?id=1" class="block py-2 px-2 rounded-lg hover:text-[#a31a16] transition-colors">Consumo</a></li>
                        <?php
                        $detprodm = $fnindex->fnindex_rproducto_xtipo(2);
                        while ($menudetprodm = $detprodm->fetch_assoc()) {
                            ?>
                            <li><a href="detprod-inversion-vencimiento.php?id=<?php echo $menudetprodm['id_prod'] ?>" class="block py-2 px-2 rounded-lg hover:text-[#a31a16] transition-colors">Inversión: <?php echo arreglar_mojibake(utf8_encode($menudetprodm['nombre_prod'])) ?></a></li>
                            <?php
                        }
                        $detprodm = $fnindex->fnindex_rproducto_xtipo(3);
                        while ($menudetprodm = $detprodm->fetch_assoc()) {
                            ?>
                            <li><a href="detprod-ahorro.php?id=<?php echo $menudetprodm['id_prod'] ?>" class="block py-2 px-2 rounded-lg hover:text-[#a31a16] transition-colors">Ahorro: <?php echo arreglar_mojibake(utf8_encode($menudetprodm['nombre_prod'])) ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </details>
            </li>
            <li><a href="servicios.php" class="block py-3 px-2 rounded-xl hover:bg-[#a31a16]/5 hover:text-[#a31a16] transition-all">Servicios</a></li>
            <li><a href="nuestra-coop.php" class="block py-3 px-2 rounded-xl hover:bg-[#a31a16]/5 hover:text-[#a31a16] transition-all">Conózcanos</a></li>
            <li><a href="educacion-financiera.php" class="block py-3 px-2 rounded-xl hover:bg-[#a31a16]/5 hover:text-[#a31a16] transition-all">Educación Financiera</a></li>
            <li><a href="sucursales.php" class="block py-3 px-2 rounded-xl hover:bg-[#a31a16]/5 hover:text-[#a31a16] transition-all">Canales de Atención</a></li>
        </ul>
    </div>

    <div class="mt-8 pt-4 border-t border-neutral-100">
        <a href="login.php" class="block text-center bg-gradient-to-r from-[#a31a16] to-[#7a1310] text-white font-extrabold py-3.5 rounded-xl shadow-md text-xs tracking-wider uppercase mb-6">
            <i class="fa-solid fa-laptop-code mr-1"></i> 15 de Agosto Virtual
        </a>
        <div class="flex justify-center gap-5 text-lg text-neutral-400">
            <?php
            $redes2 = $fnindex->fnindex_rredes();
            while ($menuredes2 = $redes2->fetch_assoc()) {
                ?>
                <a href="<?php echo $menuredes2['url_redes'] ?>" target="_blank" class="hover:text-[#a31a16] transition-colors">
                    <i class="fa-brands <?php echo utf8_encode($menuredes2['icono']) ?>"></i>
                </a>
                <?php
            }
            ?>
        </div>
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
