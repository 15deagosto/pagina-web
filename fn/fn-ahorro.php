<?php

class Fn_ahorro {

    function fnahorro_xget_ahorro($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $id = intval($id);
        $sql = "SELECT nombre_prod FROM producto WHERE id_prod = $id AND estado_prod = 1 LIMIT 1";
        $resultado = $mysqlidato->query($sql);
        $titulo = 'Cuenta de Ahorro';
        if ($resultado && $fila = $resultado->fetch_assoc()) {
            $titulo = $fila['nombre_prod'];
        }
        $mysqlidato->close();
        return $titulo;
    }

    function fnahorro_xdescget_ahorro($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $id = intval($id);
        $sql = "SELECT descripcion_prod FROM producto WHERE id_prod = $id AND estado_prod = 1 LIMIT 1";
        $resultado = $mysqlidato->query($sql);
        $desc = 'Encuentra la cuenta de ahorro que se ajusta a tus metas, con el respaldo de una cooperativa regulada por la SEPS.';
        if ($resultado && ($fila = $resultado->fetch_assoc()) && !empty($fila['descripcion_prod'])) {
            $desc = $fila['descripcion_prod'];
        }
        $mysqlidato->close();
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
