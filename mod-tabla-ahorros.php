<?php
require_once './funciones/fn-utilidades.php';
$listahorros = $fnindex->fnindex_rproducto_xtipo(3);
$productosAhorro = [];
if ($listahorros) {
    while ($p = $listahorros->fetch_assoc()) {
        $productosAhorro[] = $p;
    }
}
?>
<div class="max-w-7xl mx-auto px-6">
    <div class="text-center max-w-2xl mx-auto mb-14" data-aos="fade-up">
        <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-2 flex items-center justify-center gap-2">
            <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Cuentas de ahorro
        </div>
        <h2 class="text-3xl md:text-4xl font-black text-neutral-800 tracking-tight mb-3">Compara nuestras cuentas de ahorro</h2>
        <p class="text-neutral-500 text-sm leading-relaxed">Montos y tasas reales de cada producto, para que elijas la que mejor se ajusta a ti.</p>
    </div>
    <?php if (empty($productosAhorro)) { ?>
        <p class="text-neutral-500 text-center py-8">No hay cuentas de ahorro disponibles por el momento.</p>
    <?php } else { ?>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($productosAhorro as $p) {
            $nombre = arreglar_mojibake($p['nombre_prod']);
            $montos = arreglar_mojibake($p['texto1_prod'] ?? '');
            $tasa = arreglar_mojibake($p['texto2_prod'] ?? '');
        ?>
        <div class="bg-white rounded-3xl p-6 border border-neutral-100 shadow-soft hover:border-[#a31a16]/20 hover:-translate-y-1 transition-all duration-300" data-aos="fade-up">
            <div class="w-11 h-11 rounded-xl bg-[#a31a16]/5 flex items-center justify-center text-[#a31a16] mb-4"><i class="fa-solid fa-piggy-bank"></i></div>
            <h3 class="font-black text-neutral-800 text-base mb-2"><?php echo $nombre ?></h3>
            <?php if (!empty($montos)) { ?><p class="text-neutral-500 text-xs leading-relaxed font-medium mb-2"><i class="fa-solid fa-sack-dollar text-[#a31a16] mr-1"></i> <?php echo $montos ?></p><?php } ?>
            <?php if (!empty($tasa)) { ?><p class="text-neutral-500 text-xs leading-relaxed font-medium mb-4"><i class="fa-solid fa-percent text-[#a31a16] mr-1"></i> <?php echo $tasa ?></p><?php } ?>
            <a href="detprod-ahorro.php?id=<?php echo $p['id_prod'] ?>" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#a31a16] hover:underline">Ver detalle <i class="fa-solid fa-arrow-right text-[10px]"></i></a>
        </div>
        <?php } ?>
    </div>
    <p class="text-center text-[11px] text-neutral-400 font-semibold mt-8"><i class="fa-solid fa-circle-exclamation"></i> Información referencial sujeta a confirmación con Captaciones. Para abrir tu cuenta, acércate a cualquier agencia.</p>
    <?php } ?>
</div>
