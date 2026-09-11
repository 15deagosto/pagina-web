<?php
require_once './funciones/fn-utilidades.php';
$listproducto = $fnindex->fnindex_rproducto_xtipo(5);
// El motor de cálculo (fn-calcula-credito.php) trabaja con códigos de texto
// por tipo de crédito, no con el id numérico del producto -- este mapa
// conecta cada producto activo con el código que sí reconoce.
$mapaTipoCredito = [
    116 => 'SOCIOFIEL',
    118 => 'MICROEMPRENDEDOR',
    119 => 'MICROVIP',
    114 => 'CREDIPUNTOS',
    113 => 'MUJEREMPRENDEDORA',
    120 => 'FACILITO',
];
?>
<div class="max-w-7xl mx-auto px-6">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        <div data-aos="fade-right">
            <div class="v2-media-frame v2-media-frame--tall shadow-soft">
                <img src="assets/img/img-simuladores.jpg" alt="Simulador de crédito">
            </div>
        </div>

        <div data-aos="fade-left">
            <div class="text-rojo font-bold uppercase text-xs tracking-widest mb-2 flex items-center gap-2">
                <span class="w-6 h-0.5 bg-rojo inline-block"></span> Calcula antes de decidir
            </div>
            <h2 class="text-3xl font-extrabold mb-8">Simulador de crédito</h2>

            <form method="POST" id="formularioCredito" class="space-y-5">
                <input type="hidden" name="tasa_calcula" value="">
                <div>
                    <label class="block font-semibold mb-2">Seleccione un producto</label>
                    <select name="tipocred_calcula" class="w-full border border-neutral-200 rounded-xl px-4 py-3 focus:outline-none focus:border-rojo transition-colors">
                        <?php
                        while ($menulistprod = $listproducto->fetch_assoc()) {
                            if (!isset($mapaTipoCredito[$menulistprod['id_prod']])) {
                                continue;
                            }
                            ?>
                            <option value="<?php echo $mapaTipoCredito[$menulistprod['id_prod']] ?>"> <?php echo arreglar_mojibake(utf8_encode($menulistprod['nombre_prod'])) ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div>
                    <label class="block font-semibold mb-2">Monto total*</label>
                    <input name="monto_calcula" type="text" placeholder="" class="w-full border border-neutral-200 rounded-xl px-4 py-3 focus:outline-none focus:border-rojo transition-colors">
                </div>

                <div>
                    <label class="block font-semibold mb-2">Tiempo*</label>
                    <input name="plazo_calcula" type="text" placeholder="" class="w-full border border-neutral-200 rounded-xl px-4 py-3 focus:outline-none focus:border-rojo transition-colors">
                </div>

                <div>
                    <label class="block font-semibold mb-2">Tipo amortización*</label>
                    <select name="tipoamortiza" class="w-full border border-neutral-200 rounded-xl px-4 py-3 focus:outline-none focus:border-rojo transition-colors">
                        <option value="1">Cuotas Fijas</option>
                        <option value="2">Cuotas Variables</option>
                    </select>
                </div>

                <button onclick="calcularcredito()" type="button" class="w-full bg-rojo text-white font-bold py-3.5 rounded-full hover:bg-rojo-dark hover:-translate-y-0.5 transition-all shadow-soft">CALCULAR AHORA</button>
            </form>
            <div id="resultado" class="mt-6"></div>
        </div>
    </div>
</div>
