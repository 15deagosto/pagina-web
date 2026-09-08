<?php

class Nosotros {

    function traerNosotros() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM nosotros order by id_nosotros ";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, este sitio web está experimentando problemas.";
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_nosotros' => $menu['id_nosotros'],
                'nombre_nosotros' => $menu['nombre_nosotros'],
                'tele1_nosotros' => $menu['tele1_nosotros'],
                'tele2_nosotros' => $menu['tele2_nosotros'],
                'tele3_nosotros' => $menu['tele3_nosotros'],
                'tele4_nosotros' => $menu['tele4_nosotros'],
                'red1_nosotros' => $menu['red1_nosotros'],
                'red2_nosotros' => $menu['red2_nosotros'],
                'red3_nosotros' => $menu['red3_nosotros'],
                'x_nosotros' => $menu['x_nosotros'],
                'y_nosotros' => $menu['y_nosotros'],
                'email1_nosotros' => $menu['email1_nosotros'],
                'email2_nosotros' => $menu['email2_nosotros']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function estadoNosotros($idestado){
        $res="";
        if($idestado==0){
            $res="ACTIVO";
        }else if($idestado==1){
            $res="INACTIVO";
        }
        return $res;
    }

    ////////////FUNCIONES DE INGRESO

    

}
