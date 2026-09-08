<?php

class Bce {

    function traerBce() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM bce";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, este sitio web está experimentando problemas.";
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_bce' => $menu['id_bce'],
                'nombre_bce' => $menu['nombre_bce'],
                'tasa_bce' => $menu['tasa_bce']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function estadoBce($idestado){
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
