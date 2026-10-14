<!-- ===== SERVICIOS: Premium Product Grid v3.0 + SKELETON LOADERS ===== -->
<div class="max-w-7xl mx-auto px-6">
    
    <!-- Encabezado del Módulo -->
    <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
        <span class="inline-flex items-center gap-2 bg-[#a31a16]/5 text-[#a31a16] border border-[#a31a16]/10 px-4 py-1.5 rounded-full text-xs font-bold tracking-wide uppercase mb-4">
            <i class="fa-solid fa-star"></i> Portafolio Institucional
        </span>
        <h2 class="text-3xl md:text-4xl font-black text-neutral-800 tracking-tight mb-4">
            Soluciones financieras diseñadas para tu <span class="text-[#a31a16]">crecimiento</span>
        </h2>
        <p class="text-neutral-500 text-sm md:text-base">Explora nuestros productos de ahorro, crédito e inversión estructurados bajo las mejores tasas del mercado cooperativo.</p>
    </div>

    <!-- 🦴 1. CONTENEDOR DE SKELETON LOADERS (Se muestra instantáneamente simulando tus 6 bloques) -->
    <div id="servicios-skeleton" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
        <?php for ($s = 0; $s < 6; $s++) { ?>
        <div class="bg-white rounded-3xl p-8 shadow-soft border border-neutral-100 flex flex-col justify-between h-[340px] animate-pulse">
            <div>
                <!-- Esqueleto del Icono Cuadrado -->
                <div class="w-14 h-14 rounded-2xl bg-neutral-200 dark:bg-slate-700 mb-6"></div>
                <!-- Esqueleto del Título -->
                <div class="h-6 bg-neutral-200 dark:bg-slate-700 w-1/2 rounded mb-4"></div>
                <!-- Esqueleto de la Descripción (2 líneas) -->
                <div class="h-4 bg-neutral-200 dark:bg-slate-700 w-full rounded mb-2"></div>
                <div class="h-4 bg-neutral-200 dark:bg-slate-700 w-5/6 rounded"></div>
            </div>
            <!-- Esqueleto de la Base de la Tarjeta -->
            <div class="flex items-center justify-between pt-6 border-t border-neutral-50/80">
                <div class="h-3 bg-neutral-200 dark:bg-slate-700 w-1/3 rounded"></div>
                <div class="w-10 h-10 rounded-full bg-neutral-50 dark:bg-slate-800"></div>
            </div>
        </div>
        <?php } ?>
    </div>

    <!-- 📦 2. CONTENEDOR DE CONTENIDO REAL (Oculto al inicio mediante la clase hidden de Tailwind) -->
    <div id="servicios-contenido-real" class="hidden">
        <!-- Grid Responsivo de Productos Financieros Original Mantenido -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- BLOQUE 1: CALIFÍCANOS -->
            <a href="contacto.php" class="group relative bg-white rounded-3xl p-8 shadow-soft border border-neutral-100 hover:border-[#a31a16]/20 hover:-translate-y-2 hover:shadow-softhover transition-all duration-300 ease-out flex flex-col justify-between h-[340px]" data-aos="fade-up" data-aos-delay="100">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-[#a31a16]/5 flex items-center justify-center text-[#a31a16] group-hover:bg-[#a31a16] group-hover:text-white transition-all duration-300 shadow-sm mb-6">
                        <i class="fa-solid fa-star-half-stroke text-2xl"></i>
                    </div>
                    <h3 class="font-black text-neutral-800 text-xl mb-3 tracking-tight group-hover:text-[#a31a16] transition-colors">Califícanos</h3>
                    <p class="text-sm text-neutral-500 leading-relaxed">Comparta tu experiencia con nosotros. Tu opinión nos ayuda a mejorar cada día la atención en todas nuestras agencias.</p>
                </div>
                <div class="flex items-center justify-between pt-6 border-t border-neutral-50/80">
                    <span class="text-xs font-bold text-[#a31a16] uppercase tracking-wider">Tu opinión cuenta</span>
                    <div class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-neutral-50 text-neutral-400 group-hover:bg-[#a31a16] group-hover:text-white transition-all duration-300">
                        <i class="fa-solid fa-chevron-right text-sm"></i>
                    </div>
                </div>
            </a>

            <!-- BLOQUE 2: PAGO DE SERVICIOS -->
            <a href="agencias.php" class="group relative bg-white rounded-3xl p-8 shadow-soft border border-neutral-100 hover:border-[#a31a16]/20 hover:-translate-y-2 hover:shadow-softhover transition-all duration-300 ease-out flex flex-col justify-between h-[340px]" data-aos="fade-up" data-aos-delay="200">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-[#a31a16]/5 flex items-center justify-center text-[#a31a16] group-hover:bg-[#a31a16] group-hover:text-white transition-all duration-300 shadow-sm mb-6">
                        <i class="fa-solid fa-receipt text-2xl"></i>
                    </div>
                    <h3 class="font-black text-neutral-800 text-xl mb-3 tracking-tight group-hover:text-[#a31a16] transition-colors">Pago de Servicios</h3>
                    <p class="text-sm text-neutral-500 leading-relaxed">Paga tus servicios básicos, matrículas y otros convenios desde cualquiera de nuestras agencias de forma rápida y segura.</p>
                </div>
                <div class="flex items-center justify-between pt-6 border-t border-neutral-50/80">
                    <span class="text-xs font-bold text-[#a31a16] uppercase tracking-wider">Rápido y Seguro</span>
                    <div class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-neutral-50 text-neutral-400 group-hover:bg-[#a31a16] group-hover:text-white transition-all duration-300">
                        <i class="fa-solid fa-chevron-right text-sm"></i>
                    </div>
                </div>
            </a>
        <!-- Grid Responsivo de Productos Financieros Original Mantenido -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- BLOQUE 1: CALIFÍCANOS -->
            <a href="contacto.php" class="group relative bg-white rounded-3xl p-8 shadow-soft border border-neutral-100 hover:border-[#a31a16]/20 hover:-translate-y-2 hover:shadow-softhover transition-all duration-300 ease-out flex flex-col justify-between h-[340px]" data-aos="fade-up" data-aos-delay="100">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-[#a31a16]/5 flex items-center justify-center text-[#a31a16] group-hover:bg-[#a31a16] group-hover:text-white transition-all duration-300 shadow-sm mb-6">
                        <i class="fa-solid fa-star-half-stroke text-2xl"></i>
                    </div>
                    <h3 class="font-black text-neutral-800 text-xl mb-3 tracking-tight group-hover:text-[#a31a16] transition-colors">Califícanos</h3>
                    <p class="text-sm text-neutral-500 leading-relaxed">Comparta tu experiencia con nosotros. Tu opinión nos ayuda a mejorar cada día la atención en todas nuestras agencias.</p>
                </div>
                <div class="flex items-center justify-between pt-6 border-t border-neutral-50/80">
                    <span class="text-xs font-bold text-[#a31a16] uppercase tracking-wider">Tu opinión cuenta</span>
                    <div class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-neutral-50 text-neutral-400 group-hover:bg-[#a31a16] group-hover:text-white transition-all duration-300">
                        <i class="fa-solid fa-chevron-right text-sm"></i>
                    </div>
                </div>
            </a>

            <!-- BLOQUE 2: PAGO DE SERVICIOS -->
            <a href="agencias.php" class="group relative bg-white rounded-3xl p-8 shadow-soft border border-neutral-100 hover:border-[#a31a16]/20 hover:-translate-y-2 hover:shadow-softhover transition-all duration-300 ease-out flex flex-col justify-between h-[340px]" data-aos="fade-up" data-aos-delay="200">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-[#a31a16]/5 flex items-center justify-center text-[#a31a16] group-hover:bg-[#a31a16] group-hover:text-white transition-all duration-300 shadow-sm mb-6">
                        <i class="fa-solid fa-receipt text-2xl"></i>
                    </div>
                    <h3 class="font-black text-neutral-800 text-xl mb-3 tracking-tight group-hover:text-[#a31a16] transition-colors">Pago de Servicios</h3>
                    <p class="text-sm text-neutral-500 leading-relaxed">Paga tus servicios básicos, matrículas y otros convenios desde cualquiera de nuestras agencias de forma rápida y segura.</p>
                </div>
                <div class="flex items-center justify-between pt-6 border-t border-neutral-50/80">
                    <span class="text-xs font-bold text-[#a31a16] uppercase tracking-wider">Rápido y Seguro</span>
                    <div class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-neutral-50 text-neutral-400 group-hover:bg-[#a31a16] group-hover:text-white transition-all duration-300">
                        <i class="fa-solid fa-chevron-right text-sm"></i>
                    </div>
                </div>
            </a>
            <!-- BLOQUE 5: AHORROS -->
            <a href="tasas-interes.php" class="group relative bg-white rounded-3xl p-8 shadow-soft border border-neutral-100 hover:border-[#a31a16]/20 hover:-translate-y-2 hover:shadow-softhover transition-all duration-300 ease-out flex flex-col justify-between h-[340px]" data-aos="fade-up" data-aos-delay="500">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-[#a31a16]/5 flex items-center justify-center text-[#a31a16] group-hover:bg-[#a31a16] group-hover:text-white transition-all duration-300 shadow-sm mb-6">
                        <i class="fa-solid fa-piggy-bank text-2xl"></i>
                    </div>
                    <h3 class="font-black text-neutral-800 text-xl mb-3 tracking-tight group-hover:text-[#a31a16] transition-colors">Ahorros</h3>
                    <p class="text-sm text-neutral-500 leading-relaxed">Encuentra la cuenta de ahorro que se ajusta a tus metas, con el respaldo de una cooperativa regulada por la SEPS.</p>
                </div>
                <div class="flex items-center justify-between pt-6 border-t border-neutral-50/80">
                    <span class="text-xs font-bold text-[#a31a16] uppercase tracking-wider">Ver cuentas</span>
                    <div class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-neutral-50 text-neutral-400 group-hover:bg-[#a31a16] group-hover:text-white transition-all duration-300">
                        <i class="fa-solid fa-chevron-right text-sm"></i>
                    </div>
                </div>
            </a>

            <!-- BLOQUE 6: INVERSIONES -->
            <a href="tasas-interes.php" class="group relative bg-white rounded-3xl p-8 shadow-soft border border-neutral-100 hover:border-[#a31a16]/20 hover:-translate-y-2 hover:shadow-softhover transition-all duration-300 ease-out flex flex-col justify-between h-[340px]" data-aos="fade-up" data-aos-delay="600">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-[#a31a16]/5 flex items-center justify-center text-[#a31a16] group-hover:bg-[#a31a16] group-hover:text-white transition-all duration-300 shadow-sm mb-6">
                        <i class="fa-solid fa-chart-line text-2xl"></i>
                    </div>
                    <h3 class="font-black text-neutral-800 text-xl mb-3 tracking-tight group-hover:text-[#a31a16] transition-colors">Inversiones</h3>
                    <p class="text-sm text-neutral-500 leading-relaxed">Haz crecer tu dinero con nuestras alternativas de inversión a plazo fijo, pensadas para distintos objetivos y plazos.</p>
                </div>
                <div class="flex items-center justify-between pt-6 border-t border-neutral-50/80">
                    <span class="text-xs font-bold text-[#a31a16] uppercase tracking-wider">Invertir</span>
                    <div class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-neutral-50 text-neutral-400 group-hover:bg-[#a31a16] group-hover:text-white transition-all duration-300">
                        <i class="fa-solid fa-chevron-right text-sm"></i>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- Cierre de servicios-contenido-real -->
</div> <!-- Cierre de max-w-7xl del módulo -->

<!-- 🧠 INTERCAMBIADOR AUTOMÁTICO DE ESQUELETOS -->
<script>
(() => {
    window.addEventListener('load', () => {
        const skeleton = document.getElementById('servicios-skeleton');
        const contenido = document.getElementById('servicios-contenido-real');

        setTimeout(() => {
            if (skeleton && contenido) {
                skeleton.style.display = 'none';
                contenido.classList.remove('hidden');
            }
        }, 600);
    });
})();
</script>
