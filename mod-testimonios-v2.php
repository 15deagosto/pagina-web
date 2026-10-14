<?php
$listtestimonios = $fnindex->fnindex_rtestimonios();
$testimonios = [];
if ($listtestimonios) {
    while ($t = $listtestimonios->fetch_assoc()) {
        $testimonios[] = $t;
    }
}
?>
<?php if (!empty($testimonios)) { ?>
<div class="max-w-7xl mx-auto px-6">

    <div class="text-center mb-14" data-aos="fade-up">
        <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-2 flex items-center justify-center gap-2">
            <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Historias reales <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span>
        </div>
        <h2 class="text-3xl md:text-4xl font-black text-neutral-800 tracking-tight mb-3">Lo que dicen nuestros socios</h2>
        <p class="text-neutral-500 text-sm max-w-xl mx-auto leading-relaxed font-medium">Emprendedores y familias que han crecido junto a la Cooperativa 15 de Agosto.</p>
    </div>

    <div class="relative" data-aos="fade-up" data-aos-delay="100">

        <!-- Flechas de navegación -->
        <button id="testi-prev" aria-label="Anterior"
            class="hidden md:flex absolute -left-5 top-1/2 -translate-y-1/2 z-10 w-11 h-11 rounded-full bg-white border border-neutral-100 shadow-soft items-center justify-center text-[#a31a16] hover:bg-[#a31a16] hover:text-white transition-all duration-300">
            <i class="fa-solid fa-chevron-left text-sm"></i>
        </button>
        <button id="testi-next" aria-label="Siguiente"
            class="hidden md:flex absolute -right-5 top-1/2 -translate-y-1/2 z-10 w-11 h-11 rounded-full bg-white border border-neutral-100 shadow-soft items-center justify-center text-[#a31a16] hover:bg-[#a31a16] hover:text-white transition-all duration-300">
            <i class="fa-solid fa-chevron-right text-sm"></i>
        </button>

        <!-- Viewport del carrusel -->
        <div class="overflow-hidden rounded-[32px]">
            <div id="testi-track" class="flex transition-transform duration-500 ease-out">
                <?php foreach ($testimonios as $t) {
                    $nombre = trim(arreglar_mojibake($t['nom_testimonio'] ?? ''));
                    $apellido = trim(arreglar_mojibake($t['apellido_testimonio'] ?? ''));
                    $lugar = trim(arreglar_mojibake($t['lugar_testimonio'] ?? ''));
                    $resumen = trim(arreglar_mojibake($t['resumen_testimonio'] ?? ''));
                    $inicial = mb_strtoupper(mb_substr($nombre !== '' ? $nombre : 'S', 0, 1));
                    ?>
                    <div class="testi-slide shrink-0 w-full sm:w-1/2 lg:w-1/3 px-3">
                        <div class="h-full bg-white border border-neutral-100 rounded-3xl shadow-soft hover:shadow-softhover hover:-translate-y-1 transition-all duration-300 p-7 flex flex-col">
                            <i class="fa-solid fa-quote-left text-2xl text-[#a31a16]/15 mb-4"></i>
                            <p class="text-neutral-600 text-sm leading-relaxed font-medium flex-1 line-clamp-6"><?php echo htmlspecialchars($resumen) ?></p>
                            <div class="flex items-center gap-3 mt-6 pt-5 border-t border-neutral-50">
                                <div class="w-11 h-11 rounded-full bg-gradient-to-br from-[#a31a16] to-[#7a1310] text-white flex items-center justify-center font-black text-sm shrink-0 shadow-md">
                                    <?php echo htmlspecialchars($inicial) ?>
                                </div>
                                <div class="min-w-0">
                                    <p class="text-sm font-black text-neutral-800 truncate"><?php echo htmlspecialchars(trim($nombre . ' ' . $apellido)) ?></p>
                                    <p class="text-[11px] text-neutral-400 font-bold uppercase tracking-wider truncate"><i class="fa-solid fa-location-dot text-[#a31a16] text-[10px] mr-1"></i><?php echo htmlspecialchars($lugar) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- Puntos indicadores -->
        <div id="testi-dots" class="flex justify-center gap-2 mt-8"></div>
    </div>
</div>

<script>
    (function () {
        var track = document.getElementById('testi-track');
        var slides = track ? Array.from(track.children) : [];
        var dotsWrap = document.getElementById('testi-dots');
        var btnPrev = document.getElementById('testi-prev');
        var btnNext = document.getElementById('testi-next');
        if (!track || slides.length === 0) return;

        function porPagina() {
            if (window.innerWidth >= 1024) return 3;
            if (window.innerWidth >= 640) return 2;
            return 1;
        }

        var actual = 0;
        var timer = null;

        function totalPaginas() {
            return Math.max(1, Math.ceil(slides.length / porPagina()));
        }

        function pintarDots() {
            dotsWrap.innerHTML = '';
            var total = totalPaginas();
            for (var i = 0; i < total; i++) {
                var d = document.createElement('span');
                d.className = 'w-2 h-2 rounded-full cursor-pointer transition-all duration-300 ' + (i === actual ? 'w-6 bg-[#a31a16]' : 'bg-neutral-200');
                (function (idx) {
                    d.addEventListener('click', function () { ir(idx); });
                })(i);
                dotsWrap.appendChild(d);
            }
        }

        function ir(i) {
            var total = totalPaginas();
            actual = (i + total) % total;
            var ancho = slides[0].getBoundingClientRect().width;
            track.style.transform = 'translateX(-' + (actual * porPagina() * ancho) + 'px)';
            pintarDots();
        }

        function siguiente() { ir(actual + 1); }
        function anterior() { ir(actual - 1); }

        function autoplay() {
            if (timer) clearInterval(timer);
            timer = setInterval(siguiente, 6000);
        }

        if (btnNext) btnNext.addEventListener('click', function () { siguiente(); autoplay(); });
        if (btnPrev) btnPrev.addEventListener('click', function () { anterior(); autoplay(); });

        window.addEventListener('resize', function () { ir(0); });

        ir(0);
        autoplay();
    })();
</script>
<?php } ?>
