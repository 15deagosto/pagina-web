<?php
require './controler/conexion.php';
include './fn/fn-credito.php';
require './funciones/fn-index.php';
require_once './funciones/fn-utilidades.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();
$tituloPagina = 'Reglamento de Privacidad';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reglamento de Tratamiento de Datos - COAC 15 de Agosto</title>
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

        <!-- 🟥 1. LA FRANJA ROJA DE SIEMPRE: Gradiente Rojo Corporativo con Texto Blanco -->
        <div class="w-full bg-gradient-to-br from-[#7a1310] to-[#a31a16] h-[200px] md:h-[240px] flex items-center border-b border-[#7a1310]/20 shadow-inner">
            <div class="max-w-7xl mx-auto px-6 w-full text-center">
                <div data-aos="fade-up" data-aos-duration="800">
                    <h2 class="text-3xl md:text-5xl font-black text-white tracking-tight mb-3 drop-shadow-sm">
                        Reglamento de Privacidad
                    </h2>
                    <div class="text-xs md:text-sm font-bold text-white/70 tracking-wide">
                        <a href="index.php" class="hover:text-white transition-colors">Inicio</a> 
                        <i class="fa-solid fa-angle-right text-[10px] mx-2 opacity-50"></i> 
                        <span class="text-[#ffd9d6] font-extrabold">Aviso de Privacidad Completo</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- 🖼 2. DEBAJO DE LA FRANJA ROJA: Tu imagen original banner-consejo.jpg a lo largo sin marcos -->
        <div class="w-full bg-white overflow-hidden pt-10" data-aos="fade-up" data-aos-delay="100">
            <div class="max-w-7xl mx-auto px-6">
                <img src="assets/img/banner-consejo.jpg" alt="Reglamento COAC" class="w-full h-auto max-h-[360px] md:max-h-[420px] object-contain mx-auto rounded-3xl shadow-sm">
            </div>
        </div>

        <!-- ===== 🏛 3. CUERPO DE DECLARACIONES EN ACORDEONES PREMIUM ===== -->
        <section class="py-16 md:py-24 max-w-4xl mx-auto px-6">
            <div class="bg-neutral-50 rounded-3xl p-6 md:p-8 border border-neutral-100 shadow-soft mb-10" data-aos="fade-up">
                <p class="text-neutral-600 text-xs md:text-sm leading-relaxed text-justify font-medium">
                    La Cooperativa de Ahorro y Crédito <strong>“15 DE AGOSTO”</strong> Ltda., en adelante “Cooperativa”, en atención y cumplimiento a la <strong>LEY ORGÁNICA DE PROTECCIÓN DE DATOS PERSONALES</strong> informa a socios y clientes, acerca del tratamiento de sus datos personales. El contenido del presente documento es estrictamente informativo.
                </p>
            </div>

            <div class="space-y-4">
                
                <!-- ACORDEÓN 1: GLOSARIO -->
                <details class="group bg-white border border-neutral-100 rounded-2xl shadow-soft overflow-hidden transition-all duration-300 group-open:border-[#a31a16]/30" data-aos="fade-up" open>
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 px-6 py-5 font-black text-neutral-800 hover:text-[#a31a16] transition-colors select-none text-sm md:text-base">
                        <span>a. Glosario de términos oficiales</span>
                        <div class="w-7 h-7 rounded-full bg-neutral-50 flex items-center justify-center text-neutral-400 group-hover:bg-[#a31a16]/5 group-hover:text-[#a31a16] transition-all group-open:rotate-180 shrink-0"><i class="fa-solid fa-chevron-down text-[10px]"></i></div>
                    </summary>
                    <div class="px-6 pb-6 text-neutral-600 text-xs md:text-sm leading-relaxed space-y-4 border-t border-neutral-50/50 pt-4 font-medium text-justify">
                        <p><strong>Titular:</strong> Persona Natural o Jurídica cuyos datos personales serán objeto de tratamiento.</p>
                        <p><strong>Responsable del tratamiento:</strong> Persona natural o jurídica pública o privada, autoridad pública u otro organismo que sola o conjuntamente trate datos personales a nombre y por cuenta de un responsable de tratamiento de datos personales.</p>
                        <p><strong>Datos sensibles:</strong> Categorías especiales de datos, como origen racial o étnico, salud, información genética, creencias, afiliación sindical, opiniones políticas, preferencia sexual; que afectan la esfera más íntima de la persona, o cuyo mal uso pueda ser causa de discriminación o provocarle un riesgo grave.</p>
                        <p><strong>Tratamiento:</strong> Cualquier operación realizada con datos personales (sean automatizadas o no), que incluyen: recopilar, registrar, organizar, estructurar, almacenar, modificar, consultar, usar, publicar, combinar, borrar y destruir datos.</p>
                        <p><strong>Base de datos:</strong> Conjunto estructurado de datos que pertenecen a un mismo contexto, y que pueden almacenar grandes cantidades de información, de manera que se puede consultar, insertar, acceder, administrar, actualizar, eliminar fácilmente.</p>
                        <p><strong>Dato Personal:</strong> Dato que por sí solo o en conjunto con otros, permite identificar o hace identificable a una persona natural directa o indirectamente.</p>
                        <p><strong>Autorización:</strong> Manifestación de voluntad libre, específica, informada e inequívoca, brindada por el titular para el posterior tratamiento de sus datos.</p>
                    </div>
                </details>
                <!-- ACORDEÓN 2: ACERCA DEL TRATAMIENTO Y RESPONSABLE -->
                <details class="group bg-white border border-neutral-100 rounded-2xl shadow-soft overflow-hidden transition-all duration-300 group-open:border-[#a31a16]/30" data-aos="fade-up">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 px-6 py-5 font-black text-neutral-800 hover:text-[#a31a16] transition-colors select-none text-sm md:text-base">
                        <span>b. Acerca del tratamiento de datos personales y destinatarios</span>
                        <div class="w-7 h-7 rounded-full bg-neutral-50 flex items-center justify-center text-neutral-400 group-hover:bg-[#a31a16]/5 group-hover:text-[#a31a16] transition-all group-open:rotate-180 shrink-0"><i class="fa-solid fa-chevron-down text-[10px]"></i></div>
                    </summary>
                    <div class="px-6 pb-6 text-neutral-600 text-xs md:text-sm leading-relaxed space-y-5 border-t border-neutral-50/50 pt-4 font-medium text-justify">
                        <div class="bg-neutral-50 p-4 rounded-xl border border-neutral-100/60">
                            <h4 class="font-black text-neutral-800 text-sm mb-2 uppercase tracking-wide">Responsable Institucional:</h4>
                            <p class="font-extrabold text-[#a31a16] mb-3">Cooperativa de Ahorro y Crédito “15 DE AGOSTO” Ltda.</p>
                            <ul class="space-y-1.5 text-xs font-bold text-neutral-500">
                                <li><i class="fa-solid fa-location-dot text-[#a31a16] mr-1.5"></i> <strong>Dirección:</strong> Pilacoto, San Juan de Pastocalle, Latacunga, Cotopaxi.</li>
                                <li><i class="fa-solid fa-phone text-[#a31a16] mr-1.5"></i> <strong>Teléfono:</strong> (03) 271-9122</li>
                                <li><i class="fa-solid fa-envelope text-[#a31a16] mr-1.5"></i> <strong>Correo:</strong> protecciondatos@cooperativa15deagosto.fin.ec</li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="font-black text-neutral-800 text-xs uppercase tracking-wider mb-2">Finalidad de la Recopilación:</h4>
                            <p>La Cooperativa utilizará sus datos personales para la realización exclusiva de actividades de intermediación financiera, optimización de productos y servicios transaccionales.</p>
                        </div>

                        <div>
                            <h4 class="font-black text-neutral-800 text-xs uppercase tracking-wider mb-2">Destinatarios y Transferencias:</h4>
                            <p>La Cooperativa no compartirá los datos personales de sus socios y clientes con terceros, salvo autorización expresa del titular o requerimiento formal de una autoridad legal o competente según lo prescribe la norma.</p>
                        </div>

                        <div>
                            <h4 class="font-black text-neutral-800 text-xs uppercase tracking-wider mb-2">Derechos del Titular:</h4>
                            <p>El titular de los datos en cualquier momento podrá ejercer sus derechos respecto a la protección de estos, de conformidad con lo prescrito en la Ley Orgánica de Protección de Datos Personales.</p>
                        </div>
                    </div>
                </details>

                <!-- ACORDEÓN 3: POLÍTICA GENERAL DE SEGURIDAD -->
                <details class="group bg-white border border-neutral-100 rounded-2xl shadow-soft overflow-hidden transition-all duration-300 group-open:border-[#a31a16]/30" data-aos="fade-up">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 px-6 py-5 font-black text-neutral-800 hover:text-[#a31a16] transition-colors select-none text-sm md:text-base">
                        <span>c y d. Uso y Política General de Seguridad de la Información</span>
                        <div class="w-7 h-7 rounded-full bg-neutral-50 flex items-center justify-center text-neutral-400 group-hover:bg-[#a31a16]/5 group-hover:text-[#a31a16] transition-all group-open:rotate-180 shrink-0"><i class="fa-solid fa-chevron-down text-[10px]"></i></div>
                    </summary>
                    <div class="px-6 pb-6 text-neutral-600 text-xs md:text-sm leading-relaxed space-y-4 border-t border-neutral-50/50 pt-4 font-medium text-justify">
                        <p>La Cooperativa, en cumplimiento de la Ley Orgánica de Protección de Datos, informa a sus socios acerca del tratamiento de datos personales que se realiza durante el ejercicio de actividades de intermediación financiera (prestación de productos y servicios financieros).</p>
                        <p>El diseño, operación, uso y administración de los sistemas de información de la Cooperativa observa todos aquellos requerimientos propios de la normativa vigente; para lo cual:</p>
                        <ul class="space-y-2 text-xs font-semibold text-neutral-500 pl-2">
                            <li class="flex items-start gap-2.5"><i class="fa-solid fa-circle-check text-emerald-500 text-sm mt-0.5 shrink-0"></i> La Cooperativa adquiere el compromiso de velar por el cumplimiento de la legislación vigente en materia de protección y seguridad de la información aplicable a todos sus procesos de negocio.</li>
                            <li class="flex items-start gap-2.5"><i class="fa-solid fa-circle-check text-emerald-500 text-sm mt-0.5 shrink-0"></i> La Cooperativa, sus directivos y trabajadores se comprometen al uso y explotación de los servicios de información, adoptando las medidas necesarias para cumplir con las leyes.</li>
                            <li class="flex items-start gap-2.5"><i class="fa-solid fa-circle-check text-emerald-500 text-sm mt-0.5 shrink-0"></i> Los usuarios de Información de la Cooperativa deberán cumplir con las políticas, procesos y procedimientos de Seguridad de la Información, a fin de garantizar la confidencialidad, integridad y disponibilidad.</li>
                        </ul>
                    </div>
                </details>

                <!-- ACORDEÓN 4: FINALIDAD DEL TRATAMIENTO DETALLADO -->
                <details class="group bg-white border border-neutral-100 rounded-2xl shadow-soft overflow-hidden transition-all duration-300 group-open:border-[#a31a16]/30" data-aos="fade-up">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 px-6 py-5 font-black text-neutral-800 hover:text-[#a31a16] transition-colors select-none text-sm md:text-base">
                        <span>e. Objetivos y Finalidades específicas del tratamiento</span>
                        <div class="w-7 h-7 rounded-full bg-neutral-50 flex items-center justify-center text-neutral-400 group-hover:bg-[#a31a16]/5 group-hover:text-[#a31a16] transition-all group-open:rotate-180 shrink-0"><i class="fa-solid fa-chevron-down text-[10px]"></i></div>
                    </summary>
                    <div class="px-6 pb-6 text-neutral-600 text-xs md:text-sm leading-relaxed border-t border-neutral-50/50 pt-4 font-medium text-justify">
                        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-neutral-500 font-semibold">
                            <li class="bg-neutral-50 p-3 rounded-xl border border-neutral-100/60 flex items-start gap-2"><i class="fa-solid fa-caret-right text-[#a31a16] mt-0.5"></i> Ofrecer de manera individual o conjunta productos o servicios financieros institucionales por medios físicos o digitales.</li>
                            <li class="bg-neutral-50 p-3 rounded-xl border border-neutral-100/60 flex items-start gap-2"><i class="fa-solid fa-caret-right text-[#a31a16] mt-0.5"></i> Elemento de análisis en etapas precontractuales, contractuales y poscontractuales de créditos o ahorros.</li>
                            <li class="bg-neutral-50 p-3 rounded-xl border border-neutral-100/60 flex items-start gap-2"><i class="fa-solid fa-caret-right text-[#a31a16] mt-0.5"></i> Para la validación estricta de información o confirmación de transacciones realizadas por el titular.</li>
                            <li class="bg-neutral-50 p-3 rounded-xl border border-neutral-100/60 flex items-start gap-2"><i class="fa-solid fa-caret-right text-[#a31a16] mt-0.5"></i> Para la gestión de cobro e historial, en caso de incumplimiento de las obligaciones contractuales adquiridas.</li>
                            <li class="bg-neutral-50 p-3 rounded-xl border border-neutral-100/60 flex items-start gap-2"><i class="fa-solid fa-caret-right text-[#a31a16] mt-0.5"></i> Para análisis estadístico interno, proyecciones de riesgo y encuestas generales de satisfacción.</li>
                            <li class="bg-neutral-50 p-3 rounded-xl border border-neutral-100/60 flex items-start gap-2"><i class="fa-solid fa-caret-right text-[#a31a16] mt-0.5"></i> Verificar capacidad de endeudamiento y capacidad crediticia en burós autorizados para otorgar servicios.</li>
                            <li class="bg-neutral-50 p-3 rounded-xl border border-neutral-100/60 flex items-start gap-2"><i class="fa-solid fa-caret-right text-[#a31a16] mt-0.5"></i> Para garantizar de forma estricta la seguridad de las personas, bienes e instalaciones físicas.</li>
                        </ul>
                    </div>
                </details>
                <!-- ACORDEÓN 5: DESTINATARIOS, DERECHOS Y AUTORIZACIÓN -->
                <details class="group bg-white border border-neutral-100 rounded-2xl shadow-soft overflow-hidden transition-all duration-300 group-open:border-[#a31a16]/30" data-aos="fade-up">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 px-6 py-5 font-black text-neutral-800 hover:text-[#a31a16] transition-colors select-none text-sm md:text-base">
                        <span>f, g y h. Terceros Encargados, Derechos del Titular y Autorización</span>
                        <div class="w-7 h-7 rounded-full bg-neutral-50 flex items-center justify-center text-neutral-400 group-hover:bg-[#a31a16]/5 group-hover:text-[#a31a16] transition-all group-open:rotate-180 shrink-0"><i class="fa-solid fa-chevron-down text-[10px]"></i></div>
                    </summary>
                    <div class="px-6 pb-6 text-neutral-600 text-xs md:text-sm leading-relaxed space-y-4 border-t border-neutral-50/50 pt-4 font-medium text-justify">
                        <p><strong>Destinatarios de la información:</strong> La Cooperativa podrá contar con el apoyo de terceros (proveedores) para brindar algunos de sus servicios, los cuales podrían acceder a datos personales de socios y clientes en calidad de Encargados, bajo estrictas cláusulas de confidencialidad de la LOPDP [5].</p>
                        <p><strong>Derechos del titular de los datos:</strong> En cualquier momento el titular podrá solicitar conocer, actualizar, rectificar su información, ser informado sobre el uso que se le da a la misma o revocar la autorización siempre y cuando no interfiera con las obligaciones contractuales vigentes adquiridas o exigencias legales de los entes de control [5].</p>
                        <p><strong>Autorización:</strong> Al iniciar un contrato o registrarse en nuestros canales físicos o digitales oficiales, el usuario acepta de forma libre, específica, informada e inequívoca el tratamiento de sus datos conforme a estas políticas institucionales [5].</p>
                    </div>
                </details>

                <!-- ACORDEÓN 6: TRATAMIENTO EN CANALES DIGITALES, APP MÓVIL Y VIDEOVIGILANCIA -->
                <details class="group bg-white border border-neutral-100 rounded-2xl shadow-soft overflow-hidden transition-all duration-300 group-open:border-[#a31a16]/30" data-aos="fade-up">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 px-6 py-5 font-black text-neutral-800 hover:text-[#a31a16] transition-colors select-none text-sm md:text-base">
                        <span>i y j. Canales Digitales, Cookies, Apps Móviles y Videovigilancia</span>
                        <div class="w-7 h-7 rounded-full bg-neutral-50 flex items-center justify-center text-neutral-400 group-hover:bg-[#a31a16]/5 group-hover:text-[#a31a16] transition-all group-open:rotate-180 shrink-0"><i class="fa-solid fa-chevron-down text-[10px]"></i></div>
                    </summary>
                    <div class="px-6 pb-6 text-neutral-600 text-xs md:text-sm leading-relaxed space-y-4 border-t border-neutral-50/50 pt-4 font-medium text-justify">
                        <p><strong>Seguridad Tecnológica:</strong> Mediante la aplicación de rigurosas medidas técnicas y organizativas, la Cooperativa garantiza la protección de la información en contra de accesos no autorizados, pérdidas o alteraciones ilícitas [5].</p>
                        
                        <div class="bg-neutral-50 p-4 rounded-xl border border-neutral-100/60 space-y-3">
                            <p><strong>- Portales Web Oficiales:</strong> Las plataformas <a href="https://cooperativa15deagosto.fin.ec" target="_blank" class="text-[#a31a16] font-bold hover:underline">cooperativa15deagosto.fin.ec</a> y su Banca Virtual <a href="https://cooperativa15deagosto.fin.ec" target="_blank" class="text-[#a31a16] font-bold hover:underline">enlinea.cooperativa15deagosto.fin.ec</a> aplican altos estándares de cifrado. El portal web informativo no utiliza cookies, mientras que el portal transaccional las emplea exclusivamente para asegurar las sesiones activas de los socios [5].</p>
                            <p><strong>- Aplicaciones Móviles:</strong> Nuestras Apps oficiales requieren permisos del sistema para operar correctamente, pero bajo ninguna circunstancia recopilan o procesan información catalogada por la ley como sensible [5].</p>
                            <p><strong>- Sistemas de Videovigilancia:</strong> Por cumplimiento normativo de seguridad de entidades financieras, se realiza la captura de imágenes en instalaciones y cajeros formales. El ingreso a nuestros establecimientos constituye una autorización expresa para dicho tratamiento con multas de resguardo físico y judicial [5].</p>
                        </div>

                        <p class="text-xs font-bold text-neutral-400 mt-2"><i class="fa-solid fa-clock-rotate-left mr-1"></i> Cambios en las políticas: La Cooperativa informará oportunamente por este medio digital oficial cualquier actualización o enmienda en las Políticas de Privacidad [5].</p>
                    </div>
                </details>

            </div>
        </section>

        <!--===== FOOTER AREA =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>

        <?php include "scripts-v2.php"; ?>
    </body>
</html>
