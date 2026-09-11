<?php
require_once './controler/conexion.php';
require_once './funciones/fn-index.php';
$fnindex = new Fn_index();
$tituloPagina = 'Consejos de Seguridad';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consejos de Seguridad - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
        <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">
        <?php include "head-v2.php"; ?>
    </head>
    <body class="v2 bg-white text-neutral-800">

        <?php include 'header.php'; ?>
        <?php include './partial-hero-interno.php'; ?>

        <section class="py-16 md:py-24 max-w-4xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-6" data-aos="fade-up">
                <?php
                $consejos = [
                    ['icon' => 'fa-user-secret', 'titulo' => 'Nunca compartas tu clave', 'texto' => 'La Cooperativa nunca te pedirá tu contraseña, PIN o código de tarjeta por teléfono, correo o redes sociales.'],
                    ['icon' => 'fa-link-slash', 'titulo' => 'Desconfía de enlaces sospechosos', 'texto' => 'No hagas clic en enlaces de correos o mensajes que no reconozcas ofreciendo premios o pidiendo verificar tu cuenta.'],
                    ['icon' => 'fa-mobile-screen', 'titulo' => 'Protege tus dispositivos', 'texto' => 'Mantén actualizado tu celular y computador, y usa contraseñas distintas para cada aplicación financiera.'],
                    ['icon' => 'fa-triangle-exclamation', 'titulo' => 'Reporta cualquier actividad extraña', 'texto' => 'Si notas movimientos que no reconoces en tu cuenta, comunícate de inmediato con nosotros.'],
                ];
                foreach ($consejos as $c) {
                    ?>
                    <div class="bg-white border border-neutral-100 rounded-3xl p-6 shadow-soft flex gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-rojo flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid <?php echo $c['icon'] ?> text-white"></i>
                        </div>
                        <div>
                            <h3 class="font-bold mb-1"><?php echo $c['titulo'] ?></h3>
                            <p class="text-neutral-500 text-sm leading-relaxed"><?php echo $c['texto'] ?></p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <p class="text-center text-neutral-500 text-sm mt-10">¿Detectaste algo sospechoso? Contáctanos de inmediato en <a href="contacto.php" class="text-rojo font-semibold">contacto.php</a> o llama a nuestra línea de emergencia.</p>
        </section>

        <?php include './footer.php' ?>
        <?php include "scripts-v2.php"; ?>
    </body>
</html>
