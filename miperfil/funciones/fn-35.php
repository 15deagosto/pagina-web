<?php
class Fn_35 {
    function fn35_rresponsabilidad_social_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM responsabilidad_social WHERE estado_respsocial != -1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn35_rresponsabilidad_social_all -- fn35 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn35_rresponsabilidad_social_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM responsabilidad_social WHERE estado_respsocial = 1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn35_rresponsabilidad_social_all -- fn35 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn35_ruserresponsabilidad_social_xid($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT u.nombre_usuario, u.apellido_usuario from responsabilidad_social n, usuario u WHERE n.id_usuario = u.id_usuario AND n.id_respsocial = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn35_rresponsabilidad_social_x -- fn35";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('nombre_usuario' => $menu['nombre_usuario'],
                'apellido_usuario' => $menu['apellido_usuario']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn35_cresponsabilidad_social_x($titulo, $resumen, $desc, $fecha_inicio, $fecha_final, $imagen, $estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO responsabilidad_social(titulo_respsocial, resumen_respsocial, detalle_respsocial, fechainicio_respsocial, fechafin_respsocial, estado_respsocial, img_respsocial) "
                . " VALUES ('$titulo', '$resumen', '$desc', '$fecha_inicio', '$fecha_final', $estado, '$imagen') ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn35_rresponsabilidad_social_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from responsabilidad_social where id_respsocial = $id limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn35_rresponsabilidad_social_x -- fn35";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_respsocial' => $menu['id_respsocial'],
                'titulo_respsocial' => $menu['titulo_respsocial'],
                'resumen_respsocial' => $menu['resumen_respsocial'],
                'detalle_respsocial' => $menu['detalle_respsocial'],
                'fechainicio_respsocial' => $menu['fechainicio_respsocial'],
                'fechafin_respsocial' => $menu['fechafin_respsocial'],
                'tipo_respsocial' => $menu['tipo_respsocial'],
                'imagenvideo_respsocial' => $menu['imagenvideo_respsocial'],
                'id_usuario' => $menu['id_usuario'],
                'estado_respsocial' => $menu['estado_respsocial'],
                'set_imgvideo' => $menu['set_imgvideo'],
                'img2_respsocial' => $menu['img2_respsocial'],
                'img_respsocial' => $menu['img_respsocial']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn35_uresponsabilidad_social_x($titulo, $resumen, $desc, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE responsabilidad_social SET titulo_respsocial = '$titulo', resumen_respsocial = '$resumen', detalle_respsocial = '$desc'"
                . " WHERE id_respsocial = $id ";
        // $desc;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn35_uresponsabilidad_social_ximg($imagen, $urlimagen,$id_respsocial) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE responsabilidad_social SET $imagen = '$urlimagen'  "
                . " WHERE id_respsocial = $id_respsocial ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn35_uresponsabilidad_social_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE responsabilidad_social SET estado_respsocial = $estado  "
                . " WHERE id_respsocial = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn35_uresponsabilidad_social_xtip($id,$tiponot) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE responsabilidad_social SET tipo_respsocial = $tiponot  "
                . " WHERE id_respsocial = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn35_estado_xid($id_estado){
        $res="INACTIVO";
        if($id_estado==1){
            $res="ACTIVO";
        }
        return $res;
    }
}
