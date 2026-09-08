<?php
class Fn_56 {
    function fn56_rnoticias_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM noticias WHERE estado_noticia != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn56_rnoticias_all -- fn56 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn56_rnoticias_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM noticias WHERE estado_noticia = 1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn56_rnoticias_all -- fn56 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn56_rusernoticias_xid($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT u.nombre_usuario, u.apellido_usuario from noticias n, usuario u WHERE n.id_usuario = u.id_usuario AND n.id_noticia = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn56_rnoticias_x -- fn56";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('nombre_usuario' => $menu['nombre_usuario'],
                'apellido_usuario' => $menu['apellido_usuario']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn56_cnoticias_x($titulo, $resumen, $desc, $fecha_inicio, $fecha_final, $imagen, $estado) {
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
    
    function fn56_rnoticias_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from noticias where id_noticia = $id limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn56_rnoticias_x -- fn56";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_noticia' => $menu['id_noticia'],
                'titulo_noticia' => $menu['titulo_noticia'],
                'resumen_noticia' => $menu['resumen_noticia'],
                'detalle_noticia' => $menu['detalle_noticia'],
                'fechainicio_noticia' => $menu['fechainicio_noticia'],
                'fechafin_noticia' => $menu['fechafin_noticia'],
                'tipo_noticia' => $menu['tipo_noticia'],
                'imagenvideo_noticia' => $menu['imagenvideo_noticia'],
                'id_usuario' => $menu['id_usuario'],
                'estado_noticia' => $menu['estado_noticia'],
                'set_imgvideo' => $menu['set_imgvideo'],
                'img2_noticia' => $menu['img2_noticia'],
                'img_noticia' => $menu['img_noticia']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn56_unoticias_x($titulo, $resumen, $desc,$fechainicio_noticia, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE noticias SET titulo_noticia = '$titulo', resumen_noticia = '$resumen', detalle_noticia = '$desc',"
                . " fechainicio_noticia='$fechainicio_noticia' WHERE id_noticia = $id ";
        // $desc;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn56_unoticias_ximg($imagen, $urlimagen,$id_noticia) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE noticias SET $imagen = '$urlimagen'  "
                . " WHERE id_noticia = $id_noticia ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn56_unoticias_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE noticias SET estado_noticia = $estado  "
                . " WHERE id_noticia = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn56_unoticias_xtip($id,$tiponot) {
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
    
    function fn56_estado_xid($id_estado){
        $res="INACTIVO";
        if($id_estado==1){
            $res="ACTIVO";
        }
        return $res;
    }
}
