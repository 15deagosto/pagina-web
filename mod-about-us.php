<?php
$textnosotros = $fnindex->fnindex_rtextosxtipo(5);

// Corrige texto guardado con doble codificación UTF-8 (bug histórico de la BD,
// no del código nuevo) sin tocar los datos originales.
function arreglar_mojibake($texto) {
    $mapa = array(
        'ÃÂ¡' => 'á', 'ÃÂ©' => 'é', 'ÃÂ­' => 'í', 'ÃÂ³' => 'ó', 'ÃÂº' => 'ú', 'ÃÂ±' => 'ñ',
        'Ã¡' => 'á', 'Ã©' => 'é', 'Ã­' => 'í', 'Ã³' => 'ó', 'Ãº' => 'ú', 'Ã±' => 'ñ',
        'Â ' => ' ', 'Â' => '',
    );
    return preg_replace('/\s{2,}/', ' ', strtr($texto, $mapa));
}
?>
<div class="max-w-7xl mx-auto px-6">
    <div class="text-rojo font-bold uppercase text-xs tracking-widest mb-2 flex items-center gap-2" data-aos="fade-up">
        <span class="w-6 h-0.5 bg-rojo inline-block"></span> Quiénes somos
    </div>
    <h2 class="text-3xl md:text-4xl font-extrabold mb-12" data-aos="fade-up">Nosotros</h2>

    <div class="grid md:grid-cols-5 gap-12 items-start">
        <div class="md:col-span-2" data-aos="fade-right">
            <div class="v2-media-frame v2-media-frame--tall shadow-soft">
                <img src="assets/img/img-servicios-05.jpg" alt="Agencia Cooperativa 15 de Agosto">
            </div>
        </div>

        <div class="md:col-span-3 space-y-8">
            <div class="flex gap-5 border-b border-rojo/20 pb-8" data-aos="fade-left">
                <div class="w-14 h-14 rounded-2xl bg-rojo flex items-center justify-center flex-shrink-0">
                    <img src="assets/img/icons/about2.svg" class="w-6 h-6 brightness-0 invert" alt="">
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Misión</h3>
                    <p class="text-neutral-500 leading-relaxed"><?php echo arreglar_mojibake($textnosotros[0]['car1_texto']); ?></p>
                </div>
            </div>
            <div class="flex gap-5" data-aos="fade-left" data-aos-delay="100">
                <div class="w-14 h-14 rounded-2xl bg-rojo flex items-center justify-center flex-shrink-0">
                    <img src="assets/img/icons/about1.svg" class="w-6 h-6 brightness-0 invert" alt="">
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Visión</h3>
                    <p class="text-neutral-500 leading-relaxed"><?php echo arreglar_mojibake($textnosotros[0]['car2_texto']); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
