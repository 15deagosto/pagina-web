<footer class="bg-neutral-900 text-neutral-300">
    <div class="max-w-7xl mx-auto px-6 pt-16 pb-8">
        <div class="grid md:grid-cols-4 gap-10 mb-12">
            <div>
                <h4 class="text-white font-bold mb-4">Cooperativa 15 de Agosto</h4>
                <p class="text-sm text-neutral-400 max-w-xs mb-5">Cooperativa de Ahorro y Crédito 15 de Agosto de Pilacoto, regulada por la Superintendencia de Economía Popular y Solidaria (SEPS) -- Segmento 2.</p>
                <div>
                    <span class="text-white font-semibold text-sm">Atención al Cliente</span><br>
                    <a href="https://wa.me/593963860869" target="_blank" class="text-xl font-extrabold text-white hover:text-rojo transition-colors">
                        <i class="fa-brands fa-whatsapp"></i> 0963 860 869
                    </a>
                </div>
            </div>
            <div>
                <h4 class="text-white font-bold mb-4">Somos 15 de Agosto</h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="educacion-financiera.php" class="hover:text-white transition-colors">Educación Financiera</a></li>
                    <li><a href="nuestra-coop.php" class="hover:text-white transition-colors">Nuestra Cooperativa</a></li>
                    <li><a href="transparencia.php" class="hover:text-white transition-colors">Transparencia de la información</a></li>
                    <li><a href="politica-saras.php" class="hover:text-white transition-colors">Política SARAS</a></li>
                    <li><a href="trabaja-nosotros.php" class="hover:text-white transition-colors">Trabaja con nosotros</a></li>
                    <li><a href="reglamento.php" class="hover:text-white transition-colors">Reglamento de Buen Gobierno</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-4">Centro de Ayuda</h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="calificanos.php" class="hover:text-white transition-colors">Ayúdanos a mejorar</a></li>
                    <li><a href="quejas-sugerencias.php" class="hover:text-white transition-colors">Quejas y Reclamos</a></li>
                    <li><a href="ley-proteccion.php" class="hover:text-white transition-colors">Ley de protección de datos</a></li>
                    <li><a href="preguntas-frecuentes.php" class="hover:text-white transition-colors">Preguntas Frecuentes</a></li>
                    <li><a href="contacto.php" class="hover:text-white transition-colors">Contacto</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-4">Síguenos</h4>
                <div class="flex gap-3">
                    <?php
                    $redesf = $fnindex->fnindex_rredes();
                    while ($menuredesf = $redesf->fetch_assoc()) {
                        ?>
                        <a href="<?php echo $menuredesf['url_redes'] ?>" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-rojo transition-colors"><i class="fa-brands <?php echo $menuredesf['icono'] ?>"></i></a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="flex justify-center gap-10 flex-wrap items-center py-8 border-y border-white/10 mb-8">
            <a href="https://www.seps.gob.ec/" target="_blank" class="opacity-70 hover:opacity-100 transition-opacity"><img src="assets/img/logo_superintendencia.png" class="h-11" alt="SEPS"></a>
            <a href="https://www.cosede.gob.ec/" target="_blank" class="opacity-70 hover:opacity-100 transition-opacity"><img src="assets/img/cosede-1.png" class="h-11" alt="COSEDE"></a>
            <a href="https://www.uafe.gob.ec/" target="_blank" class="opacity-70 hover:opacity-100 transition-opacity"><img src="assets/img/logo-UAFE.jpg" class="h-11" alt="UAFE"></a>
            <a href="https://www.finanzaspopulares.gob.ec/" target="_blank" class="opacity-70 hover:opacity-100 transition-opacity"><img src="assets/img/logo-conafis.webp" class="h-11" alt="Finanzas Populares"></a>
        </div>

        <div class="flex flex-wrap justify-between gap-4 text-xs text-neutral-500">
            <p>© <?php echo date('Y'); ?> Derechos Reservados Cooperativa de Ahorro y Crédito 15 de Agosto</p>
            <div class="flex gap-5">
                <a href="politica-seguridad.php" class="hover:text-white transition-colors">Política de Privacidad</a>
                <a href="terminos-condiciones.php" class="hover:text-white transition-colors">Términos y Condiciones</a>
            </div>
        </div>
    </div>

    <?php
    //  FIN DEL RASTREADOR: Suelta el HTML modificado y limpio con la carga diferida lista
    ob_end_flush();
    ?>

</footer>

<!-- ==========================================
      WIDGET DE ASESOR VIRTUAL PRESETADO v1.0 
     ========================================== -->
<div class="fixed bottom-6 left-6 z-[9999999] font-sans">

    <!--  VENTANA FLOTANTE DE CHAT (Oculta de fábrica, controlada por JS) -->
    <div id="chat-virtual-window" class="hidden flex-col w-80 bg-white border border-neutral-100 rounded-3xl shadow-2xl overflow-hidden mb-4 transition-all duration-300 transform scale-95 origin-bottom-left">
        
        <!-- Cabecera de la Ventana (Look Institucional) -->
        <div class="bg-gradient-to-r from-[#a31a16] to-[#7a1310] p-4 text-white flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="relative w-10 h-10 rounded-full bg-white/10 flex items-center justify-center border border-white/20">
                    <i class="fa-solid fa-headset text-lg text-white"></i>
                    <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-green-500 rounded-full border-2 border-[#a31a16] animate-pulse"></span>
                </div>
                <div>
                    <h4 class="text-xs font-black tracking-wide uppercase">Asesor Virtual</h4>
                    <p class="text-[10px] text-red-200 flex items-center gap-1 font-medium"><i class="fa-solid fa-circle text-[6px] text-green-400"></i> En línea</p>
                </div>
            </div>
            <button id="btn-cerrar-chat" class="cursor-pointer text-white/70 hover:text-white transition-colors p-1.5 focus:outline-none">
                <i class="fa-solid fa-chevron-down text-xs"></i>
            </button>
        </div>

        <!-- Cuerpo del Chat (Mensaje de bienvenida) -->
        <div class="p-4 bg-slate-50/50">
            <div class="bg-white border border-neutral-100/80 p-3 rounded-2xl rounded-tl-none shadow-sm max-w-[90%]">
                <p class="text-xs text-neutral-700 leading-relaxed font-medium">¡Hola! Bienvenido a la <strong>Cooperativa 15 de Agosto</strong>. 👋</p>
                <p class="text-[11px] text-neutral-500 leading-relaxed mt-1">¿En qué área o producto financiero necesitas asesoría el día de hoy?</p>
            </div>
        </div>

        <!--  ENRUTADOR DE CANALES -->
        <div class="p-4 pt-0 border-t border-neutral-50 bg-white flex flex-col gap-2">
            <span class="text-[9px] font-black text-neutral-400 uppercase tracking-wider block mt-3 mb-1">Selecciona una opción:</span>
            
            <!-- Canal 1: Créditos -->
            <a href="#" id="canal-creditos" class="no-underline flex items-center justify-between p-3 rounded-xl border border-neutral-100 hover:border-[#a31a16]/20 hover:bg-[#a31a16]/5 transition-all group">
                <div class="flex items-center gap-2.5">
                    <i class="fa-solid fa-hand-holding-dollar text-sm text-[#a31a16]"></i>
                    <span class="text-xs font-bold text-neutral-700 group-hover:text-[#a31a16] transition-colors">Asesoría de Créditos</span>
                </div>
                <i class="fa-brands fa-whatsapp text-sm text-green-500 opacity-60 group-hover:opacity-100 transition-opacity"></i>
            </a>

            <!-- Canal 2: Ahorros e Inversiones -->
            <a href="#" id="canal-banca" class="no-underline flex items-center justify-between p-3 rounded-xl border border-neutral-100 hover:border-[#a31a16]/20 hover:bg-[#a31a16]/5 transition-all group">
                <div class="flex items-center gap-2.5">
                    <i class="fa-solid fa-piggy-bank text-sm text-[#a31a16]"></i>
                    <span class="text-xs font-bold text-neutral-700 group-hover:text-[#a31a16] transition-colors">Ahorros e Inversiones</span>
                </div>
                <i class="fa-brands fa-whatsapp text-sm text-green-500 opacity-60 group-hover:opacity-100 transition-opacity"></i>
            </a>
        </div>
    </div>

    <!--  BOTÓN FLOTANTE PRINCIPAL (Fijo abajo a la izquierda) -->
    <button id="btn-toggle-chat" class="cursor-pointer w-12 h-12 rounded-full bg-[#a31a16] text-white flex items-center justify-center shadow-xl hover:bg-[#7a1310] hover:scale-105 transition-all focus:outline-none relative">
        <i id="chat-icon-main" class="fa-solid fa-comments text-lg"></i>
        <span id="chat-notificacion" class="absolute -top-0.5 -right-0.5 w-3.5 h-3.5 bg-green-500 text-[9px] font-black text-white flex items-center justify-center rounded-full border-2 border-slate-50">1</span>
    </button>

</div>

<!-- ==========================================
      BANNER DE CONSENTIMIENTO LOPDP v1.0 
     ========================================== -->
<div id="banner-cookies-lopdp" class="hidden fixed bottom-24 md:bottom-6 right-6 left-6 md:left-auto md:max-w-md bg-white border border-neutral-100 rounded-3xl shadow-2xl p-5 z-50 transition-all duration-500 transform translate-y-10 opacity-0 flex flex-col gap-4 font-sans">

    <div class="flex items-start gap-3.5">
        <!-- Icono Institucional de Privacidad -->
        <div class="w-10 h-10 rounded-2xl bg-red-50 flex items-center justify-center text-[#a31a16] flex-shrink-0 shadow-sm">
            <i class="fa-solid fa-cookie-bite text-lg"></i>
        </div>
        <div>
            <h4 class="text-sm font-black text-neutral-800 tracking-tight mb-1">Aviso de Privacidad y Cookies</h4>
            <p class="text-neutral-500 text-xs leading-relaxed">
                En la <strong>Cooperativa 15 de Agosto</strong> utilizamos cookies propias (esenciales, siempre activas) para la seguridad de tu sesión y el funcionamiento del sitio. Puedes aceptar también las cookies no esenciales de rendimiento, o rechazarlas.
            </p>
        </div>
    </div>

    <!-- Enlaces y Botones Regulados -->
    <div class="flex flex-col gap-3 border-t border-neutral-50 pt-3.5 mt-1">
        <div class="flex items-center gap-3">
            <button id="btn-rechazar-cookies" class="cursor-pointer flex-1 inline-flex items-center justify-center px-4 py-2.5 rounded-xl bg-white border border-neutral-200 hover:border-neutral-300 text-neutral-600 font-extrabold text-[11px] tracking-wider uppercase transition-all duration-300 focus:outline-none">
                Rechazar no esenciales
            </button>
            <button id="btn-aceptar-cookies" class="cursor-pointer flex-1 inline-flex items-center justify-center px-4 py-2.5 rounded-xl bg-[#a31a16] hover:bg-red-800 text-white font-extrabold text-[11px] tracking-wider uppercase transition-all duration-300 shadow-sm hover:shadow-md focus:outline-none">
                Aceptar todas
            </button>
        </div>
        <!-- Enlace a tu archivo oficial de políticas -->
        <a href="cookies.php" class="text-xs text-neutral-400 font-bold hover:text-[#a31a16] transition-colors no-underline text-center">
            <i class="fa-solid fa-shield-halved text-[10px]"></i> Leer política de cookies
        </a>
    </div>

</div>

<!-- ==========================================
      PANEL DESLIZABLE: COMPARADOR FINTECH v1.0
     ========================================== -->
<!-- Fondo traslúcido de fondo (Oculto de fábrica) -->
<div id="comparador-overlay" class="hidden fixed inset-0 bg-slate-900/40 backdrop-blur-sm z-[99999] transition-opacity duration-300 opacity-0"></div>

<!-- Persiana Lateral Deslizable (Se esconde a la derecha mediante translate-x-full) -->
<div id="comparador-drawer" class="fixed top-0 right-0 h-full w-full sm:max-w-xl bg-white border-l border-neutral-100 shadow-2xl z-[100000] flex flex-col transition-transform duration-500 transform translate-x-full font-sans">
    
    <!-- Cabecera Premium del Comparador -->
    <div class="p-6 border-b border-neutral-50 flex items-center justify-between bg-neutral-50/50">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-2xl bg-red-50 flex items-center justify-center text-[#a31a16] shadow-sm">
                <i class="fa-solid fa-chart-columns text-base"></i>
            </div>
            <div>
                <h3 class="text-sm font-black text-neutral-800 tracking-tight uppercase">Comparador Financiero</h3>
                <p class="text-[11px] text-neutral-500 font-medium">Tasas y plazos referenciales SEPS / BCE</p>
            </div>
        </div>
        <!-- Botón circular de cierre X -->
        <button id="btn-cerrar-comparador" class="cursor-pointer w-8 h-8 rounded-full bg-slate-100 text-slate-500 hover:bg-red-50 hover:text-[#a31a16] transition-colors flex items-center justify-center focus:outline-none" aria-label="Cerrar comparador">
            <i class="fa-solid fa-xmark text-sm"></i>
        </button>
    </div>

    <!--  SWAP DE PESTAÑAS FINTECH (Controla el cambio en caliente) -->
    <div class="p-6 pb-2">
        <div class="bg-slate-100 p-1 rounded-2xl flex gap-1">
            <button id="tab-creditos" class="cursor-pointer w-full py-2.5 text-xs font-black rounded-xl transition-all shadow-sm bg-[#a31a16] text-white focus:outline-none">
                <i class="fa-solid fa-hand-holding-dollar mr-1"></i> Créditos
            </button>
            <button id="tab-ahorros" class="cursor-pointer w-full py-2.5 text-xs font-bold rounded-xl transition-all text-slate-600 hover:text-neutral-800 bg-transparent focus:outline-none">
                <i class="fa-solid fa-piggy-bank mr-1"></i> Ahorro e Inversión
            </button>
        </div>
    </div>

    <!--  CONTENEDOR DE TABLAS (Se llenará dinámicamente con JavaScript) -->
    <div class="flex-1 overflow-y-auto p-6 pt-2">
        <div id="contenido-comparador-tarjetas" class="flex flex-col gap-3">
            <!-- Las tarjetas lado a lado / apiladas se inyectarán aquí limpias -->
        </div>
    </div>

    <div class="px-6 pb-5 pt-1 border-t border-neutral-50">
        <p class="text-[10px] text-neutral-400 leading-relaxed text-center">* Tasas nominales referenciales reguladas por la SEPS. Pueden variar según evaluación crediticia. Consulta con un asesor antes de contratar.</p>
    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const overlay = document.getElementById('comparador-overlay');
    const drawer = document.getElementById('comparador-drawer');
    const btnCerrar = document.getElementById('btn-cerrar-comparador');
    const tabCreditos = document.getElementById('tab-creditos');
    const tabAhorros = document.getElementById('tab-ahorros');
    const contenedorTarjetas = document.getElementById('contenido-comparador-tarjetas');

  
    // BASE DE DATOS CON PRODUCTOS REALES Y ACTIVOS DEL CATÁLOGO
    const datosComparador = {
        creditos: [
            { icono: "fa-solid fa-seedling", titulo: "Microcrédito", tasa: "Desde 20,09%*", plazo: "Hasta 108 meses · hasta $150.000", ventaja: "Financiamiento para impulsar o hacer crecer tu negocio o emprendimiento.", destacado: true, link: "simulador-credito.php" },
            { icono: "fa-solid fa-person-dress", titulo: "Credi Mujer Emprende", tasa: "19,90%*", plazo: "Hasta 36 meses · hasta $3.000", ventaja: "Crédito exclusivo para impulsar los negocios liderados por mujeres.", destacado: false, link: "simulador-credito.php" },
            { icono: "fa-solid fa-handshake", titulo: "Crédito Socio Fiel", tasa: "14,99%*", plazo: "Hasta 48 meses · hasta $15.000", ventaja: "Tasa preferencial y condiciones especiales para socios activos.", destacado: false, link: "simulador-credito.php" }
        ],
        ahorros: [
            { icono: "fa-solid fa-sack-dollar", titulo: "Depósito a Plazo Fijo", tasa: "5,00% a 9,00%*", plazo: "Desde 90 días", ventaja: "Haz crecer tu capital con una tasa fija pactada desde el inicio.", destacado: true, link: "detprod-inversion-vencimiento.php?id=53" },
            { icono: "fa-solid fa-wallet", titulo: "Ahorro Vista", tasa: "Hasta 2,00%*", plazo: "Disponibilidad inmediata", ventaja: "Tu cuenta de ahorros de siempre, con intereses según tu saldo.", destacado: false, link: "detprod-ahorro.php?id=81" },
            { icono: "fa-solid fa-graduation-cap", titulo: "Ahorro Estudiantil", tasa: "3,00% anual*", plazo: "Apertura desde $3", ventaja: "Pensado para que los más jóvenes construyan el hábito del ahorro.", destacado: false, link: "detprod-ahorro.php?id=125" }
        ]
    };


    //  2. FUNCIÓN PARA PINTAR LAS TARJETAS LADO A LADO / APILADAS
    const renderizarTabla = (tipo) => {
        const productos = datosComparador[tipo];
        if (!contenedorTarjetas || !productos) return;

        contenedorTarjetas.innerHTML = productos.map(p => `
            <div class="${p.destacado ? 'bg-red-50/40 border-[#a31a16]/15' : 'bg-white border-neutral-100'} border rounded-2xl p-4 shadow-sm flex flex-col gap-3 transition-all duration-300 hover:shadow-md hover:-translate-y-0.5">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-xl ${p.destacado ? 'bg-[#a31a16] text-white' : 'bg-red-50 text-[#a31a16]'} flex items-center justify-center shrink-0">
                        <i class="${p.icono} text-sm"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between gap-2">
                            <h4 class="text-xs font-black text-neutral-800 uppercase tracking-tight truncate">${p.titulo}</h4>
                            <span class="shrink-0 text-xs font-black tracking-tight text-[#a31a16] bg-white border border-[#a31a16]/15 rounded-full px-2.5 py-1">${p.tasa}</span>
                        </div>
                        <p class="text-[10px] text-neutral-400 font-bold mt-1 flex items-center gap-1">
                            <i class="fa-regular fa-clock"></i> ${p.plazo}
                        </p>
                    </div>
                </div>
                <p class="text-[11px] text-neutral-500 leading-relaxed">${p.ventaja}</p>
                <a href="${p.link}" class="self-end inline-flex items-center justify-center px-4 py-2 rounded-xl bg-white border border-neutral-200 hover:border-[#a31a16] text-neutral-700 hover:text-[#a31a16] text-[10px] font-black uppercase tracking-wider transition-all gap-1.5 no-underline shadow-sm">
                    Ver detalle <i class="fa-solid fa-arrow-right text-[9px]"></i>
                </a>
            </div>
        `).join('');
    };

    //  3. CONTROL DE PESTAÑAS (SWAP EN CALIENTE)
    const activarTab = (tabActiva, tabInactiva, tipo) => {
        tabActiva.classList.remove('bg-transparent', 'text-slate-600', 'font-bold');
        tabActiva.classList.add('bg-[#a31a16]', 'text-white', 'font-black');
        tabInactiva.classList.remove('bg-[#a31a16]', 'text-white', 'font-black');
        tabInactiva.classList.add('bg-transparent', 'text-slate-600', 'font-bold');
        renderizarTabla(tipo);
    };

    if (tabCreditos && tabAhorros) {
        tabCreditos.addEventListener('click', () => activarTab(tabCreditos, tabAhorros, 'creditos'));
        tabAhorros.addEventListener('click', () => activarTab(tabAhorros, tabCreditos, 'ahorros'));
    }

    //  4. FUNCIONES GLOBALES PARA ABRIR Y CERRAR LA PERSIANA LATERAL
    window.abrirComparadorFintech = () => {
        if (overlay && drawer) {
            renderizarTabla('creditos'); // Arranca mostrando créditos por defecto
            activarTab(tabCreditos, tabAhorros, 'creditos');
            
            overlay.classList.remove('hidden');
            drawer.classList.remove('hidden');
            void drawer.offsetWidth; // Fuerza el reflow gráfico del navegador
            
            overlay.classList.add('opacity-100');
            drawer.classList.remove('translate-x-full');
            drawer.classList.add('translate-x-0');
        }
    };

    const cerrarComparadorFintech = () => {
        if (overlay && drawer) {
            overlay.classList.remove('opacity-100');
            drawer.classList.remove('translate-x-0');
            drawer.classList.add('translate-x-full');
            setTimeout(() => {
                overlay.classList.add('hidden');
                drawer.classList.add('hidden');
            }, 500);
        }
    };

    if (btnCerrar && overlay) {
        btnCerrar.addEventListener('click', cerrarComparadorFintech);
        overlay.addEventListener('click', cerrarComparadorFintech);
    }
});
</script>


<script>
document.addEventListener('DOMContentLoaded', () => {
    const bannerCookies = document.getElementById('banner-cookies-lopdp');
    const btnAceptarCookies = document.getElementById('btn-aceptar-cookies');
    const btnRechazarCookies = document.getElementById('btn-rechazar-cookies');

    if (bannerCookies && btnAceptarCookies && btnRechazarCookies) {
        //  1. VERIFICACIÓN LEGAL EN LA MEMORIA DEL NAVEGADOR
        // Revisa si ya existe una decisión guardada (aceptado o rechazado)
        const consentimientoGuardado = localStorage.getItem('coop15Agosto_cookies_consent');

        if (!consentimientoGuardado) {
            //  Si no ha decidido, espera 1.2 segundos y levanta el banner de forma elegante
            setTimeout(() => {
                bannerCookies.classList.remove('hidden');
                // Forzamos un pequeño reflow para activar las transiciones visuales de Tailwind
                void bannerCookies.offsetWidth;
                bannerCookies.classList.remove('translate-y-10', 'opacity-0');
                bannerCookies.classList.add('translate-y-0', 'opacity-100');
            }, 1200);
        }

        //  2. CIERRA EL BANNER Y GUARDA LA DECISIÓN TOMADA
        const cerrarBannerCookies = (decision) => {
            bannerCookies.classList.remove('translate-y-0', 'opacity-100');
            bannerCookies.classList.add('translate-y-10', 'opacity-0');
            localStorage.setItem('coop15Agosto_cookies_consent', decision);
            setTimeout(() => {
                bannerCookies.classList.add('hidden');
            }, 500);
        };

        btnAceptarCookies.addEventListener('click', (e) => {
            e.stopPropagation();
            cerrarBannerCookies('aceptado');
        });

        btnRechazarCookies.addEventListener('click', (e) => {
            e.stopPropagation();
            cerrarBannerCookies('rechazado');
        });
    }
});
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const btnToggleChat = document.getElementById('btn-toggle-chat');
    const chatWindow = document.getElementById('chat-virtual-window');
    const btnCerrarChat = document.getElementById('btn-cerrar-chat');
    const chatNotificacion = document.getElementById('chat-notificacion');
    const chatIconMain = document.getElementById('chat-icon-main');

    // 1. FUNCIÓN PARA ABRIR O MINIMIZAR EL CHAT
    if (btnToggleChat && chatWindow) {
        btnToggleChat.addEventListener('click', (e) => {
            e.stopPropagation();
            
            if (chatWindow.classList.contains('hidden')) {
                // Abre el chat quitando el candado oculto y aplicando animación
                chatWindow.classList.remove('hidden', 'scale-95', 'opacity-0');
                chatWindow.classList.add('flex', 'scale-100', 'opacity-100');
                
                // Transforma el icono de mensajes en una X de cierre dinámico
                if(chatIconMain) chatIconMain.className = 'fa-solid fa-xmark text-lg';
                
                // Oculta la notificación verde de "1 mensaje pendiente" de forma limpia
                if (chatNotificacion) chatNotificacion.classList.add('hidden');
            } else {
                // Si ya estaba abierto, lo minimiza
                chatWindow.classList.remove('flex', 'scale-100', 'opacity-100');
                chatWindow.classList.add('hidden', 'scale-95', 'opacity-0');
                if(chatIconMain) chatIconMain.className = 'fa-solid fa-comments text-lg';
            }
        });
    }

    // 2. FUNCIÓN PARA CERRAR DESDE LA FLECHA DE LA CABECERA
    if (btnCerrarChat && chatWindow) {
        btnCerrarChat.addEventListener('click', (e) => {
            e.stopPropagation();
            chatWindow.classList.remove('flex', 'scale-100', 'opacity-100');
            chatWindow.classList.add('hidden', 'scale-95', 'opacity-0');
            if(chatIconMain) chatIconMain.className = 'fa-solid fa-comments text-lg';
        });
    }
});

    // 3. ENRUTADOR DE RESPUESTAS AUTOMÁTICAS PARA ASESORES
    const canalCreditos = document.getElementById('canal-creditos');
    const canalBanca = document.getElementById('canal-banca');

    // CONFIGURACIÓN DE NÚMEROS TELEFÓNICOS CORPORATIVOS DE LA COOPERATIVA
    // (Cambien estos números de prueba por los teléfonos reales del personal de TI y Crédito)
    const telefonoCreditos = "593963860869"; // Formato internacional: código país (593) + número
    const telefonoAhorros = "593963860869";

    // Enlace para el canal de Créditos
    if (canalCreditos) {
        // Texto automatizado que aparecerá en el teclado del socio
        const mensajeCredito = encodeURIComponent("Hola, me comunico desde el portal web. Deseo solicitar asesoría sobre los requisitos para un Microcrédito Inmediato.");

        canalCreditos.setAttribute('href', "https://wa.me/" + telefonoCreditos + "?text=" + mensajeCredito);
        canalCreditos.setAttribute('target', '_blank');
    }

    // Enlace para el canal de Ahorros e Inversiones
    if (canalBanca) {
        const mensajeBanca = encodeURIComponent("Hola, me comunico desde el portal web. Deseo asesoría sobre cuentas de ahorro e inversiones a plazo fijo.");

        canalBanca.setAttribute('href', "https://wa.me/" + telefonoAhorros + "?text=" + mensajeBanca);
        canalBanca.setAttribute('target', '_blank');
    }

</script>


