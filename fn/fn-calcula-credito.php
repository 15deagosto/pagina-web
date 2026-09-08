<?php

class Fn_calculacredito {
    // Configuración base
    const MIN_PLAZO = 3;
    
    const MIN_TASA = 0;
    const MAX_TASA = 14.99;
    const MIN_VALOR = 300;
    const MAX_VALOR = 15000;
    const PORC_FONDO_RESERVA = 3; // 3%
    const PORC_SOLCA_APORTE = 0.5; // 0.5%

    public static $MAX_PLAZO;
    public static $MAX_VALOR;
    // Definición de los rangos por tipo de crédito
    private static $rangosPorCredito = [
        'SOCIOFIEL' => [
            ['min' => 300, 'max' => 1060, 'plazo_max' => 12],
            ['min' => 1061, 'max' => 2100, 'plazo_max' => 18],
            ['min' => 2101, 'max' => 3150, 'plazo_max' => 24],
            ['min' => 3151, 'max' => 5250, 'plazo_max' => 30],
            ['min' => 5251, 'max' => 10500, 'plazo_max' => 42],
            ['min' => 10501, 'max' => 15000, 'plazo_max' => 48]
        ],
        'CONSUMO' => [
            ['min' => 300, 'max' => 1060, 'plazo_max' => 12],
            ['min' => 1061, 'max' => 2100, 'plazo_max' => 18],
            ['min' => 2101, 'max' => 3150, 'plazo_max' => 24],
            ['min' => 3151, 'max' => 5250, 'plazo_max' => 30],
            ['min' => 5251, 'max' => 10500, 'plazo_max' => 42],
            ['min' => 10501, 'max' => 21000, 'plazo_max' => 54],
            ['min' => 21001, 'max' => 31500, 'plazo_max' => 66],
            ['min' => 31501, 'max' => 52500, 'plazo_max' => 84],
            ['min' => 52501, 'max' => 84000, 'plazo_max' => 96]
        ],
        'FACILITO' => [
            ['min' => 300, 'max' => 1060, 'plazo_max' => 12],
            ['min' => 1061, 'max' => 2100, 'plazo_max' => 18],
            ['min' => 2101, 'max' => 3150, 'plazo_max' => 24],
            ['min' => 3151, 'max' => 5250, 'plazo_max' => 30],
            ['min' => 5251, 'max' => 10500, 'plazo_max' => 42],
            ['min' => 10501, 'max' => 21000, 'plazo_max' => 54],
            ['min' => 21001, 'max' => 31500, 'plazo_max' => 66],
            ['min' => 31501, 'max' => 52500, 'plazo_max' => 84],
            ['min' => 52501, 'max' => 84000, 'plazo_max' => 96]
        ],
        'ESPECIAL' => [
            ['min' => 300, 'max' => 1060, 'plazo_max' => 12],
            ['min' => 1061, 'max' => 2100, 'plazo_max' => 18],
            ['min' => 2101, 'max' => 3150, 'plazo_max' => 24],
            ['min' => 3151, 'max' => 5250, 'plazo_max' => 30],
            ['min' => 5251, 'max' => 10500, 'plazo_max' => 42],
            ['min' => 10501, 'max' => 21000, 'plazo_max' => 54],
            ['min' => 21001, 'max' => 31500, 'plazo_max' => 66],
            ['min' => 31501, 'max' => 52500, 'plazo_max' => 84],
            ['min' => 52501, 'max' => 84000, 'plazo_max' => 96]
        ],
        'PREFERENCIAL' => [
            ['min' => 300, 'max' => 1060, 'plazo_max' => 12],
            ['min' => 1061, 'max' => 2100, 'plazo_max' => 18],
            ['min' => 2101, 'max' => 3150, 'plazo_max' => 24],
            ['min' => 3151, 'max' => 5250, 'plazo_max' => 30],
            ['min' => 5251, 'max' => 10500, 'plazo_max' => 42],
            ['min' => 10501, 'max' => 21000, 'plazo_max' => 54],
            ['min' => 21001, 'max' => 31500, 'plazo_max' => 66],
            ['min' => 31501, 'max' => 52500, 'plazo_max' => 84],
            ['min' => 52501, 'max' => 84000, 'plazo_max' => 96]
        ],
        'MICROEMPRENDEDOR' => [
            ['min' => 300, 'max' => 1060, 'plazo_max' => 12],
            ['min' => 1061, 'max' => 2100, 'plazo_max' => 18],
            ['min' => 2101, 'max' => 3150, 'plazo_max' => 24],
            ['min' => 3151, 'max' => 5250, 'plazo_max' => 30],
            ['min' => 5251, 'max' => 10500, 'plazo_max' => 42],
            ['min' => 10501, 'max' => 25000, 'plazo_max' => 48]
        ],
        'MICROVIP' => [
            ['min' => 300, 'max' => 1060, 'plazo_max' => 12],
            ['min' => 1061, 'max' => 2100, 'plazo_max' => 18],
            ['min' => 2101, 'max' => 3150, 'plazo_max' => 24],
            ['min' => 3151, 'max' => 5250, 'plazo_max' => 30],
            ['min' => 5251, 'max' => 10500, 'plazo_max' => 42],
            ['min' => 10501, 'max' => 25000, 'plazo_max' => 54],
            ['min' => 25001, 'max' => 40000, 'plazo_max' => 66]
        ],
        'CREDIPUNTOS' => [
            ['min' => 300, 'max' => 1000, 'plazo_max' => 12]
        ],
        'MUJEREMPRENDEDORA' => [
            ['min' => 300, 'max' => 1060, 'plazo_max' => 12],
            ['min' => 1061, 'max' => 2100, 'plazo_max' => 24],
            ['min' => 2101, 'max' => 3150, 'plazo_max' => 36],
        ]
    ];

