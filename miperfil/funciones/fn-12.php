<?php
class Fn_12 {
    function fn12_rroles_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM rol WHERE estado_rol != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn12_rroles_all -- fn12 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn12_crol_xdata($nombre_rol, $permiso_rol, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fecha=date('Y-m-d');
        $sql = "INSERT INTO rol(nombre_rol, permiso_rol, estado_rol) "
                . " VALUES ('$nombre_rol', '$permiso_rol',$estado) ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn12_rroles_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from rol where id_rol = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn12_rroles_x -- fn12";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_rol' => $menu['id_rol'],
                'nombre_rol' => $menu['nombre_rol'],
                'permiso_rol' => $menu['permiso_rol'],
                'estado_rol' => $menu['estado_rol']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn12_urol_x($nombre_rol, $permiso_rol, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE rol SET nombre_rol = '$nombre_rol', permiso_rol = '$permiso_rol' "
                . " WHERE id_rol = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn12_uavisos_ximg($id, $img) {
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
    
    function fn12_urol_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE rol SET estado_rol = $estado  "
                . " WHERE id_rol = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    function fn12_estado_xid($id_estado){
        $res="INACTIVO";
        if($id_estado==1){
            $res="ACTIVO";
        }
        return $res;
    }
}
