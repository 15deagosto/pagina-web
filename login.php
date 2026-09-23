<?php
session_start();
require './controler/conexion.php';
require './funciones/fn-index.php';
require_once './funciones/fn-utilidades.php';
$fnindex = new Fn_index();
$tituloPagina = 'Iniciar Sesión';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar Sesión - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
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
                        Banca Virtual
                    </h2>
                    <div class="text-xs md:text-sm font-bold text-white/70 tracking-wide">
                        <a href="index.php" class="hover:text-white transition-colors">Inicio</a> 
                        <i class="fa-solid fa-angle-right text-[10px] mx-2 opacity-50"></i> 
                        <span class="text-[#ffd9d6] font-extrabold">Acceso al Sistema</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== SECCIÓN CENTRAL DEL ACCESO SEGURIZADO ===== -->
        <section class="py-16 md:py-24 max-w-md mx-auto px-6">
            <!-- Tarjeta Premium Esmerilada -->
            <div class="bg-gradient-to-br from-white to-neutral-50 border border-neutral-100/80 rounded-3xl shadow-soft p-8 md:p-10" data-aos="fade-up">
                
                <div class="text-center mb-8">
                    <!-- Icono unificado en color vino de la cooperativa -->
                    <div class="w-14 h-14 rounded-2xl bg-[#a31a16]/5 border border-[#a31a16]/10 flex items-center justify-center mx-auto mb-4 text-[#a31a16] shadow-sm">
                        <i class="fa-solid fa-user-lock text-xl"></i>
                    </div>
                    <h2 class="text-2xl font-black text-neutral-800 tracking-tight mb-1">Bienvenido de nuevo</h2>
                    <p class="text-neutral-400 text-xs font-bold uppercase tracking-wider">Ingresa tus credenciales oficiales</p>
                </div>

                <!-- Alerta Dinámica de PHP Corporativa -->
                <?php if (isset($_GET['msg'])) { ?>
                    <div class="bg-[#a31a16]/5 border border-[#a31a16]/20 text-[#a31a16] text-xs font-bold rounded-xl px-4 py-3 mb-6 text-center shadow-inner-sm">
                        <i class="fa-solid fa-circle-exclamation mr-1.5"></i> <?php echo htmlspecialchars($_GET['msg']) ?>
                    </div>
                <?php } ?>

                <form action="sesiones/sesion.php" method="post" class="space-y-5">
                    <input type="hidden" value="1">
                    <!-- Campo de Entrada: Usuario -->
                    <div class="flex flex-col gap-2">
                        <label class="font-extrabold text-neutral-700 text-xs uppercase tracking-wider"><i class="fa-solid fa-user text-[#a31a16] mr-1"></i> Usuario / Identificación</label>
                        <input id="email" name="usernames" type="text" placeholder="Ingresa tu usuario" Linda required class="w-full bg-white border border-neutral-200 focus:border-[#a31a16]/40 rounded-xl px-4 py-3.5 text-neutral-800 font-semibold outline-none transition-all text-sm shadow-inner-sm">
                    </div>

                    <!-- Campo de Entrada: Contraseña con Ojo Interactivo -->
                    <div class="flex flex-col gap-2">
                        <label class="font-extrabold text-neutral-700 text-xs uppercase tracking-wider"><i class="fa-solid fa-key text-[#a31a16] mr-1"></i> Contraseña</label>
                        <div class="relative w-full">
                            <input name="passs" id="tp_password" type="password" placeholder="Mínimo 6 caracteres" required class="w-full bg-white border border-neutral-200 focus:border-[#a31a16]/40 rounded-xl pl-4 pr-12 py-3.5 text-neutral-800 font-semibold outline-none transition-all text-sm shadow-inner-sm">
                            <!-- Botón de ojito nativo JS -->
                            <button type="button" onclick="conmutarClave()" class="absolute right-4 top-1/2 -translate-y-1/2 text-neutral-400 hover:text-[#a31a16] transition-colors text-sm" aria-label="Mostrar contraseña">
                                <i id="icono_ojo" class="fa-solid fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Contenedor del resultado AJAX de tu Core original -->
                    <div id="resultado" class="empty:hidden my-1"></div>

                    <!-- Botón Unificado con Bordes Suavizados -->
                    <div class="pt-2">
                        <button type="submit" class="w-full bg-[#a31a16] hover:bg-[#7a1310] text-white font-extrabold py-4 rounded-xl shadow-lg hover:shadow-[#a31a16]/20 hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center gap-2 tracking-wide uppercase text-sm">
                            <i class="fa-solid fa-right-to-bracket text-xs opacity-90"></i> Ingresar al Portal
                        </button>
                    </div>

                     <div class="pt-6 border-t border-neutral-100 flex flex-col gap-3 text-center">
                        <p class="text-xs text-neutral-400 font-bold uppercase tracking-wider">¿Eres nuevo en la cooperativa?</p>
                        <div class="flex flex-col sm:flex-row justify-center items-center gap-2 sm:gap-4 text-xs font-black">
                            <a href="contacto.php" class="text-[#a31a16] hover:text-[#7a1310] transition-colors flex items-center gap-1">
                                <i class="fa-solid fa-user-plus text-[10px]"></i> Solicitar apertura de cuenta
                            </a>
                            <span class="hidden sm:block text-neutral-300">|</span>
                            <a href="educacion-financiera.php" class="text-neutral-500 hover:text-[#a31a16] transition-colors flex items-center gap-1">
                                <i class="fa-solid fa-circle-question text-[10px]"></i> ¿Cómo activar mi Banca?
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </section>

        <!-- Script Utilitario Ligero para el Conmutador de la Clave -->
        <script>
        function conmutarClave() {
            const inputPass = document.getElementById("tp_password");
            const iconoOjo = document.getElementById("icono_ojo");
            if (inputPass && iconoOjo) {
                if (inputPass.type === "password") {
                    inputPass.type = "text";
                    iconoOjo.classList.remove("fa-eye");
                    iconoOjo.classList.add("fa-eye-slash");
                } else {
                    inputPass.type = "password";
                    iconoOjo.classList.remove("fa-eye-slash");
                    iconoOjo.classList.add("fa-eye");
                }
            }
        }
        </script>

        <!--===== FOOTER AREA =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>

        <?php include "scripts-v2.php"; ?>
    </body>
</html>
