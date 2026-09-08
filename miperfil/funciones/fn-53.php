<?php
class Fn_53 {
    function fn53_ravisos_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM avisos WHERE est_avisos != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn53_ravisos_all -- fn53 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn53_cavisos_x($fechainicio, $fechafin, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO avisos(fecini_avisos, fecfin_avisos, est_avisos) "
                . " VALUES ('$fechainicio', '$fechafin', '$estado') ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn53_ravisos_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from avisos where id_avisos = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn53_ravisos_x -- fn53";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_avisos' => $menu['id_avisos'],
                'img_avisos' => $menu['img_avisos'],
                'fecini_avisos' => $menu['fecini_avisos'],
                'fecfin_avisos' => $menu['fecfin_avisos'],
                'est_avisos' => $menu['est_avisos']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn53_uavisos_x($fechainicio, $fechafin, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE avisos SET fecini_avisos = '$fechainicio', fecfin_avisos = '$fechafin' "
                . " WHERE id_avisos = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn53_uavisos_ximg($id, $img) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE avisos SET img_avisos = '$img'  "
                . " WHERE id_avisos = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn53_uavisos_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE avisos SET est_avisos = $estado  "
                . " WHERE id_avisos = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
}
