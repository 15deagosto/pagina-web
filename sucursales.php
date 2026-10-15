<?php
session_start();
require './controler/conexion.php';
require './funciones/fn-index.php';
require_once './funciones/fn-utilidades.php';
$fnindex = new Fn_index();
$tituloPagina = 'Canales de Atención';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Canales de Atención - 15 de Agosto Cooperativa de Ahorro y Crédito</title>
        <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">
        <?php include "head-v2.php"; ?>
        <link rel="stylesheet" href="https://unpkg.com" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
        <script src="https://unpkg.com" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    </head>
    <body class="v2 bg-white text-neutral-800">

        <?php include 'header.php'; ?>
        <?php include './partial-hero-interno.php'; ?>

        <section class="py-16 md:py-24 max-w-5xl mx-auto px-6">
            <div class="text-center mb-12" data-aos="fade-up">
                <div class="text-rojo font-bold uppercase text-xs tracking-widest mb-2">Nuestras agencias</div>
                <h2 class="text-3xl md:text-4xl font-extrabold">Encuéntranos cerca de ti</h2>
            </div>

                        <!-- CONTENEDOR BILATERAL: Listado a la Izquierda y Mapa a la Derecha -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- PANEL IZQUIERDO: Tarjetas de las Agencias (Ocupa 5 columnas) -->
                <div class="lg:col-span-5 flex flex-col gap-5 max-h-[600px] overflow-y-auto pr-2">
                <?php
                    $detagencia = $fnindex->fnindex_ragencia();
                    $i = 0;
                    $coordenadas_javascript = []; 

                    while ($menuagencia = $detagencia->fetch_assoc()) {
                        $i++;
                        
                        
                        $lat = str_replace(',', '.', trim($menuagencia['x_nosotros']));
                        $lng = str_replace(',', '.', trim($menuagencia['y_nosotros']));
                        
                        $nombre_agencia = arreglar_mojibake($menuagencia['nombre_nosotros']);
                        $direccion_agencia = arreglar_mojibake($menuagencia['direccion_nosotros']);

                        if (!empty($lat) && !empty($lng) && is_numeric($lat) && is_numeric($lng)) {
                            $coordenadas_javascript[] = [
                                "lat" => (float)$lat,
                                "lng" => (float)$lng,
                                "nombre" => $nombre_agencia,
                                "direccion" => $direccion_agencia
                            ];
                        }
                ?>
                        <!-- Tarjeta de Agencia Tradicional Optimizada -->
                        <div class="bg-white border border-neutral-100 rounded-3xl p-5 shadow-soft hover:border-red-800/20 hover:-translate-y-0.5 transition-all duration-300" data-aos="fade-up" data-aos-delay="<?php echo $i * 50 ?>">
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-2xl bg-rojo flex items-center justify-center flex-shrink-0">
                                    <img src="assets/img/icon-sucursal.png" class="w-5 h-5 brightness-0 invert" alt="">
                                </div>
                                <div class="w-full">
                                    <h3 class="font-black text-neutral-800 text-base mb-1"><?php echo $nombre_agencia; ?></h3>
                                    <p class="text-neutral-500 text-xs mb-3 leading-relaxed"><?php echo $direccion_agencia; ?></p>
                                    
                                    <div class="flex flex-wrap items-center justify-between gap-2 border-t border-neutral-50 pt-3">
                                        <a href="tel:<?php echo preg_replace('/\s+/', '', $menuagencia['tele1_nosotros']) ?>" class="text-rojo font-bold text-xs flex items-center gap-1.5"><i class="fa-solid fa-phone text-[10px]"></i> <?php echo $menuagencia['tele1_nosotros'] ?></a>
                                        
                                        <?php if (!empty($lat) && !empty($lng)) { ?>
                                            <!-- Botón interactivo local que moverá el mapa al hacer clic -->
                                            <button onclick="enfocarAgencia(<?php echo $lat ?>, <?php echo $lng ?>)" class="cursor-pointer inline-flex items-center gap-1.5 text-xs font-bold bg-rojo-light text-rojo px-3 py-1.5 rounded-full hover:bg-rojo hover:text-white transition-colors focus:outline-none">
                                                <i class="fa-solid fa-location-crosshairs"></i> Ubicar
                                            </button>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                        if ($i === 0) {
                            echo '<p class="text-neutral-500 text-center py-8">No hay agencias registradas por el momento.</p>';
                        }
                    ?>
                </div>

                <!-- PANEL DERECHO: El Mapa Interactivo Embebido (Ocupa 7 columnas) -->
                <div class="lg:col-span-7 sticky top-24 z-10" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-full h-[550px] bg-slate-100 rounded-3xl border border-neutral-100 shadow-soft overflow-hidden">
                        
                        <iframe id="iframe-mapa-coop" 
                                src="https://google.com" 
                                class="w-full h-full border-none" 
                                allowfullscreen="" 
                                loading="lazy">
                        </iframe>
                    </div>
                </div>


            </div>

        </section>

        <?php include './footer.php' ?>
        <?php include "scripts-v2.php"; ?>
        <script>
        document.addEventListener('DOMContentLoaded', () => {
            // 2. INICIALIZAR EL MAPA CENTRADO EN LA PRIMERA AGENCIA (MATRIZ)
            const primera = agencias[0];
            const mapa = L.map('mapa-interactivo-coop').setView([primera.lat, primera.lng], 13);

            // 3. CAPA DE DISEÑO (OpenStreetMap Estándar Oficial)
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors',
                maxZoom: 19
            }).addTo(mapa);

             
            // Fuerza al navegador a recalcular el tamaño físico real y renderizar las calles de inmediato
            setTimeout(() => {
                mapa.invalidateSize();
            }, 200);

            // Matriz interna para guardar las referencias de los marcadores y abrirlos con el clic lateral
            const marcadores = {};

            // 4. MAPEO DINÁMICO DE PINES EN CALIENTE
            agencias.forEach(agencia => {
                // Creamos el pin en sus coordenadas
                const marcador = L.marker([agencia.lat, agencia.lng]).addTo(mapa);
                
                // Le cosemos una etiqueta flotante (Popup) premium con los datos institucionales
                const contenidoPopup = `
                    <div style="font-family: 'Plus Jakarta Sans', sans-serif; padding: 2px;">
                        <h4 style="margin: 0 0 4px 0; color: #a31a16; font-weight: 800; font-size: 13px;">${agencia.nombre}</h4>
                        <p style="margin: 0; color: #64748b; font-size: 11px; line-height: 1.4;">${agencia.direccion}</p>
                    </div>
                `;
                marcador.bindPopup(contenidoPopup);

                // Guardamos el marcador usando su latitud como llave única de localización
                const llaveUnica = agencia.lat + '_' + agencia.lng;
                marcadores[llaveUnica] = marcador;
            });

            // 5. FUNCIÓN DE RASTREO Y ENFOQUE SUAVE (Globalizada en la ventana del navegador)
            window.enfocarAgencia = (lat, lng) => {
                if (mapa) {
                    // Mueve la cámara hacia la sucursal con una transición fluida (FlyTo)
                    mapa.flyTo([lat, lng], 16, {
                        animate: true,
                        duration: 1.5 // Duración del paneo en segundos
                    });

                    // Abre automáticamente el globo de información al llegar al destino
                    const llave = lat + '_' + lng;
                    if (marcadores[llave]) {
                        setTimeout(() => {
                            marcadores[llave].openPopup();
                        }, 1200);
                    }
                }
            };
        });
        </script>

    </body>
</html>
