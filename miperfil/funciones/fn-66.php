<?php
class Fn_66 {
    function fn66_reducacion_financiera_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM educacion_financiera WHERE estado_edfi != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn66_reducacion_financiera_all -- fn66 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
     function fn66_reducacion_financiera_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM educacion_financiera WHERE estado_edfi = 1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn66_reducacion_financiera_all -- fn66 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn66_ceducacion_financiera_xdata($titulo_edfi,$fecha_edfi, $descripcion_edfi,$resumen_edfi, $orden_edfi, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO educacion_financiera(titulo_edfi,fecha_edfi, descripcion_edfi,resumen_edfi, orden_edfi, estado_edfi,img1_edfi,img2_edfi,img3_edfi) "
                . " VALUES ('$titulo_edfi','$fecha_edfi', '$descripcion_edfi','$resumen_edfi', $orden_edfi, $estado,'','','') ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) { 
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn66_reducacion_financiera_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from educacion_financiera where id_edfi = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn66_reducacion_financiera_x -- fn66";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_edfi' => $menu['id_prod'],
                'titulo_edfi' => $menu['titulo_edfi'],
                'url_edfi' => $menu['url_edfi'],
                'resumen_edfi' => $menu['resumen_edfi'],
                'descripcion_edfi' => $menu['descripcion_edfi'],
                'orden_edfi' => $menu['orden_edfi'],
                'imagen_edfi' => $menu['imagen_edfi'],
                'fecha_edfi' => $menu['fecha_edfi'],
                'img1_edfi' => $menu['img1_edfi'],
                'img2_edfi' => $menu['img2_edfi'],
                'img3_edfi' => $menu['img3_edfi']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    
    
    function fn66_reducacion_financiera_xid($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from educacion_financiera where id_edfi = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn66_reducacion_financiera_x -- fn66";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_prod ' => $menu['id_prod '],
                'nombre_prod' => $menu['nombre_prod'],
                'descripcion_prod' => $menu['descripcion_prod'],
                'tipo_prod' => $menu['tipo_prod'],
                'texto1_prod' => $menu['texto1_prod'],
                'texto2_prod' => $menu['texto2_prod'],
                'texto3_prod' => $menu['texto3_prod'],
                'imagen_edfi' => $menu['imagen_edfi'],
                'estado_prod' => $menu['estado_prod']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn66_ueducacion_financiera_x($titulo_edfi,$resumen_edfi, $descripcion_edfi,$fecha_edfi, $orden_edfi, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE educacion_financiera SET titulo_edfi = '$titulo_edfi', descripcion_edfi = '$descripcion_edfi',"
                . "orden_edfi = $orden_edfi ,resumen_edfi='$resumen_edfi', fecha_edfi='$fecha_edfi' "
                . " WHERE id_edfi = $id";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn66_uavisos_ximg($id, $img) {
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
    
    function fn66_ueducacion_financiera_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE educacion_financiera SET estado_edfi = $estado  "
                . " WHERE id_edfi = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    function fn66_estado_xid($id_estado){
        $res="INACTIVO";
        if($id_estado==1){
            $res="ACTIVO";
        }
        return $res;
    }
    
    function fn66_ueducacion_financiera_xtexto($texto1_prod, $texto2_prod,$texto3_prod,$id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE educacion_financiera SET texto1_prod = '".$texto1_prod."',texto2_prod = '".$texto2_prod."',texto3_prod = '".$texto3_prod."' "
                . " WHERE id_prod  = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn66_ueducacion_financiera_xImg($imagen, $urlimagen,$id_edfi) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE educacion_financiera SET $imagen = '$urlimagen' "
                . " WHERE id_edfi = $id_edfi ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn66_ueducacion_financiera_xImgenes($imagen, $urlimagen,$id_edfi) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE educacion_financiera SET $imagen = '$urlimagen' "
                . " WHERE id_edfi = $id_edfi ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    function fn66_reducacion_financiera_xrol($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from rol where id_rol = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn66_ueducacion_financiera_xrol -- fn66";
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
    
    function fn66_ueducacion_financiera_xrol($id,$idrol) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE educacion_financiera SET id_rol = $idrol  "
                . " WHERE id_usuario = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
}