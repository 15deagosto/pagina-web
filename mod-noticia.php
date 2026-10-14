<!-- ===== NOTICIAS REPARADAS CON RUTAS DE IMAGEN REAL v3.6 + SKELETON LOADERS ===== -->
<div class="max-w-7xl mx-auto px-6">
    <div class="text-rojo font-bold uppercase text-xs tracking-widest mb-2 flex items-center gap-2" data-aos="fade-up">
        <span class="w-6 h-0.5 bg-rojo inline-block"></span> Mantente al día
    </div>
    <h2 class="text-3xl md:text-4xl font-extrabold mb-12" data-aos="fade-up">Últimas noticias</h2>

    <!-- 🦴 1. CONTENEDOR DE SKELETON LOADERS (Se muestra instantáneamente mientras simula la carga de datos) -->
    <div id="noticias-skeleton" class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <?php for ($s = 0; $s < 2; $s++) { ?>
        <div class="bg-white border border-neutral-100 rounded-3xl overflow-hidden shadow-soft flex flex-col h-[480px] animate-pulse">
            <!-- Esqueleto de la Imagen (Mismo aspect-video de tu diseño original) -->
            <div class="aspect-video bg-neutral-200 dark:bg-slate-700 w-full"></div>
            <!-- Esqueleto de los Textos -->
            <div class="p-6 flex-1 flex flex-col justify-between">
                <div>
                    <!-- Esqueleto de la Fecha -->
                    <div class="h-3 bg-neutral-200 dark:bg-slate-700 w-1/4 rounded mb-4"></div>
                    <!-- Esqueleto del Título (2 líneas simétricas simuladas) -->
                    <div class="h-6 bg-neutral-200 dark:bg-slate-700 w-3/4 rounded mb-3"></div>
                    <div class="h-6 bg-neutral-200 dark:bg-slate-700 w-1/2 rounded mb-6"></div>
                    <!-- Esqueleto del Resumen (3 líneas de descripción) -->
                    <div class="h-4 bg-neutral-200 dark:bg-slate-700 w-full rounded mb-2"></div>
                    <div class="h-4 bg-neutral-200 dark:bg-slate-700 w-full rounded mb-2"></div>
                    <div class="h-4 bg-neutral-200 dark:bg-slate-700 w-2/3 rounded"></div>
                </div>
                <!-- Esqueleto del Botón Leer más -->
                <div class="h-4 bg-neutral-200 dark:bg-slate-700 w-24 rounded mt-4"></div>
            </div>
        </div>
        <?php } ?>
    </div>

    <!-- 📦 2. CONTENEDOR DE CONTENIDO REAL (Oculto al inicio mediante la clase hidden de Tailwind) -->
    <div id="noticias-contenido-real" class="hidden">
        <!-- Grid de dos columnas original mantenido con simetría total -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <?php
            $noticias = $fnindex->fnindex_rnoticias_xall();
            $i = 0;
            while ($menunoticias = $noticias->fetch_assoc()) {
                $i++;
                $titulo_limpio = arreglar_mojibake($menunoticias['titulo_noticia']);
                $resumen_limpio = arreglar_mojibake($menunoticias['resumen_noticia']);
                $fecha_noticia = !empty($menunoticias['fechainicio_noticia']) ? $menunoticias['fechainicio_noticia'] : $menunoticias['fecha_noticia'];
                ?>
                <!-- ENLACE REAL A TU DETALLE DE NOTICIA -->
                <a href="detalle-noticia.php?id=<?php echo $menunoticias['id_noticia'] ?>" class="group bg-white border border-neutral-100 rounded-3xl overflow-hidden shadow-soft hover:shadow-softhover hover:-translate-y-1 transition-all duration-300 flex flex-col h-[480px]" data-aos="fade-up" data-aos-delay="<?php echo min($i, 4) * 80 ?>">
                    
                    <!-- CONTENEDOR DE IMAGEN CORREGIDO -->
                    <div class="aspect-video overflow-hidden bg-neutral-50 flex items-center justify-center">
                        <img src="assets/img/<?php echo htmlspecialchars($menunoticias['img_noticia']) ?>" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    
                    <!-- Bloque de Textos e Información General -->
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-xs text-neutral-400 font-semibold mb-2 block">
                                <i class="fa-regular fa-calendar-days mr-1"></i> <?php echo $fecha_noticia; ?>
                            </span>
                            
                            <h3 class="text-lg font-black text-neutral-800 mb-2 group-hover:text-rojo transition-colors line-clamp-2 leading-snug">
                                <?php echo $titulo_limpio; ?>
                            </h3>
                            
                            <p class="text-neutral-500 text-sm leading-relaxed line-clamp-3">
                                <?php echo $resumen_limpio; ?>
                            </p>
                        </div>
                        
                        <span class="text-rojo font-bold text-sm mt-4 inline-flex items-center gap-2 group-hover:translate-x-1 transition-transform">
                            Leer más <i class="fa-solid fa-arrow-right text-xs"></i>
                        </span>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</div>

<!-- 🧠 3. INTERCAMBIADOR DE ESQUELETOS A CONTENIDO REAL -->
<script>
(() => {
    // Esperamos a que los recursos de la página carguen por completo
    window.addEventListener('load', () => {
        const skeleton = document.getElementById('noticias-skeleton');
        const contenido = document.getElementById('noticias-contenido-real');

        // Un retraso estético idóneo de 600ms para estabilizar la experiencia visual
        setTimeout(() => {
            if (skeleton && contenido) {
                skeleton.style.display = 'none'; // Apaga las cajas grises palpitantes
                contenido.classList.remove('hidden'); // Muestra las noticias reales con el AOS intacto
            }
        }, 600);
    });
})();
</script>
