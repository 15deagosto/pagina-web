<?php

class Interes {

    function traerIntereses() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM tasa";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, este sitio web está experimentando problemas.";
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_tasa' => $menu['id_tasa'],
                'nombre_tasa' => $menu['nombre_tasa'],
                'desc_tasa' => $menu['desc_tasa'],
                'tasanominal_tasa' => $menu['tasanominal_tasa'],
                'efectivaanual_tasa' => $menu['efectivaanual_tasa'],
                'efectivofin_tasa' => $menu['efectivofin_tasa'],
                'acumulacion_tasa' => $menu['acumulacion_tasa'],
                'interesanual_tasa' => $menu['interesanual_tasa'],
                'estado_tasa' => $menu['estado_tasa'],
                'min_tasa' => $menu['min_tasa'],
                'max_tasa' => $menu['max_tasa'],
                'valmin_tasa' => $menu['valmin_tasa'],
                'valmax_tasa' => $menu['valmax_tasa']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function estadoInteres($idestado) {
        $res = "";
        if ($idestado == 1) {
            $res = "ACTIVO";
        } else if ($idestado == 0) {
            $res = "INACTIVO";
        }
        return $res;
    }

    ////////////FUNCIONES DE INGRESO
}
