<?php
require './controler/conexion.php';
require './funciones/fn-index.php';
$con = new Conecciones();
$fnindex = new Fn_index();
$tituloPagina = 'Contacto';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contacto - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
        <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">
        <?php include "head-v2.php"; ?>
    </head>
    <body class="v2 bg-white text-neutral-800">

        <?php include 'header.php'; ?>
        <?php include './partial-hero-interno.php'; ?>

        <!-- ===== CENTRO DE ATENCIÓN Y SOPORTE  ===== -->
        <section class="py-16 md:py-24 max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-12 gap-12 items-start">
                
                <!-- FORMULARIO DE CONTACTO INTERACTIVO (Lado Izquierdo - Ancho 7 de 12) -->
                <div class="lg:col-span-7" data-aos="fade-right" data-aos-duration="900">
                    <div class="text-rojo font-bold uppercase text-xs tracking-widest mb-2 flex items-center gap-2">
                        <span class="w-6 h-0.5 bg-rojo inline-block"></span> Canales Digitales
                    </div>
                    <h2 class="text-3xl font-black text-neutral-800 tracking-tight leading-tight mb-4">
                        Tu éxito comienza con una <span class="text-rojo">conversación</span>
                    </h2>
                    <p class="text-neutral-500 mb-8 text-sm md:text-base leading-relaxed">
                        Creemos que los socios informados toman mejores decisiones financieras. Escríbenos y un asesor institucional te responderá a la brevedad de forma clara y transparente.
                    </p>

                    <!-- Formulario Premium Amarrado de forma milimétrica a tu Core AJAX -->
                    <form method="POST" id="formularioContacto" class="bg-neutral-50 rounded-3xl p-6 md:p-8 border border-neutral-100 grid grid-cols-1 sm:grid-cols-2 gap-5 shadow-soft">
                        <input type="hidden" name="iopc" value="1">
                        
                        <div class="flex flex-col gap-1.5">
                            <label class="font-extrabold text-neutral-700 text-xs uppercase tracking-wider">Nombres*</label>
                            <input type="text" name="nombre_contacto" placeholder="Ingresa tus nombres" required class="w-full bg-white border border-neutral-200 focus:border-rojo rounded-xl px-4 py-3.5 text-neutral-800 font-semibold outline-none transition-all text-sm shadow-inner-sm">
                        </div>
                        
                        <div class="flex flex-col gap-1.5">
                            <label class="font-extrabold text-neutral-700 text-xs uppercase tracking-wider">Apellidos*</label>
                            <input type="text" name="apellido_contacto" placeholder="Ingresa tus apellidos" required class="w-full bg-white border border-neutral-200 focus:border-rojo rounded-xl px-4 py-3.5 text-neutral-800 font-semibold outline-none transition-all text-sm shadow-inner-sm">
                        </div>

                        <div class="flex flex-col gap-1.5">
                            <label class="font-extrabold text-neutral-700 text-xs uppercase tracking-wider">Correo Electrónico*</label>
                            <input type="email" name="email_contacto" placeholder="ejemplo@correo.com" required class="w-full bg-white border border-neutral-200 focus:border-rojo rounded-xl px-4 py-3.5 text-neutral-800 font-semibold outline-none transition-all text-sm shadow-inner-sm">
                        </div>

                        <div class="flex flex-col gap-1.5">
                            <label class="font-extrabold text-neutral-700 text-xs uppercase tracking-wider">Teléfono / Celular*</label>
                            <input type="tel" name="telefono_contacto" placeholder="Ej: 0998765432" required class="w-full bg-white border border-neutral-200 focus:border-rojo rounded-xl px-4 py-3.5 text-neutral-800 font-semibold outline-none transition-all text-sm shadow-inner-sm">
                        </div>

                        <div class="flex flex-col gap-1.5 sm:col-span-2">
                            <label class="font-extrabold text-neutral-700 text-xs uppercase tracking-wider">Asunto del Mensaje*</label>
                            <input type="text" name="texto_contacto" placeholder="¿Sobre qué producto o requerimiento deseas consultar?" required class="w-full bg-white border border-neutral-200 focus:border-rojo rounded-xl px-4 py-3.5 text-neutral-800 font-semibold outline-none transition-all text-sm shadow-inner-sm">
                        </div>

                        <div class="flex flex-col gap-1.5 sm:col-span-2">
                            <label class="font-extrabold text-neutral-700 text-xs uppercase tracking-wider">¿Cómo podemos ayudarte?*</label>
                            <textarea name="observacion_contacto" rows="4" placeholder="Escribe detalladamente tu consulta aquí..." required class="w-full bg-white border border-neutral-200 focus:border-rojo rounded-xl px-4 py-3.5 text-neutral-800 font-semibold outline-none transition-all text-sm resize-none shadow-inner-sm"></textarea>
                        </div>

                        <!-- Contenedor del resultado AJAX dinámico -->
                        <div id="resultado" class="sm:col-span-2 empty:hidden my-1"></div>

                        <div class="sm:col-span-2 pt-2">
                            <button onclick="enviarContacto()" type="button" class="w-full bg-rojo hover:bg-rojo-dark text-white font-extrabold py-4 rounded-xl shadow-lg hover:shadow-rojo/20 hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center gap-2 tracking-wide uppercase text-sm">
                                <i class="fa-solid fa-paper-plane text-xs opacity-90"></i> Enviar ahora
                            </button>
                        </div>
                    </form>
                </div>
                <!-- TARJETA INFORMATIVA CORPORATIVA (Lado Derecho - Ancho 5 de 12) -->
                <div class="lg:col-span-5 flex flex-col gap-6" data-aos="fade-left">
                    
                    <!-- ITEM 1: LLÁMANOS -->
                    <div class="bg-gradient-to-br from-white to-neutral-50 border border-neutral-100 rounded-3xl p-6 shadow-soft flex gap-5 items-start hover:border-rojo/20 hover:-translate-y-1 transition-all duration-300 group">
                        <div class="w-12 h-12 rounded-2xl bg-rojo-light/50 flex items-center justify-center flex-shrink-0 text-rojo border border-rojo/5 group-hover:bg-rojo group-hover:text-white transition-colors duration-300 shadow-sm">
                            <i class="fa-solid fa-phone text-lg"></i>
                        </div>
                        <div>
                            <span class="text-[10px] font-black text-neutral-400 uppercase tracking-widest block mb-0.5">Servicio Preferencial</span>
                            <h4 class="font-black text-neutral-800 text-base mb-1 tracking-tight">Llámanos</h4>
                            <a href="tel:1800244285" class="text-rojo font-black text-sm hover:text-rojo-dark transition-colors">1800 - 244285</a>
                        </div>
                    </div>

                    <!-- ITEM 2: CORREO -->
                    <div class="bg-gradient-to-br from-white to-neutral-50 border border-neutral-100 rounded-3xl p-6 shadow-soft flex gap-5 items-start hover:border-rojo/20 hover:-translate-y-1 transition-all duration-300 group">
                        <div class="w-12 h-12 rounded-2xl bg-rojo-light/50 flex items-center justify-center flex-shrink-0 text-rojo border border-rojo/5 group-hover:bg-rojo group-hover:text-white transition-colors duration-300 shadow-sm">
                            <i class="fa-solid fa-envelope text-lg"></i>
                        </div>
                        <div>
                            <span class="text-[10px] font-black text-neutral-400 uppercase tracking-widest block mb-0.5">Atención Digital</span>
                            <h4 class="font-black text-neutral-800 text-base mb-1 tracking-tight">Correo electrónico</h4>
                            <a href="mailto:info@coop15deagosto.fin.ec" class="text-rojo font-black text-sm hover:text-rojo-dark transition-colors">info@coop15deagosto.fin.ec</a>
                        </div>
                    </div>

                    <!-- ITEM 3: DIRECCIÓN -->
                    <div class="bg-gradient-to-br from-white to-neutral-50 border border-neutral-100 rounded-3xl p-6 shadow-soft flex gap-5 items-start hover:border-rojo/20 hover:-translate-y-1 transition-all duration-300 group">
                        <div class="w-12 h-12 rounded-2xl bg-rojo-light/50 flex items-center justify-center flex-shrink-0 text-rojo border border-rojo/5 group-hover:bg-rojo group-hover:text-white transition-colors duration-300 shadow-sm">
                            <i class="fa-solid fa-location-dot text-lg"></i>
                        </div>
                        <div>
                            <span class="text-[10px] font-black text-neutral-400 uppercase tracking-widest block mb-0.5">Cercanía Institucional</span>
                            <h4 class="font-black text-neutral-800 text-base mb-1 tracking-tight">Nuestras agencias</h4>
                            <a href="sucursales.php" class="text-rojo font-black text-sm hover:text-rojo-dark transition-colors flex items-center gap-1.5">
                                Ver todas las agencias <i class="fa-solid fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <?php include './footer.php' ?>
        <?php include "scripts-v2.php"; ?>
    </body>
</html>

