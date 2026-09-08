<?php

class Fn_credito {

    function fncredito_xget_producto($id) {
        $productos = [
            'credito' => [
                [
                    'nombre' => 'Crédito Personal Express',
                    'descripcion' => 'Crédito de consumo para necesidades personales',
                    'beneficios' => ['Desembolso rápido', 'Tasa preferencial', 'Sin garantía'],
                    'valor_minimo' => 1000000,
                    'valor_maximo' => 50000000,
                    'requisitos' => ['Copia de cédula', 'Certificado laboral', 'Extractos bancarios'],
                    'rangos_montos' => [
                        ['min' => 1000000, 'max' => 10000000, 'tasa' => 1.5],
                        ['min' => 10000001, 'max' => 30000000, 'tasa' => 1.8],
                        ['min' => 30000001, 'max' => 50000000, 'tasa' => 2.0]
                    ]
                ],
                [
                    'nombre' => 'Crédito Hipotecario',
                    'descripcion' => 'Financiamiento para vivienda',
                    'beneficios' => ['Plazo hasta 20 años', 'Tasa fija', 'Abonos extraordinarios'],
                    'valor_minimo' => 50000000,
                    'valor_maximo' => 500000000,
                    'requisitos' => ['Estudio de crédito', 'Avalúo', 'Contrato de compraventa'],
                    'rangos_montos' => [
                        ['min' => 50000000, 'max' => 200000000, 'tasa' => 0.8],
                        ['min' => 200000001, 'max' => 500000000, 'tasa' => 0.9]
                    ]
                ]
            ],
            'ahorro' => [
                [
                    'nombre' => 'Cuenta de Ahorros Regular',
                    'descripcion' => 'Cuenta básica para ahorro personal',
                    'beneficios' => ['Liquidez inmediata', 'Tarjeta débito', 'Sin costo de manejo'],
                    'valor_minimo' => 0,
                    'valor_maximo' => 1000000000,
                    'requisitos' => ['Documento de identidad', 'Firma de formularios'],
                    'rangos_montos' => [
                        ['min' => 0, 'max' => 10000000, 'tasa_interes' => 0.5],
                        ['min' => 10000001, 'max' => 50000000, 'tasa_interes' => 1.0],
                        ['min' => 50000001, 'max' => 1000000000, 'tasa_interes' => 1.5]
                    ]
                ]
            ],
            'inversiones' => [
                [
                    'nombre' => 'Fondo de Inversión Moderado',
                    'descripcion' => 'Fondo diversificado con riesgo moderado',
                    'beneficios' => ['Diversificación', 'Rentabilidad histórica 8%', 'Profesionales gestionando'],
                    'valor_minimo' => 5000000,
                    'valor_maximo' => 1000000000,
                    'requisitos' => ['Perfil de riesgo', 'Declaración de renta', 'Experiencia previa'],
                    'rangos_montos' => [
                        ['min' => 5000000, 'max' => 50000000, 'comision' => 1.5],
                        ['min' => 50000001, 'max' => 200000000, 'comision' => 1.2],
                        ['min' => 200000001, 'max' => 1000000000, 'comision' => 0.9]
                    ]
                ]
            ]
        ];
        return $productos;
    }

    function fncredito_xget_credito($id) {
        if ($id == 1) {
            $titulo = 'Crédito Socio Fiel';
        }
        if ($id == 2) {
            $titulo = 'Consumo';
        }
        if ($id == 3) {
            $titulo = 'Credi Poliza Especial';
        }
        if ($id == 4) {
            $titulo = 'Microcrédito Facilito';
        }
        if ($id == 5) {
            $titulo = 'Microcrédito Especial';
        }
        if ($id == 6) {
            $titulo = 'Microcrédito Preferencial';
        }
        if ($id == 7) {
            $titulo = 'Micro Emprendedor';
        }
        if ($id == 8) {
            $titulo = 'Micro Emprendedor VIP';
        }
        if ($id == 9) {
            $titulo = 'CrediPuntos';
        }
        if ($id == 10) {
            $titulo = 'Crédito Mujer emprendedora';
        }
        return $titulo;
    }

