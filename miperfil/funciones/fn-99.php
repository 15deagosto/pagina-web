<?php
class Fn_99 {
    function fn99_rindicador_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM indicador WHERE estado_indicador != -1 ORDER by id_indicador ASC";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn99_rindicador_all -- fn99 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn99_rnosotros_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM nosotros WHERE estado_nosotros =1 ORDER by posicion_nosotros ASC";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn99_rnosotros_all -- fn99 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn99_cindicador_xdata($nombre_indicador, $desc_indicador, $color_indicador, $total_indicador,$tipo_indicador,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        
        $sql = "INSERT INTO indicador(nombre_indicador, desc_indicador, color_indicador,total_indicador,tipo_indicador,estado_indicador) "
                . " VALUES ('$nombre_indicador', '$desc_indicador', '$color_indicador',$total_indicador, $tipo_indicador, $estado) ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn99_rindicador_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from  indicador where id_indicador = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn99_rindicador_x -- fn99";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_indicador' => $menu['id_indicador'],
                'nombre_indicador' => $menu['nombre_indicador'],
                'desc_indicador' => $menu['desc_indicador'],
                'tipo_indicador' => $menu['tipo_indicador'],
                'color_indicador' => $menu['color_indicador'],
                'estado_indicador' => $menu['estado_indicador'],
                'total_indicador' => $menu['total_indicador']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn99_rnosotros_xtextos($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from nosotros where id_nosotros = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn99_rnosotros_x -- fn99";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_nosotros' => $menu['id_nosotros'],
                'nombre_nosotros' => $menu['nombre_nosotros'],
                'descripcion_nosotros' => $menu['descripcion_nosotros'],
                'tipo_nosotros' => $menu['tipo_nosotros'],
                'texto1_nosotros' => $menu['texto1_nosotros'],
                'texto2_nosotros' => $menu['texto2_nosotros'],
                'texto3_nosotros' => $menu['texto3_nosotros'],
                'estado_nosotros' => $menu['estado_nosotros']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn99_uindicador_x($nombre_indicador, $desc_indicador, $color_indicador, $total_indicador,$id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE  indicador SET nombre_indicador = '$nombre_indicador', desc_indicador = '$desc_indicador',color_indicador = '$color_indicador', total_indicador = $total_indicador "
                . " WHERE id_indicador = $id";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn99_uavisos_ximg($id, $img) {
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
    
    function fn99_uindicador_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE  indicador SET estado_indicador = $estado  "
                . " WHERE id_indicador = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    function fn99_estado_xid($id_estado){
        $res="INACTIVO";
        if($id_estado==1){
            $res="ACTIVO";
        }
        return $res;
    }
    
    function fn99_tipo2_xid($tipo){
        $res="NORMAL";
        if($tipo==1){
            $res="PRINCIPAL";
        }
        return $res;
    }
    
    function fn99_unosotros_xtexto($texto1_nosotros, $texto2_nosotros,$texto3_nosotros,$id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE nosotros SET texto1_nosotros = '".$texto1_nosotros."',texto2_nosotros = '".$texto2_nosotros."',texto3_nosotros = '".$texto3_nosotros."' "
                . " WHERE id_nosotros  = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn99_unosotros_xImg($imagen, $urlimagen,$id_nosotros) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE nosotros SET $imagen = '$urlimagen' "
                . " WHERE id_nosotros  = $id_nosotros ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn99_rnosotros_xrol($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from rol where id_rol = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn99_unosotros_xrol -- fn99";
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
    
    function fn99_unosotros_xrol($id,$idrol) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE nosotros SET id_rol = $idrol  "
                . " WHERE id_usuario = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn99_rindicador_mes_allx($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM indicador_mes WHERE id_indicador=$id";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn99_rindicador_mes_allx -- fn99 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn99_cindicador_mes_xdata($id_indicador,$valor_indicadormes,$mes_indicadormes,$anio_indicadormes) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        
        $sql = "INSERT INTO indicador_mes(id_indicador,valor_indicadormes,mes_indicadormes, anio_indicadormes) "
                . " VALUES ($id_indicador,$valor_indicadormes,$mes_indicadormes,$anio_indicadormes)";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn99_utipo2_indicador_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE  indicador SET tipo2_indicador = $estado  WHERE id_indicador = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn99_uindicador_mes_xupdate($anio_indicadormes,$mes_indicadormes,$valor_indicadormes,$id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE  indicador_mes SET anio_indicadormes = $anio_indicadormes,mes_indicadormes = $mes_indicadormes,valor_indicadormes = $valor_indicadormes  WHERE id_indicadormes = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn99_utipo_indicador_xtipo($tipo, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE  indicador SET tipo_indicador = $tipo "
                . " WHERE id_indicador = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn99_dtipo_indicador_xtipo($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "DELETE FROM indicador_mes WHERE id_indicadormes = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    function fn99_rcoordinadores_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM coordinadores WHERE estado_coordinador = 1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn99_rcoordinadores_alles -- fn99 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
}