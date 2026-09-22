<?php
require './controler/conexion.php';
include './fn/fn-credito.php';
require './funciones/fn-index.php';
require_once './funciones/fn-utilidades.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();
$listcredito = $fnindex->fnindex_rproducto_xtipo(5); // Tipo 6 para Consumo en tu Base
$listproducto = $fnindex->fnindex_rproducto_xtipo(5);

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
        <title>Créditos de Consumo - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
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

        <!--===== HERO AREA AJUSTADA =======-->
        <div class="w-full bg-gradient-to-r from-neutral-50 to-neutral-100 bg-center bg-cover bg-no-repeat h-[240px] md:h-[280px] flex items-center border-b border-neutral-100" style="background-image: url(assets/img/banner-credito.jpg);">
            <div class="max-w-7xl mx-auto px-6 w-full">
                <div class="grid grid-cols-1 lg:grid-cols-12 items-center">
                    <div class="lg:col-span-4"></div>
                    <div class="lg:col-span-8 text-center lg:text-left">
                        <!-- 🌟 CORREGIDO: Ahora dice Créditos de Consumo formalmente -->
                        <h2 class="text-4xl md:text-5xl font-black text-neutral-900 tracking-tight mb-2">Créditos de Consumo</h2>
                        <div class="text-sm font-bold text-neutral-600">
                            <a href="index.php" class="hover:text-[#a31a16] transition-colors">Inicio</a> 
                            <i class="fa-solid fa-angle-right text-xs mx-2 opacity-60"></i> 
                            <span class="text-[#a31a16]">Consumo</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- =====  BLOQUE 1: REQUISITOS DE LABORALES DE CONSUMO ===== -->
        <section class="py-16 md:py-20 bg-neutral-50/50">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-5 relative" data-aos="fade-right">
                    <div class="absolute -inset-4 bg-gradient-to-tr from-[#a31a16]/10 to-transparent rounded-[40px] blur-xl opacity-60 pointer-events-none"></div>
                    <div class="relative rounded-[32px] overflow-hidden shadow-xl border border-neutral-200/50 bg-white p-2">
                        <img src="assets/img/all-images/about/cal-img.png" alt="Requisitos Consumo" class="w-full h-auto rounded-[24px] object-cover">
                    </div>
                </div>

                <div class="lg:col-span-7" data-aos="fade-left">
                    <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-2 flex items-center gap-2">
                        <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Documentación Solicitada
                    </div>
                    <h2 class="text-3xl font-black text-neutral-800 tracking-tight mb-8">
                        Requisitos para tu <span class="text-[#a31a16]">Crédito de Consumo</span>
                    </h2>

                    <!-- 🌟 AJUSTADO: Requisitos específicos para empleados con Roles de Pago -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="flex gap-4 items-start bg-white p-4 rounded-2xl border border-neutral-100 shadow-sm hover:border-[#a31a16]/20 transition-all">
                            <div class="w-9 h-9 rounded-xl bg-[#a31a16]/5 flex items-center justify-center text-[#a31a16] shrink-0 shadow-inner"><i class="fa-solid fa-address-card text-sm"></i></div>
                            <div>
                                <h4 class="font-bold text-neutral-800 text-sm mb-0.5">Identificación del Socio</h4>
                                <p class="text-xs text-neutral-500 leading-normal">Cédula de identidad original y papeleta de votación actualizada (Socio y cónyuge).</p>
                            </div>
                        </div>
                        <div class="flex gap-4 items-start bg-white p-4 rounded-2xl border border-neutral-100 shadow-sm hover:border-[#a31a16]/20 transition-all">
                            <div class="w-9 h-9 rounded-xl bg-[#a31a16]/5 flex items-center justify-center text-[#a31a16] shrink-0 shadow-inner"><i class="fa-solid fa-file-signature text-sm"></i></div>
                            <div>
                                <h4 class="font-bold text-neutral-800 text-sm mb-0.5">Estabilidad Laboral</h4>
                                <p class="text-xs text-neutral-500 leading-normal">Tres últimos roles de pago firmados o certificado mecanizado del IESS que avale estabilidad.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 items-start bg-white p-4 rounded-2xl border border-neutral-100 shadow-sm hover:border-[#a31a16]/20 transition-all">
                            <div class="w-9 h-9 rounded-xl bg-[#a31a16]/5 flex items-center justify-center text-[#a31a16] shrink-0 shadow-inner"><i class="fa-solid fa-receipt text-sm"></i></div>
                            <div>
                                <h4 class="font-bold text-neutral-800 text-sm mb-0.5">Dirección de Vivienda</h4>
                                <p class="text-xs text-neutral-500 leading-normal">Última planilla de servicio básico residencial (agua o luz) junto al croquis de la dirección.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 items-start bg-white p-4 rounded-2xl border border-neutral-100 shadow-sm hover:border-[#a31a16]/20 transition-all">
                            <div class="w-9 h-9 rounded-xl bg-[#a31a16]/5 flex items-center justify-center text-[#a31a16] shrink-0 shadow-inner"><i class="fa-solid fa-user-shield text-sm"></i></div>
                            <div>
                                <h4 class="font-bold text-neutral-800 text-sm mb-0.5">Respaldo / Garante</h4>
                                <p class="text-xs text-neutral-500 leading-normal">Firma de garante calificado con estabilidad de ingresos según el monto de la simulación.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- =====  BLOQUE 2: SIMULADOR REAL INTERACTIVO EN VIVO ===== -->
        <section class="py-16 md:py-24 bg-white border-t border-b border-neutral-100">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <!-- Formulario Operativo Izquierdo -->
                    <div class="lg:col-span-7" data-aos="fade-right">
                        <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-3 flex items-center gap-2">
                            <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Proyección Inmediata
                        </div>
                        <h2 class="text-3xl font-black text-neutral-800 tracking-tight mb-4">Simula tus cuotas de <span class="text-[#a31a16]">consumo en vivo</span></h2>
                        <p class="text-neutral-500 text-xs md:text-sm mb-8 leading-relaxed">Calcula las cuotas referenciales de tu línea de consumo de forma ágil. Selecciona el producto financiero, digita el monto requerido y obtén tu proyección en tiempo real.</p>

                        <form method="POST" id="formularioCredito" class="bg-neutral-50 rounded-3xl p-6 md:p-8 border border-neutral-100 grid grid-cols-1 sm:grid-cols-2 gap-5 shadow-sm">
                            <input type="hidden" name="tasa_calcula" value="">
                            
                            <div class="flex flex-col gap-2 sm:col-span-2">
                                <label class="font-extrabold text-neutral-700 text-sm"><i class="fa-solid fa-layer-group text-[#a31a16] mr-1"></i> Línea de Crédito</label>
                                <select name="tipocred_calcula" class="w-full bg-white border border-neutral-200 focus:border-[#a31a16]/40 rounded-xl px-4 py-3 text-neutral-800 font-semibold outline-none text-sm cursor-pointer">
                                    <?php while ($menulistprod = $listproducto->fetch_assoc()) { 
                                        if (!isset($mapaTipoCredito[$menulistprod['id_prod']])) continue; ?>
                                        <option value="<?php echo $mapaTipoCredito[$menulistprod['id_prod']] ?>"><?php echo arreglar_mojibake(utf8_encode($menulistprod['nombre_prod'])) ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="font-extrabold text-neutral-700 text-sm"><i class="fa-solid fa-money-bill-wave text-[#a31a16] mr-1"></i> Monto solicitado*</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 font-bold text-neutral-400">$</span>
                                    <input name="monto_calcula" id="monto_calcula" type="text" placeholder="Ej: 5000" required class="w-full bg-white border border-neutral-200 focus:border-[#a31a16]/40 rounded-xl pl-8 pr-4 py-3 text-neutral-800 font-semibold outline-none text-sm">
                                </div>
                                <span id="error_monto" class="hidden text-xs font-bold text-red-600 mt-1"><i class="fa-solid fa-circle-exclamation"></i> El monto mínimo de simulación permitido es $1,000.</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="font-extrabold text-neutral-700 text-sm"><i class="fa-solid fa-calendar-days text-[#a31a16] mr-1"></i> Plazo estimado*</label>
                                <div class="relative">
                                    <input name="plazo_calcula" type="text" placeholder="Ej: 24" required class="w-full bg-white border border-neutral-200 focus:border-[#a31a16]/40 rounded-xl px-4 py-3 text-neutral-800 font-semibold outline-none text-sm">
                                    <span class="absolute right-4 top-1/2 -translate-y-1/2 font-bold text-xs text-neutral-400 uppercase">Meses</span>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 sm:col-span-2">
                                <label class="font-extrabold text-neutral-700 text-sm"><i class="fa-solid fa-chart-pie text-[#a31a16] mr-1"></i> Tipo de amortización*</label>
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

                    <!-- Tarjeta de Resultados Derecha (Efecto Cristal Corporativo) -->
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

                            <!-- Contenedor Maestro Inyectado por tu AJAX Nativo de la Cooperativa -->
                            <div id="resultado" class="text-white bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-4 min-h-[200px] flex flex-col justify-center overflow-hidden [&_br]:hidden [&_table]:w-full [&_table]:flex [&_table]:flex-col [&_td]:w-full [&_td]:block [&_td]:p-0 [&_td]:text-xs [&_span.text-rojo]:text-[#ffd9d6] [&_span]:inline-block [&_span]:font-black [&_span]:text-2xl [&_span]:my-1 [&_span]:text-white [&_b]:hidden [&_font]:hidden">
                                <div class="text-center p-2">
                                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center mx-auto mb-2 text-white"><i class="fa-solid fa-chart-line"></i></div>
                                    <p class="text-[11px] text-white/70 font-medium leading-relaxed">Ingrese los datos requeridos a la izquierda para proyectar su amortización.</p>
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
        <!-- =====  BLOQUE 3: LÍNEAS DE CRÉDITO DE CONSUMO DISPONIBLES EN TU BASE ===== -->
        <div class="max-w-7xl mx-auto px-6 py-16 md:py-24 border-t border-neutral-100">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 bg-[#a31a16]/5 text-[#a31a16] border border-[#a31a16]/10 px-4 py-1.5 rounded-full text-xs font-bold tracking-wide uppercase mb-3">
                    <i class="fa-solid fa-layer-group"></i> Portafolio de Productos
                </span>
                <h2 class="text-3xl md:text-4xl font-black text-neutral-800 tracking-tight">Nuestras Líneas de Consumo</h2>
            </div>

            <!-- Grid Horizontal Simétrico de 3 Columnas Puro CSS -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while ($menucredito = $listcredito->fetch_assoc()) { ?>
                    <div class="group bg-white border border-neutral-100 rounded-3xl p-8 shadow-soft hover:shadow-softhover hover:-translate-y-2 transition-all duration-300 flex flex-col justify-between h-[360px]" data-aos="fade-up">
                        <div>
                            <div class="w-14 h-14 rounded-2xl bg-[#a31a16]/5 flex items-center justify-center text-[#a31a16] group-hover:bg-[#a31a16] group-hover:text-white transition-all duration-300 shadow-sm mb-6">
                                <img style="width:32px;" src="assets/img/icon-money.png" class="group-hover:brightness-0 group-hover:invert transition-all" alt="Icon">
                            </div>
                            <h3 class="text-xl font-black tracking-tight text-neutral-800 mb-3 group-hover:text-[#a31a16] transition-colors">
                                <?php echo arreglar_mojibake(utf8_encode($menucredito['nombre_prod'])) ?>
                            </h3>
                            <p class="text-xs text-neutral-500 leading-relaxed text-justify line-clamp-4">
                                <?php echo arreglar_mojibake(utf8_encode($menucredito['descripcion_prod'])) ?>
                            </p>
                        </div>
                        <div class="pt-4 border-t border-neutral-50 flex items-center justify-between">
                            <span class="text-[10px] font-black text-neutral-400 uppercase tracking-wider">Aprobación Ágil</span>
                            <a href="detprod-credito-micro.php?id=<?php echo $menucredito['id_prod'] ?>" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-neutral-50 text-neutral-400 group-hover:bg-[#a31a16] group-hover:text-white transition-all duration-300">
                                <i class="fa-solid fa-chevron-right text-sm"></i>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>

        <?php include "scripts-v2.php"; ?>
        
        <!-- Script Vigilante Reactivo de Formulario para el piso mínimo -->
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
