<?php
class Fn_92 {
    function fn92_ravisos_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM avisos WHERE est_avisos != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn92_ravisos_all -- fn92 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn92_rnoticias_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM noticias WHERE estado_noticia = 1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn92_rnoticias_all -- fn92 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn92_rusernoticias_xid($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT u.nombre_usuario, u.apellido_usuario from noticias n, usuario u WHERE n.id_usuario = u.id_usuario AND n.id_noticia = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn92_rnoticias_x -- fn92";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('nombre_usuario' => $menu['nombre_usuario'],
                'apellido_usuario' => $menu['apellido_usuario']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn92_cnoticias_x($titulo, $resumen, $desc, $fecha_inicio, $fecha_final, $imagen, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO noticias(titulo_noticia, resumen_noticia, detalle_noticia, fechainicio_noticia, fechafin_noticia, estado_noticia, img_noticia) "
                . " VALUES ('$titulo', '$resumen', '$desc', '$fecha_inicio', '$fecha_final', '$estado', '$imagen') ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn92_ravisos_xid($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from avisos where id_avisos = $id limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn92_ravisos_xid -- fn92";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_avisos' => $menu['id_avisos'],
                'img_avisos' => $menu['img_avisos'],
                'fecini_avisos' => $menu['fecini_avisos'],
                'fecfin_avisos' => $menu['fecfin_avisos'],
                'est_avisos' => $menu['est_avisos'],
                'url_avisos' => $menu['url_avisos']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn92_uavisos_x($fecini_avisos, $fecfin_avisos,$url_avisos, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE avisos SET fecini_avisos = '$fecini_avisos', fecfin_avisos = '$fecfin_avisos',url_avisos='$url_avisos'"
                . " WHERE id_avisos = $id ";
        // $desc;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn92_uavisos_ximg($urlimagen, $id_avisos) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE avisos SET img_avisos = '$urlimagen'  "
                . " WHERE id_avisos = $id_avisos ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn92_uavisos_xest($id,$estado) {
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
    
    function fn92_unoticias_xtip($id,$tiponot) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE noticias SET tipo_noticia = $tiponot  "
                . " WHERE id_noticia = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn92_estado_xid($id_estado){
        $res="INACTIVO";
        if($id_estado==1){
            $res="ACTIVO";
        }
        return $res;
    }
}
