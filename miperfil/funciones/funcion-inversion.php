<?php

class Inversion {

    function traerInversion() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM inversion";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, este sitio web está experimentando problemas.";
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_inversion' => $menu['id_inversion'],
                'montoin_inversion' => $menu['montoin_inversion'],
                'montoout_inversion' => $menu['montoout_inversion'],
                'diain_inversion' => $menu['diain_inversion'],
                'diaout_inversion' => $menu['diaout_inversion'],
                'prociento_inversion' => $menu['prociento_inversion']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function estadoInversion($idestado){
        $res="";
        if($idestado==1){
            $res="ACTIVO";
        }else if($idestado==0){
            $res="INACTIVO";
        }
        return $res;
    }

    ////////////FUNCIONES DE INGRESO

    

}
