<?php
require './controler/conexion.php';
require './funciones/fn-index.php';
require_once './funciones/fn-utilidades.php';
$con = new Conecciones();
$fnindex = new Fn_index();
$tituloPagina = 'Califícanos';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Califícanos - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
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

        <!-- ===== 🖼️ HERO AREA UNIFICADA: Gradiente Rojo Corporativo v4.0 ===== -->
        <div class="w-full bg-gradient-to-br from-[#7a1310] to-[#a31a16] h-[220px] md:h-[260px] flex items-center border-b border-[#7a1310]/20 shadow-inner">
            <div class="max-w-7xl mx-auto px-6 w-full text-center">
                <div data-aos="fade-up" data-aos-duration="800">
                    <h2 class="text-3xl md:text-5xl font-black text-white tracking-tight mb-3 drop-shadow-sm">
                        Tu Opinión nos Consolida
                    </h2>
                    <div class="text-xs md:text-sm font-bold text-white/70 tracking-wide">
                        <a href="index.php" class="hover:text-white transition-colors">Inicio</a> 
                        <i class="fa-solid fa-angle-right text-[10px] mx-2 opacity-50"></i> 
                        <span class="text-[#ffd9d6] font-extrabold">Calificación de Servicio</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== SECCIÓN CENTRAL DE LA ENCUESTA ===== -->
        <section class="py-16 md:py-24 max-w-xl mx-auto px-6">
            <div class="text-center mb-10" data-aos="fade-up">
                <div class="text-[#a31a16] font-bold uppercase text-xs tracking-widest mb-2 flex items-center justify-center gap-2">
                    <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span> Control de Calidad COAC <span class="w-6 h-0.5 bg-[#a31a16] inline-block"></span>
                </div>
                <h2 class="text-3xl font-black text-neutral-800 tracking-tight mb-3">Ayúdanos a mejorar</h2>
                <p class="text-neutral-500 text-sm leading-relaxed font-medium">Trabajamos diariamente para brindarte un servicio seguro, transparente y de calidad. Cuéntanos cómo fue tu experiencia en nuestras agencias; la información recopilada se trata de forma estrictamente confidencial.</p>
            </div>

            <!-- Formulario Premium Amarrado a tu Lógica AJAX original -->
            <form id="formularioContacto" class="space-y-6 bg-gradient-to-br from-white to-neutral-50 border border-neutral-100 rounded-3xl shadow-soft p-6 md:p-8" data-aos="fade-up">
                <input type="hidden" name="iopc" value="3">
                
                <div class="flex flex-col gap-2">
                    <label class="font-extrabold text-neutral-700 text-xs uppercase tracking-wider"><i class="fa-solid fa-building-user text-[#a31a16] mr-1"></i> Sucursal visitada*</label>
                    <select name="agencia_eval" required class="w-full bg-white border border-neutral-200 focus:border-[#a31a16]/40 rounded-xl px-4 py-3.5 text-neutral-800 font-semibold outline-none transition-all text-sm cursor-pointer shadow-inner-sm">
                        <option value="">Seleccione una sucursal regional</option>
                        <?php
                        $detagencia = $fnindex->fnindex_ragencia();
                        while ($menuagencia = $detagencia->fetch_assoc()) {
                            ?>
                            <option value="<?php echo htmlspecialchars($menuagencia['nombre_nosotros']) ?>"><?php echo htmlspecialchars($menuagencia['nombre_nosotros']) ?></option>
                        <?php } ?>
                    </select>
                </div>
                <!-- Bloque de Calificación por Estrellas Interactivas -->
                <div class="flex flex-col gap-2">
                    <label class="font-extrabold text-neutral-700 text-xs uppercase tracking-wider"><i class="fa-solid fa-star-half-stroke text-[#a31a16] mr-1"></i> ¿Cómo califica la atención recibida?*</label>
                    <div class="flex gap-3 text-4xl py-1" id="rating-stars">
                        <?php for ($i = 1; $i <= 5; $i++) { ?>
                            <label class="cursor-pointer text-neutral-300 star transition-all duration-200 hover:scale-110" data-valor="<?php echo $i ?>">
                                <input type="radio" name="rating_eval" value="<?php echo $i ?>" class="hidden" required>★
                            </label>
                        <?php } ?>
                    </div>
                </div>

                <!-- Campo de Entrada: Comentarios -->
                <div class="flex flex-col gap-2">
                    <label class="font-extrabold text-neutral-700 text-xs uppercase tracking-wider"><i class="fa-solid fa-comment-dots text-[#a31a16] mr-1"></i> Comentario adicional</label>
                    <textarea name="comentario_eval" rows="4" placeholder="Escribe tu comentario o sugerencia aquí (opcional)" class="w-full bg-white border border-neutral-200 focus:border-[#a31a16]/40 rounded-xl px-4 py-3.5 text-neutral-800 font-semibold outline-none transition-all text-sm resize-none shadow-inner-sm"></textarea>
                </div>

                <!-- Contenedor del resultado AJAX de tu Core original -->
                <div id="resultado" class="empty:hidden my-1"></div>

                <!-- Botón de Envío Premium con Bordes Suavizados -->
                <div class="pt-2">
                    <button onclick="enviarContacto()" type="button" class="w-full bg-[#a31a16] hover:bg-[#7a1310] text-white font-extrabold py-4 rounded-xl shadow-lg hover:shadow-[#a31a16]/20 hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center gap-2 tracking-wide uppercase text-sm">
                        <i class="fa-solid fa-paper-plane text-xs opacity-90"></i> Enviar Evaluación
                    </button>
                </div>
            </form>
        </section>

        <!-- Script Utilitario Mejorado para la Iluminación de Estrellas con nuestro Rojo Institucional -->
        <script>
            (function () {
                var stars = document.querySelectorAll('#rating-stars .star');
                stars.forEach(function (star) {
                    star.addEventListener('click', function () {
                        var valor = parseInt(star.dataset.valor);
                        stars.forEach(function (s) {
                            // Cambiamos dinámicamente las clases utilizando nuestro rojo corporativo #a31a16
                            if (parseInt(s.dataset.valor) <= valor) {
                                s.style.color = '#a31a16';
                            } else {
                                s.style.color = '#d4d4d4';
                            }
                        });
                    });
                });
            })();
        </script>

        <!--===== FOOTER AREA =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>

        <?php include "scripts-v2.php"; ?>
    </body>
</html>
