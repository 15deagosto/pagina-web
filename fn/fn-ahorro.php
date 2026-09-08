<?php

class Fn_ahorro {

    function fnahorro_xget_ahorro($id) {
        if ($id == 1) {
            $titulo = 'Ahorro VIP';
        }
        if ($id == 2) {
            $titulo = 'Ahorro Preferencial';
        }
        if ($id == 3) {
            $titulo = 'Ahorro Socio Fiel';
        }
        if ($id == 4) {
            $titulo = 'Ahorro 15 de Agosto';
        }
        if ($id == 5) {
            $titulo = 'Ahorro Agustín';
        }
        if ($id == 6) {
            $titulo = 'Ahorro Futuro';
        }
        if ($id == 7) {
            $titulo = 'Ahorro Inversiones';
        }
        if ($id == 8) {
            $titulo = 'Cuenta Ahorro Abono';
        }

        return $titulo;
    }

    function fnahorro_xdescget_ahorro($id) {
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

    function fnahorro_xget_listahorro() {
        $foo = array("1" => 'Crédito Socio Fiel',
            "2" => 'Consumo',
            "3" => 'Credi Poliza Especial',
            "4" => 'Microcrédito Facilito',
            "5" => 'Microcrédito Especial',
            "6" => 'Microcrédito Preferencial',
            "7" => 'Micro Emprendedor',
            "8" => 'Micro Emprendedor VIP',
            "9" => 'CrediPuntos',
            "10" => 'Crédito Mujer emprendedora');
        return $foo;
    }
    
    
}
