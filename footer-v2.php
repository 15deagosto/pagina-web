<footer class="v2-footer">
    <div class="v2-container">
        <div class="v2-footer-grid">
            <div>
                <h4>Cooperativa 15 de Agosto</h4>
                <p style="font-size:14px; max-width:320px;">Cooperativa de Ahorro y Crédito 15 de Agosto de Pilacoto, regulada por la Superintendencia de Economía Popular y Solidaria (SEPS) -- Segmento 2.</p>
                <div style="margin-top:18px;">
                    <strong style="color:#fff;">Línea de Emergencia</strong><br>
                    <a href="tel:1800244285" style="font-size:18px; font-weight:700;">1800 - 244285</a>
                </div>
            </div>
            <div>
                <h4>Somos 15 de Agosto</h4>
                <ul>
                    <li><a href="educacion-financiera.php">Educación Financiera</a></li>
                    <li><a href="nuestra-coop.php">Nuestra Cooperativa</a></li>
                    <li><a href="transparencia.php">Transparencia de la información</a></li>
                    <li><a href="politica-saras.php">Política SARAS</a></li>
                    <li><a href="trabaja-nosotros.php">Trabaja con nosotros</a></li>
                    <li><a href="reglamento.php">Reglamento de Buen Gobierno</a></li>
                </ul>
            </div>
            <div>
                <h4>Centro de Ayuda</h4>
                <ul>
                    <li><a href="calificanos.php">Ayúdanos a mejorar</a></li>
                    <li><a href="quejas-sugerencias.php">Quejas y Reclamos</a></li>
                    <li><a href="ley-proteccion.php">Ley de protección de datos</a></li>
                    <li><a href="preguntas-frecuentes.php">Preguntas Frecuentes</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </div>
            <div>
                <h4>Síguenos</h4>
                <div style="display:flex; gap:14px; font-size:20px; margin-bottom:20px;">
                    <?php
                    $redesf = $fnindex->fnindex_rredes();
                    while ($menuredesf = $redesf->fetch_assoc()) {
                        ?>
                        <a href="<?php echo $menuredesf['url_redes'] ?>" target="_blank"><i class="fa-brands <?php echo utf8_encode($menuredesf['icono']) ?>"></i></a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <div style="display:flex; justify-content:center; gap:36px; flex-wrap:wrap; align-items:center; padding:24px 0 36px; border-top:1px solid rgba(255,255,255,.1); border-bottom:1px solid rgba(255,255,255,.1); margin-bottom:24px;">
            <a href="https://www.seps.gob.ec/" target="_blank"><img src="assets/img/logo_superintendencia.png" style="height:44px;" alt="SEPS"></a>
            <a href="https://www.cosede.gob.ec/" target="_blank"><img src="assets/img/cosede-1.png" style="height:44px;" alt="COSEDE"></a>
            <a href="https://www.uafe.gob.ec/" target="_blank"><img src="assets/img/logo-UAFE.jpg" style="height:44px;" alt="UAFE"></a>
            <a href="https://www.finanzaspopulares.gob.ec/" target="_blank"><img src="assets/img/logo-conafis.webp" style="height:44px;" alt="Finanzas Populares"></a>
        </div>

        <div class="v2-footer-bottom">
            <p style="margin:0;">© <?php echo date('Y'); ?> Derechos Reservados Cooperativa de Ahorro y Crédito 15 de Agosto</p>
            <div style="display:flex; gap:16px;">
                <a href="politica-seguridad.php">Política de Privacidad</a>
                <a href="terminos-condiciones.php">Términos y Condiciones</a>
            </div>
        </div>
    </div>
</footer>
