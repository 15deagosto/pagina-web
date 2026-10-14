<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlace no encontrado - Cooperativa 15 de Agosto</title>
    
    <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">
    <link rel="preconnect" href="https://googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cloudflare.com">

    <style>
        /* Estilos base con la identidad de la cooperativa */
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
            display: flex;
            height: 100vh;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 24px;
            box-sizing: border-box;
            position: relative;
            overflow: hidden;
        }

        /* Círculos de luz ambientales del diseño original */
        .decoracion-luz {
            position: absolute;
            width: 450px;
            height: 450px;
            border-radius: 9999px;
            background: rgba(163, 26, 22, 0.08);
            top: -100px;
            right: -100px;
            filter: blur(100px);
            pointer-events: none;
        }

        /* Tarjeta central profesional */
        .contenedor-404 {
            text-align: center;
            position: relative;
            z-index: 10;
            max-width: 420px;
            width: 100%;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* Logotipo Institucional */
        .logo-cooperativa {
            max-width: 220px;
            height: auto;
            margin-bottom: 24px;
        }

        .numero-error {
            font-size: 72px;
            font-weight: 900;
            color: #a31a16; /* Rojo corporativo */
            margin: 0 0 8px 0;
            tracking-tight: -0.05em;
        }

        .titulo-error {
            font-size: 22px;
            font-weight: 700;
            color: #0f172a;
            margin: 0 0 12px 0;
        }

        .descripcion-error {
            font-size: 14px;
            line-height: 1.6;
            color: #64748b;
            margin: 0 0 32px 0;
        }

        /* Botón Premium idéntico al del Hero Area */
        .boton-retorno {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
            padding: 14px 24px;
            border-radius: 12px;
            background-color: #a31a16;
            color: #ffffff;
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 0.05em;
            transition: all 0.3s ease;
            box-shadow: 0 10px 15px -3px rgba(163, 26, 22, 0.3);
            box-sizing: border-box;
            cursor: pointer;
        }

        .boton-retorno:hover {
            background-color: #7a1310;
            transform: translateY(-1px);
            box-shadow: 0 20px 25px -5px rgba(163, 26, 22, 0.4);
        }
    </style>
</head>
<body>

    <div class="decoracion-luz"></div>

    <!-- Bloque Central Corporativo -->
    <div class="contenedor-404">
        
        <!-- Logotipo Oficial de la Institución -->
        <img src="/cooperativa15deagosto_local/pagina-web/assets/img/favicon-coop.png" class="logo-cooperativa" alt="Cooperativa 15 de Agosto">

        <div class="numero-error">404</div>
        <div class="titulo-error">Página no encontrada</div>
        
        <p class="descripcion-error">
            El enlace al que intentas acceder no existe, cambió de nombre o no se encuentra disponible temporalmente debido al mantenimiento de la plataforma.
        </p>

        <!-- Botón de Retorno Seguro -->
        <a href="/cooperativa15deagosto_local/pagina-web/index.php" class="boton-retorno">
            <i class="fa-solid fa-house-chimney-user"></i> Regresar al Inicio Seguro
        </a>
    </div>

</body>
</html>
