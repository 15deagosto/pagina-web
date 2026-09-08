<?php
class Fn_65 {
    function fn65_rdocumentos_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM documentos WHERE estado_doc != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn65_rdocumentos_all -- fn65 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn65_rdocumentos_alltp($tipo3) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM documentos WHERE estado_doc = 1  AND tipo3_doc = $tipo3 ";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn65_rdocumentos_all -- fn65 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn65_cdocumentos_xdata($titulo_doc, $descripcion_doc, $tipo1_doc, $tipo2_doc,$tipo3_doc, $url_doc, $fecha_doc, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO documentos(titulo_doc, descripcion_doc, tipo1_doc,tipo2_doc,tipo3_doc,url_doc,fecha_doc,estado_doc) "
                . " VALUES ('$titulo_doc', '$descripcion_doc', $tipo1_doc,$tipo2_doc, $tipo3_doc, '$url_doc','$fecha_doc',$estado) ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn65_rdocumentos_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from documentos where id_doc  = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn65_rdocumentos_x -- fn65";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_doc' => $menu['id_doc'],
                'titulo_doc' => $menu['titulo_doc'],
                'descripcion_doc' => $menu['descripcion_doc'],
                'tipo1_doc' => $menu['tipo1_doc'],
                'tipo2_doc' => $menu['tipo2_doc'],
                'tipo3_doc' => $menu['tipo3_doc'],
                'url_doc' => $menu['url_doc'],
                'imagen_doc' => $menu['imagen_doc']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn65_rdocumentos_xtextos($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from documentos where id_prod = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn65_rdocumentos_x -- fn65";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_prod' => $menu['id_prod'],
                'nombre_prod' => $menu['nombre_prod'],
                'descripcion_prod' => $menu['descripcion_prod'],
                'tipo_prod' => $menu['tipo_prod'],
                'texto1_prod' => $menu['texto1_prod'],
                'texto2_prod' => $menu['texto2_prod'],
                'texto3_prod' => $menu['texto3_prod'],
                'estado_prod' => $menu['estado_prod']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn65_udocumentos_x($titulo_doc, $descripcion_doc, $tipo2_doc, $url_doc, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE documentos SET titulo_doc = '$titulo_doc', descripcion_doc = '$descripcion_doc', tipo2_doc = $tipo2_doc, url_doc = '$url_doc'"
                . " WHERE id_doc = $id";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn65_uavisos_ximg($id, $img) {
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
    
    function fn65_udocumentos_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE documentos SET estado_doc = $estado  "
                . " WHERE id_doc = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    function fn65_estado_xid($id_estado){
        $res="INACTIVO";
        if($id_estado==1){
            $res="ACTIVO";
        }
        return $res;
    }
    
    function fn65_udocumentos_xtexto($texto1_prod, $texto2_prod,$texto3_prod,$id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE documentos SET texto1_prod = '".$texto1_prod."',texto2_prod = '".$texto2_prod."',texto3_prod = '".$texto3_prod."' "
                . " WHERE id_prod  = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn65_udocumentos_xImg($imagen, $urlimagen,$id_doc) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE documentos SET $imagen = '$urlimagen' "
                . " WHERE id_doc = $id_doc ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn65_rdocumentos_xrol($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from rol where id_rol = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn65_udocumentos_xrol -- fn65";
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
    
    function fn65_udocumentos_xtipo($stipo,$id,$tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE documentos SET $stipo = $tipo  "
                . " WHERE id_doc = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
}