<?php 
require_once './controler/conexion.php';
require_once './funciones/fn-index.php';
require_once './funciones/fn-utilidades.php';
$fnindex = new Fn_index();

// 🎯 CAPTURA ALFA: Leemos el ID que viaja en la URL desde el Mega Menú
$id = isset($_GET['id']) ? intval($_GET['id']) : 116;
$detproducto = $fnindex->fnindex_rproducto_xtextoses($id);

$titulo = !empty($detproducto[0]['nombre_prod']) ? arreglar_mojibake(utf8_encode($detproducto[0]['nombre_prod'])) : 'Crédito Especial';
$desc = !empty($detproducto[0]['descripcion_prod']) ? arreglar_mojibake(utf8_encode($detproducto[0]['descripcion_prod'])) : 'Línea de financiamiento adaptada para impulsar tus metas personales o comerciales.';
$interes_base = !empty($detproducto[0]['int_prod']) ? number_format($detproducto[0]['int_prod'], 2) : '15.00';

$mapaTipoCredito = [
    116 => 'SOCIOFIEL',
    118 => 'MICROEMPRENDEDOR',
    119 => 'MICROVIP',
    114 => 'CREDIPUNTOS',
    113 => 'MUJEREMPRENDEDORA',
    120 => 'FACILITO',
];
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $titulo ?> - COAC 15 de Agosto</title>
        <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">
        <?php include "head-v2.php"; ?>
    </head>
    <body class="v2 bg-white text-neutral-800">

        <!--===== PRELOADER =======-->
        <div class="preloader">
            <img src="assets/img/logo/logo2.png">
            <div class="loader"></div>
        </div>

        <!--===== PROGRESS =======-->
        <div class="paginacontainer">
            <div class="progress-wrap">
                <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
                </svg>
            </div>
        </div>

        <header class="homepage2-body">
            <?php include 'header.php'; ?>
        </header>

        <!--===== HERO AREA REPARADA SIN RECORTES =======-->
        <div class="w-full bg-gradient-to-r from-neutral-50 to-neutral-100 bg-center bg-cover bg-no-repeat h-[240px] md:h-[280px] flex items-center border-b border-neutral-100" style="background-image: url(assets/img/banner-credito.jpg);">
            <div class="max-w-7xl mx-auto px-6 w-full">
                <div class="grid grid-cols-1 lg:grid-cols-12 items-center">
                    <div class="lg:col-span-4"></div>
                    <div class="lg:col-span-8 text-center lg:text-left drop-shadow-sm">
                        <h2 class="text-3xl md:text-5xl font-black text-neutral-900 tracking-tight mb-2"><?php echo $titulo ?></h2>
                        <div class="text-sm font-bold text-neutral-600">
                            <a href="index.php" class="hover:text-[#a31a16] transition-colors">Inicio</a> 
                            <i class="fa-solid fa-angle-right text-xs mx-2 opacity-60"></i> 
                            <span class="text-[#a31a16]"><?php echo $titulo ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--===== SECCIÓN EDITORIAL: DETALLE EXCLUSIVO DEL PRODUCTO ===== -->
        <section class="py-16 md:py-24 max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 relative" data-aos="fade-right">
                <div class="absolute -inset-4 bg-gradient-to-tr from-[#a31a16]/10 to-transparent rounded-[40px] blur-xl opacity-60 pointer-events-none"></div>
                <div class="relative rounded-[32px] overflow-hidden shadow-xl border border-neutral-100 p-2 bg-white">
                    <img src="assets/img/all-images/about/about-img7.png" alt="" class="w-full h-auto rounded-[24px] object-cover">
                </div>
            </div>

            <div class="lg:col-span-6" data-aos="fade-left">
                <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-3 flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Portafolio Institucional
                </div>
                <h2 class="text-3xl md:text-4xl font-black text-neutral-800 tracking-tight mb-4"><?php echo $titulo ?></h2>
                <p class="text-neutral-500 text-sm md:text-base leading-relaxed text-justify mb-6 font-medium"><?php echo $desc ?></p>
                <div class="inline-flex items-center gap-2 bg-[#a31a16]/5 border border-[#a31a16]/10 rounded-xl px-4 py-2 text-xs font-bold text-[#a31a16]">
                    <i class="fa-solid fa-percent text-sm"></i> Tasa aplicada desde el <?php echo $interes_base; ?>% Anual
                </div>
            </div>
        </section>
        <!--===== 🏛️ SECCIÓN 2: REQUISITOS FILTRADOS POR POLÍTICA DE RIESGO ===== -->
        <section class="py-16 md:py-20 bg-neutral-50/50 border-t border-b border-neutral-100">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-7" data-aos="fade-right">
                    <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-2 flex items-center gap-2">
                        <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Carpeta de Solicitud
                    </div>
                    <h2 class="text-3xl font-black text-neutral-800 tracking-tight mb-8">Requisitos Necesarios</h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="flex gap-4 items-start bg-white p-4 rounded-2xl border border-neutral-100 shadow-sm">
                            <div class="w-9 h-9 rounded-xl bg-[#a31a16]/5 flex items-center justify-center text-[#a31a16] shrink-0 shadow-inner"><i class="fa-solid fa-address-card text-sm"></i></div>
                            <div>
                                <h4 class="font-bold text-neutral-800 text-sm mb-0.5">Identificación</h4>
                                <p class="text-xs text-neutral-500 leading-normal">Cédula original y papeleta de votación actualizada (Socio y cónyuge).</p>
                            </div>
                        </div>

                        <!-- 🧠 DISCRIMINADOR LÓGICO FINANCIERO: Filtra si es consumo (Socio Fiel/VIP) o microcrédito comercial -->
                        <?php if ($id == 116 || $id == 119 || $id == 120) { ?>
                            <div class="flex gap-4 items-start bg-white p-4 rounded-2xl border border-neutral-100 shadow-sm">
                                <div class="w-9 h-9 rounded-xl bg-[#a31a16]/5 flex items-center justify-center text-[#a31a16] shrink-0 shadow-inner"><i class="fa-solid fa-file-invoice-dollar text-sm"></i></div>
                                <div>
                                    <h4 class="font-bold text-neutral-800 text-sm mb-0.5">Estabilidad Laboral</h4>
                                    <p class="text-xs text-neutral-500 leading-normal">Últimos 3 roles de pago firmados por la empresa o mecanizado del IESS.</p>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="flex gap-4 items-start bg-white p-4 rounded-2xl border border-neutral-100 shadow-sm">
                                <div class="w-9 h-9 rounded-xl bg-[#a31a16]/5 flex items-center justify-center text-[#a31a16] shrink-0 shadow-inner"><i class="fa-solid fa-store text-sm"></i></div>
                                <div>
                                    <h4 class="font-bold text-neutral-800 text-sm mb-0.5">Sustento de Comercio</h4>
                                    <p class="text-xs text-neutral-500 leading-normal">RUC, RISE, Régimen RIMPE o facturas de compras que certifiquen tu negocio.</p>
                                </div>
                            </div>
                        <?php } ?>

                        <div class="flex gap-4 items-start bg-white p-4 rounded-2xl border border-neutral-100 shadow-sm">
                            <div class="w-9 h-9 rounded-xl bg-[#a31a16]/5 flex items-center justify-center text-[#a31a16] shrink-0 shadow-inner"><i class="fa-solid fa-receipt text-sm"></i></div>
                            <div>
                                <h4 class="font-bold text-neutral-800 text-sm mb-0.5">Servicio Básico</h4>
                                <p class="text-xs text-neutral-500 leading-normal">Última planilla de agua, luz o teléfono del domicilio o establecimiento.</p>
                            </div>
                        </div>

                        <div class="flex gap-4 items-start bg-white p-4 rounded-2xl border border-neutral-100 shadow-sm">
                            <div class="w-9 h-9 rounded-xl bg-[#a31a16]/5 flex items-center justify-center text-[#a31a16] shrink-0 shadow-inner"><i class="fa-solid fa-map-location-dot text-sm"></i></div>
                            <div>
                                <h4 class="font-bold text-neutral-800 text-sm mb-0.5">Croquis y Ubicación</h4>
                                <p class="text-xs text-neutral-500 leading-normal">Dirección exacta dibujada para las inspecciones técnicas de campo.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 relative" data-aos="fade-left">
                    <div class="absolute -inset-4 bg-gradient-to-tr from-[#a31a16]/10 to-transparent rounded-[40px] blur-xl opacity-60 pointer-events-none"></div>
                    <div class="relative rounded-[32px] overflow-hidden shadow-xl border border-neutral-100 p-2 bg-white">
                        <img src="assets/img/all-images/about/about-img4.png" alt="" class="w-full h-auto rounded-[24px] object-cover">
                    </div>
                </div>
            </div>
        </section>
        <!--===== 🧮 SECCIÓN 3: SIMULADOR INTERACTIVO MAQUETADO DE FORMA NATIVA ===== -->
        <section class="py-16 md:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <!-- Formulario de Simulación Corregido -->
                    <div class="lg:col-span-7" data-aos="fade-right">
                        <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-3 flex items-center gap-2">
                            <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Proyección en tiempo real
                        </div>
                        <h2 class="text-3xl font-black text-neutral-800 tracking-tight mb-4">Simula tu cuota para <span class="text-[#a31a16]"><?php echo $titulo; ?></span></h2>
                        <p class="text-neutral-500 text-xs md:text-sm mb-8 leading-relaxed">Proyecta los linderos de tu amortización mensual. Los cálculos se procesan bajo la tasa referencial asignada en el Core para esta línea de crédito.</p>

                        <form method="POST" id="formularioCredito" class="bg-neutral-50 rounded-3xl p-6 md:p-8 border border-neutral-100 grid grid-cols-1 sm:grid-cols-2 gap-5 shadow-sm">
                            <!-- Inyectamos dinámicamente el código de texto que espera el AJAX transaccional -->
                            <input type="hidden" name="tipocred_calcula" value="<?php echo !empty($mapaTipoCredito[$id]) ? $mapaTipoCredito[$id] : 'SOCIOFIEL'; ?>">
                            <input type="hidden" name="tasa_calcula" value="">
                            
                            <div class="flex flex-col gap-2 sm:col-span-2">
                                <label class="font-extrabold text-neutral-700 text-sm"><i class="fa-solid fa-chart-line text-[#a31a16] mr-1"></i> Tasa Referencial de Línea</label>
                                <div class="w-full bg-white border border-neutral-200 rounded-xl px-4 py-3 text-neutral-800 font-extrabold text-sm shadow-inner-sm">
                                    <?php echo $interes_base; ?>% Interés Efectivo Anual
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="font-extrabold text-neutral-700 text-sm"><i class="fa-solid fa-money-bill-wave text-[#a31a16] mr-1"></i> Valor requerido*</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 font-bold text-neutral-400">$</span>
                                    <input name="monto_calcula" id="monto_calcula" type="text" placeholder="Ej: 3000" required class="w-full bg-white border border-neutral-200 focus:border-[#a31a16]/40 rounded-xl pl-8 pr-4 py-3 text-neutral-800 font-semibold outline-none text-sm">
                                </div>
                                <span id="error_monto" class="hidden text-xs font-bold text-red-600 mt-1"><i class="fa-solid fa-circle-exclamation"></i> El monto mínimo de simulación es $1,000.</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="font-extrabold text-neutral-700 text-sm"><i class="fa-solid fa-calendar-days text-[#a31a16] mr-1"></i> Tiempo (Plazo)*</label>
                                <div class="relative">
                                    <input name="plazo_calcula" type="text" placeholder="Ej: 12" required class="w-full bg-white border border-neutral-200 focus:border-[#a31a16]/40 rounded-xl px-4 py-3 text-neutral-800 font-semibold outline-none text-sm">
                                    <span class="absolute right-4 top-1/2 -translate-y-1/2 font-bold text-xs text-neutral-400 uppercase">Meses</span>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 sm:col-span-2">
                                <label class="font-extrabold text-neutral-700 text-sm"><i class="fa-solid fa-chart-pie text-[#a31a16] mr-1"></i> Sistema de Amortización*</label>
                                <select name="tipoamortiza" class="w-full bg-white border border-neutral-200 focus:border-[#a31a16]/40 rounded-xl px-4 py-3 text-neutral-800 font-semibold outline-none text-sm cursor-pointer">
                                    <option value="1">Cuotas Fijas (Sistema Francés)</option>
                                    <option value="2">Cuotas Variables (Sistema Alemán)</option>
                                </select>
                            </div>
                            <div class="sm:col-span-2 pt-2">
                                <button id="btn_calcular_master" onclick="calcularcredito()" type="button" class="w-full bg-[#a31a16] hover:bg-[#7a1310] text-white font-extrabold py-3.5 rounded-xl shadow-md transition-all uppercase text-xs tracking-wide"><i class="fa-solid fa-calculator"></i> CALCULAR PROYECTACIÓN</button>
                            </div>
                        </form>
                    </div>

                    <!-- Caja Esmerilada de Cuotas Proyectadas -->
                    <div class="lg:col-span-5 relative" data-aos="fade-left">
                        <div class="absolute -inset-4 bg-gradient-to-tr from-[#a31a16]/10 to-transparent rounded-[40px] blur-xl opacity-60 pointer-events-none"></div>
                        <div class="relative rounded-[32px] overflow-hidden shadow-2xl bg-gradient-to-br from-[#7a1310] to-[#a31a16] p-6 text-white min-h-[380px] flex flex-col justify-between border border-white/10">
                            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px] pointer-events-none"></div>
                            <div class="relative z-10 flex justify-between items-start">
                                <div>
                                    <p class="text-[9px] uppercase tracking-widest text-white/60 font-black mb-0.5">COAC 15 de Agosto</p>
                                    <h3 class="text-lg font-black tracking-tight">Proyección Producida</h3>
                                </div>
                                <div class="w-9 h-9 rounded-xl bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center text-white"><i class="fa-solid fa-vault text-sm"></i></div>
                            </div>

                            <div id="resultado" class="text-white bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-4 min-h-[200px] flex flex-col justify-center overflow-hidden [&_br]:hidden [&_table]:w-full [&_table]:flex [&_table]:flex-col [&_td]:w-full [&_td]:block [&_td]:p-0 [&_td]:text-xs [&_span.text-rojo]:text-[#ffd9d6] [&_span]:inline-block [&_span]:font-black [&_span]:text-2xl [&_span]:my-1 [&_span]:text-white [&_b]:hidden [&_font]:hidden">
                                <div class="text-center p-2">
                                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center mx-auto mb-2 text-white"><i class="fa-solid fa-chart-line"></i></div>
                                    <p class="text-[11px] text-white/70 font-medium leading-relaxed">Presione calcular proyectación para enlazar los Web Services dinámicos de tu base de datos.</p>
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

        <!--===== FOOTER =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>

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
