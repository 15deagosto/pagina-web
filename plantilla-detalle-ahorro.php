<?php
/*
 * Plantilla compartida para el detalle de cada cuenta de ahorro.
 * El archivo que la incluye ya debe tener $id, $titulo y $desc
 * (via Fn_ahorro) y $fnindex disponible.
 */
require_once './funciones/fn-utilidades.php';
$titulo = arreglar_mojibake($titulo);
$desc = arreglar_mojibake(is_array($desc) ? '' : $desc);
$tituloPagina = $titulo;
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
        <?php include './partial-hero-interno.php'; ?>

                <!-- ===== DESCRIPCIÓN EDITORIAL CORREGIDA: Imágenes completas sin recortes v6.0 ===== -->
        <section class="py-16 max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- 🟢 CONTENEDOR MAESTRO REPARADO: Dividimos la pantalla en 6 y 6 columnas perfectas de Tailwind -->
            <div class="lg:col-span-6 grid grid-cols-2 gap-4 sm:gap-6 items-center" data-aos="fade-right">
                <!-- 🌟 CORREGIDO: Usamos object-contain y eliminamos alturas fijas para que el arte se vea COMPLETO con sus textos abajo -->
                <div class="w-full overflow-hidden transition-all duration-300">
                    <img src="assets/img/img-producto-ahorro-01.jpg" class="w-full h-auto object-contain rounded-2xl shadow-soft hover:scale-[1.02] transition-transform duration-500" alt="COAC">
                </div>
                <div class="w-full overflow-hidden transition-all duration-300">
                    <img src="assets/img/img-producto-ahorro-02.jpg" class="w-full h-auto object-contain rounded-2xl shadow-soft hover:scale-[1.02] transition-transform duration-500" alt="Ahorro">
                </div>
            </div>
            
            <!-- CONTENEDOR DE TEXTOS DERECHO (Perfectamente alineado a su mitad) -->
            <div class="lg:col-span-6" data-aos="fade-left">
                <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-2 flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Plan de Capitalización
                </div>
                <h2 class="text-3xl font-black text-neutral-800 tracking-tight mb-4"><?php echo $titulo ?></h2>
                <p class="text-neutral-500 text-sm leading-relaxed text-justify mb-6 font-medium"><?php echo $desc ?></p>
                <div class="inline-flex items-center gap-2 bg-[#a31a16]/5 border border-[#a31a16]/10 rounded-xl px-4 py-2.5 text-xs font-bold text-[#a31a16]">
                    <i class="fa-solid fa-piggy-bank text-sm shrink-0"></i> Fondos líquidos protegidos con disponibilidad inmediata
                </div>
            </div>
        </section>

        <!-- ===== 📊 SECCIÓN 2: CARACTERÍSTICAS FINANCIERAS CON FÓRMULA UNIFICADA ===== -->
        <section class="bg-neutral-50/50 py-16 md:py-24 border-t border-b border-neutral-100">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16" data-aos="fade-up">
                    <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-2 flex items-center justify-center gap-2">
                        <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Tu esfuerzo rinde más <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-black text-neutral-800 tracking-tight">Beneficios de tu Cuenta</h2>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php
                    // 🌟 CORREGIDO: Mapeamos íconos vectoriales estables FontAwesome que unifican el color de inmediato
                    $caracteristicas = [
                        ['icon' => 'fa-solid fa-vault', 'titulo' => 'Tu dinero siempre seguro', 'texto' => 'Maneja tus ahorros y depósitos cotidianos con total respaldo institucional.'],
                        ['icon' => 'fa-solid fa-layer-group', 'titulo' => 'Todo en un solo lugar', 'texto' => 'Recibe transferencias, salarios o subsidios sin comisiones ocultas.'],
                        ['icon' => 'fa-solid fa-laptop-file', 'titulo' => 'Finanzas a tu alcance', 'texto' => 'Monitorea tus saldos las 24/7 de forma rápida mediante la Banca Virtual.'],
                        ['icon' => 'fa-solid fa-percent', 'titulo' => 'Gana más con tu saldo', 'texto' => 'Genera un rendimiento preferencial capitalizable según tu saldo diario diario.'],
                        ['icon' => 'fa-solid fa-mobile-screen-button', 'titulo' => 'Pagos y cobros fáciles', 'texto' => 'Agiliza tus movimientos transaccionales desde ventanilla o canales digitales.'],
                        ['icon' => 'fa-solid fa-hand-holding-heart', 'titulo' => 'Soluciones cotidianas', 'texto' => 'Apertura ágil diseñada para respaldar tus metas de ahorro familiar o comercial.'],
                    ];
                    foreach ($caracteristicas as $idx => $c) {
                        ?>
                        <div class="group bg-white rounded-3xl p-8 shadow-soft border border-neutral-100 hover:border-[#a31a16]/20 hover:-translate-y-2 hover:shadow-softhover transition-all duration-300 flex flex-col justify-between h-64" data-aos="zoom-in" data-aos-delay="<?php echo $idx * 60 ?>">
                            <div class="relative z-10">
                                <!-- 🌟 LA FÓRMULA GANADORA: Caja rosa suave y text-rojo nativo en reposo. En hover pasa a rojo sólido e icono blanco impecable -->
                                <div class="w-12 h-12 rounded-xl bg-[#a31a16]/5 flex items-center justify-center mb-5 text-[#a31a16] border border-neutral-100 group-hover:bg-[#a31a16] group-hover:text-white group-hover:border-[#a31a16]/20 shadow-sm transition-all duration-300 shrink-0">
                                    <i class="<?php echo $c['icon'] ?> text-base transition-transform duration-300 group-hover:scale-110"></i>
                                </div>
                                <h3 class="font-black text-neutral-800 text-base mb-2 group-hover:text-[#a31a16] transition-colors tracking-tight"><?php echo $c['titulo'] ?></h3>
                                <p class="text-neutral-500 text-xs leading-relaxed font-medium"><?php echo $c['texto'] ?></p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- ===== ⚖️ SECCIÓN 3: REQUISITOS GENERALES DE APERTURA DE CUENTAS ===== -->
        <section class="py-16 md:py-24 max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7" data-aos="fade-right">
                <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-2 flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Requisitos Generales
                </div>
                <h2 class="text-3xl font-black text-neutral-800 tracking-tight mb-6">Documentación de Apertura</h2>
                <ul class="flex flex-col gap-4 text-sm font-semibold text-neutral-600">
                    <li class="flex items-center gap-3 bg-neutral-50 p-4 rounded-xl border border-neutral-100"><i class="fa-solid fa-circle-check text-emerald-500 text-base"></i> Cédula de identidad original y papeleta de votación actualizada (Socio y cónyuge).</li>
                    <li class="flex items-center gap-3 bg-neutral-50 p-4 rounded-xl border border-neutral-100"><i class="fa-solid fa-circle-check text-emerald-500 text-base"></i> Copia nítida de la última planilla de servicio básico (agua o luz) para validar dirección.</li>
                    <li class="flex items-center gap-3 bg-neutral-50 p-4 rounded-xl border border-neutral-100"><i class="fa-solid fa-circle-check text-emerald-500 text-base"></i> Depósito de apertura mínimo inicial determinado bajo los linderos de la cuenta seleccionada.</li>
                </ul>
            </div>
            
            <div class="lg:col-span-5 text-center lg:text-left bg-neutral-50 border border-neutral-100 p-8 rounded-[32px] shadow-inner flex flex-col gap-4" data-aos="fade-left">
                <div class="w-12 h-12 rounded-2xl bg-[#a31a16]/10 text-[#a31a16] flex items-center justify-center mx-auto lg:mx-0 text-xl shadow-inner"><i class="fa-solid fa-user-plus"></i></div>
                <h3 class="text-xl font-black tracking-tight text-neutral-800">¿Listo para empezar a ahorrar?</h3>
                <p class="text-xs text-neutral-500 leading-relaxed font-medium">Acércate a cualquiera de nuestras agencias regionales con los documentos solicitados. Un ejecutivo de servicios configurará y activará tu cuenta de ahorros de forma inmediata.</p>
                <a href="contacto.php" class="bg-[#a31a16] hover:bg-[#7a1310] text-white font-extrabold text-xs py-3.5 rounded-xl uppercase tracking-wide text-center transition-all shadow-md">Solicitar más información</a>
            </div>
        </section>

        <?php include './footer.php' ?>
        <?php include "scripts-v2.php"; ?>
    </body>
</html>
