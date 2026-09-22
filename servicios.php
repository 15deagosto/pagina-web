<?php
require './controler/conexion.php';
include './fn/fn-credito.php';
require './funciones/fn-index.php';
require_once './funciones/fn-utilidades.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();
$dettexto = $fnindex->fnindex_rtextosxtipo(8);
$tituloPagina = 'Servicios';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
    <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">
    <?php include "head-v2.php"; ?>
</head>
<body class="v2 bg-white text-neutral-800">

    <?php include 'header.php'; ?>
    <?php include './partial-hero-interno.php'; ?>

    <!-- ===== NARRATIVA INSTITUCIONAL DE SERVICIOS v3.0 ===== -->
    <section class="py-16 md:py-20 max-w-7xl mx-auto px-6">
        <div class="bg-neutral-50 rounded-[32px] p-8 md:p-12 border border-neutral-100/80 shadow-soft text-center max-w-4xl mx-auto mb-16" data-aos="fade-up">
            <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-3 flex items-center justify-center gap-2">
                <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Eficiencia a tu alcance <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span>
            </div>
            <h2 class="text-3xl md:text-4xl font-black text-neutral-800 tracking-tight mb-6">Nuestros Canales de Atención</h2>
            <div class="text-neutral-600 text-sm md:text-base leading-relaxed font-medium">
                <?php
                if (!empty($dettexto[0]['texto_texto'])) {
                    echo arreglar_mojibake($dettexto[0]['texto_texto']);
                } else {
                    echo '<p>Conoce todos nuestros servicios transaccionales: pago de convenios, transferencias interbancarias, cobro de bonos gubernamentales y recaudaciones, diseñados para ofrecerte total comodidad y seguridad en cada una de nuestras agencias a nivel nacional.</p>';
                }
                ?>
            </div>
        </div>
        <!-- ===== CATALOGO DIGITAL DE SERVICIOS FINTECH v3.0 ===== -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- SERVICIO 1: PAGO DE CONVENIOS -->
            <div class="group bg-white border border-neutral-100 rounded-3xl p-8 shadow-soft hover:border-[#a31a16]/20 hover:-translate-y-2 hover:shadow-softhover transition-all duration-300 flex flex-col justify-between h-72" data-aos="zoom-in" data-aos-delay="100">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-[#a31a16]/5 flex items-center justify-center mb-5 text-[#a31a16] group-hover:bg-[#a31a16] group-hover:text-white transition-colors duration-300 shadow-inner shrink-0">
                        <i class="fa-solid fa-receipt text-xl transition-transform duration-300 group-hover:scale-110"></i>
                    </div>
                    <h3 class="text-lg font-black text-neutral-800 mb-2 group-hover:text-[#a31a16] transition-colors tracking-tight">Pago de Servicios</h3>
                    <p class="text-neutral-500 text-xs leading-relaxed font-medium">Cancela tus planillas de luz, agua, telefonía, internet y matrículas vehiculares de forma inmediata en ventanilla.</p>
                </div>
                <div class="text-[10px] font-black text-neutral-400 uppercase tracking-wider pt-4 border-t border-neutral-50">Recaudación Ágil</div>
            </div>

            <!-- SERVICIO 2: TRANSFERENCIAS -->
            <div class="group bg-white border border-neutral-100 rounded-3xl p-8 shadow-soft hover:border-[#a31a16]/20 hover:-translate-y-2 hover:shadow-softhover transition-all duration-300 flex flex-col justify-between h-72" data-aos="zoom-in" data-aos-delay="200">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-[#a31a16]/5 flex items-center justify-center mb-5 text-[#a31a16] group-hover:bg-[#a31a16] group-hover:text-white transition-colors duration-300 shadow-inner shrink-0">
                        <i class="fa-solid fa-money-bill-transfer text-xl transition-transform duration-300 group-hover:scale-110"></i>
                    </div>
                    <h3 class="text-lg font-black text-neutral-800 mb-2 group-hover:text-[#a31a16] transition-colors tracking-tight">Transferencias SPI</h3>
                    <p class="text-neutral-500 text-xs leading-relaxed font-medium">Envía y recibe fondos hacia cualquier banco o cooperativa del país con total seguridad y acreditación regulada.</p>
                </div>
                <div class="text-[10px] font-black text-neutral-400 uppercase tracking-wider pt-4 border-t border-neutral-50">Conectividad Nacional</div>
            </div>

            <!-- SERVICIO 3: COBRO DE BONOS -->
            <div class="group bg-white border border-neutral-100 rounded-3xl p-8 shadow-soft hover:border-[#a31a16]/20 hover:-translate-y-2 hover:shadow-softhover transition-all duration-300 flex flex-col justify-between h-72" data-aos="zoom-in" data-aos-delay="300">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-[#a31a16]/5 flex items-center justify-center mb-5 text-[#a31a16] group-hover:bg-[#a31a16] group-hover:text-white transition-colors duration-300 shadow-inner shrink-0">
                        <i class="fa-solid fa-hand-holding-heart text-xl transition-transform duration-300 group-hover:scale-110"></i>
                    </div>
                    <h3 class="text-lg font-black text-neutral-800 mb-2 group-hover:text-[#a31a16] transition-colors tracking-tight">Cobro de Bonos</h3>
                    <p class="text-neutral-500 text-xs leading-relaxed font-medium">Punto autorizado para la recaudación del Bono de Desarrollo Humano y demás subsidios del Gobierno Nacional.</p>
                </div>
                <div class="text-[10px] font-black text-neutral-400 uppercase tracking-wider pt-4 border-t border-neutral-50">Respaldo Social</div>
            </div>

            <!-- SERVICIO 4: RED DE AGENCIAS -->
            <div class="group bg-white border border-neutral-100 rounded-3xl p-8 shadow-soft hover:border-[#a31a16]/20 hover:-translate-y-2 hover:shadow-softhover transition-all duration-300 flex flex-col justify-between h-72" data-aos="zoom-in" data-aos-delay="400">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-[#a31a16]/5 flex items-center justify-center mb-5 text-[#a31a16] group-hover:bg-[#a31a16] group-hover:text-white transition-colors duration-300 shadow-inner shrink-0">
                        <i class="fa-solid fa-building-user text-xl transition-transform duration-300 group-hover:scale-110"></i>
                    </div>
                    <h3 class="text-lg font-black text-neutral-800 mb-2 group-hover:text-[#a31a16] transition-colors tracking-tight">Red de Agencias</h3>
                    <p class="text-neutral-500 text-xs leading-relaxed font-medium">Disfruta de una atención personalizada, asesoría financiera y cajeros automáticos en todas nuestras oficinas regionales.</p>
                </div>
                <div class="text-[10px] font-black text-neutral-400 uppercase tracking-wider pt-4 border-t border-neutral-50">Cercanía Total</div>
            </div>

        </div>
    </section>

    <?php include './footer.php' ?>
    <?php include "scripts-v2.php"; ?>
</body>
</html>
