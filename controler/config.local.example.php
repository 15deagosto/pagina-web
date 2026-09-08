<?php

/*
 * Plantilla de configuración local. Copia este archivo como
 * "config.local.php" (en la misma carpeta) y coloca ahí las
 * credenciales reales — ese archivo nunca se sube al repositorio
 * (ver .gitignore).
 */

// Base de datos principal del sitio
define('DB_HOST', 'localhost');
define('DB_USER', 'usuario_bd');
define('DB_PASS', 'clave_bd');
define('DB_NAME', 'nombre_bd');

// SMTP para envío de correo
define('SMTP_HOST', 'mail.tudominio.fin.ec');
define('SMTP_USER', 'noreply@tudominio.fin.ec');
define('SMTP_PASSWORD', 'clave_smtp');
define('SMTP_PORT', 465);
define('SMTP_SECURE', true);
