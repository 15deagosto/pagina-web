<?php

class Fn_credito {

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
