<?php
class Fn_68 {
    function fn68_rpreguntas_frecuentes_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM preguntas_frecuentes WHERE estado_prefrec != -1 order by orden_prefrec asc";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn68_rpreguntas_frecuentes_all -- fn68 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn68_cpreguntas_frecuentes_xdata($preg_prefrec, $resp_prefrec, $orden_prefrec) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO preguntas_frecuentes(preg_prefrec, resp_prefrec, estado_prefrec,orden_prefrec) "
                . " VALUES ('$preg_prefrec', '$resp_prefrec',0,$orden_prefrec) ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn68_rpreguntas_frecuentes_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from preguntas_frecuentes where id_prefrec  = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn68_rredes_x -- fn68";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_prefrec' => $menu['id_prefrec'],
                'preg_prefrec' => $menu['preg_prefrec'],
                'resp_prefrec' => $menu['resp_prefrec'],
                'orden_prefrec' => $menu['orden_prefrec'],
                'estado_prefrec' => $menu['estado_prefrec']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn68_upreguntas_frecuentes_x($preg_prefrec, $resp_prefrec,$orden_prefrec, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE  preguntas_frecuentes SET preg_prefrec = '$preg_prefrec', resp_prefrec = '$resp_prefrec', orden_prefrec = $orden_prefrec"
                . " WHERE id_prefrec  = $id";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    
    function fn68_upreguntas_frecuentes_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE preguntas_frecuentes SET estado_prefrec = $estado  "
                . " WHERE id_prefrec = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn68_estado_xid($id_estado){
        $res="INACTIVO";
        if($id_estado==1){
            $res="ACTIVO";
        }
        return $res;
    }
    
    function fn68_rpreguntas_frecuentes_maxid() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT max(id_prefrec)as id_prefrec from preguntas_frecuentes  limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn68_rredes_x -- fn68";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = $menu['id_prefrec']+1;
        }
        $mysqlidato->close();
        return $datosNuevos;
    }
    
}
