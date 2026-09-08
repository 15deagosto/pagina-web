<?php
class Fn_100{
    
    function fn100_rnoticias_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM vacante WHERE estado_vacante != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn100_rnoticias_all -- fn100 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn100_rnoticias_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM noticias WHERE estado_noticia = 1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn100_rnoticias_all -- fn100 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn100_rusernoticias_xid($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT u.nombre_usuario, u.apellido_usuario from noticias n, usuario u WHERE n.id_usuario = u.id_usuario AND n.id_noticia = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn100_rnoticias_x -- fn100";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('nombre_usuario' => $menu['nombre_usuario'],
                'apellido_usuario' => $menu['apellido_usuario']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn100_cvacante_x($titulo, $resumen, $desc, $fecha_inicio, $fecha_final, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO vacante(nombre_vacante, requisitos_vacante, desc_vacante, fechain_vacante, fechaout_vacante, estado_vacante) "
                . " VALUES ('$titulo', '$resumen', '$desc', '$fecha_inicio', '$fecha_final', '$estado') ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn100_rnoticias_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from vacante where id_vacante = $id limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn100_rnoticias_x -- fn100";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_vacante' => $menu['id_vacante'],
                'nombre_vacante' => $menu['nombre_vacante'],
                'tiempo_vacante' => $menu['tiempo_vacante'],
                'desc_vacante' => $menu['desc_vacante'],
                'area_vacante' => $menu['area_vacante'],
                'funcion_vacante' => $menu['funcion_vacante'],
                'tipo_vacante' => $menu['tipo_vacante'],
                'presencia_vacante' => $menu['presencia_vacante'],
                'lugar_vacante' => $menu['lugar_vacante'],
                'id_zona' => $menu['id_zona'],
                'niveleduca_vacante' => $menu['niveleduca_vacante'],
                'requisitos_vacante' => $menu['requisitos_vacante'],
                'fechain_vacante' => $menu['fechain_vacante'],
                'fechaout_vacante' => $menu['fechaout_vacante'],
                'estado_vacante' => $menu['estado_vacante'],
                'img_vacante' => $menu['img_vacante'],
                'frame_vacante' => $menu['frame_vacante']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn100_unoticias_x($nombre_vacante, $tiempo_vacante, $area_vacante, $tipo_vacante,
            $presencia_vacante, $lugar_vacante, $niveleduca_vacante, $fechain_vacante, $fechaout_vacante, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE vacante SET nombre_vacante = '$nombre_vacante', tiempo_vacante = '$tiempo_vacante', "
                . " area_vacante = '$area_vacante', tipo_vacante = '$tipo_vacante', presencia_vacante = '$presencia_vacante', "
                . " lugar_vacante = '$lugar_vacante', niveleduca_vacante = '$niveleduca_vacante', "
                . " fechain_vacante = '$fechain_vacante', fechaout_vacante = '$fechaout_vacante' "
                . " WHERE id_vacante = $id ";
        // $desc;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn100_utextonoticias_x($funcion_vacante, $desc_vacante, $requisitos_vacante,$frame_vacante, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE vacante SET funcion_vacante = '$funcion_vacante', desc_vacante = '$desc_vacante', "
                . " requisitos_vacante = '$requisitos_vacante',frame_vacante='$frame_vacante' "
                . " WHERE id_vacante = $id ";
        //echo $sql;
        // $desc;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    
    function fn100_unoticias_ximg($imagen, $urlimagen,$id_noticia) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE vacante SET $imagen = '$urlimagen'  "
                . " WHERE id_vacante = $id_noticia ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn100_unoticias_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE vacante SET estado_vacante = $estado  "
                . " WHERE id_vacante = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn100_unoticias_xtip($id,$tiponot) {
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
    
    function fn100_estado_xid($id_estado){
        $res="INACTIVO";
        if($id_estado==1){
            $res="ACTIVO";
        }
        return $res;
    }
}
