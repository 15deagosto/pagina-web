<?php
class Fn_61 {

    function fn61_rindicadores_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM indicadores WHERE estado_indicador != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn61_rindicadores_all -- fn61 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn61_cindicadores_x($fecha_indicador, $dato_indicador, $sucursal_indicador, $tipo_indicador, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO indicadores(fecha_indicador, dato_indicador, sucursal_indicador, tipo_indicador, estado_indicador) "
                . " VALUES ('$fecha_indicador', '$dato_indicador', '$sucursal_indicador', '$tipo_indicador', '$estado') ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn61_rindicadores_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from indicadores where id_indicador = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn61_rindicadores_x -- fn61";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_indicador' => $menu['id_indicador'],
                'fecha_indicador' => $menu['fecha_indicador'],
                'dato_indicador' => $menu['dato_indicador'],
                'tipo_indicador' => $menu['tipo_indicador'],
                'sucursal_indicador' => $menu['sucursal_indicador'],
                'estado_indicador' => $menu['estado_indicador']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn61_uindicadores_x($fecha_indicador, $dato_indicador, $sucursal_indicador, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE indicadores SET fecha_indicador = '$fecha_indicador', dato_indicador = '$dato_indicador', sucursal_indicador = '$sucursal_indicador' "
                . " WHERE id_indicador = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn61_uindicadores_xtip($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE indicadores SET tipo_indicador = $estado  "
                . " WHERE id_indicador = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn61_uindicadores_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE indicadores SET estado_indicador = $estado  "
                . " WHERE id_indicador = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
}