    /**
     * Obtiene los rangos para un tipo de crédito específico
     */
    public static function obtenerRangos($tipoCredito) {
        return self::$rangosPorCredito[$tipoCredito] ?? self::$rangosPorCredito['PERSONAL'];
    }

    /**
     * Obtiene el plazo máximo según el monto y tipo de crédito
     */
    public static function obtenerPlazoMaximo($monto, $tipoCredito) {
        $rangos = self::obtenerRangos($tipoCredito);
        
        foreach ($rangos as $rango) {
            if ($monto >= $rango['min'] && $monto <= $rango['max']) {
                return $rango['plazo_max'];
            }
        }
        
        // Si no está en ningún rango, devolver el máximo del último rango
        return end($rangos)['plazo_max'];
    }

    /**
     * Valida si los parámetros del crédito son correctos para el tipo de crédito
     */
    public static function validarCredito($monto, $plazo, $tasa, $tipoCredito) {
        $rangos = self::obtenerRangos($tipoCredito);
        //print_r($rangos);
        $plazo_maximo = self::obtenerPlazoMaximo($monto, $tipoCredito);
        self::$MAX_PLAZO = $plazo_maximo;
        $min_valor = $rangos[0]['min'];
        $max_valor = end($rangos)['max'];
        self::$MAX_VALOR = end($rangos)['max'];
        return ($monto >= $min_valor && $monto <= $max_valor) &&
               ($plazo >= self::MIN_PLAZO && $plazo <= $plazo_maximo);
    }

    /**
     * Calcula la cuota mensual usando el sistema de amortización francés
     */
    public static function calcularCuotaMensual($monto, $tasa, $plazo) {
        $tasa_mensual = ($tasa / 100) / 12;
        $factor = pow(1 + $tasa_mensual, $plazo);
        return $monto * ($tasa_mensual * $factor) / ($factor - 1);
    }

    /**
     * Calcula todos los valores relacionados con el crédito
     */
    public static function calcularCreditoCompleto($monto, $plazo, $tasa, $tipoCredito) {
        if (!self::validarCredito($monto, $plazo, $tasa, $tipoCredito)) {
            return ['error' => 'Parámetros de crédito no válidos para el producto seleccionado,'
                . ' el plazo máximo es de: '.self::$MAX_PLAZO.' meses y el valor máximo es de: $'.self::$MAX_VALOR];
        }
        // Cálculo de valores adicionales
        $fondo_reserva = $monto * (self::PORC_FONDO_RESERVA / 100);
        $solca_aporte = $monto * (self::PORC_SOLCA_APORTE / 100);
        $monto_total = $monto + $fondo_reserva + $solca_aporte;
        // Cálculo de la cuota mensual
        $cuota_mensual = self::calcularCuotaMensual($monto, $tasa, $plazo);
        // Cálculo del costo total del crédito
        $costo_total = ($cuota_mensual * $plazo) - $monto;
        return [
            'tipo_credito' => $tipoCredito,
            'monto_solicitado' => $monto,
            'plazo' => $plazo,
            'tasa_interes' => $tasa,
            'fondo_reserva' => round($fondo_reserva, 2),
            'solca_aporte' => round($solca_aporte, 2),
            'monto_total' => round($monto_total, 2),
            'cuota_mensual' => round($cuota_mensual, 2),
            'costo_total' => round($costo_total, 2),
            'total_a_pagar' => round($cuota_mensual * $plazo, 2),
            'rangos_aplicados' => self::obtenerRangos($tipoCredito)
        ];
    }
}
?>