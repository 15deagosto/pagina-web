<?php
require_once './funciones/fn-utilidades.php';
$listproducto = $fnindex->fnindex_rproducto_xtipo(5);

// Mapeo exacto de productos de la cooperativa
$mapaTipoCredito = [
    116 => 'SOCIOFIEL',
    118 => 'MICROEMPRENDEDOR',
    119 => 'MICROVIP',
    114 => 'CREDIPUNTOS',
    113 => 'MUJEREMPRENDEDORA',
    120 => 'FACILITO',
];
?>

<!-- ===== MOD-SIMULADOR: Validación Inteligente en el Formulario v5.0 ===== -->
<div class="max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <!-- FORMULARIO INSTITUCIONAL (Lado Izquierdo) -->
        <div class="lg:col-span-7" data-aos="fade-right" data-aos-duration="900">
            <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-3 flex items-center gap-2">
                <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Calcula antes de decidir
            </div>
            
            <h2 class="text-3xl md:text-4xl font-black text-neutral-800 tracking-tight leading-tight mb-4">
                Planifica tus metas con nuestro <span class="text-[#a31a16]">simulador de crédito</span>
            </h2>
            
            <p class="text-neutral-600 leading-relaxed mb-8 text-sm md:text-base">
                Queremos que tomes las mejores decisiones para tu negocio o consumo. Selecciona el producto financiero que necesitas, ingresa el valor estimado y proyecta tus cuotas en tiempo real de forma clara.
            </p>

            <form method="POST" id="formularioCredito" class="bg-white rounded-3xl p-6 md:p-8 shadow-soft border border-neutral-100 grid grid-cols-1 sm:grid-cols-2 gap-6">
                <input type="hidden" name="tasa_calcula" value="">

                <!-- 1. SELECCIÓN DE PRODUCTO -->
                <div class="flex flex-col gap-2 sm:col-span-2">
                    <label class="font-extrabold text-neutral-700 text-sm flex items-center gap-2">
                        <i class="fa-solid fa-layer-group text-[#a31a16]"></i> Seleccione un producto financiero
                    </label>
                    <select name="tipocred_calcula" id="tipocred_calcula" class="w-full bg-neutral-50 border border-neutral-200 focus:border-[#a31a16]/40 focus:bg-white rounded-xl px-4 py-3.5 text-neutral-800 font-semibold outline-none transition-all cursor-pointer">
                        <?php
                        while ($menulistprod = $listproducto->fetch_assoc()) {
                            if (!isset($mapaTipoCredito[$menulistprod['id_prod']])) {
                                continue;
                            }
                            ?>
                            <option value="<?php echo $mapaTipoCredito[$menulistprod['id_prod']] ?>"> 
                                <?php echo arreglar_mojibake(utf8_encode($menulistprod['nombre_prod'])) ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <!-- 2. INGRESO DE MONTO CON MENSAJE DE ERROR INTEGRADO -->
                <div class="flex flex-col gap-2">
                    <label class="font-extrabold text-neutral-700 text-sm flex items-center gap-2">
                        <i class="fa-solid fa-money-bill-wave text-[#a31a16]"></i> Monto total solicitado*
                    </label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 font-bold text-neutral-400">$</span>
                        <input name="monto_calcula" id="monto_calcula" type="text" placeholder="Ej: 5000" required class="w-full bg-neutral-50 border border-neutral-200 focus:border-[#a31a16]/40 focus:bg-white rounded-xl pl-8 pr-4 py-3.5 text-neutral-800 font-semibold outline-none transition-all">
                    </div>
                    <!--ALERTA ROJA EN LETRAS PEQUEÑAS (Oculta por defecto) -->
                    <span id="error_monto" class="hidden text-xs font-bold text-red-600 mt-1 flex items-center gap-1">
                        <i class="fa-solid fa-circle-exclamation"></i> El monto mínimo de simulación permitido es $3,150.
                    </span>
                </div>

                <!-- 3. INGRESO DE TIEMPO (PLAZO) -->
                <div class="flex flex-col gap-2">
                    <label class="font-extrabold text-neutral-700 text-sm flex items-center gap-2">
                        <i class="fa-solid fa-calendar-days text-[#a31a16]"></i> Tiempo estimado (Plazo)*
                    </label>
                    <div class="relative">
                        <input name="plazo_calcula" type="text" placeholder="Ej: 24" required class="w-full bg-neutral-50 border border-neutral-200 focus:border-[#a31a16]/40 focus:bg-white rounded-xl px-4 py-3.5 text-neutral-800 font-semibold outline-none transition-all">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 font-bold text-xs text-neutral-400 uppercase">Meses</span>
                    </div>
                </div>

                <!-- 4. TIPO DE AMORTIZACIÓN -->
                <div class="flex flex-col gap-2 sm:col-span-2">
                    <label class="font-extrabold text-neutral-700 text-sm flex items-center gap-2">
                        <i class="fa-solid fa-chart-pie text-[#a31a16]"></i> Tipo de amortización*
                    </label>
                    <select name="tipoamortiza" class="w-full bg-neutral-50 border border-neutral-200 focus:border-[#a31a16]/40 focus:bg-white rounded-xl px-4 py-3.5 text-neutral-800 font-semibold outline-none transition-all cursor-pointer">
                        <option value="1">Cuotas Fijas (Sistema Francés)</option>
                        <option value="2">Cuotas Variables (Sistema Alemán)</option>
                    </select>
                </div>

                <!-- BOTÓN CALCULAR -->
                <div class="sm:col-span-2 mt-2">
                    <button id="btn_calcular_master" onclick="calcularcredito()" type="button" class="w-full bg-[#a31a16] hover:bg-[#7a1310] text-white font-extrabold py-4 rounded-xl shadow-lg hover:shadow-[#a31a16]/20 hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center gap-2 tracking-wide uppercase text-sm">
                        <i class="fa-solid fa-calculator"></i> CALCULAR AHORA
                    </button>
                </div>
            </form>
        </div>

        <!-- TARJETA DE RESULTADOS NITIDA (Lado Derecho) -->
        <div class="lg:col-span-5 relative" data-aos="fade-left" data-aos-duration="900" data-aos-delay="150">
            <div class="absolute -inset-4 bg-gradient-to-tr from-[#a31a16]/10 to-transparent rounded-[40px] blur-xl opacity-60 pointer-events-none"></div>
            
            <div class="relative rounded-[32px] overflow-hidden shadow-2xl bg-gradient-to-br from-[#7a1310] to-[#a31a16] p-6 md:p-8 text-white min-h-[440px] flex flex-col justify-between border border-white/10">
                <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px] pointer-events-none"></div>
                
                <div class="relative z-10">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <p class="text-[10px] uppercase tracking-widest text-white/60 font-black mb-1">COAC 15 de Agosto</p>
                            <h3 class="text-xl font-black tracking-tight">Proyección de Cuotas</h3>
                        </div>
                        <div class="w-10 h-10 rounded-xl bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center text-white">
                            <i class="fa-solid fa-vault"></i>
                        </div>
                    </div>

                    <!-- CONTENEDOR TOTALMENTE LIMPIO Y REPARADO (Ícono perfecto) -->
                    <div id="resultado" class="text-white bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-5 min-h-[260px] flex flex-col justify-center
                        [&_br]:hidden
                        [&_table]:w-full [&_table]:flex [&_table]:flex-col md:[&_table]:flex-row [&_table]:gap-4 [&_table]:items-start
                        [&_td]:w-full md:[&_td]:w-1/2 [&_td]:block [&_td]:p-0
                        [&_td:first-child]:text-left [&_td:first-child]:font-medium [&_td:first-child]:text-white/90 [&_td:first-child]:text-sm [&_td:first-child]:leading-relaxed
                        md:[&_td:last-child]:border-l md:[&_td:last-child]:border-white/10 md:[&_td:last-child]:pl-4
                        [&_span.text-rojo]:text-[#ffd9d6] [&_span]:inline-block [&_span]:font-black [&_span]:text-3xl [&_span]:my-2 [&_span]:text-white">
                        
                        <div class="text-center p-4">
                            <!-- Ícono reparado y centrado sin deformaciones -->
                            <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center mx-auto mb-3 text-white">
                                <i class="fa-solid fa-chart-line text-lg"></i>
                            </div>
                            <p class="text-xs text-white/70 font-medium leading-relaxed">Ingrese los datos requeridos a la izquierda y presione calcular para proyectar su amortización.</p>
                        </div>
                    </div>
                </div>

                <div class="relative z-10 pt-4 border-t border-white/10 flex justify-between items-center text-left">
                    <div>
                        <p class="text-[9px] text-white/50 uppercase tracking-widest leading-none mb-1">Amortización Estimada</p>
                        <p class="text-xs font-bold text-white/90">Valores sujetos a evaluación de riesgo</p>
                    </div>
                    <img src="assets/img/favicon-coop.png" class="h-8 opacity-30 filter brightness-0 invert" alt="COAC">
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Buscamos los componentes con los nombres exactos que usa el Core de la cooperativa
    const inputMonto = document.getElementsByName('monto_calcula')[0];
    const inputPlazo = document.getElementsByName('plazo_calcula')[0];
    const selectProducto = document.getElementsByName('tipocred_calcula')[0];
    const btnCalcular = document.getElementById('btn_calcular_master');
    
    // Creamos una etiqueta dinámica para el error del Plazo justo debajo de su casilla
    let labelErrorMonto = document.getElementById('error_monto');
    
    // Creamos e inyectamos el letrero de error para los meses en vivo si no existe
    let labelErrorPlazo = document.getElementById('error_plazo');
    if (!labelErrorPlazo && inputPlazo) {
        labelErrorPlazo = document.createElement('span');
        labelErrorPlazo = document.createElement('span');
        labelErrorPlazo.id = 'error_plazo';
        labelErrorPlazo.className = 'hidden text-xs font-bold text-red-600 mt-1 flex items-center gap-1';
        inputPlazo.parentNode.parentNode.appendChild(labelErrorPlazo);
    }

    if (inputMonto && inputPlazo && btnCalcular && selectProducto) {
        
        function evaluarFormulario() {
            // Limpiamos los textos para procesar números puros
            let montoTexto = inputMonto.value.trim();
            let plazoTexto = inputPlazo.value.trim();
            
            let montoNum = parseFloat(montoTexto.replace(/[,.]/g, ''));
            let plazoNum = parseInt(plazoTexto, 10);
            
            if (isNaN(montoNum)) montoNum = 0;
            if (isNaN(plazoNum)) plazoNum = 0;

            const productoActual = selectProducto.value;
            let errorMontoMsg = "";
            let errorPlazoMsg = "";

            // 1. VALIDACIÓN DE CAMPOS VACÍOS (Si el usuario borra todo)
            if (montoTexto === "") {
                errorMontoMsg = "Por favor, ingrese el monto solicitado.";
            }
            if (plazoTexto === "") {
                errorPlazoMsg = "Por favor, ingrese el plazo en meses.";
            }

                        // =========================================================
            // POLÍTICAS DINÁMICAS POR PRODUCTO 
            // =========================================================
            if (productoActual === "CREDIPUNTOS") {
                // Validación de Monto para Credi Puntos (Mínimo real institucional $500, Máximo $1,000)
                if (montoTexto !== "") {
                    if (montoNum < 500) {
                        errorMontoMsg = "El monto mínimo permitido para Credi Puntos es \$500.";
                    } else if (montoNum > 1000) {
                        errorMontoMsg = "El monto máximo permitido para Credi Puntos es \$1,000.";
                    }
                }
                // Validación de Plazo (Límite máximo 12 meses, mínimo 3 meses)
                if (plazoTexto !== "") {
                    if (plazoNum < 3) {
                        errorPlazoMsg = "El plazo mínimo para Credi Puntos es de 3 meses.";
                    } else if (plazoNum > 12) {
                        errorPlazoMsg = "El plazo máximo para Credi Puntos es de 12 meses.";
                    }
                }
            } else if (productoActual === "MUJEREMPRENDEDORA") {
                if (montoTexto !== "" && montoNum < 3150) {
                    errorMontoMsg = "El monto mínimo permitido para Mujer Emprendedora es \$3,150.";
                }
                if (plazoTexto !== "" && (plazoNum < 3 || plazoNum > 36)) {
                    errorPlazoMsg = "El plazo permitido debe estar entre 3 y 36 meses.";
                }
            }


            // APLICAR VISUALIZACIÓN DE ERRORES DEL MONTO
            if (errorMontoMsg !== "") {
                labelErrorMonto.innerHTML = `<i class="fa-solid fa-circle-exclamation"></i> ${errorMontoMsg}`;
                labelErrorMonto.classList.remove('hidden');
                inputMonto.classList.add('border-red-500', 'bg-red-50/50');
            } else {
                labelErrorMonto.classList.add('hidden');
                inputMonto.classList.remove('border-red-500', 'bg-red-50/50');
            }

            // APLICAR VISUALIZACIÓN DE ERRORES DEL PLAZO (MESES)
            if (errorPlazoMsg !== "") {
                labelErrorPlazo.innerHTML = `<i class="fa-solid fa-circle-exclamation"></i> ${errorPlazoMsg}`;
                labelErrorPlazo.classList.remove('hidden');
                inputPlazo.classList.add('border-red-500', 'bg-red-50/50');
            } else {
                labelErrorPlazo.classList.add('hidden');
                inputPlazo.classList.remove('border-red-500', 'bg-red-50/50');
            }

            // 🔒 CONFIGURACIÓN DEL BOTÓN MÁSTER
            if (errorMontoMsg !== "" || errorPlazoMsg !== "") {
                btnCalcular.disabled = true;
                btnCalcular.classList.add('opacity-50', 'cursor-not-allowed');
                btnCalcular.removeAttribute('onclick'); 
            } else {
                btnCalcular.disabled = false;
                btnCalcular.classList.remove('opacity-50', 'cursor-not-allowed');
                btnCalcular.setAttribute('onclick', 'calcularcredito()'); 
            }
        }

        // Monitoreamos todos los campos del formulario en tiempo real al escribir o cambiar opciones
        inputMonto.addEventListener('input', evaluarFormulario);
        inputPlazo.addEventListener('input', evaluarFormulario);
        selectProducto.addEventListener('change', evaluarFormulario);
        
        // Ejecutamos la evaluación inicial una sola vez para que vigile desde la carga
        evaluarFormulario();
    }
});
</script>




