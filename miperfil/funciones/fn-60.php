<?php
class Fn_60 {

    function fn60_rtipoempleo_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM tipo_empleo WHERE estado_tipoempleo != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn60_rtipoempleo_all -- fn60 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn60_ctipoempleo_x($nombre_trabajo, $descripcion, $tipo_trabajo, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO tipo_empleo(nombre_tipoempleo, descripcion_tipoempleo, tipo_tipoempleo, estado_tipoempleo) "
                . " VALUES ('$nombre_trabajo', '$descripcion', '$tipo_trabajo', '$estado') ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn60_rtipoempleo_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from tipo_empleo where id_tipoempleo = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn60_rtipoempleo_x -- fn60";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_tipoempleo' => $menu['id_tipoempleo'],
                'nombre_tipoempleo' => $menu['nombre_tipoempleo'],
                'descripcion_tipoempleo' => $menu['descripcion_tipoempleo'],
                'tipo_tipoempleo' => $menu['tipo_tipoempleo'],
                'estado_tipoempleo' => $menu['estado_tipoempleo']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn60_utipoempleo_x($nombre_trabajo, $descripcion, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE tipo_empleo SET nombre_tipoempleo = '$nombre_trabajo', descripcion_tipoempleo = '$descripcion' "
                . " WHERE id_tipoempleo = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn60_utipoempleo_xtip($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE tipo_empleo SET tipo_tipoempleo = $estado  "
                . " WHERE id_tipoempleo = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn60_utipoempleo_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE tipo_empleo SET estado_tipoempleo = $estado  "
                . " WHERE id_tipoempleo = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    function fn60_utipoempleo_xtipo($tipo) {
        $res="PLANTA";
        if($tipo==2){
           $res="TEMPORAL"; 
        }
        return $res;
    }
}
