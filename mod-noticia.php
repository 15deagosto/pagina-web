<div class="max-w-7xl mx-auto px-6">
    <div class="text-rojo font-bold uppercase text-xs tracking-widest mb-2 flex items-center gap-2" data-aos="fade-up">
        <span class="w-6 h-0.5 bg-rojo inline-block"></span> Mantente al día
    </div>
    <h2 class="text-3xl md:text-4xl font-extrabold mb-12" data-aos="fade-up">Últimas noticias</h2>

    <div class="grid md:grid-cols-2 gap-8">
        <?php
        $noticias = $fnindex->fnindex_rnoticias_xall();
        $i = 0;
        while ($menunoticias = $noticias->fetch_assoc()) {
            $i++;
            ?>
            <a href="detalle-noticia.php?id=<?php echo utf8_encode($menunoticias['id_noticia']) ?>" class="group bg-white border border-neutral-100 rounded-3xl overflow-hidden shadow-soft hover:shadow-softhover hover:-translate-y-1 transition-all duration-300 flex flex-col" data-aos="fade-up" data-aos-delay="<?php echo min($i, 4) * 80 ?>">
                <div class="aspect-video overflow-hidden">
                    <img src="assets/img/<?php echo utf8_encode($menunoticias['img_noticia']) ?>" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <span class="text-xs text-neutral-400 font-semibold mb-2"><i class="fa-regular fa-calendar"></i> <?php echo utf8_encode($menunoticias['fechainicio_noticia']) ?></span>
                    <h3 class="text-lg font-bold mb-2 group-hover:text-rojo transition-colors"><?php echo utf8_encode($menunoticias['titulo_noticia']) ?></h3>
                    <p class="text-neutral-500 text-sm flex-1"><?php echo utf8_encode($menunoticias['resumen_noticia']) ?></p>
                    <span class="text-rojo font-bold text-sm mt-4 inline-flex items-center gap-2">Leer más <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </a>
        <?php } ?>
    </div>
</div>
