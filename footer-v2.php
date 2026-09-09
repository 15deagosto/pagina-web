<footer class="bg-neutral-900 text-neutral-300">
    <div class="max-w-7xl mx-auto px-6 pt-16 pb-8">
        <div class="grid md:grid-cols-4 gap-10 mb-12">
            <div>
                <h4 class="text-white font-bold mb-4">Cooperativa 15 de Agosto</h4>
                <p class="text-sm text-neutral-400 max-w-xs mb-5">Cooperativa de Ahorro y Crédito 15 de Agosto de Pilacoto, regulada por la Superintendencia de Economía Popular y Solidaria (SEPS) -- Segmento 2.</p>
                <div>
                    <span class="text-white font-semibold text-sm">Línea de Emergencia</span><br>
                    <a href="tel:1800244285" class="text-xl font-extrabold text-white hover:text-rojo transition-colors">1800 - 244285</a>
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
                        <a href="<?php echo $menuredesf['url_redes'] ?>" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-rojo transition-colors"><i class="fa-brands <?php echo utf8_encode($menuredesf['icono']) ?>"></i></a>
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
</footer>
