<?php
class Fn_103 {
    function fn103_ravisos_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM avisos WHERE est_avisos != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn103_ravisos_all -- fn103 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn103_cavisos_xdata($img_avisos, $fecini_avisos, $fecfin_avisos, $est_avisos) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO avisos(img_avisos,fecini_avisos, fecfin_avisos, icono,est_avisos) "
                . " VALUES ('$img_avisos', '$fecini_avisos', '$fecfin_avisos', $est_avisos) ";
       // echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn103_ravisos_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from avisos where id_avisos  = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn103_rredes_x -- fn103";
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
    
    function fn103_uavisos_x($fecini_avisos, $fecfin_avisos, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE avisos SET fecini_avisos = '$fecini_avisos', fecfin_avisos = '$fecfin_avisos'"
                . " WHERE id_avisos  = $id";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn103_uavisos_ximg($id, $img) {
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
    
    function fn103_uavisos_xest($id,$estado) {
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
    
    function fn103_estado_xid($id_estado){
        $res="INACTIVO";
        if($id_estado==1){
            $res="ACTIVO";
        }
        return $res;
    }
    
}
