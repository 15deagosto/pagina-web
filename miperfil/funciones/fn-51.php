<?php
class Fn_51 {
    function fn51_rnosotros_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM nosotros WHERE estado_nosotros != -1 ORDER by posicion_nosotros ASC";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn51_rnosotros_all -- fn51 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn51_rnosotros_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM nosotros WHERE estado_nosotros =1 ORDER by posicion_nosotros ASC";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn51_rnosotros_all -- fn51 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fn51_cnosotros_xdata($nombre_nosotros, $direccion_nosotros, $tele1_nosotros, $tele2_nosotros,$id_zona,$horario_nosotros,$posicion_nosotros,$x_nosotros,$y_nosotros,$tipo_nosotros,$estado,$red1_nosotros) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        
        $sql = "INSERT INTO nosotros(nombre_nosotros, direccion_nosotros, tele1_nosotros,tele2_nosotros,zona_nosotros,horario_nosotros,link_nosotros,x_nosotros,y_nosotros,tipo_nosotros,posicion_nosotros,estado_nosotros,red1_nosotros) "
                . " VALUES ('$nombre_nosotros', '$direccion_nosotros', '$tele1_nosotros','$tele2_nosotros', '$id_zona', '$horario_nosotros','', '$x_nosotros', '$y_nosotros',$tipo_nosotros,$posicion_nosotros,$estado,'$red1_nosotros') ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn51_rnosotros_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from nosotros where id_nosotros = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn51_rnosotros_x -- fn51";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_nosotros' => $menu['id_nosotros'],
                'nombre_nosotros' => $menu['nombre_nosotros'],
                'tele1_nosotros' => $menu['tele1_nosotros'],
                'tele2_nosotros' => $menu['tele2_nosotros'],
                'red1_nosotros' => $menu['red1_nosotros'],
                'x_nosotros' => $menu['x_nosotros'],
                'y_nosotros' => $menu['y_nosotros'],
                'zona_nosotros' => $menu['zona_nosotros'],
                'direccion_nosotros' => $menu['direccion_nosotros'],
                'cuidad_nosotros' => $menu['cuidad_nosotros'],
                'horario_nosotros' => $menu['horario_nosotros'],
                'posicion_nosotros' => $menu['posicion_nosotros'],
                'link_nosotros' => $menu['link_nosotros']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn51_rnosotros_xtextos($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from nosotros where id_nosotros = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn51_rnosotros_x -- fn51";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_nosotros' => $menu['id_nosotros'],
                'nombre_nosotros' => $menu['nombre_nosotros'],
                'descripcion_nosotros' => $menu['descripcion_nosotros'],
                'tipo_nosotros' => $menu['tipo_nosotros'],
                'texto1_nosotros' => $menu['texto1_nosotros'],
                'texto2_nosotros' => $menu['texto2_nosotros'],
                'texto3_nosotros' => $menu['texto3_nosotros'],
                'estado_nosotros' => $menu['estado_nosotros'],
                'imagen_nosotros' => $menu['imagen_nosotros']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn51_unosotros_x($nombre_nosotros, $direccion_nosotros, $tele1_nosotros, $tele2_nosotros,$id_zona,$horario_nosotros,$x_nosotros,$y_nosotros, $posicion_nosotros,$red1_nosotros,$id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE nosotros SET nombre_nosotros = '$nombre_nosotros', direccion_nosotros = '$direccion_nosotros',tele1_nosotros = '$tele1_nosotros', tele2_nosotros = '$tele2_nosotros', zona_nosotros = '$id_zona', horario_nosotros = '$horario_nosotros', red1_nosotros = '$red1_nosotros', x_nosotros = '$x_nosotros', y_nosotros = '$y_nosotros', posicion_nosotros=$posicion_nosotros"
                . " WHERE id_nosotros = $id";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn51_uavisos_ximg($id, $img) {
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
    
    function fn51_unosotros_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE nosotros SET estado_nosotros = $estado  "
                . " WHERE id_nosotros = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    function fn51_estado_xid($id_estado){
        $res="INACTIVO";
        if($id_estado==1){
            $res="ACTIVO";
        }
        return $res;
    }
    
    function fn51_unosotros_xtexto($texto1_nosotros, $texto2_nosotros,$texto3_nosotros,$id) {
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
    
    function fn51_unosotros_xImg($imagen, $urlimagen,$id_nosotros) {
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
    
    function fn51_rnosotros_xrol($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from rol where id_rol = ".$id." limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn51_unosotros_xrol -- fn51";
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
    
    function fn51_unosotros_xrol($id,$idrol) {
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
    
    function fn51_rcordinadores_allx($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM coordinadores WHERE id_agencia=$id and estado_coordinador != -1";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn51_rcordinadores_allx -- fn51 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn51_ccoordinador_xdata($estado_coordinador,$id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        
        $sql = "INSERT INTO coordinadores(estado_coordinador, id_agencia) "
                . " VALUES ($estado_coordinador,$id)";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn51_ucoordinador_xest($id,$estado) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE coordinadores SET estado_coordinador = $estado  WHERE id_coordinador = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    function fn51_uimg_xid($id,$img) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE nosotros SET imagen_nosotros = '$img'  "
                . " WHERE id_nosotros = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    function fn51_ucoordinador_xupdate($nombre_coordinador,$apellido_coordinador,$mail_coordinador,$id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE coordinadores SET nombre_coordinador = '$nombre_coordinador',apellido_coordinador = '$apellido_coordinador',mail_coordinador = '$mail_coordinador'  WHERE id_coordinador = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn51_uagencia_xtipo($tipo_nosotros, $id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "UPDATE nosotros SET tipo_nosotros = $tipo_nosotros "
                . " WHERE id_nosotros = $id ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    function fn51_rcoordinadores_alles() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM coordinadores WHERE estado_coordinador = 1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn51_rcoordinadores_alles -- fn51 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn51_rzona_all($nivel, $search) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM zona where nivel_zona = $nivel and codigopadre_zona='$search' order by lugar_zona asc  ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn51_rzona_all -- fn51";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fn51_rzona_xid($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT zc.id_zona as idcanton, zc.lugar_zona as canton , zpi.id_zona as idprovincia, "
                . "zpi.lugar_zona as provincia, zp.id_zona as idpais , zp.lugar_zona as pais "
                . "FROM zona zc, zona zpi , zona zp WHERE zc.codigopadre_zona= zpi.id_zona "
                . "and zpi.codigopadre_zona=zp.id_zona and zc.id_zona='$id';  ";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn51_unosotros_xrol -- fn51";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('idcanton' => $menu['idcanton'],
                'canton' => $menu['canton'],
                'idprovincia' => $menu['idprovincia'],
                'provincia' => $menu['provincia'],
                'idpais' => $menu['idpais'],
                'pais' => $menu['pais']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
}