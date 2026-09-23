<?php
/*
 * Plantilla compartida para el detalle de cada línea de crédito.
 * El archivo que la incluye debe definir antes:
 *   $titulo, $desc, $tipoCredito, $bannerImg,
 *   $montoTexto, $perfilTexto, $plazoTexto,
 *   $segmentoLabel (opcional, por defecto "Segmento"), $segmentoTexto
 * Requiere que $fnindex, header.php y footer.php ya estén disponibles.
 */
require_once './funciones/fn-utilidades.php';
if (!isset($segmentoLabel)) {
    $segmentoLabel = 'Segmento';
}
$titulo = arreglar_mojibake($titulo);
$desc = arreglar_mojibake($desc);
$tituloPagina = $titulo;

// Mapeo inverso de equivalencias para conectar de forma automática el Web Service AJAX
$mapaInversowB = [
    'Crédito Socio Fiel' => 'SOCIOFIEL',
    'Micro Emprendedor' => 'MICROEMPRENDEDOR',
    'Micro Emprendedor VIP' => 'MICROVIP',
    'Credi Puntos' => 'CREDIPUNTOS',
    'Credi Mujer Emprende' => 'MUJEREMPRENDEDORA',
    'Microcrédito Facilito, Especial y Preferencial' => 'FACILITO'
];
$codigoCalculo = isset($mapaInversowB[$titulo]) ? $mapaInversowB[$titulo] : 'SOCIOFIEL';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $titulo ?> - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
        <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">
        <?php include "head-v2.php"; ?>
    </head>
    <body class="v2 bg-white text-neutral-800">

        <?php include 'header.php'; ?>

        <!-- ===== HERO AREA AJUSTADA SIN RECORTES ===== -->
        <div class="w-full bg-gradient-to-r from-neutral-50 to-neutral-100 bg-center bg-cover bg-no-repeat h-[240px] md:h-[280px] flex items-center border-b border-neutral-100" style="background-image: url(assets/img/banner-credito.jpg);">
            <div class="max-w-7xl mx-auto px-6 w-full">
                <div class="grid grid-cols-1 lg:grid-cols-12 items-center">
                    <div class="lg:col-span-4"></div>
                    <div class="lg:col-span-8 text-center lg:text-left drop-shadow-sm">
                        <span class="inline-block bg-[#a31a16]/10 text-[#a31a16] border border-[#a31a16]/20 px-3 py-1 rounded-full text-xs font-black uppercase tracking-wide mb-2"><?php echo htmlspecialchars($tipoCredito) ?></span>
                        <h1 class="text-3xl md:text-5xl font-black text-neutral-900 tracking-tight mb-2"><?php echo $titulo ?></h1>
                        <div class="text-sm font-bold text-neutral-600">
                            <a href="index.php" class="hover:text-[#a31a16] transition-colors">Inicio</a> 
                            <i class="fa-solid fa-angle-right text-xs mx-2 opacity-60"></i> 
                            <span class="text-[#a31a16]"><?php echo $titulo ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== DESCRIPCIÓN EDITORIAL MAQUETADA CON MOSAICO ASIMÉTRICO ===== -->
        <section class="py-16 md:py-24 max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 grid grid-cols-2 gap-4 sm:gap-6 items-center" data-aos="fade-right">
                <div class="w-full overflow-hidden">
                    <img src="assets/img/img-producto-ahorro-01.jpg" class="w-full h-auto object-contain rounded-3xl shadow-soft hover:scale-[1.01] transition-transform duration-500" alt="COAC">
                </div>
                <div class="w-full overflow-hidden">
                    <img src="assets/img/img-producto-ahorro-02.jpg" class="w-full h-auto object-contain rounded-3xl shadow-soft hover:scale-[1.01] transition-transform duration-500" alt="Crédito">
                </div>
            </div>
            <div class="lg:col-span-6" data-aos="fade-left">
                <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-2 flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Soluciones Financieras
                </div>
                <h2 class="text-3xl font-black text-neutral-800 tracking-tight mb-4"><?php echo $titulo ?></h2>
                <p class="text-neutral-500 text-sm leading-relaxed text-justify mb-6 font-medium"><?php echo $desc ?></p>
                <div class="inline-flex items-center gap-2 bg-[#a31a16]/5 border border-[#a31a16]/10 rounded-xl px-4 py-2.5 text-xs font-bold text-[#a31a16]">
                    <i class="fa-solid fa-percent text-sm"></i> Tasa preferencial regulada por segmentos institucionales
                </div>
            </div>
        </section>
        <!-- ===== CONDICIONES DINÁMICAS OPTIMIZADAS ===== -->
        <section class="bg-neutral-50/50 py-16 border-t border-b border-neutral-100">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                // CORREGIDO: Usamos iconos de FontAwesome estables para que las condiciones reales carguen perfectas
                $condiciones = [
                    ['icon' => 'fa-solid fa-money-bill-wave', 'label' => 'Monto', 'texto' => $montoTexto],
                    ['icon' => 'fa-solid fa-calendar-days', 'label' => 'Plazo', 'texto' => $plazoTexto],
                    ['icon' => 'fa-solid fa-user-tie', 'label' => 'Perfil', 'texto' => $perfilTexto],
                    ['icon' => 'fa-solid fa-layer-group', 'label' => $segmentoLabel, 'texto' => $segmentoTexto],
                ];
                foreach ($condiciones as $idx => $c) {
                    ?>
                    <div class="flex gap-4 bg-white rounded-2xl p-5 border border-neutral-100 shadow-soft hover:border-[#a31a16]/20 transition-all duration-300" data-aos="fade-up" data-aos-delay="<?php echo $idx * 60; ?>">
                        <div class="w-11 h-11 rounded-xl bg-[#a31a16]/5 flex items-center justify-center text-[#a31a16] flex-shrink-0 shadow-inner">
                            <i class="<?php echo $c['icon'] ?> text-base"></i>
                        </div>
                        <div>
                            <h3 class="font-black text-neutral-800 text-sm mb-0.5 tracking-tight"><?php echo $c['label'] ?></h3>
                            <p class="text-neutral-500 text-xs leading-relaxed font-medium"><?php echo $c['texto'] ?></p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </section>

        <!-- ===== REQUISITOS GENERALES REESTRUCTURADOS v3.0 ===== -->
        <section class="py-16 md:py-24 max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-5 relative" data-aos="fade-right">
                <div class="absolute -inset-4 bg-gradient-to-tr from-[#a31a16]/10 to-transparent rounded-[40px] blur-xl opacity-60 pointer-events-none"></div>
                <div class="relative rounded-[32px] overflow-hidden shadow-xl border border-neutral-100 p-2 bg-white">
                    <img src="assets/img/all-images/about/about-img5.png" class="w-full h-auto rounded-[24px] object-cover" alt="Requisitos">
                </div>
            </div>
            
            <div class="lg:col-span-7" data-aos="fade-left">
                <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-2 flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Documentación Requerida
                </div>
                <h2 class="text-3xl font-black text-neutral-800 tracking-tight mb-6">Requisitos Generales de Carpeta</h2>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm font-semibold text-neutral-600">
                    <?php
                    $requisitos = [
                        'Solicitud de crédito institucional.', 'Documentos de identidad originales.', 'Justificativo de ingresos mensuales.',
                        'Planilla de servicio básico vigente.', 'Croquis detallado y fotografías.', 'Perfil socioeconómico calificado.',
                        'Certificados de aportación al día.', 'Cuenta de Ahorros vista activa.',
                    ];
                    foreach ($requisitos as $r) {
                        ?>
                        <li class="flex items-start gap-3 bg-neutral-50 p-3 rounded-xl border border-neutral-100/60"><i class="fa-solid fa-circle-check text-emerald-500 mt-0.5 text-base"></i> <span class="leading-normal"><?php echo $r ?></span></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </section>
        <!-- ===== SECCIÓN 3: SIMULADOR INTERACTIVO INYECTADO DIRECTAMENTE ===== -->
        <section class="py-16 md:py-24 bg-white border-t border-neutral-100">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <!-- Formulario de Entrada (Lado Izquierdo) -->
                    <div class="lg:col-span-7" data-aos="fade-right">
                        <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-3 flex items-center gap-2">
                            <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Proyección Inmediata
                        </div>
                        <h2 class="text-3xl font-black text-neutral-800 tracking-tight mb-4">Simula tus cuotas para <span class="text-[#a31a16]"><?php echo $titulo; ?></span></h2>
                        <p class="text-neutral-500 text-xs md:text-sm mb-8 leading-relaxed">Proyecta tu amortización mensual al instante de forma nativa. Los cálculos se procesan bajo las tasas comerciales vigentes en la cooperativa.</p>

                        <form method="POST" id="formularioCredito" class="bg-neutral-50 rounded-3xl p-6 md:p-8 border border-neutral-100 grid grid-cols-1 sm:grid-cols-2 gap-5 shadow-sm">
                            <!-- Inyectamos dinámicamente el código de texto que espera el AJAX transaccional de tu Core -->
                            <input type="hidden" name="tipocred_calcula" value="<?php echo $codigoCalculo; ?>">
                            <input type="hidden" name="tasa_calcula" value="">
                            
                            <div class="flex flex-col gap-2 sm:col-span-2">
                                <label class="font-extrabold text-neutral-700 text-sm"><i class="fa-solid fa-chart-line text-[#a31a16] mr-1"></i> Línea de Crédito Asignada</label>
                                <div class="w-full bg-white border border-neutral-200 rounded-xl px-4 py-3 text-neutral-800 font-extrabold text-sm shadow-inner-sm">
                                    <?php echo $titulo; ?> -- Proyección Referencial Anual
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="font-extrabold text-neutral-700 text-sm"><i class="fa-solid fa-money-bill-wave text-[#a31a16] mr-1"></i> Valor solicitado*</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 font-bold text-neutral-400">$</span>
                                    <input name="monto_calcula" id="monto_calcula" type="text" placeholder="Ej: 3000" required class="w-full bg-white border border-neutral-200 focus:border-[#a31a16]/40 rounded-xl pl-8 pr-4 py-3 text-neutral-800 font-semibold outline-none text-sm">
                                </div>
                                <span id="error_monto" class="hidden text-xs font-bold text-red-600 mt-1"><i class="fa-solid fa-circle-exclamation"></i> El monto mínimo de simulación permitido es $1,000.</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="font-extrabold text-neutral-700 text-sm"><i class="fa-solid fa-calendar-days text-[#a31a16] mr-1"></i> Plazo estimado*</label>
                                <div class="relative">
                                    <input name="plazo_calcula" type="text" placeholder="Ej: 12" required class="w-full bg-white border border-neutral-200 focus:border-[#a31a16]/40 rounded-xl px-4 py-3 text-neutral-800 font-semibold outline-none text-sm">
                                    <span class="absolute right-4 top-1/2 -translate-y-1/2 font-bold text-xs text-neutral-400 uppercase">Meses</span>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 sm:col-span-2">
                                <label class="font-extrabold text-neutral-700 text-sm"><i class="fa-solid fa-chart-pie text-[#a31a16] mr-1"></i> Sistema de Cuota*</label>
                                <select name="tipoamortiza" class="w-full bg-white border border-neutral-200 focus:border-[#a31a16]/40 rounded-xl px-4 py-3 text-neutral-800 font-semibold outline-none text-sm cursor-pointer">
                                    <option value="1">Cuotas Fijas (Sistema Francés)</option>
                                    <option value="2">Cuotas Variables (Sistema Alemán)</option>
                                </select>
                            </div>
                            <div class="sm:col-span-2 pt-2">
                                <button id="btn_calcular_master" onclick="calcularcredito()" type="button" class="w-full bg-[#a31a16] hover:bg-[#7a1310] text-white font-extrabold py-3.5 rounded-xl shadow-md transition-all uppercase text-xs tracking-wide"><i class="fa-solid fa-calculator"></i> CALCULAR AHORA</button>
                            </div>
                        </form>
                    </div>

                    <!-- Caja Esmerilada de Cuotas Proyectadas (Lado Derecho) -->
                    <div class="lg:col-span-5 relative" data-aos="fade-left">
                        <div class="absolute -inset-4 bg-gradient-to-tr from-[#a31a16]/10 to-transparent rounded-[40px] blur-xl opacity-60 pointer-events-none"></div>
                        <div class="relative rounded-[32px] overflow-hidden shadow-2xl bg-gradient-to-br from-[#7a1310] to-[#a31a16] p-6 text-white min-h-[380px] flex flex-col justify-between border border-white/10">
                            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px] pointer-events-none"></div>
                            <div class="relative z-10 flex justify-between items-start">
                                <div>
                                    <p class="text-[9px] uppercase tracking-widest text-white/60 font-black mb-0.5">COAC 15 de Agosto</p>
                                    <h3 class="text-lg font-black tracking-tight">Proyección Calculada</h3>
                                </div>
                                <div class="w-9 h-9 rounded-xl bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center text-white"><i class="fa-solid fa-vault text-sm"></i></div>
                            </div>

                            <div id="resultado" class="text-white bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-4 min-h-[200px] flex flex-col justify-center overflow-hidden [&_br]:hidden [&_table]:w-full [&_table]:flex [&_table]:flex-col [&_td]:w-full [&_td]:block [&_td]:p-0 [&_td]:text-xs [&_span.text-rojo]:text-[#ffd9d6] [&_span]:inline-block [&_span]:font-black [&_span]:text-2xl [&_span]:my-1 [&_span]:text-white [&_b]:hidden [&_font]:hidden">
                                <div class="text-center p-2">
                                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center mx-auto mb-2 text-white"><i class="fa-solid fa-chart-line"></i></div>
                                    <p class="text-[11px] text-white/70 font-medium leading-relaxed">Presione calcular ahora para enlazar los Web Services dinámicos de tu base de datos de pruebas.</p>
                                </div>
                            </div>

                            <div class="relative z-10 pt-3 border-t border-white/10 flex justify-between items-center text-left text-[11px]">
                                <p class="font-bold text-white/80">Valores sujetos a evaluación de riesgo</p>
                                <img src="assets/img/favicon-coop.png" class="h-6 opacity-30 filter brightness-0 invert" alt="COAC">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <?php include './footer.php' ?>
        <?php include "scripts-v2.php"; ?>
        
        <script>
        document.addEventListener("DOMContentLoaded", function() {
            const inputMonto = document.getElementById('monto_calcula');
            const labelError = document.getElementById('error_monto');
            const btnCalcular = document.getElementById('btn_calcular_master');
            if (inputMonto && labelError && btnCalcular) {
                inputMonto.addEventListener('input', function() {
                    let montoTexto = inputMonto.value.trim();
                    let montoNum = parseFloat(montoTexto.replace(/[,.]/g, ''));
                    if (montoTexto === "" || (!isNaN(montoNum) && montoNum >= 1000)) {
                        labelError.classList.add('hidden');
                        inputMonto.classList.remove('border-red-500', 'bg-red-50/50');
                        btnCalcular.disabled = false;
                        btnCalcular.classList.remove('opacity-50', 'cursor-not-allowed');
                        btnCalcular.setAttribute('onclick', 'calcularcredito()');
                    } else {
                        labelError.classList.remove('hidden');
                        inputMonto.classList.add('border-red-500', 'bg-red-50/50');
                        btnCalcular.disabled = true;
                        btnCalcular.classList.add('opacity-50', 'cursor-not-allowed');
                        btnCalcular.removeAttribute('onclick');
                    }
                });
            }
        });
        </script>
    </body>
</html>
