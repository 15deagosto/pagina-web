<?php

class Transparencia {

    function trae_balance() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM transparencia";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, No existe noticias.";
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_transp' => $menu['id_transp'],
                'nombre_transp' => $menu['nombre_transp'],
                'url_transp' => $menu['url_transp'],
                'mes_transp' => $menu['mes_transp'],
                'fecha_transp' => $menu['fecha_transp'],
                'posi_transp' => $menu['posi_transp'],
                'estado_transp' => $menu['estado_transp']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function trae_estado($estado) {
        $res = "ACTIVO";
        if ($estado == 1) {
            $res = "ACTIVO";
        } elseif ($estado == 0) {
            $res = "INACTIVO";
        }
        return $res;
    }

    
}
