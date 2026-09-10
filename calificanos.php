<?php
require './controler/conexion.php';
require './funciones/fn-index.php';
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

        <?php include 'header.php'; ?>
        <?php include './partial-hero-interno.php'; ?>

        <section class="py-16 md:py-24 max-w-xl mx-auto px-6">
            <div class="text-center mb-10" data-aos="fade-up">
                <div class="text-rojo font-bold uppercase text-xs tracking-widest mb-2">Tu opinión importa</div>
                <h2 class="text-3xl font-extrabold mb-3">Ayúdanos a mejorar</h2>
                <p class="text-neutral-500 text-sm">Trabajamos diariamente para brindarte un servicio seguro, transparente y de calidad. Cuéntanos cómo fue tu experiencia; la información se trata de forma confidencial.</p>
            </div>

            <form id="formularioContacto" class="space-y-6 bg-white border border-neutral-100 rounded-3xl shadow-soft p-6 md:p-8" data-aos="fade-up">
                <input type="hidden" name="iopc" value="3">
                <div>
                    <label class="block font-semibold text-sm mb-2">Sucursal visitada*</label>
                    <select name="agencia_eval" required class="w-full border border-neutral-200 rounded-xl px-4 py-3 focus:outline-none focus:border-rojo transition-colors">
                        <option value="">Seleccione una sucursal</option>
                        <?php
                        $detagencia = $fnindex->fnindex_ragencia();
                        while ($menuagencia = $detagencia->fetch_assoc()) {
                            ?>
                            <option value="<?php echo htmlspecialchars($menuagencia['nombre_nosotros']) ?>"><?php echo htmlspecialchars($menuagencia['nombre_nosotros']) ?></option>
                            <?php } ?>
                    </select>
                </div>

                <div>
                    <label class="block font-semibold text-sm mb-3">¿Cómo califica la atención recibida?*</label>
                    <div class="flex gap-2 text-3xl" id="rating-stars">
                        <?php for ($i = 1; $i <= 5; $i++) { ?>
                            <label class="cursor-pointer text-neutral-300 star" data-valor="<?php echo $i ?>">
                                <input type="radio" name="rating_eval" value="<?php echo $i ?>" class="hidden" required>★
                            </label>
                        <?php } ?>
                    </div>
                </div>

                <div>
                    <label class="block font-semibold text-sm mb-2">Comentario adicional</label>
                    <textarea name="comentario_eval" rows="4" placeholder="Escribe tu comentario (opcional)" class="w-full border border-neutral-200 rounded-xl px-4 py-3 focus:outline-none focus:border-rojo transition-colors"></textarea>
                </div>

                <div id="resultado"></div>
                <button onclick="enviarContacto()" type="button" class="w-full bg-rojo text-white font-bold py-3.5 rounded-full hover:bg-rojo-dark hover:-translate-y-0.5 transition-all shadow-soft">Enviar Evaluación</button>
            </form>
        </section>

        <?php include './footer.php' ?>
        <?php include "scripts-v2.php"; ?>
        <script>
            (function () {
                var stars = document.querySelectorAll('#rating-stars .star');
                stars.forEach(function (star) {
                    star.addEventListener('click', function () {
                        var valor = parseInt(star.dataset.valor);
                        stars.forEach(function (s) {
                            s.classList.toggle('text-rojo', parseInt(s.dataset.valor) <= valor);
                            s.classList.toggle('text-neutral-300', parseInt(s.dataset.valor) > valor);
                        });
                    });
                });
            })();
        </script>
    </body>
</html>
