<!-- ===== NOTICIAS REPARADAS CON RUTAS DE IMAGEN REAL v3.6 ===== -->
<div class="max-w-7xl mx-auto px-6">
    <div class="text-rojo font-bold uppercase text-xs tracking-widest mb-2 flex items-center gap-2" data-aos="fade-up">
        <span class="w-6 h-0.5 bg-rojo inline-block"></span> Mantente al día
    </div>
    <h2 class="text-3xl md:text-4xl font-extrabold mb-12" data-aos="fade-up">Últimas noticias</h2>

    <!-- Grid de dos columnas original mantenido con simetría total -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <?php
        $noticias = $fnindex->fnindex_rnoticias_xall();
        $i = 0;
        while ($menunoticias = $noticias->fetch_assoc()) {
            $i++;
            // PASO DE SEGURIDAD: Usamos la función de utilidades para limpiar cualquier mojibake de tildes o eñes
            $titulo_limpio = arreglar_mojibake($menunoticias['titulo_noticia']);
            $resumen_limpio = arreglar_mojibake($menunoticias['resumen_noticia']);
            $fecha_noticia = !empty($menunoticias['fechainicio_noticia']) ? $menunoticias['fechainicio_noticia'] : $menunoticias['fecha_noticia'];
            ?>
            <!-- ENLACE REAL A TU DETALLE DE NOTICIA -->
            <a href="detalle-noticia.php?id=<?php echo $menunoticias['id_noticia'] ?>" class="group bg-white border border-neutral-100 rounded-3xl overflow-hidden shadow-soft hover:shadow-softhover hover:-translate-y-1 transition-all duration-300 flex flex-col h-[480px]" data-aos="fade-up" data-aos-delay="<?php echo min($i, 4) * 80 ?>">
                
                <!-- CONTENEDOR DE IMAGEN CORREGIDO: Apunta directo a assets/img/ igual a tu código de fábrica -->
                <div class="aspect-video overflow-hidden bg-neutral-50 flex items-center justify-center">
                    <img src="assets/img/<?php echo $menunoticias['img_noticia'] ?>" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                
                <!-- Bloque de Textos e Información General -->
                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div>
                        <!-- Fecha oficial con icono -->
                        <span class="text-xs text-neutral-400 font-semibold mb-2 block">
                            <i class="fa-regular fa-calendar-days mr-1"></i> <?php echo $fecha_noticia; ?>
                        </span>
                        
                        <!-- TÍTULO LIMPIO: Sin el utf8_encode() roto y con line-clamp-2 para evitar descuadres de tamaño -->
                        <h3 class="text-lg font-black text-neutral-800 mb-2 group-hover:text-rojo transition-colors line-clamp-2 leading-snug">
                            <?php echo $titulo_limpio; ?>
                        </h3>
                        
                        <!-- RESUMEN LIMPIO: Truncado de forma elegante con puntos suspensivos automáticos por CSS -->
                        <p class="text-neutral-500 text-sm leading-relaxed line-clamp-3">
                            <?php echo $resumen_limpio; ?>
                        </p>
                    </div>
                    
                    <!-- Botón de Acción Inferior Fijo en la Base de la Tarjeta -->
                    <span class="text-rojo font-bold text-sm mt-4 inline-flex items-center gap-2 group-hover:translate-x-1 transition-transform">
                        Leer más <i class="fa-solid fa-arrow-right text-xs"></i>
                    </span>
                </div>
            </a>
        <?php } ?>
    </div>
</div>

