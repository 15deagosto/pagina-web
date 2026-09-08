<?php
class Fn_91 {
    function fn91_rrepositorio_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM repositorio WHERE estado_rep != -1 AND tipo_rep = 1 ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn91_rrepositorio_xcarpeta -- fn91 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    function fn91_rrepositorio_alltp() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM repositorio WHERE estado_rep != -1  ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn91_rrepositorio_xcarpeta -- fn91 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    

    function fn91_crepositorio_xdata($nuevoArchivo, $url_repositorio, $tipo_rep, $fecha_rep, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO repositorio(nombre_rep, url_rep, tipo_rep, fecha_rep, estado_rep) "
                . " VALUES ('$nuevoArchivo', '$url_repositorio', $tipo_rep, '$fecha_rep', $estado)";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn91_rrepositorio_xarchivo($tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from repositorio where tipo_rep = $tipo AND  estado_rep = 1";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn91_rrepositorio_xarchivo -- fn91 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn91_rrepositorio_xarchivoTp($tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from repositorio where tipo_rep > 1 AND  estado_rep = 1";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn91_rrepositorio_xarchivo -- fn91 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn91_rrepositorio_xarchivoid($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from repositorio where id_rep = ".$id." AND estado_rep = 1 limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn91_rrepositorio_xarchivoid -- fn91";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_rep' => $menu['id_rep'],
                'nombre_rep' => $menu['nombre_rep'],
                'url_rep' => $menu['url_rep'],
                'id_padre' => $menu['id_padre'],
                'tipo_rep' => $menu['tipo_rep'],
                'fecha_rep' => $menu['fecha_rep'],
                'estado_rep' => $menu['estado_rep']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    
    function fn91_urepositorio_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE repositorio SET estado_rep = $estado  "
                . " WHERE id_rep = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    function fn91_estado_xid($id_estado){
        $res="INACTIVO";
        if($id_estado==1){
            $res="ACTIVO";
        }
        return $res;
    }
    
    
   
}