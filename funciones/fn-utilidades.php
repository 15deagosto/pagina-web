<?php

if (!function_exists('arreglar_mojibake')) {
    // Corrige texto guardado con doble codificación UTF-8 (bug histórico de la
    // base de datos), sin tocar los datos originales.
    function arreglar_mojibake($texto) {
        $mapa = array(
            'ÃÂ¡' => 'á', 'ÃÂ©' => 'é', 'ÃÂ­' => 'í', 'ÃÂ³' => 'ó', 'ÃÂº' => 'ú', 'ÃÂ±' => 'ñ',
            'Ã¡' => 'á', 'Ã©' => 'é', 'Ã­' => 'í', 'Ã³' => 'ó', 'Ãº' => 'ú', 'Ã±' => 'ñ',
            'Â ' => ' ', 'Â' => '',
        );
        return preg_replace('/\s{2,}/', ' ', strtr($texto, $mapa));
    }
}
