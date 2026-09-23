<?php
// Recibimos y saneamos las variables dinámicas que inyectan tus 3 controladores oficiales
$titulo_inv = isset($tituloInversion) ? $tituloInversion : 'Inversión a Plazo Fijo';
$desc_inv = isset($descInversion) ? $descInversion : 'Multiplica tu capital de forma segura.';
$monto_inv = isset($montoTexto) ? $montoTexto : 'Consultar en Agencia';
$plazo_inv = isset($plazoTexto) ? $plazoTexto : 'Plazos Flexibles';
$tasa_inv = isset($tasaTexto) ? $tasaTexto : 'Tasas Competitivas';

$tituloPagina = $titulo_inv;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $titulo_inv; ?> - COAC 15 de Agosto</title>
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

        <!--===== HERO AREA ADAPTADA =======-->
        <div class="w-full bg-gradient-to-r from-neutral-50 to-neutral-100 bg-center bg-cover bg-no-repeat h-[240px] md:h-[280px] flex items-center border-b border-neutral-100" style="background-image: url(assets/img/banner-credito.jpg);">
            <div class="max-w-7xl mx-auto px-6 w-full">
                <div class="grid grid-cols-1 lg:grid-cols-12 items-center">
                    <div class="lg:col-span-4"></div>
                    <div class="lg:col-span-8 text-center lg:text-left drop-shadow-sm">
                        <h2 class="text-3xl md:text-5xl font-black text-neutral-900 tracking-tight mb-2"><?php echo $titulo_inv; ?></h2>
                        <div class="text-sm font-bold text-neutral-600">
                            <a href="index.php" class="hover:text-[#a31a16] transition-colors">Inicio</a> 
                            <i class="fa-solid fa-angle-right text-xs mx-2 opacity-60"></i> 
                            <span class="text-[#a31a16]">Inversiones</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--===== DETALLE EDITORIAL DE LA INVERSIÓN ===== -->
        <section class="py-16 md:py-24 max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 relative" data-aos="fade-right">
                <div class="absolute -inset-4 bg-gradient-to-tr from-[#a31a16]/10 to-transparent rounded-[40px] blur-xl opacity-60 pointer-events-none"></div>
                <div class="relative rounded-[32px] overflow-hidden shadow-xl border border-neutral-100 p-2 bg-white">
                    <img src="assets/img/all-images/about/about-img8.png" alt="Inversión Cooperativa" class="w-full h-auto rounded-[24px] object-cover">
                </div>
            </div>

            <div class="lg:col-span-6" data-aos="fade-left">
                <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-3 flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Multiplica tu Capital
                </div>
                <h2 class="text-3xl font-black text-neutral-800 tracking-tight mb-4"><?php echo $titulo_inv; ?></h2>
                <p class="text-neutral-500 text-sm md:text-base leading-relaxed text-justify mb-6 font-medium"><?php echo $desc_inv; ?></p>
                <div class="inline-flex items-center gap-2 bg-emerald-600/5 border border-emerald-500/10 rounded-xl px-4 py-2 text-xs font-bold text-emerald-600">
                    <i class="fa-solid fa-chart-line text-sm"></i> Rendimiento garantizado para asegurar tu futuro
                </div>
            </div>
        </section>
        <!--===== 📈 SECCIÓN 2: PARÁMETROS TÉCNICOS ESPECÍFICOS ===== -->
        <section class="py-16 bg-neutral-50/50 border-t border-b border-neutral-100">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center max-w-2xl mx-auto mb-12" data-aos="fade-up">
                    <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-2 flex items-center justify-center gap-2">
                        <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Políticas Comerciales <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span>
                    </div>
                    <h2 class="text-3xl font-black text-neutral-800 tracking-tight">Condiciones de la Póliza</h2>
                </div>

                <!-- Rejilla con las variables reales de tus controladores -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="group bg-white border border-neutral-100 rounded-3xl p-6 shadow-soft hover:border-[#a31a16]/20 hover:-translate-y-1 transition-all duration-300 flex gap-4 items-start">
                        <div class="w-10 h-10 rounded-xl bg-[#a31a16]/5 flex items-center justify-center text-[#a31a16] shrink-0"><i class="fa-solid fa-hand-holding-dollar text-sm"></i></div>
                        <div>
                            <h4 class="font-bold text-neutral-800 text-sm mb-1 tracking-tight">Monto Permitido</h4>
                            <p class="text-base font-black text-[#a31a16] tracking-tight"><?php echo $monto_inv; ?></p>
                        </div>
                    </div>
                    <div class="group bg-white border border-neutral-100 rounded-3xl p-6 shadow-soft hover:border-[#a31a16]/20 hover:-translate-y-1 transition-all duration-300 flex gap-4 items-start">
                        <div class="w-10 h-10 rounded-xl bg-[#a31a16]/5 flex items-center justify-center text-[#a31a16] shrink-0"><i class="fa-solid fa-calendar-check text-sm"></i></div>
                        <div>
                            <h4 class="font-bold text-neutral-800 text-sm mb-1 tracking-tight">Plazo de Cobertura</h4>
                            <p class="text-sm font-extrabold text-[#a31a16] tracking-tight mt-0.5"><?php echo $plazo_inv; ?></p>
                        </div>
                    </div>
                    <div class="group bg-white border border-neutral-100 rounded-3xl p-6 shadow-soft hover:shadow-softhover hover:-translate-y-1 transition-all duration-300 flex gap-4 items-start">
                        <div class="w-10 h-10 rounded-xl bg-[#a31a16]/5 flex items-center justify-center text-[#a31a16] shrink-0"><i class="fa-solid fa-percent text-sm"></i></div>
                        <div>
                            <h4 class="font-bold text-neutral-800 text-sm mb-1 tracking-tight">Tasa de Interés</h4>
                            <p class="text-base font-black text-emerald-600 tracking-tight"><?php echo $tasa_inv; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== ⚖️ SECCIÓN 3: REQUISITOS GENERALES DE APERTURA ===== -->
        <section class="py-16 md:py-24 max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7" data-aos="fade-right">
                <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-2 flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Abre tu Póliza Hoy
                </div>
                <h2 class="text-3xl font-black text-neutral-800 tracking-tight mb-6">Documentación Requerida</h2>
                <ul class="flex flex-col gap-4 text-sm font-semibold text-neutral-600">
                    <li class="flex items-center gap-3 bg-neutral-50 p-4 rounded-xl border border-neutral-100"><i class="fa-solid fa-circle-check text-emerald-500 text-base"></i> Cédula de identidad original y papeleta de votación actualizada (Socio y cónyuge).</li>
                    <li class="flex items-center gap-3 bg-neutral-50 p-4 rounded-xl border border-neutral-100"><i class="fa-solid fa-circle-check text-emerald-500 text-base"></i> Copia nítida de la última planilla de servicio básico residencial (agua o luz) del domicilio.</li>
                    <li class="flex items-center gap-3 bg-neutral-50 p-4 rounded-xl border border-neutral-100"><i class="fa-solid fa-circle-check text-emerald-500 text-base"></i> Firma de los términos y condiciones de la póliza bajo la normativa estricta de la SEPS.</li>
                </ul>
            </div>
            
            <div class="lg:col-span-5 text-center lg:text-left bg-neutral-50 border border-neutral-100 p-8 rounded-[32px] shadow-inner flex flex-col gap-4" data-aos="fade-left">
                <div class="w-12 h-12 rounded-2xl bg-[#a31a16]/10 text-[#a31a16] flex items-center justify-center mx-auto lg:mx-0 text-xl shadow-inner"><i class="fa-solid fa-calculator"></i></div>
                <h3 class="text-xl font-black tracking-tight text-neutral-800">¿Deseas simular tus ganancias?</h3>
                <p class="text-xs text-neutral-500 leading-relaxed font-medium">Para calcular el rendimiento exacto en dólares según tu tipo de cobro (mensual, anticipado o al vencimiento), consulta directamente en nuestras agencias con un asesor financiero calificado.</p>
                <a href="contacto.php" class="bg-[#a31a16] hover:bg-[#7a1310] text-white font-extrabold text-xs py-3.5 rounded-xl uppercase tracking-wide text-center transition-all shadow-md">Agendar Cita con un Asesor</a>
            </div>
        </section>

        <?php include './footer.php' ?>
        <?php include "scripts-v2.php"; ?>
    </body>
</html>
