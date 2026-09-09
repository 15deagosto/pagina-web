<div class="max-w-7xl mx-auto px-6">
    <div class="text-rojo font-bold uppercase text-xs tracking-widest mb-2 flex items-center gap-2" data-aos="fade-up">
        <span class="w-6 h-0.5 bg-rojo inline-block"></span> Lo que puedes hacer
    </div>
    <h2 class="text-3xl md:text-4xl font-extrabold mb-4" data-aos="fade-up">Los servicios que necesitas</h2>
    <p class="text-neutral-500 max-w-xl mb-12" data-aos="fade-up">Todo lo que buscas en una cooperativa financiera, pensado para que hagas tus trámites de forma simple y segura.</p>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
        $servicios = [
            ['icon' => 'icon-ahorro-03-bg.png', 'titulo' => 'Califícanos', 'texto' => 'Comparte tu experiencia con nosotros. Tu opinión nos ayuda a mejorar cada día la atención en todas nuestras agencias.', 'link' => 'calificanos.php', 'cta' => 'Calificar'],
            ['icon' => 'icon-factura-03-bg.png', 'titulo' => 'Pago de servicios', 'texto' => 'Paga tus servicios básicos, matrículas y otros convenios desde cualquiera de nuestras agencias, de forma rápida y segura.', 'link' => 'servicios.php', 'cta' => 'Ver más'],
            ['icon' => 'icon-credito-03-bg.png', 'titulo' => 'Solicitar un crédito', 'texto' => 'Conoce nuestra línea de créditos -- microcrédito, consumo y más -- y arranca tu solicitud en línea o en la agencia más cercana.', 'link' => 'detalle-servicio.php', 'cta' => 'Solicitar'],
            ['icon' => 'icon-inversion-03-bg.png', 'titulo' => 'Simuladores', 'texto' => 'Calcula al instante tu cuota de crédito o el rendimiento de tu inversión antes de decidir, sin compromiso.', 'link' => 'simulador-credito.php', 'cta' => 'Simular'],
            ['icon' => 'icon-ahorro-03-bg.png', 'titulo' => 'Ahorros', 'texto' => 'Encuentra la cuenta de ahorro que se ajusta a tus metas, con el respaldo de una cooperativa regulada por la SEPS.', 'link' => 'detprod-ahorro.php', 'cta' => 'Ver cuentas'],
            ['icon' => 'icon-inversion-03-bg.png', 'titulo' => 'Inversiones', 'texto' => 'Haz crecer tu dinero con nuestras alternativas de inversión a plazo fijo, pensadas para distintos objetivos y plazos.', 'link' => 'detprod-inversion.php', 'cta' => 'Invertir'],
        ];
        foreach ($servicios as $idx => $s) {
            ?>
            <div class="group bg-white border border-neutral-100 rounded-3xl p-8 shadow-soft hover:shadow-softhover hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="<?php echo $idx * 80 ?>">
                <div class="w-14 h-14 rounded-2xl bg-rojo-light flex items-center justify-center mb-6 group-hover:bg-rojo group-hover:rotate-6 transition-all duration-300">
                    <img src="assets/img/<?php echo $s['icon'] ?>" class="w-7 h-7 group-hover:brightness-0 group-hover:invert transition-all" alt="">
                </div>
                <h3 class="text-lg font-bold mb-2"><?php echo $s['titulo'] ?></h3>
                <p class="text-neutral-500 text-sm mb-5 leading-relaxed"><?php echo $s['texto'] ?></p>
                <a href="<?php echo $s['link'] ?>" class="text-rojo font-bold text-sm inline-flex items-center gap-2 group-hover:gap-3 transition-all"><?php echo $s['cta'] ?> <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <?php
        }
        ?>
    </div>
</div>