    function fncredito_xdescget_credito($id) {
        if ($id == 1) {
            $desc = 'Crédito otrogado a personas CONSIDERADAS TRIPLE AAA se otorga para compra de vehículos de uso personal, terreno para vivienda, acabados y linea blanca.';
        }
        if ($id == 2) {
            $desc = 'Es el otorgado a personas naturales, destinado a la compra de bienes y servicios(vehículos de uso personal, terreno para construcción de vivienda)';
        }
        if ($id == 3) {
            $desc = 'Crédito bajo garantía de poliza';
        }
        if ($id == 4) {
            $desc = 'Considerar el nivel de ventas para la emición del crésito sea minorista, simple o ampliada.';
        }
        if ($id == 5) {
            $desc = 'Considerar el nivel de ventas para la emición del crésito sea minorista, simple o ampliada.';
        }
        if ($id == 6) {
            $desc = 'Considerar el nivel de ventas para la emición del crésito sea minorista, simple o ampliada.';
        }
        if ($id == 7) {
            $desc = 'Crédito otorgado a personas CONSIDERADAS TRIPLE AAA, DOBLE AA financiar actividades de producción y/o comercialización en pequeña escala.';
        }
        if ($id == 8) {
            $desc = 'Crédito PRE APROBADO otorgado a personas CONDIDERADAS TRIPLE AAA, DOBLE AA sirve para solventar necesidades de financiamiento inmediato emergentes, también esta destinado a capital de trabajo.';
        }
        if ($id == 9) {
            $desc = 'Es el otorgado a personas naturales, destinado a reahabilitar su puntaje en el buró crediticio.';
        }
        if ($id == 10) {
            $desc = 'Es el otorgado a MUJERES, con destino a financiar actividades de producción. ( Se exceptúa la firma del conyuge). ';
        }
        return $desc;
    }

//    function fncredito_xget_listcredito() {
//        $foo = array("SOCIOFIEL" => 'Crédito Socio Fiel',
//            "CONSUMO" => 'Consumo',
//            "POLIZA" => 'Credi Poliza Especial',
//            "FACILITO" => 'Microcrédito Facilito',
//            "ESPECIAL" => 'Microcrédito Especial',
//            "PREFERENCIAL" => 'Microcrédito Preferencial',
//            "MICROEMPRENDEDOR" => 'Micro Emprendedor',
//            "MICROVIP" => 'Micro Emprendedor VIP',
//            "CREDIPUNTOS" => 'CrediPuntos',
//            "MUJEREMPRENDEDORA" => 'Crédito Mujer emprendedora');
//        return $foo;
//    }

    function fncredito_xget_creditotasa($tipocredito) {
        if ($tipocredito == 'SOCIOFIEL') {
            $tasa = 14.55;
        }
        if ($tipocredito == 'CONSUMO') {
            $tasa = 15.50;
        }
        if ($tipocredito == 'POLIZA') {
            $tasa = 17.99;
        }
        if ($tipocredito == 'FACILITO') {
            $tasa = 24.99;
        }
        if ($tipocredito == 'ESPECIAL') {
            $tasa = 21.99;
        }
        if ($tipocredito == 'PREFERENCIAL') {
            $tasa = 20.09;
        }
        if ($tipocredito == 'MICROEMPRENDEDOR') {
            $tasa = 17.99;
        }
        if ($tipocredito == 'MICROVIP') {
            $tasa = 17.99;
        }
        if ($tipocredito == 'CREDIPUNTOS') {
            $tasa = 24.99;
        }
        if ($tipocredito == 'MUJEREMPRENDEDORA') {
            $tasa = 19.90;
        }
        return $tasa;
    }

    function fnindex_rslider() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM slider where est_slider = 1 "
                . " order by id_slider asc ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rslider -- fnindex";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
}
