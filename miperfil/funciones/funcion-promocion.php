<?php

class Promocion {

    ///// PRODUCTO REVISION
    function trae_promocion() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from promocion ";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, No existe noticias.";
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_promo' => $menu['id_promo'],
                'nombre_promo' => $menu['nombre_promo'],
                'desc_promo' => $menu['desc_promo'],
                'imagen_promo' => $menu['imagen_promo'],
                'banner_promo' => $menu['banner_promo'],
                'precio_promo' => $menu['precio_promo'],
                'estado_promo' => $menu['estado_promo'],
                'fechain_promo' => $menu['fechain_promo'],
                'fechaout_promo' => $menu['fechaout_promo']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function trae_estadopromo($estado) {
        $res = "ACTIVO";
        if ($estado == 1) {
            $res = "ACTIVO";
        } elseif ($estado == 0) {
            $res = "INACTIVO";
        }
        return $res;
    }

    

    function trae_estadocheck($estado) {
        $res = "";
        if ($estado == 1) {
            $res = "checked";
        } elseif ($estado == 0) {
            $res = "";
        }
        return $res;
    }

    function trae_tipo($idtipo) {
        $res = "CATEGORÍA";
        if ($idtipo == 1) {
            $res = "CATEGORÍA";
        } elseif ($idtipo == 2) {
            $res = "SUBCATEGORÍA";
        }
        return $res;
    }

    function trae_estadoproducto($idestado) {
        $res = "REVISIÓN";
        if ($idestado == 0) {
            $res = "REVISIÓN";
        } elseif ($idestado == 1) {
            $res = "APROBADO";
        } elseif ($idestado == 2) {
            $res = "NUEVO";
        } elseif ($idestado == 3) {
            $res = "DESTACADO";
        }

        return $res;
    }

    //INGRESO NUEVOS PROGRAMAS
    function ingresoPromo() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fechaactual = date('Y-m-d');
        $cuenta = 0;
        $cadena = "insert  into `promocion`(`desc_promo`,fechain_promo,fechaout_promo) "
                . "values ('--','".$fechaactual."','".$fechaactual."')";
        //echo $cadena;
        //$returna=true;
        //$mysqlidato->query($cadena)
        if ($mysqlidato->query($cadena) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }

    

}
