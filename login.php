<?php
session_start();
require './controler/conexion.php';
require './funciones/fn-index.php';
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

        <?php include 'header.php'; ?>
        <?php include './partial-hero-interno.php'; ?>

        <section class="py-16 md:py-24 max-w-md mx-auto px-6">
            <div class="bg-white border border-neutral-100 rounded-3xl shadow-soft p-8 md:p-10" data-aos="fade-up">
                <div class="text-center mb-8">
                    <div class="w-14 h-14 rounded-2xl bg-rojo flex items-center justify-center mx-auto mb-4">
                        <i class="fa-solid fa-user-lock text-white text-xl"></i>
                    </div>
                    <h2 class="text-2xl font-extrabold mb-1">Bienvenido de nuevo</h2>
                    <p class="text-neutral-500 text-sm">Ingresa tus credenciales para continuar</p>
                </div>

                <?php if (isset($_GET['msg'])) { ?>
                    <div class="bg-rojo-light text-rojo text-sm font-semibold rounded-xl px-4 py-3 mb-6 text-center"><?php echo htmlspecialchars($_GET['msg']) ?></div>
                <?php } ?>

                <form action="sesiones/sesion.php" method="post" class="space-y-5">
                    <input type="hidden" value="1">
                    <div>
                        <label class="block font-semibold text-sm mb-2">Usuario</label>
                        <input id="email" name="usernames" type="email" placeholder="ejemplo@mail.com" required class="w-full border border-neutral-200 rounded-xl px-4 py-3 focus:outline-none focus:border-rojo transition-colors">
                    </div>
                    <div>
                        <label class="block font-semibold text-sm mb-2">Contraseña</label>
                        <input name="passs" id="tp_password" type="password" placeholder="Mínimo 6 caracteres" required class="w-full border border-neutral-200 rounded-xl px-4 py-3 focus:outline-none focus:border-rojo transition-colors">
                    </div>
                    <div id="resultado"></div>
                    <button type="submit" class="w-full bg-rojo text-white font-bold py-3.5 rounded-full hover:bg-rojo-dark hover:-translate-y-0.5 transition-all shadow-soft">Iniciar Sesión</button>
                </form>
            </div>
        </section>

        <?php include './footer.php' ?>
        <?php include "scripts-v2.php"; ?>
    </body>
</html>
